<?php

class TarefaService{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

}

class TarefaServiceRemover extends TarefaService{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

    public function remover(){
        $query = "delete from tarefa where id = :id";

        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':id', $this->tarefa->__get('id'));
        
        $stmt->execute();
    }
}

class TarefaServiceListar extends TarefaService{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

    public function listar(){
        $query = "select id, descricao from tarefa";

        $stmt = $this->conexao->prepare($query);
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

class TarefaServiceInserir extends Tarefa{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

    public function inserir(){
        
        $query = "insert into tarefa(descricao) values(:descricao)";

        $stmt = $this->conexao->prepare($query);
        
        $stmt->bindValue(':descricao', $this->tarefa->__get('descricao'));

        $stmt->execute();
    }
}

?>