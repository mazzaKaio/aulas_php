<?php
    require_once 'conexao.php';

    $conexao = conectadb();

    // Define o ID do cliente a ser excluído
    $id_cliente = 1;

    // Prepara a consulta SQL segura
    $stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente = ?");

    // Associa o parâmetro ao valor da consulta
    $stmt->bind_param("i", $id_cliente);

    // Executa a exclusão
    if ($stmt->execute()) {
        echo "Cliente removido com sucesso!";
    } else {
        echo "Erro ao remover cliente: ".$stmt->error;
    }

    // Fecha a consulta e a conexão
    $stmt->close();
    $conexao->close();
?>