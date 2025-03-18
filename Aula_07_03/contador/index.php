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
        <form method="POST" action="destino-contador.php">
            <div class="mb-3 d-flex align-items-center">
                <label for="ini" class="form-label me-2">Início:</label>
                <input type="number" class="form-control w-auto" id="ini" name="ini">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="fim" class="form-label me-2">Final:</label>
                <input type="number" class="form-control w-auto" id="fim" name="fim">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="incr" class="form-label me-2">Incremento:</label>
                <input type="number" class="form-control w-auto" id="incr" name="incr">
            </div>
            <button type="submit" class="btn btn-success">Contar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>
</body>
</html>