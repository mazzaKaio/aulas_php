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

        $query = "SELECT id, nome, cargo, foto FROM funcionarios WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            include_once 'includes/cabecalho.php';

            echo "<br><h3>Dados tragos:</h3>";
            ?> 
                <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                </head>
                <body>
                    <table border>
                        <tr>
                            <th>ID:</th>
                            <th>Nome:</th>
                            <th>Cargo:</th>
                            <th>Foto:</th>
                        </tr>

                        <tr>
                            <td><?= htmlspecialchars($result['id']) ?></td>
                            <td><?= htmlspecialchars($result['nome']) ?></td>
                            <td><?= htmlspecialchars($result['cargo']) ?></td>
                            <td><?= $foto_base64 = base64_encode($result['foto']);
                                    echo "<img src='data:image/jpeg;base64,$foto_base64' alt='Foto do Funcionário' style='max-width: 200px; height: auto;' />"; 
                                ?>
                            </td>
                        </tr>
                    </table>
                </body>
                </html>
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