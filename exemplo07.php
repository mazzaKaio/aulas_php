<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Set - PHP</title>
</head>
<body>
    <?php
        $name = "Xenia";
        # $name = NULL;

        if(isset($name)) {
            print "Essa linha está sendo impressa, pois, há conteúdo na variável 'NAME'.<br>Se a linha não for exibida, não há conteúdo na variável.";
        }
    ?>
</body>
</html>