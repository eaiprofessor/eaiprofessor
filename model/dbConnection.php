<?php

class DbConnection{
    private $user      = 'root';
    private $pass      = '';
    private $host      = 'localhost';
    private $port      = '3306';
    private $database  = 'arete';

    // Método para conexão
    private function connect(){
        $conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->database",  $this->user,  $this->pass);
        return $conn;

    }
    // Método para insert, update ou delete
    public function runQuery($sql){
        $stm = $this->connect()->prepare($sql);
        return $stm->execute();
    }
    // Método para select
    public function runSelect($sql){
        $stm = $this->connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
