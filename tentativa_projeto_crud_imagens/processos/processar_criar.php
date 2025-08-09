<?php
    require_once '../includes/conexao.php';
    require_once '../includes/tratamento_imagem.php';

    $conn = start_connection();

    try {
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $foto = $_FILES['foto']['tmp_name'];

        $foto_tratada = redimensionar_imagem($foto, 300, 400);

        $query = "INSERT INTO funcionarios (nome, cargo, foto) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $nome, $cargo, $foto_tratada);

        if ($stmt->execute()) {
            echo "Funcionário cadastrado com sucesso!";
            header("Location: ../criar.php");
            exit;
        } else {
            echo "Erro ao cadastrar o funcionário.";
        }
    } catch (Exception $e) {
        echo "Erro: ".$e->getMessage();
    }
?>