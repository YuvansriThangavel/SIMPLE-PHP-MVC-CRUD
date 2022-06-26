<?php
namespace App\Database;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'oop_crud');
class Connection{

    private $connection;

    public function __construct(){
        
        //$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        try{
            $this->connection = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }

    public function getConnection(){ 
        return $this->connection;
    }

    public function closeConnection(){
        unset($this->connection);
    }

}


?>