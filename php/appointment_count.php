<?php
// Establish your database connection here
$db = new mysqli('localhost', 'root', '', 'bpa');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$dateString = $_GET['schedule_date']; // You may want to sanitize and validate this input

// echo $dateString;
// Parse the date string using DateTime
$date = DateTime::createFromFormat('Y-n-j', $dateString);

// Format the date as "Y-m-d"
$formattedDate = $date->format('Y-m-d');

$query = "SELECT COUNT(*) as count FROM appointments WHERE `schedule_date` = '$formattedDate' AND `eng_app` = '1'";
$result = $db->query($query);
$data = $result->fetch_assoc();
array_push($data,$dateString);
echo json_encode($data);

$db->close();
?>
