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

<body style="background-color: #EBECF1;">

    <?php
    // print_r($_SESSION);

    ?>
    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">

            <div class="p-5">


                <div class="text-center my-5" id="pending_application_table">

                    <?php


                    $pending_project = full_query("SELECT * FROM `vw_project_last_action` WHERE action = 'Delivered to Engineering';");

                    if (mysqli_num_rows($pending_project) > 0) {


                        echo '  <table class="table table-responsive w-100 border-dark">
                                <tr>
                                    <th>Applicant</th>
                                    <th>Project</th>
                                    <!-- <th>Type</th> -->
                                    <th>Location</th>
                                    <th>Date Submitted</th>
                                    <th>Action</th>
                                </tr>';

                        while ($row = mysqli_fetch_assoc($pending_project)) {


                    ?>

                            <tr>


                                <td><?php echo $row['applicant'] ?></td>
                                <td><?php echo $row['project_title'] ?></td>
                                <!-- <td><?php //echo $row['type'] 
                                            ?></td> -->
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['latest_timestamp'] ?></td>
                                <td>
                                    <a href="admin_review.php?project_id=<?php echo $row['project_id'];?>&">
                                        Review
                                    </a>

                                </td>
                            </tr>


                    <?php

                        }
                        echo '</table>';
                    } else {
                        echo "<p class='fw-bold'>No pending applications to review.</p>";
                    };
                    ?>



                    </table>
                </div>


                <!-- //** PENDING SCHEDULE APPROVAL */ -->

                <div id="pending_schedule_approval_cont">

                    <div class="text-center">

                        <?php

                        $pending_project = full_query("SELECT * FROM `vw_appointments` WHERE vw_appointments.eng_app = '0';");



                        if (mysqli_num_rows($pending_project) > 0) {


                            echo '<table class="table table-responsive w-100 border border-dark mt-4" id = "appointment_request_table">
                                <tr> 
                                    <th colspan="5" class="text-center" style="background-color: #245a94; color: white;">PENDING SCHEDULE REQUEST</th>
                                </tr>
                        
                                <tr class="text-center">
                                    
                                    <th>Applicant</th>
                                    <th>Project</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>';

                            while ($row = mysqli_fetch_assoc($pending_project)) {


                                echo '<tr id="' . $row['appointment_id'] . '">

                                <td class="applicant-name border-dark">' . $row['applicant_name'] . '</td>
                                <td class="project-title border-dark">' . $row['project_title'] . '</td>
                                <td class="requested-date border-dark">' . $row['schedule_date'] . '</td>
                                <td class="requested-time border-dark">' . date("h:i A", strtotime($row['schedule_time'])) . '</td>
                                <td class="border-dark">
                                    <button type="button" name="sched_approve_btn" class="btn btn-primary">Approve</button>
                                    <button type="button" name="sched_deny_btn" class="btn btn-danger">Deny</button>

                                </td>
                            </tr>';
                            }

                            echo '</table>';
                        } else {
                            echo "<p class='fw-bold'>No pending appointment requests.</p>";
                        };

                        ?>
                        </table>
                    </div>
                </div>
            </div>





        </div>
        <?php require "../components/web_footer.php" ?>
        <div class="modal fade" id="modal_confirm_schedule" tabindex="-1" aria-labelledby="modal_confirm_schedule_Label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal_confirm_schedule_Label"><span id="sched_confirm">Confirm</span> schedule request</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- <h2 id="">Approve/Deny</h2> -->


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_confirm_cancel">Cancel</button>
                        <button type="button" class="btn btn-primary" id="btn_confirm_schedule">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "../components/admin_menu.php" ?>




    <script>
        var schedule_selected;



        document.addEventListener("DOMContentLoaded", () => {

            //highlight active page in offcanvas menu
            $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_approvals.php"] > li').addClass("my-active")




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



        });
    </script>
    <script src="../js-css/db_operations_ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>


</html>