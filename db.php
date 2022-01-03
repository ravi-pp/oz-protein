<?php 
include_once('config.php');

 $db_conn = array(
     'server' => 'localhost',
     'dbusername' => 'root',
     'password' => 'root',
     'dbname' => 'oz_quiz'
 );
 $connect = mysqli_connect($db_conn['server'],$db_conn['dbusername'],$db_conn['password'],$db_conn['dbname']);
 if($connect ==false){
     echo 'Db not connected';
 }else{
     echo mysqli_connect_error();
 } 
?>