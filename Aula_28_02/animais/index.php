<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Animais</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0px 50px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }
        .container img {
            width: 200px;
            height: 200px;
            border-radius: 5px;
            cursor: pointer;
            border: 3px solid transparent;
            object-fit: cover;
        }
        .selected {
            border: 3px solid red !important;
        }
        .info {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Praticando 3 - Animais</h1>
    <hr>
    <div class="container">
        <?php
            $animalSelecionado = $_GET['animal'] ?? "";
            $historico = $_GET['historico'] ?? "";
            
            if ($animalSelecionado) {
                $historico = $historico ? "$historico, $animalSelecionado" : $animalSelecionado;
            }
        ?>
        
        <a href='?animal=gato&historico=<?= $historico ?>'>
            <img src='images/gato.jpg' alt='gato' class='<?= $animalSelecionado == "gato" ? "selected" : "" ?>'>
        </a>
        <a href='?animal=cachorro&historico=<?= $historico ?>'>
            <img src='images/cachorro.jpg' alt='cachorro' class='<?= $animalSelecionado == "cachorro" ? "selected" : "" ?>'>
        </a>
        <a href='?animal=hamster&historico=<?= $historico ?>'>
            <img src='images/hamster.jpg' alt='hamster' class='<?= $animalSelecionado == "hamster" ? "selected" : "" ?>'>
        </a>
        <a href='?animal=lagartixa&historico=<?= $historico ?>'>
            <img src='images/lagartixa.jpg' alt='lagartixa' class='<?= $animalSelecionado == "lagartixa" ? "selected" : "" ?>'>
        </a>
    </div>

    <?php
        if ($animalSelecionado) {
            $info = "";
            if ($animalSelecionado == "gato") {
                $info = "Os gatos são independentes e gostam de explorar!";
            } elseif ($animalSelecionado == "cachorro") {
                $info = "Os cachorros são leais e adoram brincar!";
            } elseif ($animalSelecionado == "hamster") {
                $info = "Hamsters são pequenos roedores cheios de energia!";
            } elseif ($animalSelecionado == "lagartixa") {
                $info = "As lagartixas conseguem escalar superfícies com facilidade!";
            }
            
            echo "<div class='info'>";
            echo "<h3>Você clicou em: $animalSelecionado</h3>";
            echo "<p>$info</p>";
            
            if ($historico) {
                echo "<p>Histórico de cliques: $historico</p>";
            }
            
            echo "</div>";
        }
    ?>
    
    <form method="get">
        <button type="submit" name="limpar">Limpar Tudo</button>
    </form>
    
    <?php
        if ($_GET['limpar'] ?? false) {
            echo "<script>window.location.href='index.php';</script>";
        }
    ?>
</body>
</html>
