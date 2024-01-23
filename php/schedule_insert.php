<?php
session_start();
print_r($_SESSION);

print_r($_POST);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bpa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO `appointments`(`id`, `applicant`,`project`, `schedule_date`, `schedule_time`) VALUES (UUID(),?,?, ?, ?)");
$stmt->bind_param("ssss", $applicant,$project,$schedule_date, $schedule_time);

// set parameters and execute
$applicant = $_SESSION['user_id'];
$schedule_date = $_POST['sched_req_date_val'];
$schedule_time = $_POST['sched_req_time_val'];

$schedule_time = date("H:i", strtotime($schedule_time));
// echo $schedule_time;

$project = $_POST['project_id'];


$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();


// return to previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();

?>