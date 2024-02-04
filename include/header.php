<?php
    require_once './connect.php';
    session_start();
    if(isset($_SESSION['id'])){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE user_id = {$_SESSION['id']}");
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
    <link rel="stylesheet" href="./scrollnav.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>  
    <div class="header-nav"> 
        <section id="header">
            <div class="navbar1">
                <div class="navBar heading" id="navBar">
                    <a href="index.html">
                        <img src="./img/logo.jpg" height="47" alt="#" class="logo">
                    </a>
                    <div>
                        <ul class="navbar" id="chntxt">
                            <li><a class="active1" href="index.php">Home</a></li>
                            <!-- <li><a href="shop.html">Shop</a></li> -->
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./pages/product.php">Product</a></li>
                            <?php if(isset($user)): ?>
                                <div class="dropdown">
                                    <button id="drop" class="dropbtn">Account</button>
                                    <div class="dropdown-content">
                                        <span><?php echo "Welcome back, " . $user['first_name'] .' '. $user['last_name']?></span>
                                        <span><?php echo $user['email'] ?></span>
                                        <span><?php echo $user['phone'] ?></span>
                                        <button id="ed">
                                            <a href="/porject/pages/edit_user.php?editid=<?php echo $user['user_id'] ?>" class="ed">Edit</a>
                                        </button>
                                        <a href="/porject/pages/logout.php" class="sin">Log out</a>
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


