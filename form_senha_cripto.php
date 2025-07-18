<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia de Senhas - PHP</title>

    <style type="text/css">
        label {
            display: inline-block;
            width: 100px;
        }

        * {
            margin: 8px 8px 8px 8px;
        }
    </style>
</head>
<body>
    <form action="#" method="POST">
        <label for="usuario">Usuário: </label>
        <input type="text" name="user" id="user" required>
        <br>
        <label for="senha">Senha: </label>
        <input type="text" name="password" id="password" required>
        <br>
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" value="Limpar">
    </form>

    <?php
        if (isset($_POST["enviar"])) {
            $user = $_POST["user"];
            $senha = $_POST["password"];
            echo "Recebido $user e $senha. <br>";

            // FUNÇÃO PRÓPRIA DO PHP PARA CRIPTOGRAFIA
            $cripto = MD5($senha);
            echo "Senha criptografada com sucesso!<br>$cripto";
        }
    ?>
</body>
</html>