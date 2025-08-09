<?php
    include_once 'includes/tratamento_imagem.php';

    $host = "localhost";
    $database = "empresa";
    $user = "root";
    $pass = "";

    try {
        // CONEXAO COM O BANCO USNADO 'PDO'
        $pdo = new PDO("mysql:host=$host; dbname=$database", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])) {

            if($_FILES['foto']['error'] == 0) {
                $nome = $_POST['nome'];
                $cargo = $_POST['cargo'];

                // REDIMENSIONA A IMAGEM
                // O CODIGO ABAIXO CUJA VARIAVEL É 'tmp_name" É O CAMINHO TEMPORÁRIO DO ARQUIVO
                $foto = redimensionar_imagem($_FILES['foto']['tmp_name'], 300, 400);

                // INSERE NO BANCO DE DADOS USANDO O SQL PREPARED
                $query = "INSERT INTO funcionarios (nome, cargo, foto) VALUES (:nome, :cargo, :foto)";
                
                $stmt = $pdo->prepare($query); // RESPONSÁVEL POR PREPARAR A QUERY PARA EVITAR ATAQUES SQL INJECTION

                $stmt->bindParam(':nome', $nome); // LIGA OS PARAMETROS AS VARIAVEIS
                $stmt->bindParam(':cargo', $cargo); // LIGA OS PARAMETROS AS VARIAVEIS
                $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB); // 'LOB' = Large Object, USADO PARA DADOS BINARIOS COMO IMAGEM

                if ($stmt->execute()) {
                    echo "Funcionário cadastrado com sucesso!";
                } else {
                    echo "Erro ao cadastrar o funcionário.";
                }
            } else {
                echo "Erro ao fazer upload da foto! Código: ".$_FILES['foto']['error'];
            }
        }
    } catch(PDOExcpetion $e) {
        echo "Erro: ".$e->getMessage(); // MOSTRA O ERRO (SE HOUVER)
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESI|SENAI - Funcionários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'includes/cabecalho.php' ?>

    <a href="listar.php">Listar Funcionários</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>