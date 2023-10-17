<?php

session_start();
require "../php/db_func.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Engineering Department</title>
    <link rel="stylesheet" href="../js-css/general.css">
    </link>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.css">
    </link>
    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js-css/jquery-3.6.4.js"></script>
</head>

<body>


    <div id="flex_container">

        <?php require "../components/web_navbar.php" ?>

        <div id="flex_main">

            <div class="p-5">

                <div class="row text-end pb-4" id="filters">
                    <div class="col"></div>
                    <div class="col">

                        <select name="" id="">
                            <option value="">Today</option>
                            <option value="">Yesterday</option>
                            <option value="">All</option>
                            <option value="">Specify</option>


                        </select>
                    </div>


                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <div style="aspect-ratio:3/1;" class="border border-dark text-center">
                            <p>TOTAL NUMBER OF APPLICATIONS</p>
                            <h1>562</h1>
                        </div>
                    </div>
                    <div class="col">
                        <div style="aspect-ratio:3/1;" class="border border-dark text-center">
                            <p>APPROVED-DENIED RATIO</p>
                            <h1>2/1</h1>
                        </div>
                    </div>
                    <div class="col">
                        <div style="aspect-ratio:3/1;" class="border border-dark text-center">
                            <p>PENDING APPLICATION REVIEW</p>
                            <h1>2</h1>
                        </div>
                    </div>
                    <div class="col">
                        <div style="aspect-ratio:3/1;" class="border border-dark text-center">
                            <p>SCHEDULED SIGNING</p>
                            <h1>5</h1>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                 
                    <div class="col">
                        <div class="row mb-2">
                            <p>Occupancy Type</p>
                            <div style="width:100%;aspect-ratio:6/1.7" class="border border-dark text-center ">
                                <canvas id="my_chart_bar"></canvas>


                            </div>

                        </div>
                        <div class="row mt-3">
                            <p>Applications Received</p>
                            <div style="width:100%;aspect-ratio:6/1.7" class="border border-dark text-center">

                            <canvas id="my_chart_line"></canvas>

                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <p>PREDICTION FOR NEXT BUILDING CONSTRUCTION</p>
                        <div style="width:100%;aspect-ratio:6/4" class="border border-dark text-center">
                        <canvas id="my_chart_pie"></canvas>

                        </div>
                    </div>


                </div>


            </div>
        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>


</body>
<script src="../js-css\chart-js\node_modules\chart.js\dist\chart.umd.js"></script>

<script>
    $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_home.php"] > li').addClass("my-active") //highlight active page in offcanvas menu


    // Sample data for the line chart
    var data = {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Sales',
            borderColor: 'rgb(75, 192, 192)',
            backgroundColor: [
                    'rgba(255, 99, 132, 1)', // Light Red
                    'rgba(54, 162, 235, 1)', // Light Blue
                    'rgba(255, 206, 86, 1)', // Light Yellow
                    'rgba(75, 192, 192, 1)', // Light Green
                    'rgba(153, 102, 255, 1)' // Light Purple
                ],
            data: [65, 59, 80, 81, 56],
            fill: false,
        }]
    };

    // Configuration options
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    function create_chart(type, ctx, data, options) {
        new Chart(ctx, {
            type: type,
            data: data,
            options: options
        });
    }


    // Get the context of the canvas element
    var ctx_bar = document.getElementById('my_chart_bar').getContext('2d');
    var ctx_line = document.getElementById('my_chart_line').getContext('2d');
    var ctx_pie = document.getElementById('my_chart_pie').getContext('2d');


    // Create the line chart
    var my_bar_chart = create_chart('bar', ctx_bar, data, options)
    var my_line_chart = create_chart('line', ctx_line, data, options)
    var my_pie_chart = create_chart('pie', ctx_pie, data, options)

    //   // Function to update the URL path
    //   function updateUrlPath(path) {
    //     history.pushState({}, '', path);
    // }

    // // Example usage
    // updateUrlPath('/');

    // You can call this function whenever you want to change the URL path
    // For example, updateUrlPath('/new-path');


</script>

</html>