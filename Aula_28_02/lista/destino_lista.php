<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0px 50px;
        }
        .array{
            width: 93vw;
            height: 38vh;
            border: 1px solid green;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Destino</h1>
    <hr>
    
    <h2>Dados da requisição:</h2>
    <div class='array'>
        <p>
            <pre><?php echo var_dump($_POST); ?></pre>
        </p>
    </div>

    <h2>Interesses selecionados (em ordem alfabética)</h2>
    <?php
    $array = $_POST['interesses'];

    sort($array);

    echo "<ul>";
    if(count($array) == 1){
        echo "<li>" . htmlspecialchars($array[0]) . "</li>";
    } else{
        if(count($array) == 2){
            echo "<li>" . htmlspecialchars($array[0]) . "</li>";
            echo "<li>" . htmlspecialchars($array[1]) . "</li>";
        } else{
            echo "<li>" . htmlspecialchars($array[0]) . "</li>";
            echo "<li>" . htmlspecialchars($array[1]) . "</li>";
            echo "<li>" . htmlspecialchars($array[2]) . "</li>";
        }
    }
    
    if(count($array) > 3 || count($array) == 0){
        echo "<li>...</li>";
    }
    
    echo "</ul>";
    ?>

    <a href="index.php">Voltar para o Formulário</a>
</body>
</html>