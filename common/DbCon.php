<?php
namespace Common;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'oop_crud');
class DbCon{

    private $conn;

    public function __construct(){
        
        //$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        try{
            $this->conn = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }

    public function getConnection(){
        
        return $this->conn;
    }

}


?>