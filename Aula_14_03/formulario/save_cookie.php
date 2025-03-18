<?php
if (isset($_POST['nome'])) {
    setcookie("nome", $_POST['nome'], time() + 3600, "/");
}
if (isset($_POST['telefone'])) {
    setcookie("telefone", $_POST['telefone'], time() + 3600, "/");
}
if (isset($_POST['email'])) {
    setcookie("email", $_POST['email'], time() + 3600, "/");
}
if (isset($_POST['cpf'])) {
    setcookie("cpf", $_POST['cpf'], time() + 3600, "/");
}
if (isset($_POST['data_nascimento'])) {
    setcookie("data_nascimento", $_POST['data_nascimento'], time() + 3600, "/");
}
if (isset($_POST['cep'])) {
    setcookie("cep", $_POST['cep'], time() + 3600, "/");
}

echo "Cookies salvos com sucesso!";
?>
