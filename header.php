<?php
// Display messages if any
if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<header class="header">

    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="https://github.com/alfastrek" class="fab fa-github"></a>
                <a href="https://x.com/AlfaTechDev" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/alfastrek/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/aradhyashukla/" class="fab fa-linkedin"></a>
            </div>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <p><a href="login.php">Login</a> | <a href="register.php">Sign Up</a></p>
            <?php else: ?>
                <p><a href="logout.php">Logout</a></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="header-2">
    <div class="flex">
        <a href="home.php" class="logo">
        <img src="images\Logo.png" alt="ReadStack Logo" class="logo-image">
        Read<span class="logo-stack">Stack</span>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="shop.php">Shop</a>
                <a href="contact.php">Contact</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="orders.php">Orders</a>
                <?php endif; ?>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="search_page.php" class="fas fa-search"></a>
                <div id="user-btn" class="fas fa-user"></div>
                <?php
                    if (isset($_SESSION['user_id'])) {
                        $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                        $cart_rows_number = mysqli_num_rows($select_cart_number);
                    }
                ?>
                <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number ?? '0'; ?>)</span> </a>
            </div>

            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="user-box">
                    <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                    <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</header>
