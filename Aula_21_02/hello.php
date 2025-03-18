<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <p>
        <?php
        date_default_timezone_set('America/Sao_Paulo');

        echo "Hello World! <br><br>";

        $nome = "Matheus";
        $data = date('d/m/Y');
        $hora = date('H:i');

        echo "Olá, meu nome é <b>$nome</b>. Hoje é dia <b>$data</b> e agora são <b>$hora</b>.";
        echo "<hr>"
        ?>
        <a href="/DW2/Aula_21_02/matheus">/matheus</a>
    </p>
    
</body>
</html>