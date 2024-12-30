<?php
session_start();
include 'db-connection.php'; // Assuming you have a file named db-connection.php for database connection

// Decode the product ID from the URL
if (isset($_GET['id'])) {
  $productId = urldecode($_GET['id']);

  // Fetch product details from the database using the decoded ID
  $sql = "SELECT * FROM products WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $productId);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $productName = $row['product_name'];
    $price = $row['price'];
    $description = $row['description'];
    $photoPath = $row['photo_path'];
  } else {
    // Handle if no product found
    $productName = "Product Not Found";
    $price = "N/A";
    $description = "Sorry, the product you are looking for does not exist.";
    $photoPath = "images/default.jpg"; // You can set a default image path here
  }
} else {
  // Handle if no ID is provided in the URL
  $productName = "Product Not Found";
  $price = "N/A";
  $description = "Sorry, the product ID is missing.";
  $photoPath = "images/default.jpg"; // You can set a default image path here
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Details</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100;400;900&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> -->
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/logo1.png" width="125px" />
        </div>
        <?php
        include('navbar.php');
        ?>
        <img src="images/menu.png" class="menu-icon" />
      </div>
    </div>

    <!-- single product details -->

    <div class="small-container single-product">
      <div class="row">
        <div class="col-2 product-img">
          <img src="<?php echo $photoPath; ?>" alt="" style="width: 350px;" />
        </div>
        <div class="col-2">
          <h1><?php echo $productName; ?></h1>
          <h4><?php echo $price; ?> BDT/KG</h4>
          <a href="product_inquiry.php?id=<?php echo urlencode($productId); ?>" class="btn">Contact Us to Order</a>

          <h3>Product Details</h3>
          <p>
            <?php echo $description; ?>
          </p>
        </div>
      </div>
    </div>

    <!---------------- Footer----------------->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Address</h3>
            <p>
              Ma Nur Traders <br />
              Birol, Dinajpur <br />
              Email: manurtraders@gmail.com <br />
              Mobile: 01310226757
            </p>
          </div>

          <div class="footer-col-2">
            <img src="images/logo.png" alt="" />
            <p>Our goal is to connect the farmers and industries</p>
          </div>

          <div class="footer-col-3">
            <h3>Useful links</h3>
            <ul>
              <li>Contact Admin</li>
              <li>Helpline</li>
              <li>Return Policy</li>
              <li>Join the Family</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <div class="social_media">
              <h3>Follow Us</h3>
              <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">linkedin</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">YouTube</a></li>
              </ul>
            </div>
          </div>
        </div>

        <hr />
        <p class="copyright">Copyright-2023 - Alfaz Akash</p>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/54d680c585.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
