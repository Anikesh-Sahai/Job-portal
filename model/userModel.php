<?php
namespace AnikeshSahai\Job\model;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once realpath("../vendor/autoload.php");

require '../config/dbConnection.php';

use AnikeshSahai\Job\config\database;
use PDO;



class insert{
    private $email;
    private $name;
    private $pass;
    private $option;
    private $dbn;
    private $conn;

    function __construct(){
        $this->dbn=new database;
        $this->conn=$this->dbn->conn;
        
    }
    
    public function user_signup($email, $name , $pass , $option){
        $this->email = $email;
        $this->name = $name;
        $this->pass = $pass;
        $this->option = $option;

            $sql="select * from users where email=:email";
            $result=$this->conn->prepare($sql);
            $result->bindValue(':email',$this->email, PDO::PARAM_STR);
            $result->execute();
            $userCount =$result->rowCount();
            
            if($userCount!=0){
                // already exist
                $ans="email already exist";
                return $ans;
            }
            else{

                $hash=password_hash($this->pass,PASSWORD_DEFAULT);

                $sql="insert into users (email, password, name, emp) values (:email,:hashpass,:name,:option)";
                $result=$this->conn->prepare($sql);
                $result->bindValue(':email',$email, PDO::PARAM_STR);
                $result->bindValue(':hashpass',$hash, PDO::PARAM_STR);
                $result->bindValue(':name',$name, PDO::PARAM_STR);
                $result->bindValue(':option',$option, PDO::PARAM_STR);
                $result->execute();
                $ans="successfully signedUp";
                return $ans;
            }
    }

    public function user_signin($email,$pass){
        $this->email = $email;
        $this->pass = $pass;

        $sql="select * from users WHERE email=:email";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':email',$this->email, PDO::PARAM_STR);
        $result->execute();
        $userCount = $result->rowCount();
        if($userCount==1){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                if(password_verify($this->pass,$row['password'])){
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$row['name'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['option']=$row['emp'];
                    header("location: ../view/home.php");
                    exit;
                    return "successfully loged in";
                }
                else{
                  return "password not match";
                }
              }
        }
        else{
            return "email not exist plz signup";
        }
    }    
}

?>