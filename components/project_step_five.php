<div class="text-center">

  <h2 class="fw-bold" id="step_five_header">EVALUATION</h2>



  <style>
    .stepper-wrapper {
      font-family: Arial;
      margin-top: 50px;
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .stepper-item {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;

      @media (max-width: 768px) {
        font-size: 12px;
      }
    }

    .stepper-item::before {
      position: absolute;
      content: "";
      border-bottom: 2px solid #ccc;
      width: 100%;
      top: 20px;
      left: -50%;
      z-index: 2;
    }

    .stepper-item::after {
      position: absolute;
      content: "";
      border-bottom: 2px solid #ccc;
      width: 100%;
      top: 20px;
      left: 50%;
      z-index: 2;
    }

    .stepper-wrapper.mpdc .stepper-item.active::before,
    .stepper-wrapper.mpdc .stepper-item.active::after {
      border-bottom-color: #186F65;
      background-color: #186F65;
    }

    .stepper-wrapper.fire .stepper-item.active::before,
    .stepper-wrapper.fire .stepper-item.active::after {
      border-bottom-color: #7899DC;
      background-color: #7899DC;
    }

    .stepper-wrapper.engineering .stepper-item.active::before,
    .stepper-wrapper.engineering .stepper-item.active::after {
      border-bottom-color: #F58634;
      background-color: #F58634;
    }

    .stepper-item .step-counter {
      position: relative;
      z-index: 5;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #ccc;
      margin-bottom: 6px;
    }

    .stepper-item.active .step-counter {
      background-color: #186F65;
      /* Default color for MPDC */
      color: white;
    }

    .stepper-item.active.fire .step-counter {
      background-color: #7899DC;
      /* Override for Fire Department */
    }

    .stepper-item.active.engineering .step-counter {
      background-color: #F58634;
      /* Override for Engineering Department */
      color: white;
      /* Set text color for the active step counter to black */
    }

    .stepper-item.active {
      font-weight: bold;
    }

    .stepper-item.completed .step-counter {
      background-color: #4bb543;
    }

    .stepper-item.completed::after {
      position: absolute;
      content: "";
      border-bottom: 2px solid #4bb543;
      width: 100%;
      top: 20px;
      left: 50%;
      z-index: 3;
    }

    .stepper-item:first-child::before {
      content: none;
    }

    .stepper-item:last-child::after {
      content: none;
    }
  </style>
  <?php


  // echo $project_status;

  if (strtolower($project_status) == "returned") {

    $project_returned = full_query("SELECT * FROM `vw_project_last_action` WHERE `project_id` = '".$project_id."'");

        if (mysqli_num_rows($project_returned) > 0) {
          if ($row = mysqli_fetch_assoc($project_returned)) {

            echo " <div id='project_returned_cont' style = 'display:none;'>

            <h6 class='my-3'>Your project was <span class='fw-bold'> ".strtolower($row['action'])." </span> department. You can check for the department's administrator
             remarks to find out why.
              <br> Or you can ask them by using our <a href = 'applicant_chat.php'>chat feature</a>.
              <br> Once you are ready to make changes on you application, click
               <button id = 'btn_open_project' class='btn my-btn-blue my-3' data-project-id = '" . $project_id . "'>here</button> 
               to open your project and make necessary changes.
            </h6>
          
          </div>";
        

          }
        
        }  



  }

  if (strtolower($project_status) == "approved" ) {
    echo '<div class="my-3">Congratulations! Your project has been fully approved by all departments.
              <button onclick = "$(`#step_six_tab`).click()">Click here</button> to request an appointment.
    </div>';
  } else if (strtolower($project_status) == "completed") {
    echo '<div>Congratulations! Your project has been fully approved by all departments.
             
    </div>';
  }
   else if(strtolower($project_status) == "pending"){



  ?>
    <div id="project_trail">
      <h3 class="">Please wait while designated departments are reviewing your application</h3>

      <h2 class="my-3" style="text-align: center;"></h2>
      <div class="stepper-wrapper mpdc">
        <div class="stepper-item active" id="trail_mpdc">
          <div class="step-counter">1</div>
          <div class="step-name">MPDC Department</div>
        </div>

        <div class="stepper-item fire" id="trail_fire">
          <div class="step-counter">2</div>
          <div class="step-name">Fire Department</div>

        </div>

        <div class="stepper-item engineering" id="trail_engineering">
          <div class="step-counter">3</div>
          <div class="step-name">Engineering Department</div>
        </div>


      </div>

      <h6 class="my-4">Your application is currently being reviewed by : <span id="trail_current" class="fw-bold"></span> Department</h6>


      <div id="encouragement_message"></div>

    </div>




    <div class="row my-4">
      <table class="table">

        <?php

        $project_trail_table = full_query("SELECT *
    FROM `project_logs`
    WHERE  `timestamp` > (
        SELECT `timestamp`
        FROM `project_logs`
        WHERE `action` = 'Project Submitted'
        AND `project_id` = '" . $project_id . "'
        ORDER BY `timestamp` DESC
        LIMIT 1
    )
      ORDER BY `timestamp` DESC
    ;
    ");

        if (mysqli_num_rows($project_trail_table) > 0) {


          echo ' <thead>
      <tr class="border">
        <th scope="col">Timestamp</th>
        <th scope="col">Action</th>
        <th scope="col">Comment</th>
      </tr>
    </thead>
    <tbody>';
          while ($row = mysqli_fetch_assoc($project_trail_table)) {

            if ($row['comment'] == '' || $row['comment'] == NULL) {
              $comment = 'N/A';
            }else{
              $comment = $row['comment'];
            }

            echo "
    <tr>
        <td>" . $row['timestamp'] . "</td>
        <td>" . $row['action'] . "</td>
        <td>" . $comment . "</td>
      
  </tr>
  ";
        ?>



            <!-- Add more rows as needed -->


    </div>

<?php

          }


          echo '  </tbody>
</table>';
        }
      }

?>


</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // <!-- // *project trail -->


    console.log("'<?php echo $project_status ?>'" + "asdasdasd")
    <?php

    // *get project approvals

    // *check project status

    // *if not denied track project
    // !else






    $project_trail = full_query("SELECT * FROM `vw_project_last_action` WHERE project_id = '$project_id' ORDER BY latest_timestamp ASC");

    if (mysqli_num_rows($project_trail) > 0) {

      if ($row = mysqli_fetch_assoc($project_trail)) {

        // print_r($row);
        echo '$("#trail_current").html("' . $row['action'] . '");';

        $curr_dept;
        if (strpos(strtolower($row['action']), "mpdc") == true) {
          $curr_dept = "MPDC";
          echo '$("#encouragement_message").html("Your application is now on process. Please be patient. This won\'t take long.");';
        } elseif (strpos(strtolower($row['action']), "fire") == true) {
          $curr_dept = "Fire";
          echo '$("#trail_fire").addClass("active");';
          echo '$("#encouragement_message").html("Your application is now on halfway!");';
        } elseif (strpos(strtolower($row['action']), "engineering") == true) {
          $curr_dept = "Engineering";
          echo '$("#trail_fire").addClass("active");';
          echo '$("#trail_engineering").addClass("active");';
          echo '$("#encouragement_message").html("Your application is almost complete.");';
        }
        // ! error doesn't get caught 
        elseif (strpos(strtolower($row['action']), "open for schedule request") == true) {
          $curr_dept = "Engineering";
          echo '$("#encouragement_message").html("Congratulations! Your application has been approved by all departments.
      You can now, set an appointment for project signing. Click here");';
        } else {
          $curr_dept = "Engineering";
          echo '$("#trail_fire").addClass("active");';
          echo '$("#trail_engineering").addClass("active");';
        }


        // }
        echo '$("#trail_current").html("' . $curr_dept . '");';
      }
    }


    ?>



    $('#btn_open_project').click(async function() {
      let project_id = $(this).data("project-id");
      // console.log(project_id);

      try {
        // Make the AJAX call and get the result
        const result = await update_ajax("project", "status", "open", "`id` ='" + project_id + "'")
          .then(data => {
            // Use the data here
            console.log('Data fetched successfully:', data);

            let message = "Your project " + document.title + " has been successfully opened.";

            //   insert("project_logs", "`id`, `project_id`, `action`, `comment`, `timestamp`",
            // "UUID(), '<?php echo $project_id ?>', '{$action}', '{$_POST['log_comment']}', CURRENT_TIMESTAMP()");


            notifySuccess("Project opened successfully.", message);

            window.location.reload();
          })
          .catch(error => {
            // console.error('Error fetching data:', error);
            notifyError("Opening project has failed.", "An error has occured");

          });

      } catch (error) {
        console.error(error); // Log any errors that occurred during the AJAX call
      }


    });

  });
</script>