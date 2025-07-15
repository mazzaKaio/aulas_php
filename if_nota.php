<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação Escolar - PHP</title>
</head>
<body>
    <?php
        $nota = 8;

        if ($nota >= 7){
            echo "<p>Situação: <em>Aprovado</em></p>";
        }

        if ($nota < 7 && $nota >= 3){
            echo "<p>Situação: <em>Exame</em></p>";
        } 
        
        if ($nota < 3){
            echo "<p>Situação: <em>Reprovado</em></p>";
        }
    ?>
</body>
</html>