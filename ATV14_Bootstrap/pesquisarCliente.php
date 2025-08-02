<?php
    require_once 'conexao.php';

    $conexao = conectarBanco();

    $busca = $_GET['busca'] ?? "";

    if (!$busca) {
        ?>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
            crossorigin="anonymous">
        </head>
        
        <?php include_once 'menu-dropdown.php' ?>

        <h1 class="text-center mt-3">Pesquisar Cliente</h1>

        <div class="d-flex justify-content-center">
            <form class="form-group mt-3" action="pesquisarCliente.php" method="GET">
                <label class="form-label" for="busca">Digite o ID ou Nome:</label><br>
                <input class="form-control" type="text" id="busca" name="busca" required><br>

                <button class="btn btn-primary" type="submit">Pesquisar</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
        crossorigin="anonymous">
        </script>

        <?php
        exit;
    }

    // Escolha entre busca por ID ou Nome e faz a consulta diretamente
    if (is_numeric($busca)) {
        $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");

        $stmt->bindParam(":id", $busca, PDO::PARAM_INT);
    } else {
        $stmt = $conexao->prepare('SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome');

        $buscaNome = "%$busca%";

        $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
    }

    $stmt->execute();
    $clientes = $stmt->fetchAll();

    if (!$clientes) {
        die("Erro: Nenhum cliente encontrado.");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'menu-dropdown.php' ?>

    <h3 class="text-center mt-3">Resultado:</h3>

    <table class="table table-striped w-50 mx-auto mt-3">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereco</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>

        <?php foreach ($clientes as $cliente): ?>
            
        <tr>
            <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
            <td><?= htmlspecialchars($cliente["nome"]) ?></td>
            <td><?= htmlspecialchars($cliente["endereco"]) ?></td>
            <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
            <td><?= htmlspecialchars($cliente["email"]) ?></td>
            <td>
                <button class="btn btn-warning"><a href="atualizarCliente.php?id=<?= $cliente['id_cliente'] ?>">Editar</a></button>
                <button class="btn btn-danger"><a href="deletarCliente.php?id=<?= $cliente['id_cliente'] ?>">Excluir</a></button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>