<?php
    session_start();

    if (isset($_GET['nome']) && $_GET['nome'] != null) {
        $tarefa = array();

        $tarefa['nome'] = $_GET['nome'];
    }

    if (isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }

    $lista_tarefas = array();
    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    } else {
        $lista_tarefas = array();
    }

    include "template.php"
?>