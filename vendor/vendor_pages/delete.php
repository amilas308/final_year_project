<?php
    require_once "../../connect.php";
    // require_once "/xampp/htdocs/porject/connect.php";
    if(isset($_GET['categoryid'])){
        $categ_id = $_GET['categoryid'];
        $sql = "DELETE FROM `categories` WHERE category_id = $categ_id";
        $query = mysqli_query($conn, $sql);
        header("Location: ../dashboard.php?category");
        exit();
    }
    if(isset($_GET['prod-del'])){
        $prod_id = $_GET['prod-del'];
        $sql = "DELETE FROM `product` WHERE `prod_id` = '$prod_id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo '<script>alert("You have Successfully deleted a product")</script>';
            echo '<script>setInterval(() => window.location.href = "../dashboard.php?product", 800)</script>';
        }
    }
    if(isset($_GET['delven'])){
        $id = $_GET['delven'];
        $sql = "DELETE FROM `vendor_users` WHERE `vendor_id` = $id";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo '<script>alert("You have successfully deleted a vendor")</script>';
            echo '<script>setInterval(() => window.location.href="../dashboard.php?vendor_user")</script>';
            exit();
        }
    }