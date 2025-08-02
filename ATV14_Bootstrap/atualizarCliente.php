<?php
    require_once 'conexao.php';

    $conexao = conectarBanco();

    // Obtendo o ID via GET
    $idCliente = $_GET['id'] ?? null;
    $cliente = null;
    $msgErro = "";

    // Função local para buscar cliente por ID
    function buscarClientePorId ($idCliente, $conexao) {
        $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");

        $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch();
    }

    // Se um ID foi enviado, busca o cliente no banco
    if ($idCliente && is_numeric($idCliente)) {
        $cliente = buscarClientePorId( $idCliente, $conexao );

        if (!$cliente) {
            $msgErro = "Erro: Cliente não encontrado!";
        }
    } else {
        $msgErro = "Digite o ID do cliente para buscar os dados.";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">

    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body>
    <?php include_once 'menu-dropdown.php' ?>

    <h2 class="text-center mt-3">Atualizar Cliente</h2>

    <!-- Se houver erro, exibe a mensagem e o campo de busca -->
    <?php if ($msgErro): ?>
        <p style="color: red; text-align: center;"><?= htmlspecialchars($msgErro) ?></p>

    <div class="d-flex justify-content-center">
        <form class="form-group mt-1 " action="atualizarCliente.php" method="GET">
            <label class="text-label" for="id">ID do Cliente:</label><br>
            <input class="text-control" type="number" name="id" id="id" required><br>

            <button class="btn btn-primary mt-3" type="submit">Buscar</button>
        </form>
    </div>
        
    <!-- Se um cliente foi encontrado, exibe o formulário preenchido -->
    <?php else: ?>
        <div class="d-flex justify-content-center">
            <form class="form-group mt-3 w-50" action="processarAtualizacao.php" method="POST">
                <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control form-control-lg" type="text" name="nome" id="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilitarEdicao('nome')">

                <label class="form-label" for="endereco">Endereco:</label>
                <input class="form-control form-control-lg" type="text" name="endereco" id="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilitarEdicao('endereco')">

                <label class="form-label" for="telefone">Telefone:</label>
                <input class="form-control form-control-lg" type="text" name="telefone" id="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')">

                <label class="form-label" for="email">E-mail:</label>
                <input class="form-control form-control-lg" type="text" name="email" id="email" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilitarEdicao('email')">

                <button class="btn btn-success mt-3" type="submit">Atualizar Cliente</button>
            </form>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>