<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriaveis numéricas - PHP</title>
</head>
<body align='center'>
    <?php
        $num = 537; // Número inteiro
        echo $num, " = Número inteiro <br><br>";

        $num = -13; // Número negativo
        echo $num, " = Número negativo <br><br>";

        $num = 0123; // Número octal (Equivalente à 83 em decimal)
        echo $num, " = Número octal <br><br>";

        $num = 0x1A; // Número Hexadecimal (Equivalente à 26 em decimal)
        echo $num, " = Número Hexadecimal <br><br>";

        $num = 1.234; // Número Flutuante
        echo $num, " = Número Flutuante <br><br>";

        $num = 4e23; // Notação Científica
        echo $num, " = Notação Científica <br><br>";
    ?>
</body>
</html>