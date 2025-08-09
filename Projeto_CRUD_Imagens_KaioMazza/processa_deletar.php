<?php
    // CONFIGURAÇÃO DO BANCO DE DADOS
    $host = "localhost";
    $database = "empresa";
    $user = "root";
    $pass = "";

    try {
        $id = $_POST['id'];

        // CONEXAO COM O BANCO USNADO 'PDO'
        $pdo = new PDO("mysql:host=$host; dbname=$database", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "DELETE FROM funcionarios WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            include_once 'includes/cabecalho.php';

            echo "Funcionário excluído com sucesso!";
        } else {
            echo "Impossível excluir o funcionário no momento.";
        }
    } catch (PDOExcpetion $e) {
        echo "Erro: ".$e->getMessage();
    }
?>