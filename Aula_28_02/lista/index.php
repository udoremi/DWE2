<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Formulário</h1>
    <hr>
    <form method="POST" action="destino_lista.php">
        <p>Escolha alguns interesses:</p>
        <div class="row">
            <div class="col-md-3">
                <input type="checkbox" name="interesses[]" value="Esportes"> Esportes<br>
                <input type="checkbox" name="interesses[]" value="Futebol"> Futebol<br>
                <input type="checkbox" name="interesses[]" value="Basquete"> Basquete<br>
                <input type="checkbox" name="interesses[]" value="Tênis"> Tênis<br>
                <input type="checkbox" name="interesses[]" value="Taekwondo"> Taekwondo<br>
                <input type="checkbox" name="interesses[]" value="Tecnologia"> Tecnologia<br>
            </div>
            <div class="col-md-3">
                <input type="checkbox" name="interesses[]" value="Smartphones"> Smartphones<br>
                <input type="checkbox" name="interesses[]" value="Computadores e hardware"> Computadores e hardware<br>
                <input type="checkbox" name="interesses[]" value="Desktop gamers"> Desktop gamers<br>
                <input type="checkbox" name="interesses[]" value="Notebooks"> Notebooks<br>
                <input type="checkbox" name="interesses[]" value="Veículos"> Veículos<br>
                <input type="checkbox" name="interesses[]" value="Escritório"> Escritório<br>
            </div>
            <div class="col-md-3">
                <input type="checkbox" name="interesses[]" value="Vestuário"> Vestuário<br>
                <input type="checkbox" name="interesses[]" value="Perfumes"> Perfumes<br>
                <input type="checkbox" name="interesses[]" value="Economia"> Economia<br>
                <input type="checkbox" name="interesses[]" value="Comidas"> Comidas<br>
                <input type="checkbox" name="interesses[]" value="Bebidas"> Bebidas<br>
                <input type="checkbox" name="interesses[]" value="Imóveis"> Imóveis<br>
            </div>
            <div class="col-md-3">
                <input type="checkbox" name="interesses[]" value="Calçados"> Calçados<br>
                <input type="checkbox" name="interesses[]" value="Hotéis"> Hotéis<br>
                <input type="checkbox" name="interesses[]" value="Pousadas"> Pousadas<br>
                <input type="checkbox" name="interesses[]" value="Cinema"> Cinema<br>
                <input type="checkbox" name="interesses[]" value="Filmes"> Filmes<br>
                <input type="checkbox" name="interesses[]" value="Séries"> Séries<br>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>
</body>
</html>
