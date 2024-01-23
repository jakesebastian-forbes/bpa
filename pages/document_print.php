<?php

session_start();
// print_r($_SESSION);

$privilege = "applicant";
require '../php/page_restriction.php';

require "../php/db_func.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php 
  $page_title = "Document | Print";
  require "page_header.php"?>




</head>

<body>

  <div id="flex_container">

    <?php require "../components/web_navbar.php" ?>

    <div id="flex_main">

    

      <?php require "../components/applicant_menu.php" ?>


    <div id="print_cont">


    </div>





    </div>
          <?php require "../components/web_footer.php" ?>

  </div>


</body>

<script>
  $('a[href="applicant_home.php"] > li').addClass("my-active") //highlight active page in offcanvas menu

document.addEventListener("DOMContentLoaded", () => {

    // document.getElementById("print_cont").innerHTML=localStorage.getItem("form");
    // // localStorage.getItem("from_ids")
    // // localStorage.getItem("from_values")

    // console.log(JSON.parse(localStorage.getItem("form_ids")))
    // console.log(JSON.parse(localStorage.getItem("form_values")))

  // window.print();



})

// Add an event listener to receive the message
window.addEventListener('message', function (event) {
    if (event.origin !== window.origin) {
        // Ensure that the message comes from the same origin for security
        return;
    }

    // Step 4: Paste the HTML content to the new document
    const destinationElement = document.querySelector('body');
    destinationElement.innerHTML = event.data.html;

    // Step 5: Adjust input values if needed
    const clonedInputs = document.querySelectorAll('input');
    event.data.values.forEach((value, index) => {
        // Set the value of cloned input to the corresponding value from the original form
        clonedInputs[index].value = value;
    });
});

</script>

</html>