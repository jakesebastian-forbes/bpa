<div class="d-flex">
<h2>Your building permit is now ready!</h2>


        <button class="btn my-btn-blue mx-3 mb-2"  type="button" id="btn_print_certificate">
            <!-- <a href="document_print.php"  style="color: white; text-decoration: none;" target="_blank">Print</a> -->
            Print
        </button>

</div>




<?php
require "certificate_building_permit.php";?>



<script>
    
document.addEventListener("DOMContentLoaded", () => {

//building permit certificate
$('#btn_print_certificate').on('click', function() {
    // Step 1: Select the div element to copy
    const originalDiv = document.querySelector('#cert_cont');
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



})


</script>