<?php

require "php/semaphore_api.php";



$contact_no = '09550591149';
$full_name = "Reignoel Rodriguez";
$text_message = "Hello ".ucwords($full_name).", your building permit application for project : ".$project_title." has been fully APPROVED.
For more information, please login to your account.
- BuildNAS";
send_text($contact_no,$text_message);
?>