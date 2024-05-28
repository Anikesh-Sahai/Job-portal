<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once realpath("../vendor/autoload.php");
include '../controller/userController.php';

use AnikeshSahai\Job\controller\userController;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $result="";
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = "Invalid email format";
    }
    else{
        if($_POST['pwd'] != $_POST['cpwd']){
            //password not match with confirm password
            $result="password not match";
        }
        else{
            $obj=new userController();
            $result=$obj->signup($_POST['email'],$_POST['name'],$_POST['pwd'],$_POST['option']);
        }
    }
    header("location: signup.php?status=apply&key=$result");
}
else{
    include '../smarty-4.3.0/libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->assign('title', "SignUp");
    if(isset($_GET['status']) && $_GET['status']=='apply'){
        $smarty->assign('valid', "true");
        if($_GET['key']=="Invalid email format"){
            $smarty->assign('type', "warning");
        }
        else{
            if($_GET['key']=="password not match"){
                $smarty->assign('type', "danger");
            }
            else{
                $smarty->assign('type', "success");
            }
        }
        $smarty->assign('result', $_GET['key']);
        
    }
    else{
        $smarty->assign('valid', "false");
    }
    $smarty->assign('post', "SignUp");
    $smarty->display('../template/signup.tpl');
}

?>