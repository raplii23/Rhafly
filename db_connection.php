<?php
$host = 'localhost';  // Database host
$user = 'root';       // Database username
$password = '';       // Database password (leave empty for XAMPP default)
$dbname = 'UAS'; // Replace with your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
