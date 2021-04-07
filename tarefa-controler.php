<?php

    require "tarefa.php";
    require "tarefa-service.php";
    require "conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if( $acao =='inserir'){
        $tarefa = new Tarefa();
        $tarefa->__set("descricao", $_GET["descricao"]);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();

    } else if( $acao == 'listar') {

       $tarefa = new Tarefa();
       $conexao = new Conexao();

       $tarefaServiceListar = new TarefaServiceListar($conexao, $tarefa);
       $tarefas = $tarefaServiceListar->listar();
    } else if( $acao == 'remover') {

        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conexao = new Conexao();
 
        $tarefaServiceRemover = new TarefaServiceRemover($conexao, $tarefa);
        $tarefas = $tarefaServiceRemover->remover();
    }
    
?>