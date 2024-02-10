<style>
  .upload-signing {
    background-color: #245a94;
    float: right;
    font-weight: bold;
    margin-top: -50px;
    margin-bottom: 5px;
  }

  @media (max-width: 780px) {

    /* Adjustments for smaller screens (e.g., mobile) */
    .upload-signing {
      margin-left: 35px;
      margin-top: 0;
      text-align: center;
      text-align: left;
      position: absolute;
      bottom: 0;
      left: 0;

    }
  }
</style>

<h2 class="mb-3 fw-bold">REQUEST FOR SIGNING SCHEDULE </h2>



<?php
$conn = db_conn();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


require "../components/admin_signing_proof_card.php";


$sql = "SELECT * FROM `appointments` WHERE `applicant` = '" . $_SESSION['user_id'] . "' AND `project` = '" . $project_id . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  if ($row = $result->fetch_assoc()) { // *schedule already set

    // print_r($row);

    $originalDate = $row['schedule_date'];
    $dateTime = new DateTime($originalDate);
    $formattedDate = $dateTime->format('F d, Y');

    if ($row['eng_app'] == "0") { //*schedule pending
      echo '<div class="text-center m-auto p-4 my-auto" style="
        width: 500px;
    ">';

      echo "Your request for scheduled signing on <span class = 'fw-bold'>" . $formattedDate . "</span> 
        at <span class = 'fw-bold'>" . date("h:i A", strtotime($row['schedule_time'])) . "
         </span> is waiting approval from the Engineering Department. Please be patient. Thank you.";
      echo "</div>";
    } else if ($row['eng_app'] == "-1") { //**schedule denied */
      echo '<div class="text-center m-auto p-4 my-auto" style="
        
        ">';

      echo "We regret to inform you that your recent appointment request has been denied due to unforeseen scheduling conflicts.
         We sincerely apologize for any inconvenience this may cause.
         If you would like to discuss alternative appointment times <button id = 'btn_reschedule' data-id = " . $row['id'] . ">click here</button>.
         If you have any urgent concerns please feel free to reach out to [Contact Person] at [Contact Information].
  
        
        Thank you for your understanding.
        <br>
        
        Best regards, <br>
        [Your Organization]
        
        ";
      echo "</div>";
    } else if ($row['eng_app'] == "1") { //*schedule approved

      $assumed_signed = full_query("SELECT * FROM `vw_project_approved_passed` WHERE project_id = '" . $project_id . "';");

      if (mysqli_num_rows($assumed_signed) > 0) {

        // echo "assumed";

        while ($assumed_signed_row = mysqli_fetch_assoc($assumed_signed)) {
          // print_r($assumed_signed_row);



          
          if ($assumed_signed_row['admin_confirm'] == '1' and $assumed_signed_row['applicant_confirm'] == '0') {

            echo "<button type='button' class = 'upload-signing btn btn-primary' id = 'btn_app_proof_received'
                data-signing-id = '" . $assumed_signed_row['project_signing_id'] . "'>Proof Received</button>";

            require "../components/proof_check.php";
          } else if ($assumed_signed_row['admin_confirm'] == '1' and $assumed_signed_row['applicant_confirm'] == '1') {

            echo '<p>Your appointment is completed and your building permit is now ready! </p>';
            echo ' <button onclick = \'$("#step_seven_tab").click()\' class="btn btn-primary" style="background-color: #245a94;">Click here to claim!</button>';

            // echo "<script>";
            // echo 'document.addEventListener("DOMContentLoaded", () => {';
            // echo '$("#steps_tab #part_4").removeClass("locked");';
            // echo '$("#steps_tab button#step_seven_tab").removeAttr("disabled","");';
            // echo '$("#steps_tab button#step_seven_tab").click()';
            // echo '})';
            // echo "</script>";


          } else if ($assumed_signed_row['admin_confirm'] == '0' and $assumed_signed_row['applicant_confirm'] == '0') {

            echo "We're preparing your building permit. Please wait for the project signing proof from engineering department.";
          }
        }
      } else {
        echo '<div class="text-center m-auto p-4 justify-content-center" style="
        
        width: 500px;
        background: #c9ffc9;
        border-radius: 16px;
        box-shadow: -1px 2px 10px 0px rgba(0,0,0,.5);
    
    ">';

        echo "We are pleased to inform you that your request for scheduled signing on <span class = 'fw-bold'>" . $formattedDate . "</span> 
        at <span class = 'fw-bold'>" . date("h:i A", strtotime($row['schedule_time'])) . "
         </span> has been approved by the Engineering Department. They shall be waiting for you on the appointed schedule. Thank you.";
        echo "</div>";
      }
    }
  }
} else {
  // echo "0 results";
  require "calendar.php";
}


$conn->close();



        





?>

<script>
  $('#btn_reschedule').on('click', function() {
    console.log($(this).data("id"))

    delete_ajax("appointments", "`id` = '" + $(this).data("id") + "'");

    window.location.reload();
    // refresh_element("step_six");
    // renderCalendar();

  });


  // let btn_eng_confirm = document.querySelectorAll('.upload-signing');

  // btn_eng_confirm.forEach(btn => {
  //     btn.addEventListener('click', function handleClick(event) {



  // })
  // })



  $('#btn_app_proof_received').on('click', function() {

    // console.log($(this).data('signing-id'));

    //generate building permit    




    update_ajax("project_signing", "applicant_confirm", "1", "`id` = '" + $(this).data('signing-id') + "'");
    update_ajax("project", "status", "completed", "id = '<?php echo $project_id ?>'");

    // insert_ajax();
    insert_ajax("project_logs", "`id`, `project_id`, `action`, `timestamp`",
      "UUID(), '<?php echo $project_id ?>', 'Project Completed',CURRENT_TIMESTAMP()");

   

      $("#btn_app_proof_received").html("Confirmed")
      $("#btn_app_proof_received").css("background-color","#198754")
      $("#btn_app_proof_received").css("border-color","#198754")

      notifySuccess("Success","Signing proof received");

      sleep_time(2000);

      // refresh_element("step_six");
      window.reload();

  });
</script>