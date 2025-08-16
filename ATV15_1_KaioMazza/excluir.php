<?php
    session_start();

    require_once 'includes/conexao.php';

    if(!isset($_SESSION['id_usuario'])) {
        echo "<script> alert('Você precisa estar logado para realizar alguma ação!'); window.location.href = 'index.php'; </script>";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_usuario = $_POST['id_usuario'];

        $query = "DELETE FROM usuarios WHERE id = :id";

        $stmt = $pdo -> prepare($query);
        $stmt -> bindParam(':id', $id_usuario, PDO::PARAM_INT);

        try {
            $stmt -> execute();

            echo "<script> alert('Usuário excluído com sucesso!'); window.location.href = 'principal.php'; </script>";
        } catch (PDOException $e) {
            echo "Erro ao excluir: ".$e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
</head>
<body>
    <?php include_once 'listar.php'; ?>

    <h2>Excluir Usuário</h2>    

    <form action="excluir.php" method="POST">
        <label for="id_usuario">Digite o ID do usuário que você deseja deletar:</label>
        <input type="number" name="id_usuario" id="id_usuario" required>

        <button type="submit">Excluir</button>
    </form>
</body>
</html>