<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        if (isset($_GET['nome_fornecedor']) && isset($_GET['cnpj_fornecedor']) && isset($_GET['email_fornecedor']) &&
        isset($_GET['ie_fornecedor']) && isset($_GET['telefone_fornecedor']) && isset($_GET['cep_fornecedor']) &&
        isset($_GET['cep_fornecedor']) && isset($_GET['estado_fornecedor']) && isset($_GET['cidade_fornecedor']) &&
        isset($_GET['bairro_fornecedor']) && isset($_GET['logradouro_fornecedor']) && isset($_GET['numero_fornecedor']) ) {

            echo "<h2>INFORMAÇÕES CADASTRADAS:</h2>";
            echo "Nome do fornecedor: ".$_GET['nome_fornecedor'];
            echo "<br>CNPJ do fornecedor: ".$_GET['cnpj_fornecedor'];
            echo "<br>Email do fornecedor: ".$_GET['email_fornecedor'];
            echo "<br>IE do fornecedor: ".$_GET['ie_fornecedor'];
            echo "<br>Telefone do fornecedor: ".$_GET['telefone_fornecedor'];
            echo "<br><h4>ENDEREÇO</h4>";
            echo "CEP do fornecedor: ".$_GET['cep_fornecedor'];
            echo "<br>Estado do fornecedor: ".$_GET['estado_fornecedor'];
            echo "<br>Cidade do fornecedor: ".$_GET['cidade_fornecedor'];
            echo "<br>Bairro do fornecedor: ".$_GET['bairro_fornecedor'];
            echo "<br>Logradouro do fornecedor: ".$_GET['logradouro_fornecedor'];
            echo "<br>Número do fornecedor: ".$_GET['numero_fornecedor'];

        }
    ?>
</body>
</html>