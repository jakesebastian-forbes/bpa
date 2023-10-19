<?php

session_start();
// print_r($_SESSION);


if (isset($_SESSION["forms"])) {
  unset($_SESSION["forms"]);
};
require "../php/db_func.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant Home</title>
  <link rel="stylesheet" href="../js-css/general.css">
  </link>
  <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.css">
  </link>
  <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
  <script src="../js-css/jquery-3.6.4.js"></script>

<style>
  #new-application-form select{
    width: 400px;

  }

  #new-application-form label{
    margin-left: -2.3rem;
    margin-top: 0.4rem;

  }
</style>

</head>

<body>

  <div id="flex_container">

    <?php require "../components/web_navbar.php" ?>

    <div id="flex_main">

<?php require "../components/applicant_project_card.php";?>

<?php require "../components/applicant_menu.php" ?>



          <!-- Modal -->
          <div class="modal fade" id="project_template_select_modal" tabindex="-1" aria-labelledby="project_template_select_modal_Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="project_template_select_modal_Label">New Application</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                  <p>Hello <span name ="applicant-name"><?php echo $fullname?></span>! Let's get started with your application.</p>

                  <!-- <p>Step 1</p> -->

                  <div id = "new-application-form">
                  <form action="../php/project_create.php" method="post">
                   
                    <div class="row mx-auto" style="width:80%">
                    <label for = "occupancy_classification">Occupancy Classification</label>

                      <select name="occupancy_classification" id="occupancy_classification"  required>
                        <option value="">Please select an option</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="institutional">Institutional</option>
                        <option value="industrial">Industrial</option>
                      </select>
                    </div>


              
                    <div class="row mx-auto" style="width:80%">
                    <label>Right over land</label>


                      <select name="right_over_land" id="right_over_land"  required>
                        <option value="">Please select an option</option>
                        <option value="owned">Owned</option>
                        <option value="lease">Lease</option>
                      </select>
                    </div>



                 
                    <div class="row mx-auto" style="width:80%">
                    <label>Are you the registered owner?</label>

                      <select name="registered_owner" id="registered_owner"  required>
                        <option value="">Please select an option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>


             
                
                    <div class="row mx-auto" style="width:80%">
                    <label>Is the property owned by a corporation?</label>

                      <select name="corporate_owned" id="corporate_owned"  required>
                        <option value="">Please select an option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>

                    
                    <div class="row mx-auto" style="width:80%">
                
                    <label>What would you like to call this project?</label>
                    <input type="text" name="" id="" width="100%" placeholder="Project Title">
                    </div>







                    
                  </div>

                </div>
                <div class="modal-footer">
                  <div class="row w-100">
                    <div class="col">
                    <button type="button" class="btn my-btn-red" data-bs-dismiss="modal">Close</button>


                    </div>
                    <div class="col text-end">
                    <button type="submit" class = "btn my-btn-blue">Next</button>

                    </div>
                  </div>
                

                  </form>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>






          </div>
          <?php require "../components/web_footer.php" ?>

        </div>


</body>

<script>
  $('a[href="applicant_home.php"] > li').addClass("my-active") //highlight active page in offcanvas menu
</script>

</html>