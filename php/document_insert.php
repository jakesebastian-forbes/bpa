<?php

print_r($_POST);
print_r($_FILES);

$conn = mysqli_connect("localhost", "root", "", "bpa") or die($conn);

$table = "documents";
$column = "`id`, `doc_group`,`type`,`file_name`, `file`, `date_uploaded`";

$file_name =  $_FILES['file']['name'];
$file_data = mysqli_real_escape_string($conn, file_get_contents($_FILES['file']['tmp_name']));
$doc_group = $_POST['doc_group'];
$doc_type = $_POST['doc_type'];



$query = "INSERT INTO `$table` ($column)
VALUES(UUID(),'$doc_group','$doc_type','$file_name','$file_data',current_timestamp())";


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();