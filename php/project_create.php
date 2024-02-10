<?php

session_start();
print_r($_SESSION);
$active_id = $_SESSION['user_id'];

require 'db_func.php';

$ext_land_use = $_POST['ext_land_use'];
$right_over_land = $_POST['right_over_land'];
$owned_by_corporation = ($_POST['corporate_owned'] == 'yes' ? 1 : 0);
$project_title = $_POST['project_title'];
$project_type = $_POST['application_type'];


// print_r($_POST);

// echo "<br>";

try {
   //create project
$project_id = gen_uuid();
$documents_id = gen_uuid();
$address_id = gen_uuid();

insert("address","`id`,`type`","'$address_id','Project'");

$supervisor_id = gen_uuid();
insert("supervisor","`id`","'$supervisor_id'");

$unified_id = gen_uuid();
insert("f_unified","`id`,`application_type`","'$unified_id','$project_type'");

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
                "'$project_id','$active_id','$project_title','$documents_id','$address_id','$owned_by_corporation','Open',CURRENT_TIMESTAMP(),'$forms_id','$supervisor_id'");

// echo "<script>";
// echo "document.body.innerHTML = ''";
// echo "</script>";


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .loading-container {
            text-align: center;
        }

        .loading-text {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .loading-spinner {
            border: 8px solid #ccc;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin-top: 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

<div class="loading-container">
    <div class="loading-text">Creating Project...</div>
    <div class="loading-spinner"></div>
</div>

</body>

<script>
    
    
</script>

</html>



<?php

echo "Project $project_title Created Successfully";

insert("project_logs","`id`,`action`,`project_id`","UUID(),'Project Created','$project_id'");

sleep(4);

header("Location: ../pages/applicant_openProject.php?project_id=$project_id&message=success_project_creation&");


} catch (Exception $e) {
    echo $e;
    echo "An error occured : $e. Project creation failed.";
header("Location: ../pages/applicant_home.php?message=error_project_creation&");


}



?>



