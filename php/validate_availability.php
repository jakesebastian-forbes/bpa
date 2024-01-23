<?php

$host = 'localhost';
$dbname = 'bpa';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Check if the username already exists in the database
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM applicant WHERE username = ?");
    $stmt->execute([$username]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo '<span style="color: red;">Username already taken</span>';
    } else {
        echo '<span style="color: green;">Username available</span>';
    }
} else {
    echo 'Invalid request';
}

?>
