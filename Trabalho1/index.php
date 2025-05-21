<?php
session_start();
$title = "Página Inicial";
date_default_timezone_set('America/Sao_Paulo');

function registrarAcesso($pagina) {
    $logDir = 'historico/';
    $logFile = $logDir . 'acessos.log';

    $dataHora = date("d/m/Y - H:i:s");

    $ip = $_SERVER['REMOTE_ADDR'];

    preg_match('/(Firefox|Chrome|Safari|MSIE|Trident|Edge|Opera)[\/\s]([0-9\.]+)/', $_SERVER['HTTP_USER_AGENT'], $matches);

    $navegador = isset($matches[1]) ? $matches[1] : 'Desconhecido';
    $versao = isset($matches[2]) ? $matches[2] : 'Desconhecida';

    $navegador = "$navegador/$versao";

    $log = "$pagina | $dataHora | $ip | $navegador\n";
    file_put_contents($logFile, $log, FILE_APPEND);

    $paginaArquivo = $logDir . "$pagina-acessos.txt";
    if (file_exists($paginaArquivo)) {
        $contador = (int)file_get_contents($paginaArquivo);
        $contador++;
        file_put_contents($paginaArquivo, $contador);
    } else {
        file_put_contents($paginaArquivo, 1);
    }
}

$pagina = basename($_SERVER['PHP_SELF'], '.php'); 
registrarAcesso($pagina);



include('header.php');
?>
    <main class="container my-4 content">
        <div class="alert alert-dark text-dark border border-dark p-4 rounded">
            <h1><?php echo $title; ?></h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet tristique arcu, non maximus libero. Sed auctor lacus ut sem cursus, in egestas arcu aliquet. Integer nec neque nec ligula interdum cursus. Suspendisse potenti. Aliquam erat volutpat. Sed sed magna euismod, ultricies lectus a, gravida ligula. Integer vel neque sit amet ligula fermentum elementum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet tristique arcu, non maximus libero. Sed auctor lacus ut sem cursus, in egestas arcu aliquet. Integer nec neque nec ligula interdum cursus. Suspendisse potenti. Aliquam erat volutpat. Sed sed magna euismod, ultricies lectus a, gravida ligula. Integer vel neque sit amet ligula fermentum elementum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet tristique arcu, non maximus libero. Sed auctor lacus ut sem cursus, in egestas arcu aliquet. Integer nec neque nec ligula interdum cursus. Suspendisse potenti. Aliquam erat volutpat. Sed sed magna euismod, ultricies lectus a, gravida ligula.</p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" class="img-fluid" alt="Imagem de exemplo" width="350" height="200">
                </div> 
            </div>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>
