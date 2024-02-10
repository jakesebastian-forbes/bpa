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
    a:hover h5.card-title {
        color: goldenrod !important;
    }

    #kpi_cards .card-body {
        height: 140px !important;
    }

    .date-filter-container {
    display: flex;
    justify-content: space-between;
}

    .date-filter-1 {
        margin-right: 10px; /* Adjust the margin as needed */
    }
</style>

<body style="background-color: #EBECF1;">

    <?php
    // print_r($_SESSION);

    ?>
    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">

            <div class="p-5">

                <div id="kpi_cards">

                    <div class="row d-flex justify-content-between">
                        

                    <div class="col">
                            <div class="card border-dark border" style="aspect-ratio: 1/0;">
                                <div class="card-body">
                                    <h5 class="card-title text-dark text-center" style="font-size: 15px;">TOTAL NUMBER OF APPLICATIONS</h5>
                                    <?php
                                    $total_application_count = full_query("SELECT COUNT(id) as `count` FROM `project_logs` WHERE `action` = 'Approved by Fire'");

                                    if (mysqli_num_rows($total_application_count) > 0) {
                                        if ($row = mysqli_fetch_assoc($total_application_count)) {
                                            echo '<p class="card-text text-center fw-bold" style="font-size: 40px; margin-top: 20px;">' . $row['count'] . '</p>';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>

                        </div>

                        

                        <div class="col">
                            <a href="admin_engineering_approvals.php#pending_application_table" class="my-link-hover" style="text-decoration: none; color: black;">
                                <div class="card border-dark border" style="aspect-ratio: 1/0;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="font-size: 15px; transition: color 0.3s;">PENDING APPLICATION REVIEW</h5>
                                        
                                        <?php
                                        $pending_application_count = full_query("SELECT COUNT(project_id) as `count` FROM `vw_project_last_action` WHERE action = 'Delivered to Engineering';");

                                        if (mysqli_num_rows($pending_application_count) > 0) {
                                            if ($row = mysqli_fetch_assoc($pending_application_count)) {
                                                echo '<p class="card-text text-center fw-bold" style="font-size: 40px; margin-top: 20px;">' . $row['count'] . '</p>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </div>


                        
                    </div>
                    <div class="row d-flex justify-content-between my-2">

                    <div class="col">
                            <div class="card border-dark border" style="aspect-ratio: 1/0;">
                                <div class="card-body">
                                    <h5 class="card-title text-dark text-center" style="font-size: 15px;" title="From project submission to project approval">AVERAGE TIME OF EVALUATION</h5>
                                    <?php
                                    $avg_proj_eval_time = full_query("SELECT
                                    AVG(duration_hours) AS average_duration_hours
                                    FROM
                                    (
                                        SELECT
                                            project_id,
                                            MIN(timestamp) AS project_submitted_time,
                                            MAX(timestamp) AS project_completed_time,
                                            (TIMESTAMPDIFF(SECOND, MIN(timestamp), MAX(timestamp)))/60/60 AS duration_hours
                                        FROM
                                            project_logs
                                        WHERE
                                            action IN ('Project Submitted', 'Project Completed')
                                        GROUP BY
                                            project_id
                                        HAVING
                                            COUNT(DISTINCT action) = 2
                                    ) AS subquery;
                                
                                
                                    ");

                                    if (mysqli_num_rows($avg_proj_eval_time) > 0) {
                                        if ($row = mysqli_fetch_assoc($avg_proj_eval_time)) {


                                            echo '<p class="card-text text-center fw-bold" style="font-size: 40px;">' . round($row['average_duration_hours'], 2) . ' hrs</p>';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>

                        </div>

                        <div class="col">
                            <a href="admin_project_archive.php" class="my-link-hover" style="text-decoration: none; color: black;">
                                <div class="card border-dark border" style="aspect-ratio: 3/1;">
                                    <div class="card-body">
                                        <h5 class="card-title  text-center " style="font-size: 15px; transition: color 0.3s;">APPROVED APPLICATIONS</h5>
                                        
                                        <?php
                                        $pending_count = full_query("SELECT COUNT(project_id) as `count` FROM `project_logs` WHERE `action` = 'Approved by Engineering'");

                                        if (mysqli_num_rows($pending_count) > 0) {
                                            if ($row = mysqli_fetch_assoc($pending_count)) {
                                                echo "<h1 class='fw-bold text-center' id='approved_application_count'>" . $row['count'] . "</h1>";
                                            } else {
                                                echo "<h1 class='fw-bold text-center' id='approved_application_count'>0</h1>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col">
                            <?php
                            $pending_schedule = full_query("SELECT COUNT(id) as count FROM `appointments` WHERE  eng_app = '0'");

                            if (mysqli_num_rows($pending_schedule) > 0) {
                                if ($row = mysqli_fetch_assoc($pending_schedule)) {
                            ?>
                                    <a href="admin_engineering_approvals.php#pending_schedule_approval_cont" class="my-link-hover" style="text-decoration: none; color: black;">
                                        <div style="aspect-ratio: 3/1;" class="card border border-dark text-center">
                                            <div class="card-body">
                                                <h5 class="card-title text-dark text-center" style="font-size: 15px;">PENDING SCHEDULE APPROVAL</h5>
                                                <p class="card-text text-center fw-bold" style="font-size: 40px;"><?php echo $row['count'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <div class="col">
                            <?php
                            $pending_schedule = full_query("SELECT COUNT(id) as count FROM `appointments` WHERE schedule_date = CURRENT_DATE() AND eng_app = '1'");

                            if (mysqli_num_rows($pending_schedule) > 0) {
                                if ($row = mysqli_fetch_assoc($pending_schedule)) {
                            ?>
                                    <a href="admin_engineering_appointments.php" class="my-link-hover" style="text-decoration: none; color: black;">
                                        <div style="aspect-ratio: 3/1;" class="card border border-dark text-center">
                                            <div class="card-body">
                                                <h5 class="card-title text-dark text-center" style="font-size: 15px;">SCHEDULED SIGNING TODAY</h5>
                                                <p class="card-text text-center fw-bold" style="font-size: 40px;"><?php echo $row['count'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>

                    </div>
                </div>

                <br>

                <!-- CHARTS -->

                <div class="row text-end d-flex " id="filters">

                    <div class="col-6">
                        <div class="d-flex">
                            <div class="form-floating mb-3 mx-2">
                                <select class="form-select border border-dark" id="date_filter" aria-label="Select Date">
                                    <option value="none">No filter</option>
                                    <option value="7">Last 7 days</option>
                                    <option value="30">Last 30 days</option>
                                    <option value="specify">Specify</option>
                                </select>
                                <label for="dateFilter1">Select Date</label>
                            </div>

                            <div class="form-floating mx-3 mb-3" id="filter_spec_cont" style="display:none">

                                <div class="date-filter-container">
                                    <div class="date-filter-1">
                                        <label for="filter_date_start">From</label>
                                        <input type="date" name="filter_date_start" id="filter_date_start" title="Start Date" class="form-control">
                                    </div>

                                    <div class="date-filter-1">
                                        <label for="filter_date_end">To</label>
                                        <input type="date" name="filter_date_end" id="filter_date_end" title="End Date" class="form-control">
                                    </div>

                                    <div class="date-filter-1"> 
                                        <button id="date_range_apply" class="btn my-btn-blue my-3 m-auto">Apply filter</button>
                                    </div>
                                </div>

                                


                            </div>


                        </div>


                    </div>


                </div>



                <div class="row my-3">
                    <div class="col">
                        <div class="row mb-2" style="background-color: white;">
                            <!-- <p class="h5">APPLICANTS</p> -->
                            <div class="card" style="width: 100%; margin: 0; padding: 0;">
                                <div class="card-header" style="background-color: #245a94; height: 40px;">
                                    <h5 class="card-title text-center text-white">Building Permit Applications Count Timeline</h5>
                                </div>
                                <div class="card-body" style="width:100%; aspect-ratio:6/1.7">
                                    <div class=" text-center rounded" style="margin: 0; padding: 0;">
                                        <canvas id="my_chart_line" style="display: block;box-sizing: border-box;height: 368px;width: 1494px;">fdf</canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-2" style="background-color: white;">
                            <!-- <p class="h5">LOCATION HOTSPOTS</p> -->
                            <div class="card" style="width: 100%; margin: 0; padding: 0;">
                                <div class="card-header" style="background-color: #245a94; height: 40px;">
                                    <h5 class="card-title text-center text-white">Building Permit Applications by Barangays</h5>
                                </div>
                                <div class="card-body" style="width:100%;aspect-ratio:6/1.7">
                                    <div class=" text-center rounded">
                                        <canvas id="my_chart_bar" style="display: block;box-sizing: border-box;height: 388px;width: 1494px;"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
                <!-- END OF CHARTS -->




            </div>




            <!-- ?> -->




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
        //BAR CHART - LOCATION HOTSPOTS
        function populate_chart_bar(where_clause) {
            var ctx = document.getElementById("my_chart_bar").getContext("2d");

            // Destroy existing chart instance if it exists
            if (window.myChartBar) {
                window.myChartBar.destroy();
            }

            // Parameters to be sent in the AJAX request
            var postData = {
                where_clause: where_clause,
                // Add more parameters as needed
            };

            // Make an AJAX request to your server to get data
            $.ajax({
                type: 'POST',
                url: '../php/chart_bar.php', // Replace with your server endpoint
                dataType: 'json',
                data: postData, // Include the parameters
                success: function(data) {
                    console.log(data);

                    // Check if the response contains an error
                    if (data.hasOwnProperty('error')) {
                        // Handle the error case
                        console.error('Error from server:', data.error);
                    } else {
                        // Create bar chart with the received data
                        window.myChartBar = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: data.map(item => item.barangay),
                                datasets: [{
                                    label: 'Project Count',
                                    data: data.map(item => item.project_count),
                                    backgroundColor: ' rgba(96, 207, 213, 0.32)', // Adjust the color as needed
                                    borderColor: 'rgba(60, 119, 122, 2)',
                                    hoverBackgroundColor: 'rgba(67, 188, 195, 1)',
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,


                                legend: {
                                    display: false
                                }
                            }
                        });
                    }
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        }




        function populate_chart_line(where_clause) {
            var ctx = document.getElementById('my_chart_line').getContext('2d');

            // Destroy existing chart instance if it exists
            if (window.myChart !== undefined) {
                window.myChart.destroy();
            }

            // Parameters to be sent in the POST request
            var postData = {
                where_clause: where_clause,
                // Add more parameters as needed
            };

            // Make an AJAX request to your server to get data
            $.ajax({
                type: 'POST',
                url: '../php/chart_line.php', // Replace with your server endpoint
                dataType: 'json',
                data: postData, // Include the parameters
                success: function(data) {
                    console.log(data);
                    // Update chart with the received data
                    window.myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.creation_date,
                            datasets: [{
                                label: 'Timeline',
                                data: data.project_count,
                                fill: false,
                                borderColor: '#527853',
                                backgroundColor: '#527853',
                                borderWidth: 2
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false
                        }
                    });
                },

                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        }










        document.addEventListener("DOMContentLoaded", () => {

            populate_chart_line(null);
            populate_chart_bar(null);






            //highlight active page in offcanvas menu
            $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_home.php"] > li').addClass("my-active")



            $("#date_filter").on("change", function() {
                console.log($(this).val())

                let current_value = $(this).val();


                if (current_value.toLowerCase() == "specify") {
                    $("#filter_spec_cont").css("display", "")

                } else {

                    $("#filter_spec_cont").css("display", "none")


                    if (current_value.toLowerCase() == "none") {
                        populate_chart_line(null);
                        populate_chart_bar(null);



                    }
                    if (current_value.toLowerCase() == "7") {
                        populate_chart_line("WHERE date_created >= CURDATE() - INTERVAL 7 DAY");
                        populate_chart_bar("WHERE date_created >= CURDATE() - INTERVAL 7 DAY");



                    }
                    if (current_value.toLowerCase() == "30") {
                        populate_chart_line("WHERE date_created >= CURDATE() - INTERVAL 30 DAY");
                        populate_chart_bar("WHERE date_created >= CURDATE() - INTERVAL 30 DAY");



                    }

                }



            })


            $("#date_range_apply").on("click", function() {

                console.log($(this).val())

                $("#filter_date_start").val()

                if ($("#filter_date_start").val() == '' || $("#filter_date_end").val() == '') {
                    alert("Please fill both range.");

                } else {
                    // Custom function to format date as yyyy-mm-dd
                    function getFormattedToday() {
                        var today = new Date();
                        var year = today.getFullYear();
                        var month = String(today.getMonth() + 1).padStart(2, '0');
                        var day = String(today.getDate()).padStart(2, '0');

                        return `${year}-${month}-${day}`;
                    }

                    // Example usage
                    var formattedToday = getFormattedToday();


                    if ($("#filter_date_start").val() == '' || $("#filter_date_end").val() == '') {
                        alert("Please fill both range.");
                    } else {
                        if ($("#filter_date_start").val() > formattedToday || $("#filter_date_end").val() > formattedToday) {
                            alert("Please select valid date range.");
                        } else if ($("#filter_date_start").val() > $("#filter_date_end").val()) {
                            alert("Start cannot be later than end.");
                        } else {


                            console.log("WHERE date_created BETWEEN '" + $("#filter_date_start").val() + "' AND '" + $("#filter_date_end").val() + "'");
                            populate_chart_line("WHERE date_created >= '" + $("#filter_date_start").val() + "' AND date_created <= '" + $("#filter_date_end").val() + "'");
                            populate_chart_bar("WHERE date_created >= '" + $("#filter_date_start").val() + "' AND date_created <= '" + $("#filter_date_end").val() + "'");


                        }
                    }
                }
            })



        });
    </script>

</body>


</html>