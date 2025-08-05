<?php
    session_start();
    include "banco.php";

    // CADASTRANDO NOVA TAREFA/CARREGANDO TAREFAS
    if (isset($_GET['nome']) && $_GET['nome'] != '') {
        // Declarando uma array chamada 'tarefa'
        $tarefa = array();

        $tarefa['nome'] = $_GET['nome'];
    
        if (isset($_GET['descricao'])) {
                $tarefa['descricao'] = $_GET['descricao'];
            } else {
                $tarefa['descricao'] = '';
        }

        if (isset($_GET['prazo'])) {
            $tarefa['prazo'] = $_GET['prazo'];
        } else {
            $tarefa['prazo'] = '';
        }

        $tarefa['prioridade'] = $_GET['prioridade'];
    
        if (isset($_GET['concluida'])) {
            $tarefa['concluida'] = $_GET['concluida'];
        } else {
            $tarefa['concluida'] = '';
        }

        $_SESSION['lista_tarefas'][] = $tarefa;
    }

    $lista_tarefas = buscar_tarefas($conexao);

    //session_destroy()

    include "template.php";
?>