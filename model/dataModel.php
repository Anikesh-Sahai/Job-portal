<?php
namespace AnikeshSahai\Job\model;
require_once realpath("../vendor/autoload.php");

require '../config/dbConnection.php';

use PDO;

use AnikeshSahai\Job\config\database;

class dataModel{
    private $dbn;
    private $conn;
    private $jobid;
    private $title;
    private $desc;
    private $tag;
    private $user;
    private $img;
    function __construct(){    
        $this->dbn=new database;
        $this->conn=$this->dbn->conn;
        
    }

    public function showAll(){
        $sql="select * from jobs";
        $result=$this->conn->prepare($sql);
        $result->execute();
        $i=0;
        $arr=[];
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            $arr[$i]=$row;
            $i++;
        }
        return $arr;
    }

    public function jobEmployee($id){
        $this->jobid=$id;
        $sql="select * from jobs where job_id=:jobid";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':jobid',$this->jobid, PDO::PARAM_STR);
        $result->execute();
        $arr = [];
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            $arr=$row;
        }
        return $arr;
    }

    

    public function insertData($name,$email,$location,$title,$desc,$tag,$img,$owner,$publish){
        $sql="insert into jobs (job_title, job_desc, tag, location, posted_by, img, email, owner, publish) values (:title,:desc,:tag,:location, :name, :img, :email, :owner, :publish)";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':title',$title, PDO::PARAM_STR);
        $result->bindValue(':desc',$desc, PDO::PARAM_STR);
        $result->bindValue(':tag',$tag, PDO::PARAM_STR);
        $result->bindValue(':location',$location, PDO::PARAM_STR);
        $result->bindValue(':name',$name, PDO::PARAM_STR);
        $result->bindValue(':img',$img, PDO::PARAM_STR);
        $result->bindValue(':email',$email, PDO::PARAM_STR);
        $result->bindValue(':owner',$owner, PDO::PARAM_STR);
        $result->bindValue(':publish',$publish, PDO::PARAM_STR);
        
        $result->execute();
        if($publish=="true"){
            return "successfully posted the job";        
        }
        else{
            return "Your post is in review section";
        }
    }


    public function employerJobTable($user){
        $sql="select * from jobs where owner=:user and publish=:pub";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':user',$user, PDO::PARAM_STR);
        $result->bindValue(':pub',"true", PDO::PARAM_STR);
        $result->execute();
        $i=0;
        $arr1=[];
        while($row1=$result->fetch(PDO::FETCH_ASSOC)){
            $arr1[$i]=$row1;
            $i++;
        }
        $sql="select * from jobs where owner=:user and publish=:pub";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':user',$user, PDO::PARAM_STR);
        $result->bindValue(':pub',"false", PDO::PARAM_STR);
        $result->execute();
        $i=0;
        $arr2=[];
        while($row2=$result->fetch(PDO::FETCH_ASSOC)){
            $arr2[$i]=$row2;
            $i++;
        }
        $bigA=array($arr1,$arr2);
        return $bigA;
    }

    public function applyJob($id,$name,$email){


        $sql="select * from apply where email=:email and job_id=:id";
            $result=$this->conn->prepare($sql);
            $result->bindValue(':email',$email, PDO::PARAM_STR);
            $result->bindValue(':id',$id, PDO::PARAM_STR);
            $result->execute();
            $userCount =$result->rowCount();
            
            if($userCount!=0){
                // already exist
                $ans="You have already applied for the job";
                return $ans;
            }
            else{

                $sql="insert into apply (job_id, name, email) values (:id,:name,:email)";
                $result=$this->conn->prepare($sql);
                $result->bindValue(':id',$id, PDO::PARAM_STR);
                $result->bindValue(':name',$name, PDO::PARAM_STR);
                $result->bindValue(':email',$email, PDO::PARAM_STR);
                $result->execute();
                return "you applied for job";
            }
  
    }

    public function deleteEntry($id){
        $sql="delete from jobs where jobs.job_id = :id";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':id',$id, PDO::PARAM_STR);
        $result->execute();
        return "you deleted the job";
    }

    public function findSearch($text){
        $sql="select * from jobs where tag like ? or job_title like ? or posted_by like ?";
        $result=$this->conn->prepare($sql);
        $result->execute(['%'.$text.'%','%'.$text.'%','%'.$text.'%']);
        $ans = $result->fetchAll();
        return $ans;
    }

    public function edit($name, $email, $location, $job_t, $job_desc, $job_tag, $id, $filename){
        $sql="update jobs set posted_by = :name, job_title = :title, job_desc = :desc, location = :location, tag = :tag, email = :email where jobs.job_id = :id";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':name',$name, PDO::PARAM_STR);
        $result->bindValue(':title',$job_t, PDO::PARAM_STR);
        $result->bindValue(':desc',$job_desc, PDO::PARAM_STR);
        $result->bindValue(':tag',$job_tag, PDO::PARAM_STR);
        $result->bindValue(':location',$location, PDO::PARAM_STR);
        $result->bindValue(':id',$id, PDO::PARAM_STR);
        $result->bindValue(':email',$email, PDO::PARAM_STR);
        $result->execute();
        if($filename!=""){
            $sql="update jobs set img = :img where jobs.job_id = :id";
            $result=$this->conn->prepare($sql);
            $result->bindValue(':img',$filename, PDO::PARAM_STR);
            $result->bindValue(':id',$id, PDO::PARAM_STR);
            $result->execute();
        }
        return "you edited the job";

    }
    public function publishPost($id){
        $sql="update jobs set publish = :publish where jobs.job_id = :id";
        $result=$this->conn->prepare($sql);
        $result->bindValue(':publish',"true", PDO::PARAM_STR);
        $result->bindValue(':id',$id, PDO::PARAM_STR);
        $result->execute();
        return "you succesfully posted the job";
    }
}

?>