<?php
    require_once 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conexao = conectarBanco();

        $sql = "INSERT INTO cliente (nome, endereco, telefone, email) VALUES (:nome, :endereco, :telefone, :email)";

        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(":nome", $_POST['nome']);
        $stmt->bindParam(":endereco", $_POST['endereco']);
        $stmt->bindParam(":telefone", $_POST['telefone']);
        $stmt->bindParam(":email", $_POST['email']);

        try {
            $stmt->execute();
            ?>
            <div class="alert alert-success" role="alert">
                Cliente cadastrado com sucesso!
            </div>
            <?php
        } catch (PDOException $e) {
            error_log("Erro ao inserir cliente: ".$e->getMessage());
            ?>
            <div class="alert alert-danger" role="alert">
                Erro ao inserir o cliente!
            </div>
            <?php
        }
    }

    include 'inserirCliente.php';
?>