<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require '../controller/viewController.php';
use AnikeshSahai\Job\controller\viewController;
$obj=new viewController;
$arr=$obj->showData();
session_start();
$arr1=[];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=="Employer"){
    $arr1=$obj->employerjobs($_SESSION['email']);
}


include '../smarty-4.3.0/libs/Smarty.class.php';

$smarty = new Smarty;
if(isset($_SESSION['loggedin'])){
    $smarty->assign('valid', $_SESSION['loggedin']);
    $smarty->assign('emp', $_SESSION['option']);
    $smarty->assign('pjob', $arr1[0]);
    $smarty->assign('ujob', $arr1[1]);
}else{
    $smarty->assign('valid', "false");
    $smarty->assign('emp', "Employee");
}
if(isset($_GET['status']) && $_GET['status']=='apply'){
    $smarty->assign('alert', "true");
    $smarty->assign('type', "success");
    $smarty->assign('result', $_GET['key']);
}
else{
    $smarty->assign('alert', "false");
}

$smarty->assign('jobPosted', $arr);

$smarty->display('../template/home.tpl');

?>