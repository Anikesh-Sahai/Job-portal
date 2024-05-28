<?php

namespace AnikeshSahai\Job\config;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PDO;
use PDOException;

class database{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    public $conn;


    public function __construct(){
        $this->host="localhost";
        $this->user="root";
        $this->pass="webkul";
        $this->dbname="jobportal";
        try{
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname.'';
            $this->conn = new PDO($dsn, $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    } 
}




?>