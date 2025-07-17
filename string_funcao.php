<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções com Strinh - PHP</title>
</head>
<body>
    <?php
        $vogais = array("a", "e", "i", "o", "u", 
                        "A", "E", "I", "O", "U");
        echo "Hello world of PHP<br>";

        $cons = str_replace ($vogais, "", "Hello World of PHP");
        echo "Consoantes: ".$cons,"<br>";

        //     012345678901

        $test = "Hello World! \n";
        print "Posicação da letra 'o': ";
        print strpos ($test, 'o')."<br>";
        
        print "Posição da letra 'o' após 5ª letra: ";
        print strpos ($test, 'o', 5)."<hr>";

        $message = "troca letra uma a uma";
        echo $message."<br>";

        $new_message = strtr($message, 'abcdef', '123456');
        echo "Criptografando: ".$new_message."<br>";

        $new_message = strtr($message, '123456', 'abcdef');
        echo "Descriptografando: ".$new_message."<br>"; 
    ?>
</body>
</html>