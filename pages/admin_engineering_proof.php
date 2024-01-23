<?php

session_start();
require "../php/db_func.php";

$privilege = "admin";
$department = "engineering";
require '../php/page_restriction.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "Admin | Engineering Department";
    require "page_header.php"
    ?>
</head>

<style>
    .nav-link.active {
        background-color: #245a94 !important;
        margin-top: 10px;
        color: #EBECF1;
    }
    


    .nav-link:hover {
        color: pink;
    }

    .upload-signing {
        background-color: #245a94;
        float: right;
        margin-top: -90px;
        font-weight: bold;
   
    }


</style>

<body style="background-color: #EBECF1;">

    <?php
    // print_r($_SESSION);

    ?>
    <div id="flex_container">

        <?php require "../components/web_navbar.php";
        require "../components/admin_signing_proof_card.php"; ?>

        <div id="flex_main">

            <div class="p-5 pt-4">

                <h2 class="fw-bold">
                    UPLOAD SIGNING PROOFS
                </h2>

                <?php
// Assuming you have a function `full_query` for executing queries

// Get data from the database
$assumed_signed = full_query("SELECT * FROM `vw_project_approved_passed` WHERE admin_confirm = '0';");

if (mysqli_num_rows($assumed_signed) > 0) {
    echo "<div class='row'>";
    echo "<div class='col-3'>";
    echo "<div class='nav flex-column nav-pills me-3' id='v-pills-tab' role='tablist' aria-orientation='vertical' >";

    // Counter for tab IDs
    $counter = 1;

    while ($row = mysqli_fetch_assoc($assumed_signed)) {
        // Generate unique IDs for each tab and tab pane
        $tab_id = 'v-pills-profile-tab-' . $counter;
        $tab_pane_id = 'v-pills-profile-' . $counter;

        echo "<button class='nav-link' id='$tab_id' data-bs-toggle='pill' data-bs-target='#$tab_pane_id' type='button' role='tab' aria-controls='$tab_pane_id' aria-selected='false'>";
        echo $row['project_title']." - ".$row['applicant_name'];
        echo "</button>";

        $counter++;
    }

    echo "</div>";
    echo "</div>";
    echo "<div class='col '>";
    echo "<div class='tab-content' id='v-pills-tabContent'>";

    // Reset the data pointer back to the beginning
    mysqli_data_seek($assumed_signed, 0);

    // Counter for tab panes
    $counter = 1;

    while ($row = mysqli_fetch_assoc($assumed_signed)) {
        // Generate unique ID for each tab pane
        $tab_pane_id = 'v-pills-profile-' . $counter;


        echo "<div class='tab-pane fade' id='$tab_pane_id' role='tabpanel' aria-labelledby='v-pills-profile-tab'>";
        // Content for each tab pane
        // print_r($row);


        // echo "<h3>Content for " . $row['applicant_id'] . "</h3>";
        // echo "<p>Appointment ID: " . $row['appointment_id'] . "</p>";
        echo "<p class='fw-bold'>Project: " . $row['project_title'] . "</p>";
        echo "<p class='fw-bold' style='margin-top: -7px;'>Applicant: " . $row['applicant_name'] . "</p>";


        
        echo "<button type='button' class = 'upload-signing btn btn-primary' 
        data-signing-id = '".$row['project_signing_id']."'>Upload Signing Proof</button>";
        // echo "<p>project_signing_ID: " . $row['project_signing_id'] . "</p>";

        // Add more content as needed
        proof_document_card($row['project_signing_id'], $row['project_signing_id']."_Signing", "Signing");
        proof_document_card($row['project_signing_id'], $row['project_signing_id']."_Officials", "Officials");
        proof_document_card($row['project_signing_id'], $row['project_signing_id']."_Applicant", "Applicant");
        proof_document_card($row['project_signing_id'], $row['project_signing_id']."_Group_Photo", "Group Photo");



        echo "</div>";




        $counter++;
    }

    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<script>";
    echo "document.addEventListener('DOMContentLoaded', () => {";
    
    // Your additional JavaScript logic can go here
    
    echo "});";
    echo "</script>";
} else {
    echo "No pending uploads.";
}
        // $project_signing_id = '0e3c757d-ad35-11ee-9593-0a0027000017';

        // proof_document_card($project_signing_id, "Signing", "Signing");
        // proof_document_card($project_signing_id, "Officials", "Officials");
        // proof_document_card($project_signing_id, "Applicant", "Applicant");
        // proof_document_card($project_signing_id, "GroupPhoto", "Group Photo");
?>




            </div>







        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>




    <script>

document.addEventListener('DOMContentLoaded', () => {

    let btn_eng_confirm = document.querySelectorAll('.upload-signing');

    btn_eng_confirm.forEach(btn => {
        btn.addEventListener('click', function handleClick(event) {

        // console.log($(this).data('signing-id'));
        
        update_ajax("project_signing", "admin_confirm", "1", "`id` = '"+$(this).data('signing-id')+"'");


  })
})


try {
$(".nav-link").first()[0].click()

    
} catch (error) {
    
}


});
    </script>

</body>


</html>