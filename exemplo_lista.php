<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descompactando listas - PHP</title>
</head>
<body>
    <?php
        $valores = array("Kaio Mazza", "16", "M", "(+-)150");
        list($usuario, $idade, $genero, $qi) = $valores;

        echo "Usuário: ".$usuario."<br>";
        echo "Idade: ".$idade."<br>";
        echo "Gênero: ".$genero."<br>";
        echo "QI: ".$qi."<br>";
    ?>
</body>
</html>