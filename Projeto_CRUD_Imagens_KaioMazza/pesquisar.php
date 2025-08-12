<?php
// INFORMAÇÕES DO BANCO DE DADOS
    $host = "localhost";
    $database = "empresa";
    $user = "root";
    $pass = "";

    try {
        // CONEXAO COM O BANCO USNADO 'PDO'
        $pdo = new PDO("mysql:host=$host; dbname=$database", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "SELECT nome, cargo, foto FROM funcionarios WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['excluir_id'])) {
                    $excluir_id = $_POST['excluir_id'];

                    $query_exclusao = "DELETE FROM funcionario WHERE id = :id";

                    $stmt_exclusao = $pdo->prepare($query_exclusao);
                    $stmt_exclusao->bindParam(":id", $excluir_id, PDO::PARAM_INT);
                    $stmt_exclusao->execute();

                    header('Location: listar.php');
                    exit();
                }

                ?>
                <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Visualizar Funcionário</title>

                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
                    rel="stylesheet" 
                    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
                    crossorigin="anonymous">
                </head>
                <body>
                    <?php include_once 'includes/cabecalho.php' ?>   

                    <h1>Visualizar Funcionário</h1>

                    <p>Nome: <?= htmlspecialchars($funcionario['nome']) ?></p>
                    <p>Cargo: <?= htmlspecialchars($funcionario['cargo']) ?></p>
                    <?php $foto_base64 = base64_encode($funcionario['foto']);
                    echo "<img src='data:image/jpeg;base64,$foto_base64' alt='Foto do Funcionário' style='max-width: 200px; height: auto;' />"; ?>
                </body>
                </html>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
                crossorigin="anonymous">
                </script>
                <?php   
            }
        }
    } catch (PDOExcpetion $e) {
        echo "Só para testar: ">$e->getMessage();
    }
?>