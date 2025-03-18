<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Formulário de cadastro</h1>
                <form id="cadastroForm">
                    <div class="mb-3">
                        <label class="form-label">Nome completo:</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($_COOKIE['nome']) ? $_COOKIE['nome'] : '' ?>" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Telefone:</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" value="<?= isset($_COOKIE['telefone']) ? $_COOKIE['telefone'] : '' ?>" pattern="\(\d{2}\)\d{5}-\d{4}" placeholder="(DD)XXXXX-XXXX" required>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">E-mail:</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" placeholder="Digite seu email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" value="<?= isset($_COOKIE['cpf']) ? $_COOKIE['cpf'] : '' ?>" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="XXX.XXX.XXX-XX" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Data de Nascimento:</label>
                            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="<?= isset($_COOKIE['data_nascimento']) ? $_COOKIE['data_nascimento'] : '' ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">CEP:</label>
                            <input type="text" class="form-control" name="cep" id="cep" value="<?= isset($_COOKIE['cep']) ? $_COOKIE['cep'] : '' ?>" pattern="\d{2}\.\d{3}-\d{3}" placeholder="XX.XXX-XXX" required>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex justify-content-right align-items-center">
                <img src="Forms.png" class="img-fluid" alt="Imagem de cadastro">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function saveToCookie(field, value) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_cookie.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log(`O dado '${field}' foi salvo no cookie: ${value}`);
                } else {
                    console.error('Erro ao salvar no cookie');
                }
            };
            xhr.send(`${field}=${encodeURIComponent(value)}`);
        }

        document.getElementById('cadastroForm').addEventListener('input', function(event) {
            const field = event.target.id;
            const value = event.target.value;
            if (field && value !== "") {
                saveToCookie(field, value);
            }
        });

        document.getElementById('cadastroForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert("Formulário enviado! Dados salvos nos cookies.");
            this.reset();
        });

        document.querySelector('button[type="reset"]').addEventListener('click', function() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'save_cookie.php?limpar=true', true);
            xhr.send();
        });
    </script>
</body>
</html>
