<?php


function getSubstringBetween($string, $start, $end) {
    $startPos = strpos($string, $start);
    $endPos = strpos($string, $end, $startPos + strlen($start) + 1);

    if ($startPos !== false && $endPos !== false) {
        $substring = substr($string, $startPos + strlen($start), $endPos - $startPos - strlen($start));
        return $substring;
    }

    return false; // Return false if start or end not found
}


function formatDate($dateString) {
    $dateTime = new DateTime($dateString);
    return $dateTime->format('M j, Y g:i A');
}

function formatDateOnly($dateString) {
    $dateTime = new DateTime($dateString);
    return $dateTime->format('M j, Y');
}

function formatTimeOnly($dateString) {
    $dateTime = new DateTime($dateString);
    return $dateTime->format('g:i A');
}


function formatAddress($addressString){
    $formatted_address = preg_replace('/,+/', ',', ltrim($addressString, ','));
    return $formatted_address;
}




function single_select($query) {


    // Create a connection
    $conn = db_conn();

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Execute the query
    $result = $conn->query($query);

    // Check for errors in the query
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    // Fetch a single value from the result (assuming a single row, single column result)
    $row = $result->fetch_assoc();
    $value = $row ? reset($row) : null;

    // Close the connection
    $conn->close();

    // Return the retrieved value
    return $value;
}

?>