<?php
namespace App\Controllers;

use Core\Model;
use Core\View;

class Crud{
    
    public function home(){
        View::render('index');
    }

    public function insert(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['submit'])) {
                        
                $name = $_POST['name'];
                $id_no = $_POST['id_no'];
                $role = $_POST['role'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $dob = date('d-m-Y', strtotime($_POST['dob']));
                $image = $_FILES['image']['tmp_name'];
                $imageContents = addslashes(file_get_contents($image));
                $data = array('name'=>$name, 
                    'id_no'=>$id_no, 
                     'role'=>$role, 
                     'mobile'=>$mobile, 
                     'email'=>$email, 
                     'address'=>$address, 
                     'dob' => $dob, 
                     'image' =>$imageContents);
                $result = Model::render('Crud', 'insert', $data);
                $records = Model::render('Crud','readAll');
                if($result){
                echo "<script>alert('records added successfully');</script>";
                View::render('readAll',$records);
                }else{
                echo "<script>alert('failed');</script>";
                View::render('readAll',$records);
                }
            }else{
                echo "<script>alert('empty');</script>";
                echo "<script>window.location.href = '?Crud/home';</script>";
          }     
        }else{
            View::render('insert');
        }
    }
    public function update($id){
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        print_r($_POST);
        if (isset($_POST['update'])){
          $name = $_POST['name'];
          $role = $_POST['role'];
          $mobile = $_POST['mobile'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $dob = date('d-m-Y', strtotime($_POST['dob']));
          $image = $_FILES['image']['tmp_name'];
          $imageContents = addslashes(file_get_contents($image));
          $data = array('name'=>$name, 
                     'role'=>$role, 
                     'mobile'=>$mobile, 
                     'email'=>$email, 
                     'address'=>$address, 
                     'dob' => $dob, 
                     'image' =>$imageContents);
          $update = Model::render('Crud','update',$data);
          $records = Model::render('Crud','readAll');
          if($update){
            echo "<script>alert('records added successfully');</script>";
            View::render('readAll',$records);
            }else{
            echo "<script>alert('failed');</script>";
            View::render('readAll',$records);
            }
        }
      }else{
        $data = Model::render('Crud','read',['id_number'=>$id]);
        View::render('update',$data);
      }
    }
    public function delete($id){
      
    }   

    public function read($id){
        
        $record = Model::render('Crud', 'read',['id_number'=>$id]);
        View::render('read', $record);
    }

    public function readAll(){
        
        $records = Model::render('Crud', 'readAll');
        if(isset($records)){
          View::render('readAll',$records);
        }
        
    }

    public function generateIdCard(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){
          if(isset($_POST['generate'])){
            $id = $_POST['id'];
            $record = Model::render('Crud','read', ['id'=>$id]);
            View::render('generate-id-card',$record);
          }
        }else{
          View::render('generate-id-card');
        }
    }
}



?>