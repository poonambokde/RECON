<?php
// Database credentials
$servername = "localhost"; // Change this if your database is on a different server
$username = "root";
$password = "";
$database = "test"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
