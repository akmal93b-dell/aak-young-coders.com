<?php
$host = "localhost";
$username = "root"; // Default for XAMPP
$password = "";     // Default for XAMPP
$database = "young_coders";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
