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
        <h1 class="mb-3">Praticando - Tabuada</h1>
        <hr>
        <form method="GET" action="index.php">
            <div class="mb-3 d-flex align-items-center">
                <label for="num" class="form-label me-2">Número</label>
                <input type="number" class="form-control w-auto" id="num" name="num">
            </div>
            <button type="submit" class="btn btn-success">Tabuada</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>

    <?php
    

    if(isset($_GET["num"])){

        $val = $_GET["num"];

        echo "<div class='container mt-3'><hr><h1>Tabuada do $val</h1><hr></div>";

        for($i = 1; $i <= 10; $i++){
            $res = $val*$i;
            echo "<div class='container mt-3'>$val x $i = $res <br></div>";
        }
    }
    
    ?>
</body>
</html>