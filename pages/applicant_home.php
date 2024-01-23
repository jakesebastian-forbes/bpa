<?php

session_start();
// print_r($_SESSION);

$privilege = "applicant";
require '../php/page_restriction.php';

// require "../php/db_conn.php";
// echo $dbname;

// if (isset($_SESSION["forms"])) {
//   unset($_SESSION["forms"]);
// };



require "../php/db_func.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  $page_title = "Applicant Home";
  require "page_header.php" ?>


  <style>
    #new-application-form select {
      width: 400px;

    }

    #new-application-form label {
      margin-left: -2.3rem;
      margin-top: 0.4rem;

    }

    #project_template_select_modal .modal-content {
      border-radius: 10px;
    }

    #project_template_select_modal .modal-header {
      background-color: #245a94;
      color: #fff;
      border-radius: 10px 10px 0 0;
    }

    #project_template_select_modal .modal-title {
      font-size: 1.5rem;
    }

    #project_template_select_modal .modal-body {
      padding: 1.5rem;
    }

    #project_template_select_modal .modal-footer {
      border-top: none;
    }

    #project_template_select_modal .btn-my-btn-red {
      background-color: #d9534f;
      color: #fff;
    }

    #project_template_select_modal .btn-my-btn-blue {
      background-color: #5bc0de;
      color: #fff;
    }
  </style>

</head>

<body>

  <div id="flex_container">

    <?php require "../components/web_navbar.php" ?>

    <div id="flex_main">

      <?php require "../components/applicant_project_card.php"; ?>

      <?php require "../components/applicant_menu.php" ?>



      <!-- Modal -->
      <div class="modal fade" id="project_template_select_modal" tabindex="-1" aria-labelledby="project_template_select_modal_Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> <!-- Use modal-dialog-centered for centering the modal on all devices -->
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="project_template_select_modal_Label">New Application</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Hello <span name="applicant-name" class="fw-bold"><?php echo $fullname ?></span>! Let's get started with your application.</p>

              <div id="new-application-form">
                <form action="../php/project_create.php" method="post">

                  <div class="row mb-1 mx-4">
                    <label for="ext_land_use" class="form-label fw-bold">Existing land use<span class="required"></span></label>
                    <select name="ext_land_use" id="ext_land_use" class="form-select w-100" required>
                      <option value="">Please select an option</option>
                      <option value="residential">Residential</option>
                      <option value="commercial">Commercial</option>
                      <option value="institutional">Institutional</option>
                      <option value="industrial">Industrial</option>
                      <option value="others">Others</option>
                    </select>
                  </div>

                  <div class="row mb-1 mx-4">
                    <label for="right_over_land" class="form-label fw-bold">Right over land<span class="required"></span></label>
                    <select name="right_over_land" id="right_over_land" class="form-select w-100" required>
                      <option value="">Please select an option</option>
                      <option value="owned">Owned</option>
                      <option value="lease">Lease</option>
                    </select>
                  </div>

                  <div class="row mb-1 mx-4">
                    <label for="corporate_owned" class="form-label fw-bold">Is the property owned by a corporation?<span class="required"></span></label>
                    <select name="corporate_owned" id="corporate_owned" class="form-select w-100" required>
                      <option value="">Please select an option</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>

                  <div class="row mb-1 mx-4">
                    <label for="project_title" class="form-label fw-bold">What would you like to call this project?<span class="required"></span></label>
                    <input type="text" class="form-control w-100" placeholder="Project Title" name="project_title" id="project_title" required>
                  </div>

              </div>
            </div>
            <div class="modal-footer">
              <div class="row w-100" style="margin-top: -15px;">
                <div class="col">
                  <button type="button" class="btn my-btn-red" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="col text-end">
                  <button type="submit" class="btn my-btn-blue">Create Project</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>








    </div>
    <?php require "../components/web_footer.php" ?>

  </div>


</body>
<script src="../js-css/db_operations_ajax.js"></script>
<script>
  $('a[href="applicant_home.php"] > li').addClass("my-active") //highlight active page in offcanvas menu


  $('.project_card_link').click(function() { // update last opened
    let project_id = $(this).data("project-id");
    const currentTimestamp = new Date().toISOString().slice(0, 19).replace("T", " ");
    update_ajax("project", "last_opened", currentTimestamp, "`id` ='" + project_id + "'");
  });



  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  $('.btn-delete-project').click(async function() {
    let project_id = $(this).data("project-id");
    console.log(project_id);

    try {
      // Make the AJAX call and get the result
      const result = await update_ajax("project", "status", "deleted", "`id` ='" + project_id + "'")
      .then(data => {
          // Use the data here
          console.log('Data fetched successfully:', data);

          $("#card_" + project_id).remove();

          refresh_element("flex_main");

          let project_title = $("#" + project_id + " p.project-title").attr("title");
          let message = "Your project " + project_title + " has been successfully deleted.";
          notifySuccess("Project deleted successfully", message);
        })
        .catch(error => {
          // console.error('Error fetching data:', error);
          notifyError("Project deletion failed", "An error has occured");

        });

    } catch (error) {
      console.error(error); // Log any errors that occurred during the AJAX call
    }

    
  });
</script>

</html>