<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2 de Formularios - PHP</title>
</head>
<body>
    <form method="GET" action="back_form2.php">
        <label> Nome: </label>
        <input name="nome" type="text">
        <label> Idade: </label>
        <input name="idade" type="text">

        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_GET["nome"]) && isset($_GET["idade"])){
            echo "Recebido o cliente ".$_GET["nome"];
            echo " que tem ".$_GET["idade"]." anos.";
        } else {
            echo "Campos obrigatórios não preenchidos!";
        }
    ?>
</body>
</html>