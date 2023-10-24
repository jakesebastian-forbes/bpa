<?php

session_start();
print_r($_SESSION);
$active_id = $_SESSION['user_id'];

require 'db_func.php';



$ext_land_use = $_POST['ext_land_use'];
$right_over_land = $_POST['right_over_land'];
$owned_by_corporation = ($_POST['corporate_owned'] == 'yes' ? 1 : 0);
$project_title = $_POST['project_title'];



print_r($_POST);

echo "<br>";


try {
   //create project
$project_id = gen_uuid();
$documents_id = gen_uuid();
$address_id = gen_uuid();

insert("address","`id`,`type`","'$address_id','Project'");

$supervisor_id = gen_uuid();
insert("supervisor","`id`","'$supervisor_id'");

$unified_id = gen_uuid();
insert("f_unified","`id`","'$unified_id'");

$locational_id = gen_uuid();
insert("f_locational","`id`,`right_over_land`,`existing_land_use`",
"'$locational_id','$right_over_land','$ext_land_use'");

$sanitary_id = gen_uuid();
insert("f_sanitary","`id`","'$sanitary_id'");

$electrical_id = gen_uuid();
insert("f_electrical","`id`","'$electrical_id'");


$forms_id = gen_uuid();
insert("forms","`id`,`unified`,`locational`,`sanitary`,`electrical`",
"'$forms_id','$unified_id','$locational_id','$sanitary_id','$electrical_id'");


insert("project","`id`,`project_owner`,`title`,`documents`,`address`,`corporate_owned`,`status`,`date_created`,`forms`,`supervisor`",
"'$project_id','$active_id','$project_title','$documents_id','$address_id','$owned_by_corporation','Open','CURRENT_DATE()','$forms_id','$supervisor_id'");

} catch (Exception $e) {
    echo $e;
}



// header("Location: ../pages/applicant_openProject.php?project_id=$project_id");

