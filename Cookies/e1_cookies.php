<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cookies e Resgatar - PHP</title>
</head>
<body>
    <?php
        // SINTAXE: setcookie(name, value, expire, path, domain, security, httponly)

        // Exemplo 1: Cookie simples que dura uma hora
        setcookie("nome_usuario", "Roselene Fenske", time() + 3600); // Expira em 1 hora (3600 segundos)

        echo "Cookie 'nome_usuario' criado com sucesso!";
        echo "<br><br>";

        // VERIFICAÇÃO E VALIDAÇÃO COM COOKIE - RESGATAR VALOR
        if (isset($_COOKIE['nome_usuario'])) {
            $nome = $_COOKIE['nome_usuario'];
            echo "Bem-vindo de volta, ".htmlspecialchars($nome)."!";
        } else {
            echo "Olá visitante! Parece que você é novo por aqui.";
        }

        echo "<br>";
    ?>
</body>
</html>