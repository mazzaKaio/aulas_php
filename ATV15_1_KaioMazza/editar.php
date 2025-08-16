<?php
    require_once ''

    $usuario = null;

    if($_SERVER['REQUEST_METHOD'] == "GET") {
        $id = $_GET['id'];

        $stmt = $pdo -> prepare("SELECT nome, email, senha FROM usuarios WHERE id = :id");
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
        try {
            $stmt -> execute();
            $usuario = $stmt -> fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro: ".$e->getMessage();
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha";

        $stmt = $pdo -> prepare($query);
        $stmt -> bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt -> bindParam(":email", $nome, PDO::PARAM_STR);
        $stmt -> bindParam(":senha", $nome, PDO::PARAM_STR);

        try {
            $stmt -> execute();
            
            header("Location: listar.php");
        } catch (PDOException $e) {
            echo "erro: ".$e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <p>Selecione o usuário que você deseja editar:</p>

    <?php include_once 'listar.php' ?>

    <?php if($usuario): ?>
        <form action="editar.php" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($usuario['nome']) ?>">

            <label>E-mail:</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($usuario['email']) ?>">

            <label>Senha:</label>
            <input type="password" name="senha" id="senha" value="<?= htmlspecialchars($usuario['senha']) ?>">

            <button type="submit">Salvar</button>
        </form>
    <?php endif; ?>
</body>
</html>