<?php
$project_id =  $_POST['project_id'];
require 'db_func.php';

try{

    //project log
    //project submitted
    insert("project_logs","`id`,`action`,`project_id`","UUID(),'Project Submitted','$project_id'");

    sleep(1);
    //project delivered to mpdc
    insert("project_logs","`id`,`action`,`project_id`","UUID(),'Delivered to MPDC','$project_id'");


    update("project","status = 'pending'","id = '$project_id'");
  

}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
    sleep(2);
    // header('Location: ' . $_SERVER['HTTP_REFERER']);
}
echo "Project has been successfully submitted for review!";
sleep(5);
// header("Location: ../pages/applicant_home.php");
    header('Location: ' . $_SERVER['HTTP_REFERER'].'&project_submit=success&');


?>