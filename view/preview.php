<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $location=$_POST['location'];
        $job_t=$_POST['job_t'];
        $job_desc=$_POST['job_d'];
        $job_tag=$_POST['tag'];
        $owner=$_SESSION['email'];
        $img=$_FILES['img']; 

        $filename=$img['name'];
        $tempname=$img['tmp_name'];
        $folder="../public/img/".$filename;
        move_uploaded_file($tempname,$folder);

        include '../smarty-4.3.0/libs/Smarty.class.php';
        
        $smarty = new Smarty;
    
        $smarty->assign('img', $filename );
        $smarty->assign('job_d', $job_desc );
        $smarty->assign('job_title', $job_t );
        $smarty->assign('posted_by', $name );
        $smarty->assign('location', $location );
        $smarty->assign('tag', $job_tag );
        $smarty->assign('email', $email );
            
        $smarty->display('../template/preview.tpl');
}


?>