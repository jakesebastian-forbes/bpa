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

    // Fetch and display data based on where_clause
    $query = "SELECT
        barangay,
        COUNT(project_id) AS project_count
    FROM
        vw_project_basics
    $where_clause
    GROUP BY
        barangay
    ORDER BY
        project_count DESC";

    $result = $conn->query($query);
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if($row['barangay'] == '' || $row['barangay'] == null){
                $barangay = 'Undefined';
            }else{
                $barangay = $row['barangay'];
            }


            $data[] = array(
                'barangay' => $barangay,
                'project_count' => (int)$row['project_count'] // Convert to integer
            );
        }
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'No data available.'));
    }

    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
