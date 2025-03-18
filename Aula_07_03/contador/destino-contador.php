<?php
    $inicio = $_POST["ini"];
    $final = $_POST["fim"];
    $incremento = $_POST["incr"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-3">Praticando - Contador</h1>
        <hr>
        <h2 class="mb-3">Parâmetros informados:</h2>
    
    <?php
        echo "<p>Início: $inicio <br></p>";
        echo "<p>Fim: $final <br></p>";
        echo "<p>Incremento: $incremento <br></p>";

        if($inicio > $final){
            for($i = $inicio; $i >= $final; $i -= $incremento){
                echo "$i ";
            }
        } else{
            for($i = $inicio; $i <= $final; $i += $incremento){
                echo "$i ";
            }
        }

    ?>
    </div>
</body>
</html>