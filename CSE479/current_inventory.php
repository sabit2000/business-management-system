<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Current Inventory</title>
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
  <div class="admin-container" style="margin-bottom: 4%;">
    <p>Current Inventory</p>
    <?php
    include 'db-connection.php';

    // Function to get the total quantity of corn from the stock table
    function getTotalStockQuantity($product_type)
    {
      global $conn;
      $sql = "SELECT SUM(quantity) AS total FROM stock WHERE product_type = '$product_type'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row['total'] ?: 0;
    }

    // Function to get the total quantity of corn from the delivery table
    function getTotalDeliveryQuantity($product_type)
    {
      global $conn;
      $sql = "SELECT SUM(quantity) AS total FROM delivery WHERE category = '$product_type'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row['total'] ?: 0;
    }
    ?>

    <div class="admin-row ">
      <div class="col inventory_title">Corn</div>
      <div class="col inentory_total">Total:
        <?php echo getTotalStockQuantity('Corn'); ?> Ton
      </div>
      <div class="col inentory_total">Delivered:
        <?php echo getTotalDeliveryQuantity('Corn'); ?> Ton
      </div>
      <div class="col inentory_total">Remaining:
        <?php echo getTotalStockQuantity('Corn') - getTotalDeliveryQuantity('Corn'); ?> Ton
      </div>
    </div>

    <?php
    // mysqli_close($conn);
    ?>

    <?php
    // include 'db-connection.php';
    
    // Function to fetch latest records from the stock table
    function getLatestStockRecords($product_type)
    {
      global $conn;
      $sql = "SELECT id, created_at, warehouse_number, product_type, truck_name, quantity FROM stock WHERE product_type = '$product_type' ORDER BY created_at DESC LIMIT 2";
      $result = mysqli_query($conn, $sql);
      return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // Function to fetch latest records from the delivery table
    function getLatestDeliveryRecords($product_type)
    {
      global $conn;
      $sql = "SELECT id, created_at, track_name, wearhouse_number, category, quantity FROM delivery WHERE category = '$product_type' ORDER BY created_at DESC LIMIT 2";
      $result = mysqli_query($conn, $sql);
      return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    ?>

    <hr>

    <!-- Displaying latest stock records -->
    <?php
    $stockRecords = getLatestStockRecords('Corn');
    $deliveryRecords = getLatestDeliveryRecords('Corn');
    ?>
    <?php foreach ($stockRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Stock</div>
        <div class="col">
          <?php echo $record['product_type']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['warehouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>

    <!-- Displaying latest delivery records -->
    <?php foreach ($deliveryRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Delivery</div>
        <div class="col">
          <?php echo $record['category']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['wearhouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>

    <?php
    // mysqli_close($conn);
    ?>
<!-- Rice -->
    <div class="admin-row ">
      <div class="col inventory_title">Rice</div>
      <div class="col inentory_total">Total:
        <?php echo getTotalStockQuantity('Rice'); ?> Ton
      </div>
      <div class="col inentory_total">Delivered:
        <?php echo getTotalDeliveryQuantity('Rice'); ?> Ton
      </div>
      <div class="col inentory_total">Remaining:
        <?php echo getTotalStockQuantity('Rice') - getTotalDeliveryQuantity('Rice'); ?> Ton
      </div>
    </div>
<hr>
    <?php
    $stockRecords = getLatestStockRecords('Rice');
    $deliveryRecords = getLatestDeliveryRecords('Rice');
    ?>
    <!-- Displaying latest stock records -->
    <?php
    $stockRecords = getLatestStockRecords('Rice');
    $deliveryRecords = getLatestDeliveryRecords('Rice');
    ?>
    <?php foreach ($stockRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Stock</div>
        <div class="col">
          <?php echo $record['product_type']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['warehouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>

    <!-- Displaying latest delivery records -->
    <?php foreach ($deliveryRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Delivery</div>
        <div class="col">
          <?php echo $record['category']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['wearhouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>

    <!-- Paddy -->
    <div class="admin-row ">
      <div class="col inventory_title">Paddy</div>
      <div class="col inentory_total">Total:
        <?php echo getTotalStockQuantity('Paddy'); ?> Ton
      </div>
      <div class="col inentory_total">Delivered:
        <?php echo getTotalDeliveryQuantity('Paddy'); ?> Ton
      </div>
      <div class="col inentory_total">Remaining:
        <?php echo getTotalStockQuantity('Paddy') - getTotalDeliveryQuantity('Paddy'); ?> Ton
      </div>
    </div>
    <hr>
    <?php
    $stockRecords = getLatestStockRecords('Paddy');
    $deliveryRecords = getLatestDeliveryRecords('Paddy');
    ?>
    <!-- Displaying latest stock records -->
    <?php
    $stockRecords = getLatestStockRecords('Paddy');
    $deliveryRecords = getLatestDeliveryRecords('Paddy');
    ?>
    <?php foreach ($stockRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Stock</div>
        <div class="col">
          <?php echo $record['product_type']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['warehouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>
    
    <!-- Displaying latest delivery records -->
    <?php foreach ($deliveryRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Delivery</div>
        <div class="col">
          <?php echo $record['category']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['wearhouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>

    <!-- Wheat -->
    <div class="admin-row ">
      <div class="col inventory_title">Wheat</div>
      <div class="col inentory_total">Total:
        <?php echo getTotalStockQuantity('Wheat'); ?> Ton
      </div>
      <div class="col inentory_total">Delivered:
        <?php echo getTotalDeliveryQuantity('Wheat'); ?> Ton
      </div>
      <div class="col inentory_total">Remaining:
        <?php echo getTotalStockQuantity('Wheat') - getTotalDeliveryQuantity('Wheat'); ?> Ton
      </div>
    </div>
    <hr>
    <?php
    $stockRecords = getLatestStockRecords('Wheat');
    $deliveryRecords = getLatestDeliveryRecords('Wheat');
    ?>
    <!-- Displaying latest stock records -->
    <?php
    $stockRecords = getLatestStockRecords('Wheat');
    $deliveryRecords = getLatestDeliveryRecords('Wheat');
    ?>
    <?php foreach ($stockRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Stock</div>
        <div class="col">
          <?php echo $record['product_type']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['warehouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>
    
    <!-- Displaying latest delivery records -->
    <?php foreach ($deliveryRecords as $record): ?>
      <div class="admin-row">
        <div class="col">
          <?php echo $record['created_at']; ?>
        </div>
        <div class="col">Delivery</div>
        <div class="col">
          <?php echo $record['category']; ?>
        </div>
        <div class="col">
          <?php echo $record['quantity']; ?> Tons
        </div>
        <div class="col">Warehouse
          <?php echo $record['wearhouse_number']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
      </div>
    <?php endforeach; ?>
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