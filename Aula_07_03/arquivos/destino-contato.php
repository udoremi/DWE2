<?php
 require 'header.php';
?>

    <div class="destino">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Formulário para contato</h1>
        </div>

        <div class='ms-5'>
            <?php
                date_default_timezone_set("America/Sao_Paulo");

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $mensagem = $_POST["mensagem"];
                $data = date("d/m/Y - H:i");

                echo "<p>Nome informado: $nome</p>";
                echo "<p>Email informado: $email</p>";
                echo "<p>Mensagem: $mensagem</p>";
                echo "<p>Data: $data</p>";

                echo "<a href='contato.php' class='btn btn-primary'>Voltar</a>";

                $caminho = "contatos\\dados_" . date("dmY_His") . ".txt";

                $arquivo = fopen($caminho, "w");

                if ($arquivo) {
                    $texto = "Contato via site:\n\nData: $data\n\nNome: $nome\nEmail: $email\nMensagem: $mensagem\n";
                    fwrite($arquivo, $texto);
                    fclose($arquivo);
                } else {
                    echo "<p>Erro ao tentar abrir o arquivo.</p>";
                }
            ?>
        </div>

    </div>

<?php
 require 'footer.php';
?>