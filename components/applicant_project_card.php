
<?php
      // wrong retrival query or not
      $condition = "applicant_id = '" . $_SESSION['user_id'] . "' AND `status` != 'deleted' ORDER BY last_opened DESC";
      $project = select("vw_project_card", $condition); 

      //check if there are result
      if (mysqli_num_rows($project) > 0) {
        // echo mysqli_num_rows($project) ;

      ?>

        <style>
          .btn-delete-project:hover {
            background-color: #F5F5F5 !important;
          }
        </style>

        <!-- with project -->

        <div id="with_saved_project" class="p-4">
          <div class="row p-4 fw-bold">
            Recent Projects
          </div>

          <div class="row ms-4">

          <?php


          while ($row = mysqli_fetch_assoc($project)) {
            // echo "Name: " . $row["username"]. " " . $row["title"]. "<br>";

            $project_status = $row['status'];

            $text_color = "";

            if ($project_status == "open") {
              $bg_color = "green";
              $text_color = "white";
            } else if ($project_status == "locked") {
              $bg_color = "wine";
              $text_color = "white";
            } else if ($project_status == "reviewing") {
              $bg_color = "yellow";
            } else if ($project_status == "approved") {
              $bg_color = "yellowgreen";
            } else if ($project_status == "denied") {
              $bg_color = "red";
              $text_color = "white";
            } else if ($project_status == "completed") {
              $bg_color = "#245a94";
              $text_color = "white";
            } else if ($project_status == "pending") {
              $bg_color = "#29ADB2";
            } else if ($project_status == "for appointment") {
              $bg_color = "#EAC7C7";
            } else if ($project_status == "for signing") {
              $bg_color = "#D3CEDF";
            } else if ($project_status == "signed") {
              $bg_color = "#ADA2FF";
            } else if ($project_status == "locked") {
              $bg_color = "#FAF0D7";
            }else if ($project_status == "deleted") {
              $bg_color = "#FECDA6";
            }else if ($project_status == "returned") {
              $bg_color = "#D0D4CA";
            };


            echo '
  <div style = "width:245px;height:180px;border:1px solid black;" id = "card_'.$row['project_id'].'" class="d-flex-inline m-2 p-0">  <!-- card -->
  <div class="row text-end float-right m-0 px-2"> <!-- project controls  container-->
  <div class="col p-0 d-inline-flex status" style="    text-transform: uppercase;
  font-size: small;
  font-weight: 500;
  align-self: center;
  justify-content: center;
  border-radius: 10px;
  background-color: ' . $bg_color . ';
  color: '. $text_color.'">' . $row['status'] . '</div>


  <div class="col dropdown p-0"> <!-- project control dropdown -->
          <button class="btn btn-secondary p-0 px-2 project-controls" type="button" data-bs-toggle="dropdown" aria-expanded="false"
          style = "color: black;background-color: transparent;font-weight: 800;border: none;">...</button>
          

          <form action="../php/project_delete.php" method="post">
          <ul class="dropdown-menu text-center" style="padding: 0;">
            
              <button type="button" name = "project_id" data-project-id = "' . $row['project_id'] . '"
              style = "display: inline-block;width: -webkit-fill-available;border: none;
              background: none; padding: 0; margin: 0; " class = "btn-delete-project my-2">Delete
              </button>
              <!-- <li><a class="dropdown-item" href="#">UPDATE!</a></li> -->
              
          </ul>
      </form>
  </div>
  </div>
  <a href="applicant_openProject.php?project_id=' . $row['project_id'] . '&" 
   data-project-id = "'.$row['project_id'].'" class = "project_card_link"> <!-- link -->
  <div style= "
  background-image: url(../img/icon/project-folder.png);
  background-size: contain;
  background-repeat: no-repeat;
  height: 65%;
  background-position-x: center;">
  </div>

  
      <div class="text-center my-auto px-2" id = "' . $row['project_id'] . '">
          <p style="margin-bottom: 0;  text-overflow: ellipsis;white-space: nowrap;overflow: hidden;" class = "project-title"
          title = "' . $row['title'] . '" >
          ' . $row['title'] . '</p> <!-- project title -->
      </div>                                                                  
  </a>
</div>';
          }
          echo '
</div>
</div>
<div class="d-flex fixed-bottom fixed-end mb-5 mx-3 justify-content-end" style="">
    <button type="button" class="btn mx-4" style="width: 80px; height: auto; border-radius: 50%; aspect-ratio: 1/1; margin-bottom: 20px; background-color: #6DB9EF;"
        data-bs-toggle="modal" data-bs-target="#project_template_select_modal">
        <span class="fs-1 text-center">+</span>
    </button>
</div>
';
        } else {
          //else return no data
          // echo "0 results";

          // <!-- ** empty -->
          echo '<div id = "first_time_use" class="row text-center" style="margin:2%">
        <p class ="m-2">No recent or saved Projects found.</p>
        <p  class ="m-2">Create and add one now.</p>
        <button type="button" class = "btn my-btn-blue mx-auto white-text" style="width:auto"
        data-bs-toggle="modal" data-bs-target="#project_template_select_modal">New Project Application </button>
    </div>';
        }
          ?>


