<?php
    require_once ('conecta.php');

    // OBTÉM O id VIA get GARANTINDO QUE SEJA UM NÚMERO INTEIRO
    $id_imagem = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // VERIFICA SE O id É VÁLIDO (maior que zero)
    if ($id_imagem > 0){
        // CRIAR UMA QUERY SEGURA USANDO O 'prepared statement'
        $query_exclusao = "DELETE FROM tabela_imagens WHERE codigo = ?";

        // PREPARANDO A QUERY
        $stmt = $conexao->prepare($query_exclusao);
        
        $stmt->bind_param("i", $id_imagem); // DEFINE O id COMO UM INTEIRO (int)

        // EXECUTA A EXCLUSÃO
        if ($stmt->execute()) {
            echo "Imagem excluída com sucesso.";
        } else {
            die("Erro ao excluir a imagem: ".$stmt->error);
        }

        // FECHA A CONSULTA
        $stmt->close();
    } else {
        echo "ID inválido!";
    }

    // REDIRECIONA PARA A 'index.php' E GARANTE QUE O SCRIPT PARE
    header("Location: index.php");
    exit;
?>