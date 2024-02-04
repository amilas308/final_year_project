<?php 
    session_start();
    session_regenerate_id();
    if(isset($_SESSION['username']) ){
        // echo "Name is set";
    } else{
        // echo "NO name is set";
    }
    if(isset($_SESSION['role'])){
        // echo 'role is set';
    } else{
        // echo "e no set oo";
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
                    <span><?php echo $_SESSION['role']; ?></span>
                </div>
                <img src="../glass1.jpg" alt="User-image">
            </div>
        </nav>
        <div class="container-under">
            <aside>
                <a href="dashboard.php?dash_menu" id="" class="btn">
                    <i class="fas fa-dashboard move"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="btn">
                    <i class="fas fa-person move"></i>
                    <span>Profile</span>
                </a>
                <a href="#" class="btn">
                    <i class="fas fa-shop move"></i>
                    <span>Product</span>
                </a>
                <?php if($_SESSION['username'] == 'admin'): ?>
                <a href="dashboard.php?vendor_user">
                    <i class="fas fa-shop move"></i>
                    <span>Vendor</span>
                </a>
                <a href="#" class="btn">
                    <i class="fas fa-shop move"></i>
                    <span>Categories</span>
                </a>
                <a href="dashboard.php?vendor_user" class="btn">
                    <i class="fas fa-shop move"></i>
                    <span>Test</span>
                </a>
                <?php endif; ?>
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
                    if(isset($_GET['vendor_user'])){
                        include("./vendor_pages/vendor_user.php");
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