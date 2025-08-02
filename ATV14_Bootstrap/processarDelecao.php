<?php
    require_once 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conexao = conectarBanco();

        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

        if (!$id) {
            die("Erro: ID inválido.");
        }

        $sql = "DELETE FROM cliente WHERE id_cliente = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            ?>
            <div class="alert alert-sucess" role="alert">
                Cliente excluído com sucesso!
            </div>
            <?php
        } catch (PDOException $e) {
            error_log("Erro ao excluir cliente: ".$e->getMessage());
            ?>
            <div class="alert alert-danger" role="alert">
                Erro ao excluir o cliente!
            </div>
            <?php
        }
    }

    include 'deletarCliente.php';
?>