<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a img{
            width: 70%;
            border: 3px solid black;
        }
        .img{
            display: flex;
        }
    </style>
</head>
<body>
    <h1>Destino GET</h1>
    <hr>

    <?php
        $cor = isset($_GET['cor']) ? $_GET['cor'] : (isset($_COOKIE['cor']) ? $_COOKIE['cor'] : 'white');
        $nome = isset($_GET['nome']) ? $_GET['nome'] : (isset($_COOKIE['nome']) ? $_COOKIE['nome'] : 'Desconhecido');
        $email = isset($_GET['email']) ? $_GET['email'] : (isset($_COOKIE['email']) ? $_COOKIE['email'] : 'email@exemplo.com');

        echo "<p>Nome informado: $nome<br><br>Email: $email</p>";

        if (isset($_GET['cor']) && isset($_GET['nome']) && isset($_GET['email'])) {
            setcookie("cor", $_GET['cor'], time() + 3600, "/");
            setcookie("nome", $_GET['nome'], time() + 3600, "/");
            setcookie("email", $_GET['email'], time() + 3600, "/");
        }
    ?>
    
    <p>
        <a href="index.php?nome=Matheus&email=matheus@gmail.com&cor=<?=$cor?>">[nome = Matheus | email = matheus@gmail.com]</a>
    </p>
    <p>
        <a href="index.php?nome=Pacheco&email=pacheco@gmail.com&cor=<?=$cor?>">[nome = Pacheco | email = pacheco@gmail.com]</a>
    </p>
    <p><a href="index.php">Limpar tudo</a></p>
    <br> <br> <br>
    <div class='img'>
        <a href="index.php?cor=red&nome=<?=$nome?>&email=<?=$email?>"><img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/red.png" alt=""></a>
        <a href="index.php?cor=green&nome=<?=$nome?>&email=<?=$email?>"><img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/green.png" alt=""></a>
        <a href="index.php?cor=blue&nome=<?=$nome?>&email=<?=$email?>"><img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/blue.png" alt=""></a>
    </div>

    <style>
    body{
        background-color: <?php echo $cor; ?>;
    }
    </style>
    
</body>
</html>
