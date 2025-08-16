<?php
    session_start();

    if(!isset($_SESSION['id_usuario'])) {
        echo "<script> alert('Você precisa estar logado para realizar alguma ação!'); window.location.href = 'index.php'; </script>";
    }

    require_once 'includes/conexao.php';

    $query = "SELECT id, nome, email FROM usuarios";

    $stmt = $pdo -> prepare($query);
    $stmt -> execute();

    $usuarios = $stmt -> fetchAll();    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php include_once 'includes/nav.php'; ?>

    <h2>Listar Usuários</h2>

    <table border>
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>Email:</th>
            <th>Ações</th>
        </tr>

        <?php foreach($usuarios as $usuario): ?>

            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nome']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td>
                    <a href="editar.php?id="<?= $usuario['id'] ?>>Editar</a>
                    <a href="excluir.php?id="<?= $usuario['id'] ?>>Excluir</a>
                </td>
            </tr>
        
        <?php endforeach; ?>
    </table>
</body>
</html>