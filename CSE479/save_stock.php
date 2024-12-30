<?php
// Include database connection file
include 'db-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Escape user inputs for security
    $truck_name = mysqli_real_escape_string($conn, $_POST['truck_name']);
    $truck_number = mysqli_real_escape_string($conn, $_POST['truck_number']);
    $driver_name = mysqli_real_escape_string($conn, $_POST['driver_name']);
    $driver_phone_number = mysqli_real_escape_string($conn, $_POST['driver_phone_number']);
    $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);
    $product_description = mysqli_real_escape_string($conn, $_POST['product_description']);
    $source = mysqli_real_escape_string($conn, $_POST['source']);
    $client = mysqli_real_escape_string($conn, $_POST['client']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $warehouse_number = mysqli_real_escape_string($conn, $_POST['warehouse_number']);

    // Attempt to insert data into the stock table
    $sql = "INSERT INTO stock (truck_name, truck_number, driver_name, driver_phone_number, product_type, product_description, source, client, quantity, warehouse_number) VALUES ('$truck_name', '$truck_number', '$driver_name', '$driver_phone_number', '$product_type', '$product_description', '$source', '$client', '$quantity', '$warehouse_number')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to a success page or do other operations if needed
        header("Location: stock.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>