<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php

        if (isset($_GET['nome_fornecedor']) && isset($_GET['cnpj_fornecedor']) && isset($_GET['email_fornecedor']) &&
            isset($_GET['ie_fornecedor']) && isset($_GET['telefone_fornecedor']) && isset($_GET['cep_fornecedor']) &&
            isset($_GET['estado_fornecedor']) && isset($_GET['cidade_fornecedor']) && isset($_GET['bairro_fornecedor']) && 
            isset($_GET['logradouro_fornecedor']) && isset($_GET['numero_fornecedor']) ) {
            
            $informacoes = array(
                "nome" => $_GET['nome_fornecedor'],
                "cnpj" => $_GET['cnpj_fornecedor'],
                "email" => $_GET['email_fornecedor'],
                "ie" => $_GET['ie_fornecedor'],
                "telefone" => $_GET['telefone_fornecedor'],
                "cep" => $_GET['cep_fornecedor'],
                "estado" => $_GET['estado_fornecedor'],
                "cidade" => $_GET['cidade_fornecedor'],
                "bairro" => $_GET['bairro_fornecedor'],
                "logradouro" => $_GET['logradouro_fornecedor'],
                "numero" => $_GET['numero_fornecedor']
            );

            $_SESSION['informacoes'] [] = $informacoes;
        }

        if (isset($_SESSION['informacoes'])){
            echo "<h1>INFORMAÇÕES FORNECEDOR:</h1>";
            
            foreach ($_SESSION['informacoes'] as $info) {
                echo "<br>Nome do fornecedor: ".$info['nome'];
                echo "<br>CNPJ do fornecedor: ".$info['cnpj'];
                echo "<br>Email do fornecedor: ".$info['email'];
                echo "<br>IE do fornecedor: ".$info['ie'];
                echo "<br>Telefone do fornecedor: ".$info['telefone'];
                echo "<br><h4>ENDEREÇO:</h4>";
                echo "<br>CEP do fornecedor: ".$info['cep'];
                echo "<br>Estado do fornecedor: ".$info['estado'];
                echo "<br>Cidade do fornecedor: ".$info['cidade'];
                echo "<br>Bairro do fornecedor: ".$info['bairro'];
                echo "<br>Logradouro do fornecedor: ".$info['logradouro'];
                echo "<br>Número do fornecedor: ".$info['numero'];
                echo "<hr>";
            }
        }

    ?>
</body>
</html>