<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();


require '../controller/viewController.php';

use AnikeshSahai\job\controller\viewController;

if(isset($_GET['key'])){
    $obj=new viewController();
    $arr=$obj->showJob($_GET['key']);
    include '../smarty-4.3.0/libs/Smarty.class.php';
        
    $smarty = new Smarty;
  
    $smarty->assign('title', "Job View Page" );
    $smarty->assign('img', $arr['img'] );
    $smarty->assign('job_id', $arr['job_id'] );
    $smarty->assign('job_title', $arr['job_title'] );
    $smarty->assign('date', $arr['date'] );
    $smarty->assign('tag', $arr['tag'] );
    $smarty->assign('location', $arr['location'] );
    $smarty->assign('job_desc', $arr['job_desc'] );
    $smarty->assign('email', $arr['email'] );
    if(isset($_SESSION['option'])){
        if($_SESSION['option']=="Employee"){
            $smarty->assign('user', $_SESSION['option'] );
            
        }
        elseif($_SESSION['option']=="Employer" && $_SESSION['email']==$arr['owner']){
            $smarty->assign('user', $_SESSION['option'] );
        }
        else{
            $smarty->assign('user', "false" );
        }
    }else{
        $smarty->assign('user', "false" );
    }
        
    $smarty->display('../template/jobpage.tpl');        
}



?>