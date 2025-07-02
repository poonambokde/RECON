<?php
// Include connection file
include 'connect.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO contact (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject', '$message')";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
