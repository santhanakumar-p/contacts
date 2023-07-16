<?php

// Database connection settings
$host = "localhost";
$dbName = "contacts";
$username = "root";
$password = "";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if ($conn) {
    //     echo "Connected Successfully";
    // } else {
    //     echo "Not Connected Successfully";
    // }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Database Connection Error: " . $e->getMessage();
}
