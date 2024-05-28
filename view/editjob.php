<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require '../controller/viewController.php';
use AnikeshSahai\Job\controller\viewController;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $job_t=$_POST['job_t'];
    $job_desc=$_POST['job_d'];
    $job_tag=$_POST['tag'];
    $id=$_POST['job_id'];
    $img=$_FILES['md-img'];
    
  
    $obj = new viewController;
    if($img['name']==""){
      $result=$obj->edit($name, $email, $location, $job_t, $job_desc, $job_tag, $id, $img['name']);

    }
    else{
      $filename=$img['name'];
      $tempname=$img['tmp_name'];
      $folder="../public/img/".$filename;
      move_uploaded_file($tempname,$folder);
      $result=$obj->edit($name, $email, $location, $job_t, $job_desc, $job_tag, $id, $filename);
    }  
    header("location: home.php?status=apply&key=$result");
    die;
      
  }


?>