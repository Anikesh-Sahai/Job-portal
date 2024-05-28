<?php
namespace AnikeshSahai\Job\controller;
error_reporting(E_ALL);
ini_set('display_errors', 1);



class indexController{

    public function showHome(){
        header("location: view/home.php");
    }
}

?>