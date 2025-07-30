<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h2>Cadastro de Cliente</h2>

    <form action="processarInsercao.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="endereco">Endereco:</label>
        <input type="text" name="endereco" id="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Cadastrar Cliente</button>
    </form>
</body>
</html>