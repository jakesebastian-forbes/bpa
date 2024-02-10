<?php

print_r($_POST);
print_r($_FILES);

$conn = mysqli_connect("localhost", "root", "", "bpa") or die(mysqli_error($conn));

$file_name = mysqli_real_escape_string($conn, $_FILES['file']['name']);
$file_data = mysqli_real_escape_string($conn, file_get_contents($_FILES['file']['tmp_name']));
$doc_group = mysqli_real_escape_string($conn, $_POST['doc_group']);
$doc_type = mysqli_real_escape_string($conn, $_POST['doc_type']);

// Use proper syntax for UUID or generate a unique identifier using uniqid
// $uuid = mysqli_real_escape_string($conn, uniqid());

$query = "INSERT INTO `project_signing_docs`(`id`, `file_name`, `project_signing_id`, `signing_proof`, `type`, `timestamp`) 
                                  VALUES (UUID(), '$file_name', '$doc_group', '$file_data', '$doc_type', CURRENT_TIMESTAMP())";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_error($conn));
}

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
