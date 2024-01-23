<?php
// chat_get_messages.php

require "db_func.php";
$conn = db_conn();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Extract sender and receiver IDs from the POST data
    $senderId = $_GET['senderId'];
    $receiverId = $_GET['receiverId'];

    // Fetch and display messages for the specific sender and receiver
    $query = "SELECT * FROM chat_messages WHERE (`from` = '$senderId' AND `to` = '$receiverId') OR 
    (`from` = '$receiverId' AND `to` = '$senderId') ORDER BY timestamp ";
    $result = $conn->query($query);
    $rows = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
            // echo "<br>";
            // echo '<div class="message">' . $row['message'] . '</div>';
        }
        echo json_encode($rows);



    } else {
        echo 'No messages yet.';
    }

    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
