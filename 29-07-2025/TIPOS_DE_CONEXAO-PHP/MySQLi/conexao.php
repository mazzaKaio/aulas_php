<?php
    // Habilita relatório detalhado de erros no MySQLi
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    function conectadb() {
        // Configuração do banco de dados
        $endereco = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "empresa";

        try {
            // Criação da conexão
            $con = new mysqli($endereco, $usuario, $senha, $banco);

            // Definição do conjunto de caracteres para evitar provlemas de acentuação
            $con->set_charset("utf8mb4");
            return $con;
        } catch (Exception $e) {
            // Exibe uma mensagem de erro e encerra o script
            die ("Erro na conexão: ".$e->getMessage());
        }
    }
?>