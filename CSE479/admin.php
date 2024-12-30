<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
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


  <!-- Admin Start -->
  <div class="admin-container">
    <p>Admin Approval</p>
    <?php
    include('db-connection.php');

    // Handle form submissions
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $userId = $_POST['user_id'];

      if (isset($_POST['accept'])) {
        // Update user's activeStatus to 1
        $sql = "UPDATE Users SET activeStatus = 1 WHERE userId = $userId";
        if ($conn->query($sql) === TRUE) {
          echo "User approved!";
        } else {
          echo "Error updating record: " . $conn->error;
        }
      }

      if (isset($_POST['decline'])) {
        // Delete the user
        $sql = "DELETE FROM Users WHERE userId = $userId";
        if ($conn->query($sql) === TRUE) {
          echo "User declined and deleted!";
        } else {
          echo "Error deleting record: " . $conn->error;
        }
      }
    }

    // Fetch users who are not active
    $sql = "SELECT * FROM Users WHERE activeStatus = 0";
    $result = $conn->query($sql);
    ?>
    
    <!-- Display users -->
    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="admin-row">
        <form method="POST" style="display: flex;">
          <div class="col">
            <?= $row['fullName'] ?>
          </div>
          <div class="col">
            <?= $row['email'] ?>
          </div>
          <input type="hidden" name="user_id" value="<?= $row['userId'] ?>">
          <div class="col">
            <input class="admin-btn accept" type="submit" value="Accept" name="accept" />
          </div>
          <div class="col">
            <input class="admin-btn decline" type="submit" value="Decline" name="decline" />
          </div>
          <div class="col">
            <a href="viewuser.php/?userId=<?= $row['userId'] ?>" class="view-link">View</a>
          </div>
        </form>
      </div>
    <?php endwhile; ?>


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

  <script src="https://kit.fontawesome.com/54d680c585.js" crossorigin="anonymous"></script>
</body>

</html>