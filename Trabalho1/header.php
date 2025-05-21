<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho T1 - Matheus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        a {
            color: #6c757d;
            text-decoration: none; 
        }
        body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

main {
    flex: 1;
}

footer {
    margin-top: auto;
}
    </style>
</head>
<body>
    <?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start(); 
    }
    
    if (isset($_GET['sair'])) {
        session_destroy();
        header("Location: index.php");
        exit;
    }
    ?>

    <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white">
        <div>
            <h2>Trabalho T1 - Matheus</h2>
            <p class="m-0"><?php echo isset($title) ? $title : "Página Inicial"; ?></p>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Início</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="logs.php">Logs de Acesso</a>
        </li>

        <?php if (isset($_SESSION['logado']) && $_SESSION['logado']): ?>
            <li class="nav-item">
                <a class="nav-link text-danger" href="?sair=true">Sair</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>

    </header>
