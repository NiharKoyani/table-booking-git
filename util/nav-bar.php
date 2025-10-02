<?php
$isBookingTable = false;
$isMenu = false;
$isAboutUs = false;
$isContact = false;
$isHome = false;

if(isset($_GET['booking-table'])){
    $isBookingTable = true;
}elseif(isset($_GET['menu'])){
    $isMenu = true;
}elseif(isset($_GET['about-us'])){
    $isAboutUs = true;
}elseif(isset($_GET['contact'])){
    $isContact = true;
}else{
    $isHome = true;
}
?>

<nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <a href="./"><img src="assert/img/royal-restaurant-logo.jpg" alt="Logo" class="logo"></a>
                <a href="./"><h1>Royal Restaurant</h1></a>
            </div>
            
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            
            <ul class="nav-links">
                <li><a href="./" class="<?php echo $isHome ? 'active' : ''?>">Home</a></li>
                <li><a href="index.php?booking-table" class="<?php echo $isBookingTable ? 'active' : ''?>">Book a Table</a></li>
                <li><a href="index.php?menu" class="<?php echo $isMenu ? 'active' : ''?>">Menu</a></li>
                <li><a href="index.php?about-us" class="<?php echo $isAboutUs ? 'active' : ''?>">About Us</a></li>
                <li><a href="index.php?contact" class="<?php echo $isContact ? 'active' : ''?>">Contact</a></li>
            </ul>
            
            <div class="auth-buttons">
                <a href="./login.php"><button class="auth-btn login-btn">Login</button></a>
                <a href="./signup.php"><button class="auth-btn signup-btn">Sign Up</button></a>
            </div>
        </div>
    </nav>