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
