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
    require "page_header.php"?>
    <script src="../js-css\chart-js\node_modules\chart.js\dist\chart.umd.js"></script>


</head>

<body style="background-color: #EBECF1;">

    <?php
    // print_r($_SESSION);

    ?>
    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">

        <div class="row text-center p-2" style= "text-decoration:none;color:black">
        <?php
                $pending_schedule = full_query("SELECT COUNT(id) as count FROM `appointments` WHERE  eng_app = '0'");

                if (mysqli_num_rows($pending_schedule) > 0) {
                    echo mysqli_num_rows($pending_schedule);

                    if ($row = mysqli_fetch_assoc($pending_schedule)) {
                        if($row['count'] != '0'){
                            echo '
                            <a href="admin_engineering_approvals.php#pending_schedule_approval_cont" style="text-decoration:none;">
                            <p>Pending appointment requests : '.$row['count'].'</p>
                            <!-- <p class="card-text text-center fw-bold" style="font-size: 40px;"></p> -->
                            </a>
                            ';
                        }
             
                    
             
                    }
             
                }
                ?>
          
            </div>

            <div class="m-auto my-3">
                <?php require "../components/calendar_admin.php"; ?>

            </div>


    


        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>




    <script>
        var schedule_selected;


        document.addEventListener("DOMContentLoaded", () => {

            //highlight active page in offcanvas menu
            $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_appointments.php"] > li').addClass("my-active")


            //modal confirm schedule


            let approve_btn = document.getElementsByName("sched_approve_btn");

            approve_btn.forEach(box => {
                box.addEventListener('click', function handleClick(event) {

                    // get button parent
                    schedule_selected = $(this).parent().parent();
                    schedule_selected = $(schedule_selected)[0].id;
                    console.log(schedule_selected)

                    // open modal
                    $("#modal_confirm_schedule").modal('toggle');


                    // display modal content
                    $("#sched_confirm").html("Confirm")
                    var sched_app_name = $("#" + schedule_selected + " td.applicant-name").html();
                    var sched_date = $("#" + schedule_selected + " td.requested-date").html();
                    var sched_time = $("#" + schedule_selected + " td.requested-time").html();

                    // append content
                    var approve_modal_content = "<p class = 'message'>You're about to <b>approve</b> " + sched_app_name + "'s request " +
                        "for audience on " + sched_date + " at " + sched_time + ". Confirm?</p>"
                    $("#modal_confirm_schedule .modal-body").append(approve_modal_content)


                    // box.data("")

                });
            });


            let deny_btn = document.getElementsByName("sched_deny_btn");

            deny_btn.forEach(box => {
                box.addEventListener('click', function handleClick(event) {

                    // get button parent
                    schedule_selected = $(this).parent().parent();
                    schedule_selected = $(schedule_selected)[0].id;
                    console.log(schedule_selected)

                    // open modal
                    $("#modal_confirm_schedule").modal('toggle');


                    // display modal content
                    $("#sched_confirm").html("Deny")
                    var sched_app_name = $("#" + schedule_selected + " td.applicant-name").html();
                    var sched_date = $("#" + schedule_selected + " td.requested-date").html();
                    var sched_time = $("#" + schedule_selected + " td.requested-time").html();

                    // append content
                    var approve_modal_content = "<p class = 'message'>You're about to <b>deny</b> " + sched_app_name + "'s request " +
                        "for audience on " + sched_date + " at " + sched_time + ". Confirm?</p>"
                    $("#modal_confirm_schedule .modal-body").append(approve_modal_content)


                    // box.data("")


                });
            });


            $('#modal_confirm_schedule').modal({
                backdrop: 'static',
                keyboard: false
            });

            let modal_btn_dismiss = document.querySelectorAll('button[data-bs-dismiss="modal"]');
            modal_btn_dismiss.forEach(box => {
                box.addEventListener('click', function handleClick(event) {

                    $("#modal_confirm_schedule .modal-body .message").remove();


                });
            });


            $('#btn_confirm_schedule').on('click', function() {
                //get id
                schedule_selected;
                //get verdict
                let verdict = $("#sched_confirm").html()
                if (verdict.toLowerCase() == "confirm") {
                    verdict = 1;
                } else if (verdict.toLowerCase() == "deny") {
                    verdict = -1;

                }
                try {
                    //update value

                    update_ajax('appointments', "eng_app", verdict, " id = '" + schedule_selected + "'");
                    // dismiss modal

                    $("#btn_confirm_cancel").click();


                } catch (error) {
                    console.log(error);
                }

            });




        })
    </script>
    <script src="../js-css/db_operations_ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>


</html>