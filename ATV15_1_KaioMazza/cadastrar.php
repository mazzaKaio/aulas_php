<?php
    session_start();

    require_once 'includes/conexao.php';

    if(!isset($_SESSION['id_usuario'])) {
        echo "<script> alert('Você precisa estar logado para realizar alguma ação!'); window.location.href = 'index.php'; </script>";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";

        $stmt = $pdo -> prepare($query);
        $stmt -> bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt -> bindParam(":email", $email, PDO::PARAM_STR);
        $stmt -> bindParam(":senha", $senha_hash, PDO::PARAM_STR);
        
        try {
            $stmt -> execute();
            echo "<script> alert('Usuário cadastrado com sucesso!'); window.location.href = 'principal.php'; </script>";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: ".$e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <?php include_once 'includes/nav.php'; ?>

    <h2>Cadastrar Usuário</h2>

    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>