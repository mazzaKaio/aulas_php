<?php
    require_once 'conexao.php';

    $conexao = conectadb();

    // Definição dos valores para ALTERAÇÃO
    $nome = "Kaio Gomes";
    $endereco = "Rua Godonnedo José, 975";
    $telefone = "(11) 4002-8922";
    $email = "gomes@gomes.com";

    // Define o ID do cliente a ser atualizado
    $id_cliente = 1;

    // Preapra a consulta SQL segura
    $stmt = $conexao->prepare("UPDATE cliente SET nome = ?, endereco = ?, telefone = ?, email = ? WHERE id_cliente = ?");

    // Associa os parâmetros aos valores da consulta
    $stmt->bind_param("ssssi", $nome, $endereco, $telefone, $email, $id_cliente);

    // Executa a atualização
    if ($stmt->execute()) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente: ".$stmt->error;
    }

    // Fecha a consulta e a conexão
    $stmt->close();
    $conexao->close();
?>