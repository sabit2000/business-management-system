<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order List</title>
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

    
    <!-- Admin Start -->
    <div class="admin-container">
      <form method="POST">
        <p>Order List</p>
        <?php
        // Include the database connection file
        include 'db-connection.php';

        // Fetch data from product_inquiry and users tables
        $sql = "SELECT product_inquiry.id, users.fullName AS customer_name, users.email AS customer_email, products.product_name, product_inquiry.quantity
        FROM product_inquiry
        JOIN users ON product_inquiry.userId = users.userId
        JOIN products ON product_inquiry.productId = products.id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            ?>
            <div class="admin-row">
              <div class="col">
                <?php echo htmlspecialchars($row['customer_name']); ?>
              </div>
              <div class="col">
                <?php echo htmlspecialchars($row['customer_email']); ?>
              </div>
              <div class="col">
                <?php echo htmlspecialchars($row['product_name']); ?>
              </div>
              <div class="col">
                <?php echo htmlspecialchars($row['quantity']); ?> Tons
              </div>
        
              <input type="hidden" name="order_id" value="<?php echo $row['id']; ?>" />
            </div>
            <?php
          }
        } else {
          echo "No orders found.";
        }

        // Close the database connection
        $conn->close();
        ?>

      </form>
      <hr />
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
