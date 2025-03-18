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
            <h1 class="mb-3">Praticando - Tabela</h1>
            <hr>
            <form method="POST" action="destino-tabela.php">
            <div class="mb-3 row">
                <div class="col-auto">
                    <label for="linhas" class="form-label">Linhas:</label>
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control" id="linhas" name="linhas">
                </div>

                <div class="col-auto">
                    <label for="colunas" class="form-label">Colunas:</label>
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control" id="colunas" name="colunas">
                </div>

                <div class="col-auto">
                <label for="estilo" class="form-label">Estilo:</label>
            </div>
            <div class="col-auto">
                <select class="form-select" id="estilo" name="estilo">
                    <option value="table-primary">Table-Primary</option>
                    <option value="table-success">Table-Success</option>
                    <option value="table-danger">Table-Danger</option>
                    <option value="table-warning">Table-Warning</option>
                    <option value="table-dark">Table-Dark</option>
                </select>
            </div>
        </div>
            <button type="submit" class="btn btn-success">Montar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>
</body>
</html>