<?php
 require 'header.php';
?>

    <div class="contato">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Formulário para contato</h1>
        </div>

        <div class= 'd-flex align-items-center justify-content-center'>
            <div class="col-md-6">
                    <form action="destino-contato.php" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
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