<?php
namespace app\models;

abstract class Connection{
    
    private $dbname = "mysql:dbname=phpmvcpratico;host=localhost" ;
    private $user = "henrique";
    private $pass = "slipknot1994";
    
    protected function connect(){
        try{
            $conn = new \PDO($this->dbname, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;
        }catch(\PDOException $erro){
            echo $erro->getMessage();
        }
    }
    
}

