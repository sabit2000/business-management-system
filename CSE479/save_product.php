<?php
// Include database connection
include 'db-connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $season = $_POST['season'];

    // File upload handling
    $targetDirectory = "uploads/"; // Adjust this path as needed
    $originalFileName = basename($_FILES["photo"]["name"]);
    $targetFile = $targetDirectory . $originalFileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists and rename if necessary
    if (file_exists($targetFile)) {
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = $originalFileName . "_" . time() . "." . $extension;
        $targetFile = $targetDirectory . $newFileName;
        echo "File already exists. Renaming to $newFileName<br>";
    }

    // ... [rest of the file upload handling remains unchanged] ...

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, now insert data into database
            $sql = "INSERT INTO products (product_name, price, description, photo_path, season) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sdsss", $productName, $price, $description, $targetFile, $season);

            if ($stmt->execute()) {
                echo "Product added successfully.";
                header("Location: add_product.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close database connection
    $conn->close();
}
?>

<!-- Your HTML form (from add_product.php) goes here -->
