<?php
include 'db-connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Escape user inputs for security
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Attempt to insert data
    $sql = "INSERT INTO contact_us (customer_name, email, message) VALUES ('$customer_name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        // Record inserted successfully, redirect to contact_us.php
        header("Location: contact_us.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>