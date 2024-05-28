<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once realpath("../vendor/autoload.php");
include '../controller/userController.php';

use AnikeshSahai\Job\controller\userController;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $pass=$_POST['pwd'];

    $obj=new userController();
    $result=$obj->signin($email,$pass);
    header("location: login.php?status=apply&key=$result");
}
else{
    include '../smarty-4.3.0/libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->assign('title', "SignIn");
    
    if(isset($_GET['status']) && $_GET['status']=='apply'){
        $smarty->assign('valid', "true");
        if($_GET['key']=="password not match"){
            $smarty->assign('type', 'danger');
        }
        else{
            if($_GET['key']=="email not exist plz signup"){
                $smarty->assign('type', "warning");
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

    $smarty->assign('post', "SignIn");
    $smarty->display('../template/login.tpl');
}

?>