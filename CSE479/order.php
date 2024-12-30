<?php
session_start();

// Include the database connection file
include 'db-connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data from form
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $message = $_POST['content'];

    // Get userId from session
    $userId = $_SESSION['userId'];  // Assuming 'userId' is the key in the session containing the user ID

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO product_inquiry (userId, productId, message, quantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $userId, $product_id, $message, $quantity);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to product_details.php with the encoded product_id
        header("Location: product_details.php?id=" . urlencode($product_id));
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }


    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>