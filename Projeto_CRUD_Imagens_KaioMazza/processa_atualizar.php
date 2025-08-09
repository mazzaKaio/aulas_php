<?php
    include_once 'atualizar.php';

    // CONFIGURAÇÃO DO BANCO DE DADOS
    $host = "localhost";
    $database = "empresa";
    $user = "root";
    $pass = "";

    try {
        $id = $_POST['id'];

        // CONEXAO COM O BANCO USNADO 'PDO'
        $pdo = new PDO("mysql:host=$host; dbname=$database", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT nome, cargo, foto FROM funcionarios WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            include_once 'includes/cabecalho.php';

            echo "<br><h3>Dados tragos:</h3>";
            ?> 
            
            <?php
        } else {
            echo "Funcionário não encontrado!";
        }
    } catch (PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }

    function atualizar_no_banco() {

    }
?>