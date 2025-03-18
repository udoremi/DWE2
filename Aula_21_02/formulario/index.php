
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            width: 50vw;
            margin: 0 auto;
        }
        .form-control,
        .form-control-color {
            width: 100%;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="text-center">Formulário</h1>
            <hr>
            <form method="POST" action="destino.php">
                <div class="mb-3">
                    <label class="form-label">Título da página:</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Corpo:</label>
                    <textarea name="corpo" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Cor texto:</label>
                    <input type="color" name="cor_texto" class="form-control-color" value="#000000">
                </div>
                <div class="mb-3">
                    <label class="form-label">URL de imagem:</label>
                    <input type="url" name="url_imagem" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">URL de link:</label>
                    <input type="url" name="url_link" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cor de fundo:</label>
                    <input type="color" name="cor_fundo" class="form-control-color" value="#ffffff">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
