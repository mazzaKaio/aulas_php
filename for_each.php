<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each (Para Cada) - PHP</title>
</head>
<body>
    <?php
        $cores = array("Amarelo", "Vermelho", "Verde", "Azul");
        foreach($cores as $cor){
            echo $cor."<br>";
        }
    ?>
</body>
</html>