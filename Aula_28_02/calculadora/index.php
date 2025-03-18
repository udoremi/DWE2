<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-3">Praticando - Calculadora média</h1>
        <hr>
        <form method="POST" action="destino-notas.php">
            <div class="mb-3 d-flex align-items-center">
                <label for="nota1" class="form-label me-2">Nota 1:</label>
                <input type="number" step="0.5" min="0" max="10" class="form-control w-auto" id="nota1" name="nota1">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="nota2" class="form-label me-2">Nota 2:</label>
                <input type="number" step="0.5" min="0" max="10" class="form-control w-auto" id="nota2" name="nota2">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="nota3" class="form-label me-2">Nota 3:</label>
                <input type="number" step="0.5" min="0" max="10" class="form-control w-auto" id="nota3" name="nota3">
            </div>
            <button type="submit" class="btn btn-success">Calcular média</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>

</body>
</html>