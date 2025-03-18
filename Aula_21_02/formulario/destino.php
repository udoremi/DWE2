<?php
        $titulo = $_POST["titulo"];
        $corpo = $_POST["corpo"];
        $cor_texto = $_POST["cor_texto"];
        $url_img = $_POST["url_imagem"];
        $url_site = $_POST["url_link"];
        $cor_fundo = $_POST["cor_fundo"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $cor_fundo; ?>;
            color: <?php echo $cor_texto; ?>;
            margin: 0px 10%;
        }
    </style>
</head>
<body>
    <p></p>
    <?php

        echo "<h1>$titulo</h1> <hr>";
        echo "<p>$corpo</p>";
        echo "<img src='$url_img' alt='Imagem do post'> <br> <br>";
        echo "<a href='$url_site'>$url_site</a>";
    ?>
</body>
</html>