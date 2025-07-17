<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array com Arrays - PHP</title>
</head>
<body>
    <?php
        echo "<br>";

        $AmazonProducts = array(
            array("Codigo" => "Livro", "Descricao" => "Livros", "Preco" => 50),
            array("Codigo" => "DVDs", "Descricao" => "Filmes", "Preco" => 15),
            array("Codigo" => "CDs", "Descricao" => "Músicas", "Preco" => 20)
        );

        for ($linha = 0; $linha < 3; $linha++){ ?>
            <p>
                | <?= $AmazonProducts[$linha]["Codigo"] ?>
                | <?= $AmazonProducts[$linha]["Descricao"] ?>
                | <?= $AmazonProducts[$linha]["Preco"] ?>
            </p>
    <?php
        }
    ?>
</body>
</html>