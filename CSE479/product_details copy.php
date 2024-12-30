<?php
session_start();
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
          <img src="images/paddy.jpg" alt="" />
        </div>
        <div class="col-2">
          <p>Home / Paddy</p>
          <h1>Brri Dhan 101</h1>
          <h4>60 taka/Kg</h4>
          <a href="" class="btn">Contact Us to Order</a>
          <h3>Product Details</h3>
          <p>
            Brri Dhan 101 inbred is resistant to bacterial burns and Brri Dhan
            102 is a zinc-enriched rice variety, according to a press release of
            the agriculture ministry.
          </p>
        </div>
      </div>
    </div>

    <!--Featured categories-->

    <div class="small-container" id="Products">
      <h2 class="title">Related Products</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/paddy.jpg" alt="" />
          <h4>Paddy</h4>
          <p>140 BDT</p>
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
