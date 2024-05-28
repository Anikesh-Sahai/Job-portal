<?php

use AnikeshSahai\Job\controller\indexController;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once realpath("vendor/autoload.php");

require ('controller/indexController.php');

$obj=new indexController;
$obj->showHome();


?>