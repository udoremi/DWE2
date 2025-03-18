<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito.";
    header("Location: index.php");
}

require 'header.php';
?>

<div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Perfil</h1>
        </div>

        <?php
        echo "<p>Nome: <b>Matheus Selis</b></p>";
        echo "<p>Email: <b>matheus@gmail.com</b></p>";
        echo "<p>Telefone: <b>(17)3427-2999</b></p>";
        echo "<p>Endereço: <b>Rua do Louco, 21</b></p>";
        echo "<p>Cidade: <b>Xique-Xique</b></p>";
        echo "<p>Estado: <b>Bahia</b></p>";
        ?>

</div>

<?php
require 'footer.php';
?>