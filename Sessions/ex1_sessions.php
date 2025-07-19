<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - PHP</title>
</head>
<body>
    <?php
        // Inicia a sessão
        session_start();

        // Armazena dados na sessão
        $_SESSION['usuario_logado'] = "admin";
        $_SESSION['carrinho_compras'] = array("produto_A" => 2, "produto_B" => 1);
        $_SESSION['ultimo_acesso'] = date("Y-m-d H:i:s");

        echo "Dados da sessão armazenados com sucesso!<br>";

        // Recuperadndo dados da sessão
        if (isset($_SESSION["usuario_logado"])) {
            echo "<br>Usuario logado: ".htmlspecialchars($_SESSION['usuario_logado']);
        }

        if (isset($_SESSION["carrinho_compras"])) {
            echo "<br>Carrinho de compras: ";
            print_r($_SESSION['carrinho_compras']);
        }

        if (isset($_SESSION["ultimo_acesso"])) {
            echo "<br>Ultimo acesso: ".htmlspecialchars($_SESSION['ultimo_acesso']);
        }
    ?>
</body>
</html>