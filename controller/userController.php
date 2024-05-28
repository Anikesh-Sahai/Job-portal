<?php
namespace AnikeshSahai\Job\controller;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use AnikeshSahai\Job\model\insert;
require_once realpath("../vendor/autoload.php");


require ('../model/userModel.php');



class userController{
    private $email;
    private $name;
    private $pass;
    private $emp;

    public function view(){
        
    }

    public function signup($email,$name,$pwd,$emp){
        $this->email = $email;
        $this->name = $name;
        $this->pass = $pwd;
        $this->emp = $emp;
        // $obj = new job\model\insert();
        $obj = new insert();
        $result=$obj->user_signup($this->email,$this->name,$this->pass,$this->emp);
        if($result=="successfully signedUp"){
            header("location: ../view/home.php"); 
            die();
        }
        return $result;
    }

    public function signin($email,$pass){
        $this->email = $email;
        $this->pass = $pass;
        $obj = new insert();
        $result=$obj->user_signin($this->email,$this->pass);
        return $result;
    } 

}