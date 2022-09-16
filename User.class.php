<?php
require 'config.php';
// use PDO;

class User{
    private $pdo;

    public function __construct($id = NULL){
        try {
            $this->pdo = new PDO("mysql:dbname=".$_ENV['DB_NAME'].";host=".$_ENV['HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM usuario WHERE usu_excluido <> true ";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();

        if($sql->rowCount()>0){
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}