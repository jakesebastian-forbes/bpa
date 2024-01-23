<?php
// chart_line.php

require "db_func.php";
$conn = db_conn();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Extract where_clause from the POST data
    $where_clause = $_POST['where_clause'];

    // Fetch and display data based on where_c// Fetch and display data based on where_clause
    $query = "SELECT DATE(date_created) AS creation_date, COUNT(id) AS project_count
FROM project
$where_clause
GROUP BY DATE(date_created);";
    $result = $conn->query($query);
    $data = array('creation_date' => array(), 'project_count' => array());

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data['creation_date'][] = $row['creation_date'];
            $data['project_count'][] = (int)$row['project_count']; // Convert to integer
        }
        // echo $where_clause;
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'No data available.'));
    }


    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
