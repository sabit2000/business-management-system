<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acount - Business Managemant System</title>
  <link rel="stylesheet" href="account_style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100;400;900&display=swap"
    rel="stylesheet" />
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> -->
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
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>

    </div>
  </div>

  <!---------------Account page----------->
  <div class="account-page">
    <div class="cotainer">
      <div class="row">
        <div class="col-2">
          <img src="images/farmer.jpg" style="width: 100% ; margin-left: 6%; border-radius:15px;" >
        </div>
        <div class="col-2">
          <div class="form-container">
            <div class="form-btn">
              <span onclick="login()">Login</span>
              <span onclick="register()">Register</span>
              <hr id="Indicator">
            </div>
            <form id="LoginForm" method="post" action="signin.php">
              <input type="text" name="username" placeholder="Username" required>
              <input type="password" name="password" placeholder="Password" required>
              <button type="submit" class="btn">Login</button>
              <a href="">Forgot password</a>
            </form>

            <!-- signup form -->
            <form id="RegForm" method="post" action="signup.php">
              <input type="text" name="username" placeholder="Username" required>
              <input type="text" name="fullname" placeholder="Fullname" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Password" required>

              <!-- UserType Radio Buttons -->
              <div class="radio-group">
                <label for="customer">Customer</label>
                <input type="radio" name="userType" value="customer" id="customer" required checked>

                <label for="staff">Staff</label>
                <input type="radio" name="userType" value="staff" id="staff" required>
              </div>

              <button type="submit" class="btn">Register</button>
            </form>


          </div>
        </div>
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
  <!-- js for toggle menu-->
  <script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px"
      }
      else {
        MenuItems.style.maxHeight = "0px"
      }
    }
  </script>

  <!-- js for toggle from-->

  <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
      RegForm.style.transform = "translateX(0px)";
      LoginForm.style.transform = "translateX(0px)";
      Indicator.style.transform = "translateX(1000px)";
    }
    function login() {
      RegForm.style.transform = "translateX(300px)";
      LoginForm.style.transform = "translateX(300px)";
      Indicator.style.transform = "translateX(0px)";
    }

  </script>



  <script src="https://kit.fontawesome.com/54d680c585.js" crossorigin="anonymous"></script>
</body>

</html>