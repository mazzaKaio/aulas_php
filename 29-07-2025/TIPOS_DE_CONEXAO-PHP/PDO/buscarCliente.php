<?php
    require_once 'conexao.php';

    $conexao = conectarBanco();

    // Consulta todos os clientes do banco
    // Ordena por nome para melhor visualização
    $sql = "SELECT id_cliente, nome, endereco, telefone, email FROM cliente ORDER BY nome ASC";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $clientes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h2>Todos os Clientes Cadastrados</h2>

    <?php if (!$clientes): ?>
        <p style="color: red;">Nenhum cliente encontrado no banco de dados.</p>
    <?php else: ?>
        <table border>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereco</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
        </table>
</body>
</html>