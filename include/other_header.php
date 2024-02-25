<?php
    require_once './connect.php';
    session_start();
    if(isset($_SESSION['id'])){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE user_id = {$_SESSION['id']}");
        session_regenerate_id();
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        $name = $user['first_name'];
    }else{
        // header("Location: ./pages/login.php");
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
    <link rel="icon" type="png" href="/img/logo.jpg?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="./style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="./scrollnav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>  
    <div class="about-header-nav"> 
        <section id="about-header">
            <div class="about-navbar1">
                <div class="about-navBar about-heading" id="about-navBar">
                    <a href="index.html">
                        <img src="./img/logo.jpg" height="47" alt="#" class="logo">
                    </a>
                    <div>
                        <ul class="about-navbar" id="chntxt">
                            <li><a href="index.php">Home</a></li>
                            <!-- <li><a href="shop.html">Shop</a></li> -->
                            <li><a class="active1" href="./about.php">About</a></li>
                            <li><a href="./pages/product.php" class="product-btn">Product</a></li>
                            <?php if(isset($user)): ?>
                                <div class="dropdown">
                                    <button id="drop" class="about-dropbtn">Account</button>
                                    <div class="dropdown-pad">
                                        <div class="dropdown-content">
                                            <h2>Account</h2>
                                            <span><?php echo "Welcome back, " . $user['first_name'] .' '. $user['last_name']?></span>
                                            <h4>Email</h4>
                                            <span><?php echo $user['email'] ?></span>
                                            <h4>Phone</h4>
                                            <span><?php echo $user['phone'] ?></span>
                                            <button id="ed">
                                                <a href="/porject/pages/edit_user.php?editid=<?php echo $user['user_id'] ?>" class="ed">Edit</a>
                                            </button>
                                            <a href="/porject/order.php" class="ord">Order</a>
                                            <a href="/porject/pages/logout.php" class="sin">Log out</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <select>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <a href="#">edit</a>
                                </select> -->
                            <?php else: ?>
                            <li><a href="./pages/signup.php">Signup</a></li>
                            <li><a href="./pages/login.php">Log in</a></li>
                            <?php endif; ?>
                            <li><a href="cart.html"><i title="Cart" class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <i class="fas fa-bars marsh"  id="icol"></i>
                </div>
            </div>
        </section>
    </div>