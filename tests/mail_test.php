<?php

require "php\mail_send.php";

$full_name = "grace note";
$message = "Hello $full_name we {are pleased/regret} to inform you that you project, {project_title} has been 
{approved/returned} by {department} department. {comment}. <br><br> If you have any question or concern, please do 
not hesistate to contact our department administrators. <br><br> This is an automated message. Do NOT reply. <br><br>
- <a href = 'https://buildnas.online/'>BuildNAS</a>";

send_email('gracenote0323@gmail.com','Grace Note','Project Status Update',$message);