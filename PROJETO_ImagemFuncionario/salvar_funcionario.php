<?php
    // FUNÇÃO PARA DIMENSIONAR A IMAGEM
    function redimensionar_imagem($imagem, $largura, $altura) {
        // OBTÉM AS DIMENSÕES ORIGINAIS DA IMAGEM
        // getimagesize() -- RETORNA A LARGURA E ALTURA DE UMA IMAGEM
        list($largura_original, $altura_original) = getimagesize($imagem);

        // CRIA UMA NOVA IMAGEM EM BRANCO COM AS NOVAS DIMENSOES
        // imagecreatetruecolor() -- CRIA UMA NOVA IMAGEM EM BRANCO COM ALTA QUALIDADE
        $nova_imagem = imagecreatetruecolor($largura, $altura);

        // CARREGA A IMAGEM ORIGINAL (jpeg) A PARTIR DO ARQUIVO
        // imagecreatefromjpeg() -- CRIA A IMAGEM PHP A PARTIR DE UM JPEG
        $imagem_original = imagecreatefromjpeg($imagem);

        // COPIA E REDIMENSIONA A IMAGEM ORIGINAL PARA A NOVA
        // imagecopyresampled() -- CÓPIA E REDIMENSIONAMENTO E SUAVIZAÇÃO 
        imagecopyresampled($nova_imagem, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);

        // INICIA UM BUFFER PARA GUARDAR A IMAGEM COMO TEXTO BINÁRIO
        // ob_start() -- INICIA O "output buffering" GUARDANDO A SAIDA
        ob_start();

        // imagejpeg() ENVIA A IMAGEM PARA O OUTPUT (que vai pro BUFFER)
        imagejpeg($nova_imagem);

        // ob_get_clean() -- PEGA O CONTEUDO DO BUFFER E LIMPA
        $dados_imagem = ob_get_clean();

        // LIBERA A MEMORIA USADA PELAS IMAGENS
        // imagedestroy() -- LIMPA A MEMORIA DA IMAGEM CRIADA
        imagedestroy($nova_imagem);
        imagedestroy($imagem_original);

        // RETORNA A IMAGEM REDIMENSIONADA EM FORMATO BINARIO
        return $dados_imagem;
    }

    $host = "localhost";
    $database = "armazena_imagem";
    $user = "root";
    $pass = "";

    try {
        // CONEXAO COM O BANCO USNADO 'PDO'
        $pdo = new PDO("mysql:host=$host; dbname=$database", $user, $pass);
    }
?>