<?php
    session_start();
    require_once "../connect.php";
    if(isset($_SESSION['user_id'])){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE id = '{$_SESSION['user_id']}'");
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        if($user){
            session_regenerate_id();
            $name = $user['first_name'];
        }
    }



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="../style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" type="text/css" href="../scrollnav.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="header-nav"> 
            <section id="header">
                <div class="navbar1">
                    <div class="navBar heading" id="navBar">
                        <a href="index.html">
                            <img src="../img/logo.jpg" height="47" alt="#" class="logo">
                        </a>
                        <div>
                            <ul class="navbar" id="chntxt">
                                <li><a  href="../index.php">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">About</a></li>
                                <li><a class="active1" href="about.html">Product</a></li>
                                <?php if(isset($user)): ?>
                                    <div class="dropdown">
                                        <button id="drop" class="dropbtn">Account</button>
                                        <div class="dropdown-content">
                                            <span><?php echo "Welcome back, " . $user['first_name'] . $user['last_name']?></span>
                                            <span><?php echo $user['email'] ?></span>
                                            <span><?php echo $user['phone'] ?></span>
                                            <a href="#" class="ed">Edit</a>
                                            <a href="#" class="sin">Sign out</a>
                                        </div>
                                    </div>
                                    <!-- <select>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <a href="#">edit</a>
                                    </select> -->
                                <?php else: ?>
                                <li><a href="contact.html">Signin</a></li>
                                <?php endif; ?>
                                <li><a href="cart.html"><i title="Cart" class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <i class="fas fa-bars marsh"  id="icol"></i>
                    </div>
                </div>
            </section>
            <section class="hero">
                <div class="jnrhero">
                    <h4>Trade-in-offer for <?php echo $name ?></h4>
                    <h2>Super Value deals</h2>
                    <h1>On all products</h1>
                    <p>Save moore with coupons & up to 70% off!</p>
                    <button>Shop Know</button>
                </div>
                <div class="dissapear">
                    <img src="../img/pngegg.png" height="360" alt="">
                </div>
            </section>
        </div>
        <section class="allp">
            <div class="allp-title">
                <h1 class="allp-t">Product</h1>
            </div>
            <div class="allp-product-glass">
                <h2>Eye Glasses</h2>
            </div>
            <div class="allp-product-shoes">
                <h2>Shoes</h2>
            </div>
            <div class="allp-product-watch">
                <h2>Wrist Watch</h2>
            </div>
        </section>
        <script type="text/javascript" src="../main.js?v=<?php echo time(); ?>"></script>
        <script src="../fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/js/all.min.js"></script>
    </body>
</html>