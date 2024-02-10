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
    .nav-link.active {
        background-color: #245a94 !important;
        margin-top: 10px;
        color: #EBECF1;
    }



    .nav-link:hover {
        color: pink;
    }

    .upload-signing {
        background-color: #245a94;
        float: right;
        margin-top: -90px;
        font-weight: bold;

    }
</style>

<body style="background-color: #EBECF1;">

    <?php
    // print_r($_SESSION);

    ?>
    <div id="flex_container">

        <?php require "../components/web_navbar.php";
        require "../components/admin_signing_proof_card.php"; ?>

        <div id="flex_main">

            <div class="p-5 pt-4">

                <h2 class="fw-bold">
                    UPLOAD SIGNED DOCUMENTS
                </h2>

                <?php
                // Assuming you have a function `full_query` for executing queries

                // Get data from the database
                $assumed_signed = full_query("SELECT * FROM `vw_project_approved_passed` WHERE admin_confirm = '0';");

                if (mysqli_num_rows($assumed_signed) > 0) {
                    echo "<div class='row'>";
                    echo "<div class='col-3'>";
                    echo "<div class='nav flex-column nav-pills me-3' id='v-pills-tab' role='tablist' aria-orientation='vertical' >";

                    // Counter for tab IDs
                    $counter = 1;


                    while ($row = mysqli_fetch_assoc($assumed_signed)) {
                        // Generate unique IDs for each tab and tab pane
                        $tab_id = 'v-pills-profile-tab-' . $counter;
                        $tab_pane_id = 'v-pills-profile-' . $counter;

                        echo "<button class='nav-link ' id='$tab_id' data-bs-toggle='pill' data-bs-target='#$tab_pane_id'
        type='button' role='tab' aria-controls='$tab_pane_id' aria-selected='false' >";
                        echo $row['project_title'] . " - " . $row['applicant_name'];
                        echo "</button>";

                        $counter++;
                    }

                    echo "</div>";
                    echo "</div>";
                    echo "<div class='col '>";
                    echo "<div class='tab-content' id='v-pills-tabContent'>";

                    // Reset the data pointer back to the beginning
                    mysqli_data_seek($assumed_signed, 0);

                    // Counter for tab panes
                    $counter = 1;


                    while ($row = mysqli_fetch_assoc($assumed_signed)) {
                        // Generate unique ID for each tab pane
                        $tab_pane_id = 'v-pills-profile-' . $counter;


                        echo "<div class='tab-pane fade' id='$tab_pane_id' role='tabpanel' aria-labelledby='v-pills-profile-tab'>";
                        // Content for each tab pane
                        // print_r($row);


                        // echo "<h3>Content for " . $row['applicant_id'] . "</h3>";
                        // echo "<p>Appointment ID: " . $row['appointment_id'] . "</p>";
                        echo "<p class='fw-bold'>Project : " . $row['project_title'] . "</p>";
                        echo "<p class='fw-bold' style='margin-top: -7px;'>Applicant: " . $row['applicant_name'] . "</p>";



                        echo "<button type='button' class = 'upload-signing btn btn-primary' 
        data-signing-id = '" . $row['project_signing_id'] . "'>Upload Signing Proof</button>";
                        // echo "<p>project_signing_ID: " . $row['project_signing_id'] . "</p>";

                        echo '
        <div id="official_receipt" class = "row m-2">
        <div class = "row">
            <div class = "col">
                <h5>Official Receipt Number</h5>
        
             </div>
             <div class = "col">
               <h5>Date Issued</h5>
     
             </div>
        </div>

        <div class = "row">
        <div class = "col">
        <input type="number" name="" id="official_receipt_inp_' . $row['project_id'] . '" 
        class = "official_receipt_inp form-control w-50" required>

    
         </div>
         <div class = "col">
         <input type="date" name="" id=""  class = "or_date_inp form-control w-50" required>

 
         </div>
    </div>

        

</div>

        ';


                        // Add more content as needed
                        proof_document_card($row['project_signing_id'], $row['project_signing_id'] . "_Signing", "Signing", "required");
                        // proof_document_card($row['project_signing_id'], $row['project_signing_id'] . "_Officials", "Officials", "required");
                        // proof_document_card($row['project_signing_id'], $row['project_signing_id'] . "_Applicant", "Applicant", "required");
                        // proof_document_card($row['project_signing_id'], $row['project_signing_id'] . "_Group_Photo", "Group Photo", "required");
                        proof_document_card($row['project_signing_id'], $row['project_signing_id'] . "_Proof_of_Receipt", "Official Receipt", "required");




                        echo "</div>";




                        $counter++;
                    }

                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

                    echo "<script>";
                    echo "document.addEventListener('DOMContentLoaded', () => {";

                    // Your additional JavaScript logic can go here

                    echo "});";
                    echo "</script>";
                } else {
                    echo "No pending uploads.";
                }
                // $project_signing_id = '0e3c757d-ad35-11ee-9593-0a0027000017';

                // proof_document_card($project_signing_id, "Signing", "Signing");
                // proof_document_card($project_signing_id, "Officials", "Officials");
                // proof_document_card($project_signing_id, "Applicant", "Applicant");
                // proof_document_card($project_signing_id, "GroupPhoto", "Group Photo");
                ?>




            </div>







        </div>
        <?php require "../components/web_footer.php" ?>

    </div>

    <?php require "../components/admin_menu.php" ?>




    <script>
        document.addEventListener('DOMContentLoaded', () => {

            $('a[href="admin_<?php echo strtolower($_SESSION['department']) ?>_proof.php"] > li').addClass("my-active")




            let btn_eng_confirm = document.querySelectorAll('.upload-signing');

            btn_eng_confirm.forEach(btn => {
                btn.addEventListener('click', function handleClick(event) {

                    // console.log("btn clicked")
                    // console.log($(this).data('signing-id'));
                    // console.log($(this).parent())
                    // console.log($(this).parent()[0].id)


                    //check for missing fields


                    let proof_group = $(this).parent()[0].id;
                    console.log("Proof group : ", proof_group)

                    let project_id = $("#" + proof_group + " input.official_receipt_inp")[0].id;

                    project_id = extractIdFromString(project_id, "official_receipt_inp_");
                    console.log("Project-id : ", project_id)


                    var step_three_empty = $("#" + proof_group + " .document-card.required > div.empty")

                    let or_inp_no = $("#" + proof_group + " .official_receipt_inp").val();
                    let or_inp_date = $("#" + proof_group + " .or_date_inp").val();

                    // console.log(or_inp_no);
                    // console.log(or_inp_date);

                    let req_1 = false;
                    let req_2 = false;

                    if (or_inp_date == '' || or_inp_no == '') {
                        alert('Official Receipt is missing a required value.')
                    } else {

                        let parsedGivenDate = new Date(or_inp_date);
                        let currentDate = new Date();

                        // console.log(parsedGivenDate.toDateString());
                        // console.log(currentDate.toDateString());

                        // Compare the dates
                        if (parsedGivenDate > currentDate) {
                            console.log('The given date has already passed.');
                            alert('The given date cannot be in advanced. Please select a valid date.');
                            $("#" + proof_group + " .or_date_inp").val('');
                        } else {
                            req_1 = true;
                        }


                    }


                    if (step_three_empty.length > 0) {
                        // There are empty input fields
                        console.log("Some input fields are empty.");
                        alert('Some input fields are empty.')

                        // Do something with the emptyInputs if needed
                        step_three_empty.parent().css("cssText", "border-color: red !important;");
                    } else {
                        // All input fields have values
                        console.log("All input fields have values.");
                        req_2 = true;
                    }
                    // console.log("empty_input: ", step_three_empty.length)
                    let signing_id = $(this).data('signing-id');

                    if (req_1 == true && req_2 == true) {

                        //update project signing admin_confirm
                        // update_ajax("project_signing", "admin_confirm", "1", "`id` = '"+project_id+"'");

                        // get or_no, receipt_date
                        console.log("OW AR : ", or_inp_no);
                        console.log("OW AR Date : ", or_inp_date);

                        // Function to get data with Promises
                        function getDataAsync(query) {
                            return new Promise((resolve, reject) => {
                                getData(query, resolve, reject);
                            });
                        }

                        async function main() {
                            try {
                                // Get occupancy type
                                let occupancyTypeQuery = "SELECT f_unified.application_type, vw_project_ids.project_id FROM vw_project_ids JOIN f_unified ON vw_project_ids.unified = f_unified.id WHERE vw_project_ids.project_id = '" + project_id + "'";
                                let occupancyTypeResult = await getDataAsync(occupancyTypeQuery);
                                let occupancy_type = occupancyTypeResult[0].application_type;

                                console.log("occ_type var:", occupancy_type);

                                // Get current building official ID
                                let bldgOfficialResult = await getDataAsync("SELECT * FROM `building_official` WHERE `status` = 'active'");
                                let bldg_official_id = bldgOfficialResult[0].id;

                                console.log("Bldg off-id:", bldg_official_id);

                                // Generate building permit no
                                let buildingPermitResult = await getDataAsync("SELECT MAX(date_issued) as `latest`,`type`, `permit_no` FROM `certificate_building_permit`");
                                console.log("Success:", buildingPermitResult);

                                // Function to format permit number
                                function formatPermitNumber(permitNumber) {
                                    if (!permitNumber) {
                                        return null;
                                    }

                                    const [, year, batch, count] = /^(\d{4})-(\d{2})-(\d{4})$/.exec(permitNumber) || [];
                                    if (!year || !batch || !count) {
                                        return null;
                                    }

                                    return {
                                        year: parseInt(year),
                                        batch: parseInt(batch),
                                        count: parseInt(count)
                                    };
                                }

                                // Function to generate a new permit number
                                function generateNewPermitNumber(permitInfo) {
                                    if (!permitInfo) {
                                        return null;
                                    }

                                    permitInfo.count += 1;
                                    if (permitInfo.count > 9999) {
                                        permitInfo.count = 1;
                                        permitInfo.batch += 1;
                                    }

                                    let newPermitNumber = `${permitInfo.year}-${("00" + permitInfo.batch).slice(-2)}-${("0000" + permitInfo.count).slice(-4)}`;
                                    return newPermitNumber;
                                }

                                // Example usage
                                let permitInfo = formatPermitNumber(buildingPermitResult[0].permit_no);
                                let newPermitNumber;
                                if (permitInfo) {
                                    newPermitNumber = generateNewPermitNumber(permitInfo);
                                    console.log('Original Permit Number:', buildingPermitResult[0].permit_no);
                                    console.log('New Permit Number:', newPermitNumber);
                                } else {
                                    console.log('Invalid permit number retrieved from the database.');
                                }

                                console.clear();

                                console.log("Project_id ", project_id);
                                console.log("bldg ", bldg_official_id);
                                console.log("OR_no", or_inp_no);
                                console.log("OR_date", or_inp_date);
                                console.log("Occu_type", occupancy_type);
                                console.log("newPermitNumber", newPermitNumber);

                                // create a building permit
                                insert_ajax("certificate_building_permit", "`id`, `type`, `permit_no`, `or_no`, `date_paid`, `date_issued`, `project_id`,`building_official`",
                                    `UUID(), '${occupancy_type}', '${newPermitNumber}', '${or_inp_no}', '${or_inp_date}',CURRENT_TIMESTAMP(), '${project_id}','${bldg_official_id}'`);


                                update_ajax("project_signing", "admin_confirm", "1", "`id` = '" + signing_id + "'");

                                console.log("yehey");

                            } catch (error) {
                                console.error("Error:", error);
                            }
                        }

                        // Invoke the main function
                        main();


                    } else {
                        console.log("sad")

                    }









                })
            })




        });
    </script>

</body>


</html>