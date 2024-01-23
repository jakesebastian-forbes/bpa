<?php

require "db_func.php";
$conn = db_conn();

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO chat_messages (`id`,`from`, `to`, `message`) VALUES (UUID(),?, ?, ?)");
    
    // Check if the prepare statement was successful
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
  
    $stmt->bind_param("sss", $from, $to, $message);

    // set parameters and execute
    $from = $_POST['send_by'];
    $to = $_POST['send_to'];
    $message = $_POST['message'];

    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
