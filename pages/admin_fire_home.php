<?php

session_start();
require "../php/db_func.php";
$privilege = "admin";
$department = "fire";
require '../php/page_restriction.php';
require '../php/general.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Fire Department</title>
    <link rel="stylesheet" href="../js-css/general.css">
    </link>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.css">
    </link>
    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js-css/jquery-3.6.4.js"></script>
</head>

<body style="background-color: #EBECF1;">


    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">

            <div class="p-5">

                <!-- <div class="row text-end pb-4" id="filters">
            <div class="col"></div>
            <div class="col">

                <select name="" id="">
                    <option value="">Today</option>
                    <option value="">Yesterday</option>
                    <option value="">All</option>
                    <option value="">Specify</option>


                </select>
            </div>


        </div> -->

                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-3 col-6">
                        <div class="card border border-dark text-center kpi-cont">
                        <div class="card-body">
                                <h5 class="card-title text-dark text-center" style="font-size: 15px;">TOTAL NUMBER OF APPLICATIONS</h5>
                                <?php
                                    $total_application_count = full_query("SELECT COUNT(DISTINCT `id`) as `count` FROM `project_logs` WHERE `action` = 'Approved by MPDC'");

                                    if (mysqli_num_rows($total_application_count) > 0) {
                                        if ($row = mysqli_fetch_assoc($total_application_count)) {
                                            echo '<p class="card-text text-center fw-bold" style="font-size: 40px;">' . $row['count'] . '</p>';
                                        }
                                    }
                                    ?>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="admin_project_archive.php" class="my-link-hover" style="text-decoration: none; color: black;">
                            <div class="card border border-dark kpi-cont">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 15px; transition: color 0.3s;">APPROVED APPLICATIONS</h5>

                                    <?php
                                    $pending_count = full_query("SELECT COUNT(project_id) as `count` FROM `project_logs` WHERE `action` = 'Approved by Fire'");

                                    if (mysqli_num_rows($pending_count) > 0) {
                                        if ($row = mysqli_fetch_assoc($pending_count)) {
                                            echo "<h1 class='fw-bold' id='approved_application_count'>" . $row['count'] . "</h1>";
                                        } else {
                                            echo "<h1 class='fw-bold' id='approved_application_count'>0</h1>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="card border border-dark text-center kpi-cont">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 15px;">PENDING APPLICATION REVIEW</h5>
                                <!-- <p class="card-text fw-bold" style="font-size: 40px;">0</p> -->
                                <?php


                                $pending_count = full_query("SELECT COUNT(project_title)'pending' 
                                FROM `vw_project_last_action` WHERE `action` = 'Delivered to Fire'");

                                if (mysqli_num_rows($pending_count) > 0) {

                                    if ($row = mysqli_fetch_assoc($pending_count)) {
                                        echo "<h1 class='fw-bold' id = 'pending_count'> " . $row['pending'] . "</h1>";
                                    } else {
                                        echo "<h1 class='fw-bold' id = 'pending_count'>0</h1>";
                                    }
                                }
                                ?>

                            </div>

                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-6">
                        <div class="border border-dark text-center kpi-cont ">
                            <p>SCHEDULED SIGNING</p>
                            <h1 id = "scheduled_count">0</h1>
                        </div>
                    </div> -->
                </div>

                <br>


                <div class="text-center">

                    <?php


                    $pending_project = full_query("SELECT * FROM `vw_project_last_action` WHERE action = 'Delivered to Fire';");

                    if (mysqli_num_rows($pending_project) > 0) {

                        echo '  
                    <h3 class"my-3">Pending Applications to review</h3>
                    
                    <table class="table table-responsive w-100 border">
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
                                <td><?php echo formatAddress($row['address']) ?></td>
                                <td><?php echo $row['latest_timestamp'] ?></td>
                                <td>
                                    <a href="admin_review.php?project_id=<?php echo $row['project_id']; ?>&" class="btn btn-secondary">
                                        Review
                                    </a>

                                </td>
                            </tr>



                    <?php

                        }
                        echo '</table>';
                    } else {
                        echo "No pending applications";
                    };
                    ?>




                </div>






            </div>
        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>



</body>
<!-- <script src="../js-css\chart-js\node_modules\chart.js\dist\chart.umd.js"></script> -->

<script>
    $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_home.php"] > li').addClass("my-active") //highlight active page in offcanvas menu

    $("#nav_left").append('<div style = "width:30px;height:inherit;background-color:#ff0000;margin-top:-20px;margin-left:18px;"></div>')
</script>

</html>