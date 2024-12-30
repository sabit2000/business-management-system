<?php
// Include database connection file
include 'db-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Escape user inputs for security
    $track_name = mysqli_real_escape_string($conn, $_POST['track_name']);
    $track_number = mysqli_real_escape_string($conn, $_POST['track_number']);
    $driver_name = mysqli_real_escape_string($conn, $_POST['driver_name']);
    $driver_phone_number = mysqli_real_escape_string($conn, $_POST['driver_phone_number']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $product_description = mysqli_real_escape_string($conn, $_POST['product_description']);
    $client = mysqli_real_escape_string($conn, $_POST['client']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $wearhouse_number = mysqli_real_escape_string($conn, $_POST['wearhouse_number']);

    // Attempt to insert data into the delivery table
    $sql = "INSERT INTO delivery (track_name, track_number, driver_name, driver_phone_number, category, product_description, client, quantity, wearhouse_number) VALUES ('$track_name', '$track_number', '$driver_name', '$driver_phone_number', '$category', '$product_description', '$client', '$quantity', '$wearhouse_number')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to a success page or do other operations if needed
        header("Location: delivery.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>