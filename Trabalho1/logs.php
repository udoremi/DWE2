<?php
session_start();

$title = "Logs de Acesso";
include('header.php');

$erro = '';
$senhaCorreta = 'senha_da_nasa';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
        if ($senha === $senhaCorreta) {
            $_SESSION['logado'] = true;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $erro = 'Chave incorreta!';
        }
    }
}

if (isset($_GET['sair'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

function limparContadores($pagina = null) {
    $logDir = 'historico/';
    if ($pagina) {
        file_put_contents("$logDir$pagina-acessos.txt", '0');
    } else {
        foreach (glob("$logDir*-acessos.txt") as $arquivo) {
            file_put_contents($arquivo, '0');
        }
    }
}

function limparLogs($pagina = null) {
    $logDir = 'historico/';
    if ($pagina) {
        file_put_contents($logDir . "$pagina-acessos.log", '');
    } else {
        file_put_contents($logDir . 'acessos.log', '');
        foreach (glob("$logDir*-acessos.log") as $arquivo) {
            file_put_contents($arquivo, '');
        }
    }
}

$mensagemLimpeza = '';

if (isset($_GET['limpar'])) {
    if (!isset($_SESSION['logado'])) {
        echo '<div class="alert alert-warning text-center" role="alert">
                Você não tem permissão para realizar essa ação. Faça login para continuar.
              </div>';
    } else {
        if ($_GET['limpar'] == 'geral') {
            limparContadores();
            $mensagemLimpeza = "Todos os acessos foram limpos.";
        } elseif ($_GET['limpar'] == 'log') {
            limparLogs();
            $mensagemLimpeza = "Os logs de acessos foram limpos.";
        } elseif (isset($_GET['pagina'])) {
            if ($_GET['limpar'] == 'acessos') {
                limparContadores($_GET['pagina']);
                $mensagemLimpeza = "O contador de acessos da página {$_GET['pagina']} foi limpo.";
            } elseif ($_GET['limpar'] == 'log') {
                limparLogs($_GET['pagina']);
                $mensagemLimpeza = "O log de acessos da página {$_GET['pagina']} foi limpo.";
            }
        }
    }
}
?>

<script>
    function confirmarLimpeza(event, mensagem) {
        var confirmacao = confirm(mensagem);
        if (!confirmacao) {
            event.preventDefault();
        }
    }
</script>

<main class="container mt-4 mb-2">
    <div class="alert alert-danger text-dark border border-danger p-4 rounded">
        <?php if (!isset($_SESSION['logado'])): ?>
            <h1><?php echo $title; ?></h1>
            <div class="display-5 text-center fst-italic mb-3">
                <label for="senha" class="form-label">Access key</label>
            </div>
            <hr class="mb-4">
            
            <form action="" method="POST">
                <div class="mb-3">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="senha" name="senha" required placeholder="Key">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php else: ?>
            <h1><?php echo $title; ?></h1>
            <hr class="mb-4">
            <div class="card border-danger shadow-sm p-4" style="background-color: #f8d7da;">
                <div class="d-flex justify-content-between">
                    <div class="flex-grow-1">
                        <div class="row text-center">
                            <?php
                            $paginas = ['index', 'contato', 'sobre'];
                            $acessos = [];

                            foreach ($paginas as $pagina) {
                                $contador = (file_exists("historico/$pagina-acessos.txt")) ? (int)file_get_contents("historico/$pagina-acessos.txt") : 0;
                                $acessos[] = ['pagina' => ucfirst($pagina), 'contador' => $contador];
                            }

                            usort($acessos, function($a, $b) {
                                return $b['contador'] - $a['contador'];
                            });

                            foreach ($acessos as $paginaData) {
                                echo "<div class='col-md-4'>
                                        <div class='card p-3'>
                                            <h5>📄 " . $paginaData['pagina'] . "</h5>
                                            <p><strong>{$paginaData['contador']} Acessos</strong></p>
                                            <a href='?limpar=acessos&pagina=" . strtolower($paginaData['pagina']) . "' 
                                               class='btn btn-outline-primary' onclick='confirmarLimpeza(event, \"Tem certeza que deseja limpar os acessos dessa página?\")'>Limpar</a>
                                        </div>
                                      </div>";
                            }
                            ?>
                        </div>

                        <div class="mt-4 text-center">
                            <h5><strong>Total de Acessos: 
                                <?php 
                                    $totalAcessos = array_sum(array_column($acessos, 'contador')); 
                                    echo $totalAcessos; 
                                ?>
                            </strong></h5>
                            <a href="?limpar=geral" class="btn btn-danger" onclick="confirmarLimpeza(event, 'Tem certeza que deseja limpar todos os acessos?')">🗑 Limpar todos os acessos</a>
                        </div>

                        <?php if ($mensagemLimpeza): ?>
                            <div class="alert alert-info mt-3 text-center">
                                <?php echo $mensagemLimpeza; ?>
                            </div>
                        <?php endif; ?>

                        <div class="mt-4">
                            <pre class="border p-3 bg-white">
<?php
$logs = file('historico/acessos.log');
foreach ($logs as $index => $log) {
    list($pagina, $dataHora, $ip, $navegador) = explode(' | ', $log);
    echo ($index + 1) . " | $pagina | $dataHora | $ip | $navegador";
}
?>
                            </pre>
                        </div>

                        <div class="text-center mt-3">
                            <a href="?limpar=log" class="btn btn-danger" onclick="confirmarLimpeza(event, 'Tem certeza que deseja limpar o log de acessos?')">🗑 Limpar Log</a>
                        </div>
                    </div>

                    <div class="ms-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/2305/2305896.png" alt="Imagem de Logs" style="width: 250px; height: auto;">
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($erro): ?>
            <div class="alert alert-light text-danger border border-danger mt-3 text-center"><?php echo "<i class='bi bi-exclamation-circle'> </i>$erro" ?></div>
        <?php endif; ?>
    </div>
</main>

<?php include('footer.php'); ?>
