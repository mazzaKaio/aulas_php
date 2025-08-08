<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body style="text-align: center;">
    <h2>Cadastro - Sistema</h2>

    <form action="DTO/processar_cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="usuario" id="usuario" required>

        <br>
        <br>

        <label for="nome">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <br>
        <br>

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" maxlength="30" required>

        <br>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" maxlength="18" required>

        <br>
        <br>

        <button type="submit">Cadastrar</button>
    </form>

    <p>Já possui cadastro? <a href="login.php">Faça o login</a></p>
</body>
</html>