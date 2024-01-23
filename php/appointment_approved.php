<?php
// Establish your database connection here
$conn = new mysqli('localhost', 'root', '', 'bpa');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dateString = $_GET['schedule_date']; // You may want to sanitize and validate this input

// Parse the date string using DateTime
$date = DateTime::createFromFormat('Y-m-d', $dateString);

// Format the date as "Y-m-d"
$formattedDate = $date->format('Y-m-d');

$query = "SELECT * FROM `vw_appointments` WHERE `schedule_date` = '$formattedDate' AND eng_app = '1'";
// $result = $conn->query($query);
// $data = $result->fetch_assoc();
$data = array();


$result = $conn->query($query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        // echo $row['schedule_date'];
        // echo $row['schedule_time'];
        // print_r($row);

        // echo " data : ".$data;
        // echo "///data string ".$dateString;
        array_push($data,$row);

    }
}
// echo "json_encode";
echo json_encode($data);

$conn->close();
?>
