<?php
    // CONFIGURAÇÃO DO BANCO DE DADOS
    $host = "localhost";
    $database = "empresa";
    $user = "root";
    $pass = "";

    try {
        // CONEXAO COM O BANCO USNADO 'PDO'
        $pdo = new PDO("mysql:host=$host; dbname=$database", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // RECUPERA TODOS OS FUNCIONARIOS DO BANCO DE DADOS
        $query = "SELECT id, nome, cargo, foto FROM funcionarios";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC); // BUSCA TODOS OS RESULTADOS COMO UMA MATRIZ ASSOCIATIVA

        // VERIFICA SE FOI SOLICITADO A EXCLUSÃO DE UM FUNCIONARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluir_id'])) {
            $excluir_id = $_POST['excluir_id'];

            $query_exclusao = "DELETE FROM funcionarios WHERE id=:id";

            $stmt_exclusao = $pdo->prepare($query_exclusao);
            $stmt_exclusao->bindParam(':id', $excluir_id, PDO::PARAM_INT);
            $stmt_exclusao->execute();

            // REDIRECIONA PARA EVITAR REENVIO DO FORMUALRIO
            header('Location: '.$_SERVER['PHP_SELF']);
            exit();
        }
    } catch (PDOExcpetion $e) {
        echo "Erro: ".$e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionários - SESI|SENAI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
</head>
<body>
    <?php include_once 'includes/cabecalho.php' ?>    

    <h1>Listar Funcionários</h1>

    <table border>
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>Cargo:</th>
            <th>Foto:</th>
            <th>Função</th>
        </tr>

        <?php foreach($funcionarios as $funcionario): ?>
            <form method="POST" style="display: inline;"></form>
                <tr>
                    <td><?= htmlspecialchars($funcionario['id']) ?></td>
                    <td><?= htmlspecialchars($funcionario['nome']) ?></td>
                    <td><?= htmlspecialchars($funcionario['cargo']) ?></td>
                    <td><?php echo $funcionario['foto']; ?></td>
                    <td>
                        <input type="hidden" name="excluir_id" value="<?= $funcionario['id'] ?>">

                        <button type="submit">Excluir</button>
                    </td>
                </tr>
            </form>
        <?php endforeach; ?>
    </table>

    <ul>
        <?php foreach($funcionarios as $funcionario): ?>
            <li>
                <!-- O CÓDIGO ABAIXO CRIA LINK PARA VISUALIZAR DETALHES DO FUNCIONÁRIO -->
                <a href="pesquisar.php?id=<?= $funcionario['id'] ?>">
                    <?= htmlspecialchars($funcionario['nome' ])?>
                </a>
                
                <!-- FORMULARIO PARA EXCLUIR FUNCIONARIO -->
                 <form method="POST" style="display: inline;">
                    <input type="hidden" name="excluir_id" value="<?= $funcionario['id'] ?>">

                    <button type="submit">Excluir</button>
                 </form>
            </li>
            <?php endforeach; ?>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
    crossorigin="anonymous">
    </script>
</body>
</html>