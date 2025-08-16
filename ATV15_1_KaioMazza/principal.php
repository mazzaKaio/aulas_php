<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
</head>
<body>
    <h2>Menu Principal - Controle de Usuários</h2>

    <h4>Seja bem-vindo, <?= $_SESSION['nome_usuario'] ?>!</h4>

    <a href="cadastrar.php">Cadastrar Usuário</a> <br>
    <a href="editar.php">Editar Usuário</a> <br>
    <a href="listar.php">Listar Usuário</a> <br>
    <a href="excluir.php">Excluir Usuário</a>
</body>
</html>