<?php 
    session_start();
    session_regenerate_id();
    if(isset($_SESSION['username']) ){
        // echo "Name is set";
    } else{
        // echo "NO name is set";
        header("Location: ./vendor_pages/login.php");
    }
    if(isset($_SESSION['role'])){
        // echo 'role is set';
    } else{
        // echo "e no set oo";
        header("Location: ./vendor_pages/login.php");
    }
    // $name = $_SESSION['username'];
    // echo $name;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./styling/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <div class="container-all">
        <nav>
            <div class="top">
                <img src="../img/logo.jpg" alt="Syntax logo">
                <h2>Syntax</h2>
                <!-- <em>&times;</em> -->
            </div>
            <div class="user">
                <div class="user-info">
                    <h3><?php echo $_SESSION['username']; ?></h3>
                    <span><?php  $_SESSION['role']; ?></span>
                </div>
                <img src="../img/glass1.jpg" alt="User-image">
            </div>
        </nav>
        <div class="container-under">
            <aside>

                <!-- <a href="#" class="btn">
                    <i class="fas fa-person move"></i>
                    <span>Profile</span>
                </a> -->
                <a href="dashboard.php?product" class="btn<?php echo isset($_GET['product']) ? ' active': ''; ?>">
                    <i class="fas fa-shop move"></i>
                    <span>Product</span>
                </a>
                <?php if($_SESSION['username'] == 'admin'): ?>
                <a href="dashboard.php?dash_menu" id="" class="btn <?php echo isset($_GET['dash_menu']) ? ' active': ''; ?>">
                    <i class="fas fa-dashboard move"></i>
                    <span>Dashboard</span>
                </a>
                <a href="dashboard.php?vendor_user" class="btn <?php echo isset($_GET['vendor_user']) ? ' active': ''; ?>">
                    <i class="fas fa-shop move"></i>
                    <span>Vendor</span>
                </a>
                <a href="dashboard.php?category" class="btn <?php echo isset($_GET['category']) ? ' active': ''; ?>">
                    <i class="fas fa-shop move"></i>
                    <span>Categories</span>
                </a>
                <?php endif; ?>
                <a href="dashboard.php?order" class="btn<?php echo isset($_GET['order']) ? ' active': ''; ?>">
                    <i class="fas fa-shop move"></i>
                    <span>Order</span>
                </a>
                <a  class="btn" href="./vendor_pages/logout.php">
                    <i class="fas fa-phone move"></i>
                    <span>Log Out</span>
                </a>
            </aside>
            <main>
                <?php
                    if(isset($_GET['dash_menu'])){
                        include("./vendor_pages/dash_menu.php");
                    }
                    if(isset($_GET['order'])){
                        include("./vendor_pages/orders.php");
                    }
                    if(isset($_GET['vendor_user'])){
                        include("./vendor_pages/vendor_user.php");
                    }
                    if(isset($_GET['create_vendor'])){
                        include("./vendor_pages/vendor_create.php");
                    }
                    if(isset($_GET['category'])){
                        include("./vendor_pages/categories.php");
                    }
                    if(isset($_GET['categories_create'])){
                        include("./vendor_pages/cateogories_create.php");
                    }
                    if(isset($_GET['product'])){
                        include("./vendor_pages/product.php");
                    }
                    if(isset($_GET['product_create'])){
                        include("./vendor_pages/product_create.php");
                    }
                ?>

            </main>
        </div>
        <footer></footer>
    </div>
    <script src="../main.js?v=<?php time(); ?>"></script>
    <script src="../fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</body>
</html>