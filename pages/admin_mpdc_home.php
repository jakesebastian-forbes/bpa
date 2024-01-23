<?php

session_start();
// print_r($_SESSION);
require "../php/db_func.php";

$privilege = "admin";
$department = "mpdc";
require '../php/page_restriction.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?php echo $_SESSION['department'] ?> Department</title>
    <link rel="stylesheet" href="../js-css/general.css">
    </link>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.css">
    </link>
    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js-css/jquery-3.6.4.js"></script>

    <style>
        .kpi-cont {
            aspect-ratio: 3/1;

        }
    </style>

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

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-6">
                        <div class="card border border-dark text-center kpi-cont">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 15px;">TOTAL NUMBER OF APPLICATIONS</h5>
                                <p id = "total_count" class="card-text fw-bold text-center" style="font-size: 40px;">0</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                    <div class="card border border-dark kpi-cont">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 15px;">APPROVED/DENIED RATIO</h5>
                                <p id = "total_count" class="card-text fw-bold text-center" style="font-size: 40px;">0/0</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card border border-dark text-center kpi-cont">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 15px;">PENDING APPLICATION REVIEW</h5>
                                    
                                        <?php


                                        $pending_count = full_query("SELECT COUNT(project_title)'pending' 
                                        FROM `vw_project_last_action` WHERE `action` = 'Delivered to MPDC'");

                                        if (mysqli_num_rows($pending_count) > 0) {

                                            if ($row = mysqli_fetch_assoc($pending_count)) {
                                                echo "<h1 class='fw-bold' id = 'pending_count'> ".$row['pending']."</h1>";
                                            }else{
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


                        $pending_project = full_query("SELECT * FROM `vw_project_last_action` WHERE action = 'Delivered to MPDC';");

                        if (mysqli_num_rows($pending_project) > 0) {

                            
                    echo '  <table class="table table-responsive w-100 border">
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
                                        <!-- <td><?php //echo $row['type'] ?></td> -->
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
                }
                else{
                    echo "No pending applications";
                };
                        ?>



                    </table>
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
    $("#nav_left").append('<div style = "width:30px;height:inherit;background-color:#ffd700;margin-top:-20px;margin-left:18px;"></div>')


    //add banner
    //   $("#nav_left").append('<div style = "width:30px;height:inherit;background-color:#22b927;margin-top:-20px;margin-left:18px;"></div>')
    //   $("#nav_center").append("<h4 class = 'text-center'>Engineering Department</h4>")
    //   $("#nav_center").append("<p class = 'text-center'>Admin Dashboard</p>")
</script>

</html>