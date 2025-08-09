<?php
    // Habilita relatório detalhado de erros no MySQLi
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    function start_connection() {
        try {
            // INFORMAÇÕES DO SERVIDOR BD
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $nomebd = "empresa";
            
            $conexao = new PDO($host, $usuario, $senha, $nomebd);
            return $conexao;
        } catch (Exception $e) {
            echo "Erro ao conectar no Banco de Dados: ".$e->getMessage();
        }
    }
?>