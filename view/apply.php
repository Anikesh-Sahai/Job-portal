<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require '../controller/viewController.php';

    use AnikeshSahai\Job\controller\viewController;
    if(isset($_POST['work'])){
        session_start();
        $id=$_POST['key'];
        $email=$_SESSION['email'];
        $fname=$_SESSION['username'];
      
        $obj=new viewController();
        $result=$obj->apply($id,$fname,$email);
        
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>'.$result.'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

?>