<?php
$project_id =  $_POST['project_id'];
require 'db_func.php';

try{
    update("project","status = 'pending'","id = '$project_id'");
  

}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
    sleep(2);
    // header('Location: ' . $_SERVER['HTTP_REFERER']);
}
echo "Project has been successfully submitted for review!";
sleep(5);
// header("Location: ../pages/applicant_home.php");
    header('Location: ' . $_SERVER['HTTP_REFERER']);


?>