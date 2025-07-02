<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "connect.php";

    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Attempt to insert the data into the database
    $sql = "INSERT INTO appoint (Name, Email, Mobile_no, Service_type, Message) VALUES ('$name', '$email', '$mobile', '$service', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
        echo "Records added successfully.";
    } else {
        // Error handling
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
