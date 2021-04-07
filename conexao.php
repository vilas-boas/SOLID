<?php

class Conexao{

    private $host = 'localhost';
    private $dbname = 'bdsolid';
    private $user = 'root';
    private $pass = '';

    public function conectar(){
        try{

            $conexao = new PDO(
                "mysql:hots=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $conexao;

        } catch (PDOException $e){
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
}

?>