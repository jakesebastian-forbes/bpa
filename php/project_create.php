<?php

session_start();
print_r($_SESSION);
$active_id = $_SESSION['user_id'];

require 'db_func.php';



$occupancy_classification = $_POST['occupancy_classification'];
$right_over_land = $_POST['right_over_land'];
$registered_owner = $_POST['registered_owner'];
$owned_by_corporation = $_POST['corporate_owned'];

// echo  $occupancy_classification ."<br>";
// echo  $right_over_land ."<br>";
// echo  $registered_owner ."<br>";
// echo  $owned_by_corporation ."<br>";



//note : ids are manually generated to maintain consistency of id's creation
//insert project
$project_id = gen_uuid(); 

//check if user has project named default or untitled
$query_untitled = "SELECT MAX(CAST(SUBSTRING(title FROM 10) AS UNSIGNED)) as 'max' FROM project WHERE title LIKE '%Untitled%' and applicant_id = '$active_id'";

$untitled = full_query($query_untitled); //result

if($row = mysqli_fetch_assoc($untitled)) {
    print_r($row);

    $untitled = $row["max"] ;
    //insert project
    if($untitled == "" || $untitled == null){

        insert("project","id,title,applicant_id","'$project_id','Untitled','$active_id'");
    }else{
        $untitled = (int)$untitled + 1;
        insert("project","id,title,applicant_id","'$project_id','Untitled {$untitled}','$active_id'");

    }
}

//insert land_property
    $land_property_id = gen_uuid();
    insert("land_property","id","'$land_property_id'");

//insert plan_details
    $plan_details_id = gen_uuid();
    $documents_id = gen_uuid();

    insert("plans_details","`id`,`documents`","'$plan_details_id','$documents_id'");
    //insert form
    $forms_id = gen_uuid();
    insert("forms","id","'$forms_id'");
        //insert sanitary
        $f_sanitary_id = gen_uuid();
        insert("f_sanitary","id","'$f_sanitary_id'");

        //insert electrical
        $f_electrical_id = gen_uuid();
        insert("f_electrical","id","'$f_electrical_id'");

        //insert locational
        $f_locational_id = gen_uuid();
        insert("f_locational","id","'$f_locational_id'");

        //insert unified
        $f_unified_id = gen_uuid();
        insert("f_unified","id","'$f_unified_id'");

        //update form
        full_query("UPDATE `forms` SET `sanitary`='{$f_sanitary_id}',`electrical`='{$f_electrical_id}',
                    `locational`='{$f_locational_id}',`unified`='{$f_unified_id}' WHERE id = '{$forms_id}'");

    //update plan_details

    full_query("UPDATE `plans_details` SET `form`='{$forms_id}' WHERE id = '{$plan_details_id}'");

//insert address
$address_id = gen_uuid();
insert("address","`id`,`type`","'{$address_id}','project'");

//update project
full_query("UPDATE `project` SET `land_property`='{$land_property_id}',`plans_details`='{$plan_details_id}',
`address`='{$address_id}' WHERE id = '{$project_id}'");




header("Location: ../pages/applicant_openProject.php?project_id=$project_id");

