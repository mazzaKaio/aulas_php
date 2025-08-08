<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="text-align: center;">
    <h2>Login - Sistema</h2>

    <form action="DTO/processar_login.php;" method="POST">
        <label for="nome">Usuário:</label>
        <input type="text" name="usuario" id="usuario">

        <br>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <br>
        <br>

        <button type="submit">Login</button>
    </form>

    <p>Novo por aqui? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>