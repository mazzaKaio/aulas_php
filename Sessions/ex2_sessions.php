<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruindo sessions - PHP</title>
</head>
<body>
    <?php
        session_start();

        // UNSET: Remove UMA variavel
        unset($_SESSION['usuario_logado']); // Remove apenas a variavel 'usuario_logado'

        echo "Variavel 'usuario_logado' removida da sessão!";

        // Remover TODAS as variaveis
        session_unset(); // Remove todas as variaveis da sessão

        echo "<br><br>Todas as variaveis da sessão foram removidas!";

        // O ID da sessão ainda existe, e uma nova variável pode ser criada.
    ?>
</body>
</html>