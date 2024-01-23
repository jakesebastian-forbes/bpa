<?php

require "db_func.php";
require "mail_send.php";
require "semaphore_api.php";

print_r($_POST);

$last_page = $_SERVER['HTTP_REFERER'];

// $project_id = $_POST['project_id'];

$action = "";
//**check verdict
if ($_POST['project_verdict_hidden'] == "approve") {
    $action = $action . "Approved by";
} else if ($_POST['project_verdict_hidden'] == "denied") {
    $action = $action . "Denied by";
} else if ($_POST['project_verdict_hidden'] == "return") {
    $action = $action . "Returned by";
}

//**check for department
if ($_POST['department'] == "MPDC") {
    $action = $action . " MPDC";
} else if ($_POST['department'] == "Fire") {
    $action = $action . " Fire";
} else if ($_POST['department'] == "Engineering") {
    $action = $action . " Engineering";
}

echo $action;

$project_title = $_POST['project_title'];
$full_name = $_POST['applicant_name'];

if($_POST['log_comment'] == '' ||$_POST['log_comment'] == NULL){
    $comment = "N/A";
}else{
    $comment = $_POST['log_comment'] ;
}




if($_POST['log_comment'] != '' || $_POST['log_comment'] != NULL){
$remarks = 'with remarks <i>' . $_POST['log_comment'].'</i>. ';

}


//**insert logs



//** if action is return
//**  open proj


//! if action = denied
//!  close proj

try {
    $conn = db_conn();


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO `project_logs`(`id`, `project_id`, `action`, `comment`, `timestamp`) VALUES (UUID(),?,?,?,CURRENT_TIMESTAMP())");
    $stmt->bind_param("sss", $_POST['project_id'], $action, $comment);

    // set parameters and execute //** insert dept verdict */
    $stmt->execute();
    echo "insert dept verdict";


    //**if action = approved
    //** send to next dept
    //** insert to approval */

    $dept = array("MPDC", "Fire", "Engineering");

    if ($_POST['project_verdict_hidden'] == "approve") {

        if ($_POST['department'] != "Engineering") {
            if ($_POST['project_verdict_hidden'] == "approve") {
                $action = "Delivered to " . $dept[array_search($_POST['department'], $dept) + 1];
                echo $action;
                //sleep(1);
                // set parameters and execute
                $stmt->execute();

                $message = "Hello " . ucwords($full_name) . ", we are pleased to inform you that your project, " . $project_title . " has been 
                <b>approved</b> by " . $_POST['department'] . " department ".$remarks."
                Your project has now been " . strtolower($action) . ".
                <br><br> If you have any question or concern, please do 
                not hesistate to contact our department administrators. <br><br> This is an automated message. Do NOT reply. <br><br>
                - <a href = 'https://buildnas.online/'>BuildNAS</a>";

                send_email($_POST['applicant_email'], ucwords($full_name), 'Project Status Update', $message);
            }
        } else {
            if ($_POST['project_verdict_hidden'] == "approve") {
                $action = "Open for schedule request";
                echo $action;

                //sleep(1);
                // set parameters and execute
                $stmt->execute();

                //update project status


                $SQL = $conn->prepare("UPDATE project SET status=? WHERE id=?");
                $status = 'approved';
                $SQL->bind_param("ss", $status, $_POST['project_id']);
                $SQL->execute();


                $message = "Hello " . ucwords($full_name) . ", we are pleased to inform you that your project, " . $project_title . " has been 
                <b>approved</b> by " . $_POST['department'] . " department ".$remarks."
                Your project is now ready for signing, please request an appoinment with the engineering department.
                <br><br> If you have any question or concern, please do 
                not hesistate to contact our department administrators. <br><br> This is an automated message. Do NOT reply. <br><br>
                - <a href = 'https://buildnas.online/'>BuildNAS</a>";

                send_email($_POST['applicant_email'], ucwords($full_name), 'Project Status Update', $message);


                $text_message = "Hello " . ucwords($full_name) . ", your building permit application for project : " . $project_title . " has been fully APPROVED.
                For more information, please login to your account.
                - BuildNAS";

                send_text($_POST['applicant_contact_no'],$text_message);




            }
        }
    } else if ($_POST['project_verdict_hidden'] == "return") {

        //sleep(1);

        update("project", "status = 'returned'", "id = '" . $_POST['project_id'] . "'");




        $message = "Hello " . ucwords($full_name) . ", we are regret to inform you that you project, $project_title has been 
        <b>returned</b> by " . $_POST['department'] . " department ".$remarks."
        For more info, please login to our site.
        <br><br> If you have any question or concern, please do 
        not hesistate to contact our department administrators. <br><br> This is an automated message. Do NOT reply. <br><br>
        - <a href = 'https://buildnas.online/'>BuildNAS</a>";

        send_email($_POST['applicant_email'], ucwords($full_name), 'Project Status Update', $message);

        // $action = "Delivered to " . $dept[array_search($_POST['department'], $dept) - 1];


        // insert("project_logs", "`id`, `project_id`, `action`, `comment`, `timestamp`",
        // "UUID(), '{$_POST['project_id']}', '{$action}', '{$_POST['log_comment']}', CURRENT_TIMESTAMP()");

        echo "return dept verdict";
    }



    echo "New records created successfully";
    $stmt->close();
    $conn->close();
    // Redirect to the previous page

    echo '<script>';


    
echo 'window.location.href = "../pages/admin_'.strtolower($_POST['department']).'_home.php"';
echo '</script>';
    // if (isset($last_page)) {
    //     ob_start(); // Start output buffering

    //     // Your PHP code here, including the header() function
    //     header("Location: " . $last_page . "&" . $_POST['project_verdict_hidden'] . "=success");

    //     ob_end_flush(); // Flush the output buffer and send the output to the browser
    //     exit();
    // } else {
    //     // If HTTP_REFERER is not set, redirect to a default page or perform another action
    //     header("Location: default_page.php");
    //     exit();
    // }
} catch (\Throwable $th) {
    echo $th;
}
