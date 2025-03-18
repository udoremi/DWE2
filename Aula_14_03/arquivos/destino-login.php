<?php
session_start();
error_reporting(0);
    $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

    if($user == "matheus"){
        if($pass == "senha_da_nasa"){
            $_SESSION["user"] = $user;
            header("Location: index.php");
        } else{
            unset($_SESSION["user"]);
        }
    } else{
        unset($_SESSION["user"]);
    }

    
?>

<?php
 require 'header.php';
?>

    <div class="login">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Autenticação</h1>
        </div>

        <div class= 'd-flex align-items-center justify-content-center'>
            <div class="col-md-12">
            <?php
                if($user != "matheus" && $pass != "senha_da_nasa") {
                    echo "<div class='alert alert-danger text-center' role='alert'>
                            <u>Usuário</u> e <u>Senha</u> incorretos!<br>
                            Tente novamente.<br><br>
                            <a href='login.php'>Clique para voltar</a></div>";
                } elseif ($user != "matheus") {
                    echo "<div class='alert alert-danger text-center' role='alert'>
                            <u>Usuário</u> incorreto!<br>
                            Tente novamente.<br><br>
                            <a href='login.php'>Clique para voltar</a></div>";
                } elseif ($pass != "senha_da_nasa") {
                    echo "<div class='alert alert-danger text-center' role='alert'>
                            <u>Senha</u> incorreta!<br>
                            Tente novamente.<br><br>
                            <a href='login.php'>Clique para voltar</a></div>";
                }
            ?>
            </div>
        </div>

    </div>

<?php
 require 'footer.php';
?>