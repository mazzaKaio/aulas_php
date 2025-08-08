<?php
    // Habilita relatório detalhado de erros no MySQLi
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    function start_conn() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "login_cadastro";

        try {
            $conn = new mysqli ($host, $user, $pass, $database);

            return $conn;
        } catch (Exception $e) {
            die ("Erro ao tentar conexão: ".$e->getMessage());
        }
    }
?>