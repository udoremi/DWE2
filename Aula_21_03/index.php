<?php
use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor/autoload.php';

$responseMessage = ''; 
$alertClass = ''; 

if ($_POST) {
    $cep = $_POST['cep']; 
    try {
        $address = CepPromise::fetch($cep);
        
        $responseMessage = "<h2>CEP: " . $address->zipCode . "</h2><br>" .
                           "Rua: " . $address->street . "<br>" .
                           "Bairro: " . $address->district . "<br>" .
                           "Cidade: " . $address->city . "<br>" .
                           "Estado: " . $address->state;
        $alertClass = 'alert-success'; 
    } catch (CepPromiseException $e) {
        $responseMessage = "Erro ao consultar o CEP: " . $e->getMessage();
        $alertClass = 'alert-danger';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de CEP</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-3">Consulta de CEP</h1>
        <hr>
        <form method="POST" action="index.php">
            <div class="mb-3 d-flex align-items-center">
                <label for="cep" class="form-label me-2">CEP:</label>
                <input type="text" class="form-control w-auto" id="cep" name="cep" required>
            </div>
            <button type="submit" class="btn btn-success">Encontrar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>

        <?php if ($responseMessage): ?>
            <div class="alert <?php echo $alertClass; ?> mt-3" role="alert">
                <?php echo $responseMessage; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
