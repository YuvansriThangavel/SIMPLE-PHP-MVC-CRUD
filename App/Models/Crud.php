<?php

namespace App\Models;



class Crud{
    private $connection;

    public function __construct(){
        $db = new \App\Database\Connection;
        $this->connection = $db->getConnection();
    }
    public function insert($data){
        
        $query = "INSERT INTO records (name,id_number,role,email,mobile,address,dob,image) VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2,$data['id_no']);
        $stmt->bindParam(3,$data['role']);
        $stmt->bindParam(4,$data['email']);
        $stmt->bindParam(5,$data['mobile']);
        $stmt->bindParam(6,$data['address']);
        $stmt->bindParam(7,$data['dob']);
        $stmt->bindParam(8,$data['image']);

        $result = $stmt->execute();
        
        if($result){
            return true;
        }
        return false;
    }

    public function update($data){
        $query = "UPDATE records SET name='$data[name]', id_no='$data[id_no]', role='$data[role]',email='$data[email]', mobile='$data[mobile]', address='$data[address]', dob='$data[dob]',image='$data[image]'WHERE id='$data[id] '";

		if ($sql = $this->connection->query($query)) {
			return true;
		}else{
			return false;
		}
    }

    public function delete($id){

        $query = "DELETE FROM records where id = '$id'";
		if ($this->connection->query($query)) {
			return true;
		}else{
			return false;
		}
    }   

    public function read($args){
        $id = $args['id'];
        $query = "SELECT * FROM records WHERE id_number=?";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(1, $id);;
        if($stmt->execute()){
            $result = $stmt->fetchAll();
            if(!empty($result)){
                return $result;
            }   
        }
        return null;
    }

    public function readAll(){

        $query = "SELECT * FROM records";

        $result = $this->connection->query($query);

        $records = $result->fetchAll();

        return $records;
		
    }

}


?>