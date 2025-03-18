<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    th, td {
        border: 1px solid black; /* Borda para todas as células */
        padding: 8px;
        text-align: center; /* Ajuste para centralizar o conteúdo, por exemplo */
    }
</style>
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-3">Praticando - Tabela</h1>
        <hr>
    
        <?php
            $col = $_POST["colunas"];
            $row = $_POST["linhas"];
            $estilo = $_POST["estilo"];

            echo "<h3>Tabela $row"."x"."$col</h3>";
        ?>

        <table class="table <?php echo $estilo; ?> table-striped">
            <tbody>
                <?php
                for ($i = 1; $i <= $row; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= $col; $j++) {
                        echo "<td>-</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>