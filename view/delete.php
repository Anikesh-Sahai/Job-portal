<?php

require '../controller/viewController.php';
use AnikeshSahai\Job\controller\viewController;

$id=$_GET['id'];
$obj=new viewController();
$result=$obj->delete($id);
if($result){
    header("location: home.php");

}

?>