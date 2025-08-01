<?php
    // Configurando do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa_teste";

    // Conexão usando MySQLi sem proteção contra SQL Injection
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verifica se há um erro na conexão
    if ($conexao->connect_error) {
        die("Erro de conexão: ".$conexao->connect_error);
    }

    // Captura os dados do formulário (nome de usuário)
    $nome = $_POST['nome'];

    // Prepara a consulta SQL segura
    $stmt = $conexao->prepare("SELECT * FROM cliente_teste WHERE nome = ?");
    $stmt -> bind_param("s", $nome);
    $stmt -> execute();

    $result = $stmt -> get_result();

    // se houver resultados, o login é considerado bem-sucedido
    if ($result -> num_rows > 0) {
        header ("Location: area_restrita.php");
    
    // Garante que o código pare aqui para evitar execução indevida
        exit();
    } else {
        echo "Nome não encontrado";
    }

    // Fecha conexão
    $conexao->close();
?>