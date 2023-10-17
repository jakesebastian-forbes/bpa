<?php

session_start();
// print_r($_SESSION);
require 'db_func.php';


//need user_id and project_id
$active_id = $_SESSION['user_id'];
$project_id = $_POST['project_id'];

echo " active id : " . $active_id;
echo " project id : " . $project_id;

//! conundrum!
//! if a completed project and project content is deleted, 
//! would cause inconsistency 

//*? might not delete anything else other than the project
//*? or even just hide from the owner

//** solution completed/accepted project cannot be deleted */

$details = select("vw_ids","project_id = '$project_id' AND applicant_id ='$active_id'");

while($row = mysqli_fetch_assoc($details)) {
    //delete project
    //

}

//delete project
delete_('project',"id = '$project_id' AND owner_id = '$active_id'");


//delete land property
    delete_("land_property","id = '$land_property_id'");

//delete address
    delete_("address","id = '$address_id'");


// select all documents related to plans details
$query = "SELECT * FROM `vw_project_documents` WHERE documents = '$documents_id'";

$open_project = full_query($query); //result

while($row = mysqli_fetch_assoc($open_project)) {
    $inv_document_id = $row['id'];
    delete_("document","id = '$inv_document_id'");
}


//delete plans details
delete_("plans_details","id = '$plan_details_id'");


//delete form
delete_("forms","id = '$forms_id'");

//delete forms
    //delete architectural
    // delete_("f_architectural","id = '$architectural_id'");
    //delete structural
    // delete_("f_structural","id = '$structural_id'");
     //delete sanitary
     delete_("f_sanitary","id = '$sanitary_id'");
    //delete electrical
    delete_("f_electrical","id = '$electrical_id'");
    //delete mechanical
    // delete_("f_mechanical","id = '$mechanical_id'");
    //delete locational
    delete_("f_locational","id = '$locational_id'");
    //delete unified
    delete_("f_unified","id = '$unified_id'");

    header("Location: ../pages/applicant_home.php");

