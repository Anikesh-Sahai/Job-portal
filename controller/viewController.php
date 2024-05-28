<?php
namespace AnikeshSahai\Job\controller;
require ('../model/dataModel.php');

use AnikeshSahai\Job\model\dataModel;

class viewController{
    public function showData(){
        $obj=new dataModel;
        $arr=$obj->showAll();
        return $arr;
    }

    public function showJob($id){
        $obj=new dataModel();
        $arr=$obj->jobEmployee($id);
        return $arr;
    }

      

    public function insert($name,$email,$location,$title,$desc,$tag,$img,$owner,$publish){
        $obj=new dataModel();
        $response=$obj->insertData($name,$email,$location,$title,$desc,$tag,$img,$owner,$publish);
        // if($response){
        //     header("location: ../view/employerjobs.php");
        // }
        return $response;
    }

    public function apply($id,$name,$email){
        $obj=new dataModel();
        $response=$obj->applyJob($id,$name,$email);
        return $response;
    }

    public function employerjobs($user){
        $obj=new dataModel();
        $arr=$obj->employerJobTable($user);
        return $arr;
    }
    
    

    public function delete($id){
        $obj=new dataModel();
        $response=$obj->deleteEntry($id);
        return $response;
    }

    public function searchBar($text){
        $obj=new dataModel();
        $response=$obj->findSearch($text);
        return $response;
    }

    public function edit($name, $email, $location, $job_t, $job_desc, $job_tag, $id, $filename){
      $obj=new dataModel();
      $response=$obj->edit($name, $email, $location, $job_t, $job_desc, $job_tag, $id, $filename);
      return $response;
    }

    public function publish($id){
      $obj=new dataModel();
      $response=$obj->publishPost($id);
      return $response;
    } 

}



if(isset($_POST['action'])){
    $text= $_POST['key'];
    $obj=new viewController();
    $result=$obj->searchBar($text);

    $count=count($result);
    if($count==0){
      echo '<h5 class="card-title"> No Result Found </h5>';
    }
    else{
      foreach($result as $post){
        echo '<div class="card my-3 p-1">
                      <div class="row g-0">
                        <div class="col-md-2">';

                          if ($post['img'] == NULL){
                            echo '<img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">';
                          }
                          else{
                            echo '<img src="../public/img/'.$post['img'].'" class="img-fluid rounded my-4" alt="...">';
                          }
                        echo '
                        </div>
                        <div class="col-md-10">
                          <div class="card-body">
                            <h5 class="card-title" id="'.$post['job_id'].'"><a href="jobpage.php?key='.$post['job_id'].'" >'.$post['job_title'].'</a></h5>
                            <p class="card-text"><b>Posted By:</b> '.$post['posted_by'].'</p>
                            <p class="card-text"><b>Posted on:</b> '.$post['date'].' &emsp;&emsp;&emsp; <b>Location:</b> '.$post['location'].' &emsp;&emsp;&emsp; <b>Relative tags:</b> '.$post['tag'].' </p>
                            <p class="card-text"><small class="text-muted"><b>email:</b> '.$post['email'].'</small></p>
                          </div>
                        </div>
                      </div>
                  </div>';
      }
    }
}

if(isset($_POST['work'])){
  $id= $_POST['key'];
  $obj=new viewController();
  $result=$obj->publish($id);
  // header("location: ../view/home.php?status=apply&key=$result");
}
?>