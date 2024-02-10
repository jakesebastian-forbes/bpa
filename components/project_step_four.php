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
                <div id="modal_submit_confirm_message">
                    Are you sure you want to submit your project for review? <br>
                    <b>This will lock your project temporarily - you will not be able to make changes</b>
                    while we send your forms and documents to designated departments.
                    Please make sure everything is filled and checked before proceeding.
                </div>

                <div id="missing_fields" hidden>
                    <p class="mt-2" style="color:red">
                        Input is missing! Kindly complete all the necessary fields to proceed.</p>
                    <p class="m-0">Common information : <span id="curr_progress_one_one" class = "fw-bold"></span></p>
                    <p class="m-0">Fill up forms : <span id="curr_progress_one_two" class = "fw-bold"></span></p>
                    <p class="m-0">Upload documents : <span id="curr_progress_one_three" class = "fw-bold"></span></p>

                </div>

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

function update_all_progress_bar(){


let inp_required = '#step_one_common_info input[required]';
update_progress_bar("progress_bar_step_1", inp_required, inp_required)
update_progress_bar("progress_bar_step_2", "#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]",
"#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]")
update_progress_bar("progress_bar_step_3", "#step_three_documents .document-card.required",
"#step_three_documents .document-card.required > div.empty")

}




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

        // Attach click event listeners to each button
  document.getElementById('step_one_tab').addEventListener('click', function() {
    update_all_progress_bar()
  });

  document.getElementById('step_two_tab').addEventListener('click', function() {
    update_all_progress_bar()

  });

  document.getElementById('step_three_tab').addEventListener('click', function() {
    update_all_progress_bar()

  });

        $('#submit_for_review_btn').on('click', function() {

            update_all_progress_bar();

            let progress_bar_1_value = parseInt(getCurrentPercentage("progress_bar_step_1"), 10);
            let progress_bar_2_value = parseInt(getCurrentPercentage("progress_bar_step_2"), 10);
            let progress_bar_3_value = parseInt(getCurrentPercentage("progress_bar_step_3"), 10);

            console.log(progress_bar_1_value)
            console.log(progress_bar_2_value)
            console.log(progress_bar_3_value)



            if (!(progress_bar_1_value == 100) || !(progress_bar_2_value == 100) || !(progress_bar_3_value == 100)) {


                alert("Some required fields are empty.");


                $("#modal_submit_confirm_message").attr("hidden", "hidden")

                // Your code here when either condition is not true
                $("#btn_submit_for_review").attr("disabled", "disabled");
                $("#btn_submit_for_review").attr("title", "Please fill out the required fields.");

                $("#missing_fields").removeAttr("hidden");




                var step_one_empty = $("#step_one_common_info input[required]").filter(function() {
                    return $(this).val().trim() === ''; // Check if the value is empty after trimming whitespace
                });

                if (step_one_empty.length > 0) {
                    // There are empty input fields
                    console.log("s1 Some input fields are empty.");
                    // Do something with the emptyInputs if needed
                    step_one_empty.css("border", "2px solid red");


                } else {
                    // All input fields have values
                    console.log("s1 All input fields have values.");
                }


                var step_two_empty = $("#step_two_wrapper input[required], #step_two_wrapper select[required], #step_two_wrapper input[type='radio'][required]")
                    .filter(function() {
                        // Check for empty values or unchecked radio buttons
                        return $(this).val() === "" || ($(this).is(':radio') && !$("input[name='" + this.name + "']:checked").length);
                    });

                if (step_two_empty.length > 0) {
                    // There are empty fields
                    console.log("s2 Some required fields are empty.");
                    // alert("Some required fields are empty.");

                    // Do something with the emptyFields if needed
                    step_two_empty.css("border", "2px solid red");
                } else {
                    // All required fields are filled
                    console.log(" step 2 All required fields are filled.");
                    // alert("All required fields are filled.");

                }


                var step_three_empty = $("#step_three_documents .document-card.required > div.empty")
                // .filter(function() {
                //     return $(this).val().trim() === ''; // Check if the value is empty after trimming whitespace
                // });

                if (step_three_empty.length > 0) {
                    // There are empty input fields
                    console.log("s3 Some input fields are empty.");
                    // Do something with the emptyInputs if needed
                    step_three_empty.parent().css("cssText", "border-color: red !important;");
                } else {
                    // All input fields have values
                    console.log("s3 All input fields have values.");
                }

                console.log(step_one_empty.length)
                console.log(step_one_empty)

                // let element = step_one_empty[0]

                // element.scrollIntoView({
                //     behavior: "smooth", // You can use "auto" or "smooth" for scrolling behavior
                //     block: "start",     // You can use "start", "center", "end", or "nearest"
                //     inline: "nearest"   // You can use "start", "center", "end", or "nearest"
                // });

                // // Optionally, you can focus on the element as well
                // element.focus();

                console.log(step_two_empty.length)
                console.log(step_three_empty.length)

                $("#curr_progress_one_one").html(step_one_empty.length)
                $("#curr_progress_one_two").html(step_two_empty.length)
                $("#curr_progress_one_three").html(step_three_empty.length)




            } else {
                // console.log("we good")
                try {

                    $("#modal_submit_confirm_message").removeAttr("hidden")


                    $("#btn_submit_for_review").removeAttr("disabled");
                    $("#btn_submit_for_review").removeAttr("title");

                    $("#missing_fields").attr('hidden');
                    $("#missing_fields").html('');


                } catch (error) {
                    console.log(error)
                }

            }



        })


        $('#searchInput').on('input', function() {
            var filterValue = $(this).val().toLowerCase();
            $('#table_documents tr:gt(0)').each(function() {
                var textToFilter = $(this).find('td:lt(3)').text().toLowerCase();
                $(this).toggle(textToFilter.includes(filterValue));
            });
        });

    


    })

    $(document).ready(function() {
            update_all_progress_bar()



        })

</script>