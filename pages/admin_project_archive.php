<?php

session_start();
require "../php/db_func.php";

// $privilege = "admin";
// $department = "engineering";
// require '../php/page_restriction.php';

// print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page_title = "Admin | Project Archive";
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

        


            <div id="approved_project_table_cont" class="w-75 text-center m-auto">
                <!-- <h2>Approved Projects</h2> -->


                <?php


                $approved_project = full_query("SELECT vw_project_basics.project_id,vw_project_basics.title,vw_project_basics.project_owner,
                vw_applicant_basics.full_name,
                vw_project_basics.status,
                vw_address_full.full_address,
                project_logs.action,project_logs.timestamp
                FROM vw_project_basics
                JOIN project_logs
                ON project_logs.project_id	= vw_project_basics.project_id
                JOIN vw_applicant_basics ON
                vw_applicant_basics.applicant_id = vw_project_basics.project_owner
                JOIN vw_address_full
                ON vw_address_full.id = vw_applicant_basics.address_id
            WHERE project_logs.action = 'Approved by " . $_SESSION['department'] . "'");

                if (mysqli_num_rows($approved_project) > 0) {

                    echo '<table class="table caption-top table-responsive mt-3" id = "archived_projects_table">
    
    <span>
    <div class="row mb-3 mt-4">
    <div class="col-lg-6 col-12  d-flex justify-content-start">
    <p><b>Approved Projects</b></p>

    </div>
    <div class="col-lg-6 col-12 d-flex justify-content-end">
        <div class="input-group">
            <input type="text" class="form-control border-dark w-75" id="searchInput" placeholder="Search...">
            <button class="btn btn-secondary" type="button"><span><i class="bi bi-search"></i></span></button>
        </div>

    </div>

</div>

    </span>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Project</th>
        <th scope="col">Project Address</th>
        <th scope="col">Applicant</th>
        <th scope="col">Date Approved</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
   
   
  ';
                    $row_cnt = 1;
                    while ($row = mysqli_fetch_assoc($approved_project)) {

                        $full_address = preg_replace('/,+/', ',', $row['full_address']);

                        echo "   
                    <tr>
                    <th scope='row'>$row_cnt</th>
                    <td>" . $row['title'] . "</td>
                    <td>" . $full_address . "</td>
                    <td>" . $row['full_name'] . "</td>
                    <td>" . formatDate($row['timestamp']) . "</td>
                    <td>
                    <a href='admin_project_view_only.php?project_id=40b3b519-81f3-4b55-bd24-925019ddef7b&amp;' class='btn btn-secondary'>
                    View
                </a>
                    </td>
              
                    </tr>";

                        $row_cnt++;
                    }

                    echo '  </tbody>
    </table>';
                }
                ?>

<div id = "noResultMessage" style = "display:none">

 No results found.

</div>

            </div>




        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>




    <script>
        document.addEventListener("DOMContentLoaded", () => {

            //highlight active page in offcanvas menu
            $('a[href="admin_project_archive.php"] > li').addClass("my-active")


            $('#searchInput').on('input', function() {
    var filterValue = $(this).val().toLowerCase();
    var noResultFound = true;

    $('#archived_projects_table tr:gt(0)').each(function() {
        var textToFilter = $(this).find('td:lt(3)').text().toLowerCase();
        var matchFound = textToFilter.includes(filterValue);
        $(this).toggle(matchFound);

        // Update noResultFound flag
        if (matchFound) {
            noResultFound = false;
        }
    });

    // Show "No result found" message if no matching results
    if (noResultFound) {
        $('#noResultMessage').show();
    } else {
        $('#noResultMessage').hide();
    }
});



        });
    </script>
    <script src="../js-css/db_operations_ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>


</html>