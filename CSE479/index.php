<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Business Managemant System</title>
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
          <a href="index.php"><img src="images/logo1.png" width="125px" /></a>
        </div>
        <?php
        include('navbar.php');
        ?>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>

      <!-- message Started -->
      <!-- <div class="message-container">
        <div class="message">
          <p>Registetion Successful !</p>
        </div>
      </div> -->
      <!-- message ended -->

      <div class="row">
        <div class="col-2">
          <h1>Connecting Farmers <br />And Industries !</h1>
          <p>
            Welcome to our agricultural marketplace, where farmers and
            industries unite for mutual <br />
            prosperity. Join us in shaping a future where agriculture and
            industry harmonize for shared success.
          </p>
          <a href="index.php#Products" class="btn">Explore Now</a>
        </div>
        <div class="col-2">
          <img src="images/banner.png" width="150px" />
        </div>
      </div>
    </div>
  </div>

  <!--services-->

  <div class="categoiries" id="Services" style= "background-color:#fff">
    <div class="small-container">
      <h2 class="title">Services</h2>
      <div class="row">
        <div class="col-3">
          <img src="images/farmers.jpg" alt="" />
          <p>
            We bridge the gap between farmers and industries, eliminating
            unnecessary middlemen. We identify farmers' crops with the
            specific needs of industries, facilitating communication and
            negotiation for mutually beneficial agreements.
          </p>
        </div>
        <div class="col-3">
          <img src="images/wearhouse.jpg" alt="" />
          <p>
            We provide secure, temperature-controlled storage facilities for
            agricultural produce, ensuring its quality and freshness. This
            minimizes post-harvest losses for farmers and guarantees
            consistent supply for industries.
          </p>
        </div>
        <div class="col-3">
          <img src="images/truck.jpg" alt="" />
          <p>
            Our efficient logistics network ensures timely delivery of produce
            from farms to industries. We adhere to strict food safety
            regulations and provide real-time tracking, offering peace of mind
            for both farmers and industries.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- ----- ----------->
  <!-- -----Mission, Mission, values ----------->
  <div class="mission" id="About" >
    <div class="container">
      <h1>Started Our Jouney in 2010</h1>
      <div class="row">
        <div class="mission-col-1">
          <h2>Vission</h2>
          <p>
            Empowering Agriculture, Enriching Industries: A Connected Future
            <br /><br />
            <br />
          </p>
          <h2>Mission</h2>
          <p>
            To seamlessly bridge the gap between farmers and industries,
            fostering sustainable partnerships that cultivate growth,
            innovation, and prosperity for all stakeholders. Our mission is to
            create a digital ecosystem that enhances efficiency, transparency,
            and collaboration across the agricultural and industrial sectors.
          </p>
        </div>

        <div class="mission-col-2">
          <div class="values">
            <h2>Values</h2>
            <ul>
              <li>
                <p>
                  Collaboration: We believe in fostering strong collaborations
                  that bring together the expertise of farmers and industries
                  to create mutually beneficial relationships.
                </p>
              </li>
              <li>
                <p>
                  Empowerment: Our goal is to empower farmers by providing
                  them with access to markets, resources, and knowledge, while
                  also empowering industries to make informed and sustainable
                  decisions.
                </p>
              </li>
              <li>
                <p>
                  Innovation: We embrace innovation as a driving force,
                  continuously seeking and implementing cutting-edge
                  technologies that enhance productivity, reduce waste, and
                  drive progress in agriculture and industry.
                </p>
              </li>
              <li>
                <p>
                  Inclusivity: We are committed to inclusivity, ensuring that
                  our platform is accessible to farmers and industries of all
                  sizes, backgrounds, and locations, fostering a diverse and
                  vibrant community.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!----------------->
  <!--Featured categories-->

  <div class="small-container" id="Products" >
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <div class="col-4">
        <img src="images/paddy.jpg" alt="" />
        <h4>Paddy</h4>
        <!-- <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div> -->
        <!-- <p>140 BDT</p> -->
      </div>
      <div class="col-4">
        <img src="images/corn.jpg" alt="" />
        <h4>Corn</h4>
        <!-- <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>60 BDT</p> -->
      </div>
      <div class="col-4">
        <img src="images/rice.jpg" alt="" />
        <h4>Rice</h4>
        <!-- <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>130 BDT</p> -->
      </div>
      <div class="col-4">
        <img src="images/wheat.jpg" alt="" />
        <h4>Wheat</h4>
        <!-- <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>130 BDT</p> -->
      </div>
    </div>

    <!--Leatest categories-->
    <h2 class="title">Products</h2>
    <div class="row">
      <?php
      // Include database connection
      include 'db-connection.php';

      // Fetch products from the database
      $sql = "SELECT id, product_name, price, photo_path FROM products";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Loop through each row of data
        while ($row = $result->fetch_assoc()) {
          $id = $row["id"];
          $productName = $row["product_name"];
          $price = $row["price"];
          $photoPath = $row["photo_path"];

          // Encode the product ID for URL
          $encodedId = urlencode($id);

          echo '<div class="col-4">';
          echo '<a href="product_details.php?id=' . $encodedId . '" style="display: block; text-decoration: none;">';
          echo '<img src="' . $photoPath . '" alt="' . $productName . '" />';
          echo '</a>';
          echo '<h4>' . $productName . '</h4>';
          echo '<p>' . $price . ' BDT</p>';
          echo '</div>';
        }
      } else {
        echo "No products found.";
      }

      // Close database connection
      $conn->close();
      ?>

      
    </div>
  </div>

  <!-- Testimonial -->
  <div class="testimonial" style= "background:#fff">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            nesciunt ea qui molestiae dolor ab velit architecto temporibus
            animi similique? Magnam aut commodi officia, suscipit natus
            impedit iste porro sapiente.
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <img src="images/alfaz.JPG" />
          <h3>Alfaz</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            nesciunt ea qui molestiae dolor ab velit architecto temporibus
            animi similique? Magnam aut commodi officia, suscipit natus
            impedit iste porro sapiente.
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <img src="images/alfaz.JPG" />
          <h3>Zaman</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            nesciunt ea qui molestiae dolor ab velit architecto temporibus
            animi similique? Magnam aut commodi officia, suscipit natus
            impedit iste porro sapiente.
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <img src="images/alfaz.JPG" />
          <h3>Akash</h3>
        </div>
      </div>
    </div>
  </div>

  <!--------- Brands ------------------->
  <div class="brands">
    <div class="small-container">
      <h2 class="title">Our Partners</h2>
      <div class="row">
        <div class="col-5">
          <a href="https://ispahaniagro.com/" target="_blank">
            <img src="images/spahani.png" alt="" />
          </a>
        </div>
        <div class="col-5">
          <img src="images/fresh.png" alt="" />
        </div>
        <div class="col-5">
          <a href="https://squaregroup.com/bussiness/square-food-beverage-ltd/" target="_blank">
            <img src="images/square.png" alt="" />
          </a>
        </div>
        <div class="col-5">
          <a href="https://www.pranfoods.net/" target="_blank">
            <img src="images/pran.png" alt="" />
          </a>
        </div>
        <div class="col-5">
          <img src="images/spahani.png" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!---------------- Footer----------------->

  <div class="footer" id="Contact">
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

  <!-- Scroll to The Top -->
    <div class="scroll-to-top" id="scrollButton" onclick="scrollToTop()">
        ↑
    </div>
  <script>
    // Function to toggle the button's visibility
function toggleScrollButton() {
    const scrollButton = document.getElementById('scrollButton');
    if (window.scrollY > 300) {
        scrollButton.style.display = 'block';
    } else {
        scrollButton.style.display = 'none';
    }
}

// Add an event listener to the window's scroll event
window.addEventListener('scroll', toggleScrollButton);

// Initial check for the button's visibility on page load
toggleScrollButton();

// Function to scroll to the top
// Function to scroll to the top
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
  </script>

  <!-- js for toggle menu-->
  <script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>
  <script src="https://kit.fontawesome.com/54d680c585.js" crossorigin="anonymous"></script>
</body>

</html>