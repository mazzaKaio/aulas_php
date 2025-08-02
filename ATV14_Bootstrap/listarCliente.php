<?php
    require_once 'conexao.php';

    $conexao = conectarBanco();

    // A variável 'stmt' vai receber a conexão ao banco e vai preparar uma query
    $stmt = $conexao->prepare("SELECT * FROM cliente");

    // Executa o que está dentro da varável 'stmt'
    $stmt->execute();

    // Recebe o resultado da execução de 
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
    <?php include_once 'menu-dropdown.php' ?>

    <h2>Lista de Clientes</h2>
    <table border>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-Mail</th>
        </tr>

        <?php foreach ($clientes as $cliente): ?>
        
        <tr>
            <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
            <td><?= htmlspecialchars($cliente["nome"]) ?></td>
            <td><?= htmlspecialchars($cliente["endereco"]) ?></td>
            <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
            <td><?= htmlspecialchars($cliente["email"]) ?></td>
        </tr>
            <?php endforeach; ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>