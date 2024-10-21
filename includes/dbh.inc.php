<?php
$host = 'localhost'; // Database host
$user = 'root'; // Database user
$password = ''; // Database password
$dbname = 'travel_and_tours_db'; // Database name

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
