<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a{
            font-size: 20px;
        }
        .nao{
            background-color: indianred;
            border: 2px solid red;
            padding: 7px;
        }
        .sim{
            background-color: lightgreen;
            border: 2px solid darkgreen;
            padding: 7px;
        }
        p{
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-3">Praticando - Primos</h1>
        <hr>
        <div class="mb-3 d-flex justify-content-between">
            <a href="?num=1">Número 1</a>
            <a href="?num=2">Número 2</a>
            <a href="?num=3">Número 3</a>
            <a href="?num=5">Número 5</a>
            <a href="?num=20">Número 20</a>
            <a href="?num=32">Número 32</a>
            <a href="?num=37">Número 37</a>
        </div>

        <?php
            if (isset($_GET["num"])) {
                $n = $_GET["num"];
            }

            if ($n % 2 == 0) {
                $paridade = "PAR";
            } else {
                $paridade = "ÍMPAR";
            }

            if ($n <= 1) {
                echo "<p>O número <span class='nao'>$n</span> <span class='nao'>não é</span> um número <span class='nao'>PRIMO</span>.</p><br><p>Além disso, ele é um número <span class='nao'>$paridade</span></p>";
            } else {
                $primo = true;
                for ($i = 2; $i < $n; $i++) {
                    if ($n % $i == 0) {
                        $primo = false;
                        break;
                    }
                }

                if ($primo) {
                    echo "<p>O número <span class='sim'>$n</span> <span class='sim'>é</span> um número <span class='sim'>PRIMO</span>.</p><br><p>Além disso, ele é um número <span class='sim'>$paridade</span></p>";
                } else {
                    echo "<p>O número <span class='nao'>$n</span> <span class='nao'>não é</span> um número <span class='nao'>PRIMO</span>.</p><br><p>Além disso, ele é um número <span class='nao'>$paridade</span></p>";
                }
            }
        ?>


    </div>
</body>
</html>