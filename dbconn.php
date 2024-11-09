<?php
$host = 'localhost';
$dbname = 'teach_track';
$user = 'root';  // Make sure this is the correct username
$pass = '';      // Ensure this is the correct password

// Correct order of parameters
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection success";
}
?>
