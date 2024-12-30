<?php
include('db-connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    // Determine activeStatus based on userType
    $activeStatus = ($userType == 'customer') ? 1 : 0;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Users (username, fullName, email, userType, password, activeStatus) 
            VALUES ('$username', '$fullname', '$email', '$userType', '$hashedPassword', $activeStatus)";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>