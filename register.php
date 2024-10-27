<?php
include 'connect.php'; // Includes the database connection

// Fetch form data
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$mobile = $_POST['mobile'];
$mail = $_POST['mail'];
$course = $_POST['course'];

// Insert the data into ENROLLMENT table
$query = "INSERT INTO ENROLLMENT (NAME, ROLLNO, MOBILE, MAIL, COURSE) VALUES('$name','$rollno','$mobile','$mail','$course')";

if ($conn->query($query)) {
    include 'page.php'; // Redirect to enrollment history page after successful registration
} else {
    echo "Enrollment Failed: " . $conn->error;
}
?>
