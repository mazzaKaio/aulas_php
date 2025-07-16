<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuaba com WHILE - PHP</title>
</head>
<body>
    <?php
        $i = 1;
        $numero = 1;

        while ($numero <= 10){

            echo "<h4>Tabuada do $numero</h4>";

            while ($i <= 10){
                echo "$numero X $i = " . $numero * $i . "<br>";
                $i++;
            }

            echo "<br>";
            $numero++;
            $i = 1;

        }
    ?>
</body>
</html>