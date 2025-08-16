<?php
    // INFORMAÇÕES DATABASE
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'projeto_crud';

    try {
        // OBJETO MySQLi
        $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        echo 'Erro ao tentar conectar: '.$e -> getMessage();
        die();
    }
?>