<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies 2 - PHP</title>
</head>
<body>
    <?php
        // Exemplo 2: Cookie com mais opções

            //nome: "preferencias_site"
            //valor: "tema=escuro&idioma=pt_BR"
            //expira: daqui a 7 dias
            //path: "/" (disponivel em todo o site)
            //domain: "" (deixa o PHP determinar o dominio)
            //secure: false (não requer HTTPS)
            //httponly: true (não acessível por JavaScript - aumenta a segurança contra XSS)

        setcookie("preferencias_site", "tema=escuro&idioma=pt_BR", time() + (86400 * 7), "/", "", false, true); // 86400 segundos = 1 dia

        echo "Cookie 'preferencias_site' criado com sucesso!";
        echo "<br><br>";

        // Recuperando o cookie de preferencias

        if (isset($_COOKIE['preferencias_site'])) {
            $preferencias = $_COOKIE["preferencias_site"];

            echo "Suas preferencias são: ".htmlspecialchars($preferencias);
        }
    ?>
</body>
</html>