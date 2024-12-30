<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delivery</title>
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

  <!-- stock -->
  <section class="post">
    <div class="add-product-container">
      <div class="add-product-row-1 justify-content-center">
        <div class="col-lg-9">
          <div class="add-product-c_title text-center">
            <h1 class="c_h1 yellow form-title">Delivery</h1>
          </div>
        </div>
      </div>

      <div class="add-product-row justify-content-center">
        <div class="col-lg-10">
          <div class="add-product-c_form">
            <form action="save_delivery.php" method="POST" enctype="multipart/form-data">
              <div class="add-product-row g-3 justify-content-center">
                <!--------------------------->
                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="track_name" required
                    placeholder="Track Name" />
                </div>
                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="track_number" required
                    placeholder="Track Number" />
                </div>

                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="driver_name" required
                    placeholder="Driver Name" />
                </div>
                <div class="col-lg-9 col-md-9">
                  <input type="text" class="form-control" id="title" name="driver_phone_number" required
                    placeholder="Driver Mobile Number" />
                </div>


                <div class="col-lg-9 col-md-9">
                  <label for="category" class="form-label">Product Type</label>
                  <br />
                  <select class="form-select" id="category" name="category" required>
                    <option value="Rice">Rice</option>
                    <option value="Paddy">Paddy</option>
                    <option value="Corn">Corn</option>
                    <option value="Wheat">Wheat</option>
                  </select>
                </div>


                <div class="col-lg-9 col-md-9">
                  <textarea class="form-control" id="content" name="product_description" rows="5" required
                    placeholder="Product Description"></textarea>
                </div>


                <br />
                <br />




              </div>
              <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="title" name="client" required placeholder="Client" />
              </div>
              <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="title" name="quantity" required placeholder="Quantity" />
              </div>

              <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="title" name="wearhouse_number" required
                  placeholder="Warehouse No" />
              </div>


            </div>


          <!-- Submit Button -->
          <div class="col-lg-2 col-md-2 button">
            <button type="submit" class="btn c_button" style="margin-top: 5rem">
              Add for Delivery
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