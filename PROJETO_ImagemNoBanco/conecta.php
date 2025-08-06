<?php
    // DEFINIÇÃO DAS CREDENCIAIS DE CONEXÃO
    $server = "localhost";
    $username = "root";
    $senha = "";
    $database = "armazena_imagem";

    // CRIANDO A CONEXÃO USANDO 'MySQLi'
    $conexao = new mysqli($server, $username, $senha, $database);

    // VERIFICANDO SE HOUVE ERRO NA CONEXÃO
    if ($conexao->connect_error) {
        die('Falha na conexão: '.$conexao->connect_error);
    }
?>