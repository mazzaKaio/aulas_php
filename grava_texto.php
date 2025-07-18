<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravando texto em um arquivo - PHP</title>
</head>
<body>
    <?php
        $texto = file_get_contents('texto.txt');
        echo nl2br($texto)."<hr>";

        $texto = $texto." extra";
        echo nl2br($texto)."<hr>";

        // SUBSTITUI UMA VARIAVEL POR TODO O CONTEUDO QUE HAVIA
        file_put_contents("texto.txt", $texto)
    ?>
</body>
</html>