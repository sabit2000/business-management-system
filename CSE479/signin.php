<?php
session_start(); // Start the session

include('db-connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE username = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            // Check if the user is active
            if ($row['activeStatus'] == 1) {
                // Set session variables
                $_SESSION['userId'] = $row['userId'];
                $_SESSION['userType'] = $row['userType']; // Assuming your table has a 'userType' column

                // Check if retunt url is set
                if (isset($_SESSION['return_url'])) {
                    $return_url = $_SESSION['return_url'];
                    unset($_SESSION['return_url']);  // Remove the stored URL from the session
                    header("Location: " . $return_url);
                } else {
                    header("Location: index.php");
                }
                exit();
            } else {
                echo "Account is not active. Please contact support.";
            }
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>