<?php
// print_r($_POST);

require "db_func.php";
$conn = db_conn();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // get document id
    $doc_id = $_POST['doc_id'];

    // Fetch and display comments for the specific document
    $query = "SELECT documents_comment.id, documents_comment.doc_id, documents_comment.comment,
              vw_admin_basics.full_name, documents_comment.timestamp
              FROM `documents_comment`
              JOIN vw_admin_basics ON vw_admin_basics.id = documents_comment.comment_by
              WHERE `doc_id` = '$doc_id' ORDER BY timestamp ";

    $result = $conn->query($query);

    if ($result === false) {
        throw new Exception("Query failed: " . $conn->error);
    }

    $rows = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        // Set the Content-Type header to application/json
        header('Content-Type: application/json');
        echo json_encode($rows);
    } else {
        // echo 'No comments yet.';
        header('Content-Type: application/json');
        echo json_encode($rows);

    }

    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Error code: " . $e->getCode() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
}

?>
