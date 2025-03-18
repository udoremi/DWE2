<?php


if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: index.php");
}

 require 'header.php';
?>

    <div class="login">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Autenticação</h1>
        </div>

        <div class= 'd-flex align-items-center justify-content-center'>
            <div class="col-md-3">
                    <form action="destino-login.php" method="POST">
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuário:</label>
                            <input type="text" class="form-control" id="user" name="user" placeholder="Informe seu usuário">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Informe sua senha">
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-warning">Limpar</button>
                        </div>
                </form>
            </div>
        </div>

    </div>

<?php
 require 'footer.php';
?>