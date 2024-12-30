<?php

// Check if the userType session variable exists and set it to a variable
$userType = isset($_SESSION['userType']) ? $_SESSION['userType'] : '';

// Function to check if a user is logged in
function isLoggedIn()
{
    return isset($_SESSION['userId']);
}
?>

<nav>
    <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#Services">Services</a></li>
        <li><a href="index.php#About">About</a></li>
        <li><a href="index.php#Products">Products</a></li>

        <?php if (isLoggedIn()): ?>
            <?php if ($userType == 'admin'): ?>
                <li><a href="admin.php">Admin</a></li>
            <?php endif; ?>
            <?php if ($userType == 'admin' || $userType == 'staff'): ?>
                <li><a href="add_product.php">Add Product</a></li>
                <li><a href="all_message.php">All Message</a></li>
                <li><a href="order_list.php">Order List</a></li>
                <li><a href="stock.php">Stock</a></li>
                <li><a href="delivery.php">Delivery</a></li>
                <li><a href="current_inventory.php">Inventory</a></li>
            <?php elseif ($userType == 'customer'): ?>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="review.php">Review</a></li>
            <?php endif; ?>
            <li><a href="profile.php">Profile</a></li>
        <?php else: ?>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="account.php">Account</a></li>
        <?php endif; ?>
    </ul>
</nav>