<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
    session_start();
    use AnikeshSahai\Job\controller\viewController;

    include '../controller/viewController.php';


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $location=$_POST['location'];
        $job_t=$_POST['job_t'];
        $job_desc=$_POST['job_d'];
        $job_tag=$_POST['tag'];
        $owner=$_SESSION['email'];
        $img=$_POST['img'];  
        $publish=$_POST['publish'];  
        
        $obj = new viewController;
        $result=$obj->insert($name,$email,$location,$job_t, $job_desc, $job_tag,$img,$owner,$publish);
        header("location: postjob.php?status=apply&key=$result");
    }
    else{
        include '../smarty-4.3.0/libs/Smarty.class.php';
        $smarty = new Smarty;
        $smarty->assign('title', "Postjob");
        if(isset($_GET['status']) && $_GET['status']=='apply'){
            $smarty->assign('valid', "true");
            if($_GET['key']=="successfully posted the job"){
                $smarty->assign('type', "success");
            }
            else{
                $smarty->assign('type', "primary");
            }
            $smarty->assign('result', $_GET['key']);
        }
        else{
            $smarty->assign('valid', "false");
        }

        $smarty->assign('post', "Post Job");
        $smarty->display('../template/postjob.tpl');
    }

?>