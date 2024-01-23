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

            



        </div>
        <?php require "../components/web_footer.php" ?>
        
    </div>

    <?php require "../components/admin_menu.php" ?>




    <script>
        

        document.addEventListener("DOMContentLoaded", () => {

            //highlight active page in offcanvas menu
            $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_project_archive.php"] > li').addClass("my-active")

            

           

        });
    </script>
    <script src="../js-css/db_operations_ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>


</html>