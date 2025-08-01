<?php
    require_once 'conexao.php';

    $conexao = conectadb();

    // Definição dos valores para inserção
    $nome = "Kaio Mazza";
    $endereco = "Rua Almeida Geovani Faz o L, 250";
    $telefone = "(11) 4002-8922";
    $email = "mazza@mazza.com";

    // Prepara a consulta SQL usando 'prepare()', evitando SQL Injection
    $stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");

    // Associa os parâmetros nos valores da consulta
    $stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

    // Executa a inserção
    if ($stmt->execute()) {
        echo "Cliente adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar cliente: ".$stmt->error;
    }

    // Fecha a consulta e a conexão com o banco de dados
    $stmt->close();
    $conexao->close();
?>