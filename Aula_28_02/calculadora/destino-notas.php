<?php
    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];
    $n3 = $_POST["nota3"];
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
        <h1 class="mb-3">Calculadora - Resultado</h1>
        <hr>
        <?php
            $media = ($n1 + $n2 + $n3) / 3;
            $cor = "";

            if ($media >= 6) {
                $resultado = "APROVADO";
                $cor = "green";
            } elseif ($media >= 4 && $media < 6) {
                $resultado = "EM RECUPERAÇÃO";
                $cor = "gold"; 
            } else {
                $resultado = "REPROVADO";
                $cor = "red";
            }

            echo "<p>Um aluno com as notas $n1, $n2, $n3 tem uma média igual a $media<br><br></p>";
            echo "<p>Com essa média o aluno está <span style='color: $cor;'><u>$resultado</u></span></p>";
        ?>
    </div>
</body>
</html>
