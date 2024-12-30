<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['userId'])) {
  // Store the current page URL in the session
  $_SESSION['return_url'] = $_SERVER['REQUEST_URI'];

  // Redirect to the login page
  header("Location: account.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Inquiry</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100;400;900&display=swap"
    rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> -->
</head>

<body>
  <div class="header">
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
  </div>

  <!-- Add_Product Start -->
  <section class="post">
    <div class="add-product-container">
      <div class="add-product-row-1 justify-content-center">
        <div class="col-lg-9">
          <div class="add-product-c_title text-center">
            <h1 class="c_h1 yellow form-title">Product Inquiry</h1>
          </div>
        </div>
      </div>

      <div class="add-product-row justify-content-center">
        <div class="col-lg-10">
          <div class="add-product-c_form">
            <?php
            include 'db-connection.php'; // Include the database connection file
            
            if (isset($_GET['id'])) {
              $product_id = urldecode($_GET['id']); // URL-decode the product ID
            
              // Query to fetch product details based on the product ID
              $sql = "SELECT product_name, price FROM products WHERE id = ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param('i', $product_id);
              $stmt->execute();
              $result = $stmt->get_result();

              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $product_name = $row['product_name'];
                $product_price = $row['price'];
              }
            }
            ?>
            <form action="order.php" method="POST" enctype="multipart/form-data">
              <div class="add-product-row g-3 justify-content-center">
                <!-- Article Title -->
                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="product_name" required
                    placeholder="Product Name"
                    value="<?php echo isset($product_name) ? htmlspecialchars($product_name) : ''; ?>" disabled />
                </div>

                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="product_price" required
                    placeholder="Product Price"
                    value="<?php echo isset($product_price) ? htmlspecialchars($product_price) : ''; ?> BDT/KG"
                    disabled />
                </div>

                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="quantity" required placeholder="Quantity (Tons)" />
                </div>

                <input type="hidden" name="product_id" value="<?php echo $product_id ?>">

                <!-- Article Content -->
                <div class="col-lg-9 col-md-9">
                  <textarea class="form-control" id="content" name="content" rows="5" required
                    placeholder="Message"></textarea>
                </div>
              </div>
              <!-- Submit Button -->
              <div class="col-lg-2 col-md-2 button">
                <button type="submit" class="btn c_button" style="margin-top: 5rem">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <script src="https://kit.fontawesome.com/54d680c585.js" crossorigin="anonymous"></script>
</body>

</html>