<!-- <h2>Review your application/Submit</h2> -->

<style>
    #step_four_forms .nav-pills {
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap;
    }

    #step_four_forms .nav-pills .nav-link {
        white-space: nowrap;
        color: #245a94;
    }

    #step_four_forms .nav-pills .nav-link.active {
        background-color: #245a94;
        color: white;
    }

    #step_four_forms .nav-pills .nav-link:hover {
        background-color: #245a94;
        color: white;
    }

    .no-table table,
    th,
    td {
        border: 1px solid black;
    }

    .no-table td {
        padding: 5px;
        width: 10px;
        height: 17px;
    }

    .no-table td>input {
        width: inherit;
        padding: 0px;
        border: transparent;
        font-size: small;
        font-weight: 700;
        text-align: center;
    }
</style>


<!-- check for missing/unfilled columns, display here -->

<!-- Button trigger modal submit_confirmation-->
<div class="row justify-content-end">
    <button type="button" class="btn btn-success white-text mx-4 my-2 fw-bold" id="submit_for_review_btn" data-bs-toggle="modal" data-bs-target="#submit_confirmation" style="width: auto;">
        SUBMIT FOR REVIEW
    </button>
</div>



<!-- Modal submit_confirmation -->
<div class="modal fade" id="submit_confirmation" tabindex="-1" aria-labelledby="submit_confirmationLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="submit_confirmationLabel">Confirm submission</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to submit your project for review? <br>
                <b>This will lock your project temporarily - you will not be able to make changes</b>
                while we send your forms and documents to designated departments.
                Please make sure everything is filled and checked before proceeding.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, I'll do it later</button>

                <form action="../php/project_submit_review.php" method="post">
                    <input name="project_id" value="<?php echo $project_id ?>" hidden>
                    <button type="submit" class="btn" style="background-color: #245a94; color: white;" id="btn_submit_for_review">Submit for review</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="step_four_forms">
    <ul class="nav nav-pills mb-0 nav-fill border border-bottom-0 m-2 p-3 py-1" id="forms" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="locational_clearance_tab" data-bs-toggle="pill" data-bs-target="#locational_clearance" type="button" role="tab" aria-controls="locational_clearance" aria-selected="true">Locational Clearance</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link " id="building_permit_tab" data-bs-toggle="pill" data-bs-target="#building_permit" type="button" role="tab" aria-controls="building_permit" aria-selected="false">Building Permit</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="sanitary_permit_tab" data-bs-toggle="pill" data-bs-target="#sanitary_permit" type="button" role="tab" aria-controls="sanitary_permit" aria-selected="true">Sanitary Permit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="electrical_permit_tab" data-bs-toggle="pill" data-bs-target="#electrical_permit" type="button" role="tab" aria-controls="electrical_permit" aria-selected="false">Electrical Permit</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="documents_tab" data-bs-toggle="pill" data-bs-target="#documents_table" type="button" role="tab" aria-controls="documents_table" aria-selected="false">Documents</button>
        </li>


    </ul>
    <div class="tab-content border border-top-0 mt-0 m-2 p-3" id="forms_content">
        <div class="tab-pane fade show active" id="locational_clearance" role="tabpanel" aria-labelledby="locational_clearance_tab" tabindex="0">


            <!-- <button onclick="printDiv('locational_form')">Print only the above div</button> -->

            <!-- LOCATIONAL CLEARANCE -->

            <?php require "form_locational.php"; ?>

            <!-- <form action="../components/form_locational.php?project=<?php //echo $project_id 
                                                                            ?>&locational=<?php echo $project_locational ?>" method="post" target="_blank">
                            <input type="text" class="print-set" name="open" value="1" hidden>
            </form> -->

            <button class="btn my-btn-blue my-3 mx-auto d-block" type="button" id="btn_print_locational">

                print
            </button>
        </div>



        <div class="tab-pane fade " id="building_permit" role="tabpanel" aria-labelledby="building_permit_tab" tabindex="0">

            <!-- BUILDING PERMIT -->
            <?php require "form_unified.php"; ?>

            <!-- <form action="../components/form_unified.php?project=<?php //echo $project_id 
                                                                        ?>&unified=<?php //echo $project_unified 
                                                                                    ?>" method="post" target="_blank">
                
                <input type="text" class="print-set" name="open" value="1" hidden>
            </form> -->
            <button class="btn my-btn-blue my-3 mx-auto d-block" type="button" id="btn_print_unified">
                <!-- <a href="document_print.php"  style="color: white; text-decoration: none;" target="_blank">Print</a> -->
                Print
            </button>

        </div>




        <div class="tab-pane fade" id="sanitary_permit" role="tabpanel" aria-labelledby="sanitary_permit_tab" tabindex="0">
            <!-- SANITARY PERMIT -->
            <?php require "form_sanitary.php"; ?>

            <!-- <form action="../components/form_sanitary.php?project=<?php echo $project_id ?>&sanitary=<?php echo $project_sanitary ?>" method="post" target="_blank">
                
                <input type="text" class="print-set" name="open" value="1" hidden>
            </form> -->

            <button class="btn my-btn-blue my-3 mx-auto d-block" type="button" id="btn_print_sanitary">
                <!-- <a href="document_print.php" style="color: white; text-decoration: none;" target="_blank">Print</a> -->
                Print
            </button>

        </div>
        <div class="tab-pane fade" id="electrical_permit" role="tabpanel" aria-labelledby="electrical_permit_tab" tabindex="0">
            <!-- ELECTRICAL PERMIT -->
            <?php require "form_electrical.php"; ?>

            <!-- <form action="../components/form_electrical.php?project=<?php echo $project_id ?>&electrical=<?php echo $project_electrical ?>" method="post" target="_blank">
                
                <input type="text" class="print-set" name="open" value="1" hidden>
            </form> -->

            <button class="btn my-btn-blue my-3 mx-auto d-block" type="button" id="btn_print_electrical">
                <!-- <a href="document_print.php"  style="color: white; text-decoration: none;" target="_blank">Print</a> -->
                Print
            </button>

        </div>
        <div class="tab-pane fade" id="documents_table" role="tabpanel" aria-labelledby="documents_table" tabindex="0">
            <!-- DOCUMENTS CHECK -->
            <?php //require "document_check.php"; 
            ?>
            <?php require "../components/document_check.php"; ?>


        </div>




    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        //locational
        $('#btn_print_locational').on('click', function() {
            // Step 1: Select the div element to copy
            const originalDiv = document.querySelector('#locational_form');
            // Step 2: Clone the div element
            const clonedDiv = originalDiv.cloneNode(true);
            // Step 3: Get input values
            const originalInputs = originalDiv.querySelectorAll('input');
            const inputValues = Array.from(originalInputs).map(input => input.value);

            // Open a new tab with document_print.php
            const destinationWindow = window.open('document_print.php');

            // Wait for the new window to load and then post the message
            destinationWindow.addEventListener('load', function() {
                // Post the cloned HTML and input values to the new window
                destinationWindow.postMessage({
                    html: clonedDiv.outerHTML,
                    values: inputValues
                }, '*');
            });
        })

        // unified
        $('#btn_print_unified').on('click', function() {
            // Step 1: Select the div element to copy
            const originalDiv = document.querySelector('#form_unified');
            // Step 2: Clone the div element
            const clonedDiv = originalDiv.cloneNode(true);
            // Step 3: Get input values
            const originalInputs = originalDiv.querySelectorAll('input');
            const inputValues = Array.from(originalInputs).map(input => input.value);

            // Open a new tab with document_print.php
            const destinationWindow = window.open('document_print.php');

            // Wait for the new window to load and then post the message
            destinationWindow.addEventListener('load', function() {
                // Post the cloned HTML and input values to the new window
                destinationWindow.postMessage({
                    html: clonedDiv.outerHTML,
                    values: inputValues
                }, '*');
            });
        })

        //sanitary
        $('#btn_print_sanitary').on('click', function() {
            // Step 1: Select the div element to copy
            const originalDiv = document.querySelector('#sanitary_form');
            // Step 2: Clone the div element
            const clonedDiv = originalDiv.cloneNode(true);
            // Step 3: Get input values
            const originalInputs = originalDiv.querySelectorAll('input');
            const inputValues = Array.from(originalInputs).map(input => input.value);

            // Open a new tab with document_print.php
            const destinationWindow = window.open('document_print.php');

            // Wait for the new window to load and then post the message
            destinationWindow.addEventListener('load', function() {
                // Post the cloned HTML and input values to the new window
                destinationWindow.postMessage({
                    html: clonedDiv.outerHTML,
                    values: inputValues
                }, '*');
            });
        })

        //electrical
        $('#btn_print_electrical').on('click', function() {
            // Step 1: Select the div element to copy
            const originalDiv = document.querySelector('#electrical_form');
            // Step 2: Clone the div element
            const clonedDiv = originalDiv.cloneNode(true);
            // Step 3: Get input values
            const originalInputs = originalDiv.querySelectorAll('input');
            const inputValues = Array.from(originalInputs).map(input => input.value);

            // Open a new tab with document_print.php
            const destinationWindow = window.open('document_print.php');

            // Wait for the new window to load and then post the message
            destinationWindow.addEventListener('load', function() {
                // Post the cloned HTML and input values to the new window
                destinationWindow.postMessage({
                    html: clonedDiv.outerHTML,
                    values: inputValues
                }, '*');
            });
        })

        $('#submit_for_review_btn').on('click', function() {


            var progress_bar_1_value = $("#progress_bar_step_1").html().replace("%", ""); // Remove the "%" sign
            var progress_bar_1_value = parseInt(progress_bar_1_value, 10); // Convert to integer

            var progress_bar_2_value = $("#progress_bar_step_2").html().replace("%", ""); // Remove the "%" sign
            var progress_bar_2_value = parseInt(progress_bar_2_value, 10); // Convert to integer


            if (!(progress_bar_1_value >= 80) || !(progress_bar_2_value >= 80)) {
                // Your code here when either condition is not true
                $("#btn_submit_for_review").attr("disabled", "disabled");
                $("#btn_submit_for_review").attr("title", "Please fill out the required fields at least 80%");


                var emptyFields = $("#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]")
                    .filter(function() {
                        // Check for empty values or unchecked radio buttons
                        return $(this).val() === "" || ($(this).is(':radio') && !$("input[name='" + this.name + "']:checked").length);
                    });

                if (emptyFields.length > 0) {
                    // There are empty fields
                    console.log("Some required fields are empty.");
                    alert("Some required fields are empty.");

                    // Do something with the emptyFields if needed
                    emptyFields.css("border", "2px solid red");
                } else {
                    // All required fields are filled
                    console.log("All required fields are filled.");
                    alert("All required fields are filled.");

                }



                var emptyInputs = $("#step_one_common_info input").filter(function() {
                    return $(this).val().trim() === ''; // Check if the value is empty after trimming whitespace
                });

                if (emptyInputs.length > 0) {
                    // There are empty input fields
                    console.log("Some input fields are empty.");
                    // Do something with the emptyInputs if needed
                    emptyInputs.css("border", "2px solid red");
                } else {
                    // All input fields have values
                    console.log("All input fields have values.");
                }




            }else{
                // console.log("we good")
                try {
                    $("#btn_submit_for_review").removeAttr("disabled");
                $("#btn_submit_for_review").removeAttr("title");
                    
                } catch (error) {
                    console.log(error)
                }
            
            }



        })




    })
</script>