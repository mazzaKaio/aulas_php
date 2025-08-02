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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'menu-dropdown.php' ?>

    <h2 class="text-center mt-3">Todos os Clientes Cadastrados</h2>

    <?php if (!$clientes): ?>
        <p style="color: red;">Nenhum cliente encontrado no banco de dados.</p>
    <?php else: ?>
        <div class="d-flex justify-content-center">
            <table class="table table-striped w-75 mt-2">
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
                        <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>
                        <td><?= htmlspecialchars($cliente['nome']) ?></td>
                        <td><?= htmlspecialchars($cliente['endereco']) ?></td>
                        <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                        <td><?= htmlspecialchars($cliente['email']) ?></td>
                        <td>
                            <button class="btn btn-warning"><a href="atualizarCliente.php?id=<?= $cliente['id_cliente'] ?>">Editar</a></button>
                            <button class="btn btn-danger"><a href="deletarCliente.php?id=<?= $cliente['id_cliente'] ?>">Excluir</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>