<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo arquivos - PHP</title>
</head>
<body>
    <?php
        $texto = file_get_contents('texto.txt');

        // 'nl2br': USADO PARA EXIBIR UM ARQUIVO
        echo nl2br($texto);
        var_dump($texto);
    ?>
</body>
</html>