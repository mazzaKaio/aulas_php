<?php
    session_start();

    require_once 'includes/conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $query = 'SELECT * FROM usuarios WHERE email = :email';
    
        $stmt = $pdo -> prepare($query);
        $stmt -> bindParam(':email', $email, PDO::PARAM_STR);
        $stmt -> execute();
    
        $usuario = $stmt -> fetch(PDO::FETCH_ASSOC);
    
        if ($usuario) {
            if (password_verify($senha, $usuario['senha'])) {
                echo "<script> alert('Login realizado com sucesso!'); window.location.href = 'principal.php'; </script>";
            
                $_SESSION['id_usuario'] = $usuario['id'];
                $_SESSION['nome_usuario'] = $usuario['nome'];
                exit();
            } else {
                echo "<script> alert('Senha incorreta!'); window.location.href = 'index.php'; </script>";
                exit();
            }
        } else {
            echo "<script> alert('Usuário não encontrado!'); window.location.href = 'index.php'; </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form action="index.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <button type="submit">Logar</button>
    </form>
</body>
</html>