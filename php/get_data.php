<?php
// Replace these with your actual database credentials


require "db_func.php";

// Create a database connection
$conn = db_conn();

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the query parameter from the AJAX request
$query = $_POST['query'];

// Execute the query
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    $data = array();

    // Fetch the result rows as an associative array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Convert the result to JSON and send it back
    echo json_encode($data);
} else {
    // If the query fails, send an error message
    echo json_encode(array('error' => 'Query failed'));
}

// Close the database connection
$conn->close();
?>
