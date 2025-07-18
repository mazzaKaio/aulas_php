<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionando texto num arquivo - PHP</title>
</head>
<body>
    <?php
        # FILE_IGNORES_NEW_LNE: ignorar o \n de cada linha
        $linhas = file('texto.txt', FILE_IGNORE_NEW_LINES);
        var_dump($linhas);

        foreach ($linhas as $linha_num => $linha){
            echo "Linha #{$linha_num} : ".$linha." <br>";   
        }
    ?>
</body>
</html>