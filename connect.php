<?php
$servername = "localhost";
$username = "root";
$password = "787898"; // your password
$dbname = "STUDENT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
