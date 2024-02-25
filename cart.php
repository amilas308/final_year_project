<?php 
include "./include/other_header.php"; 
if(isset($_SESSION['id'])){
    session_regenerate_id();
    $_SESSION['first-name'] = $name;
    $prod_id = $_GET['cart-id'];
    // $sql = "SELECT * FROM `product` WHERE `prod_id` = '$prod_id'";
    // $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    if(isset($_GET['cart-id'])){
        // var_dump($result);
        $session_array = array(
            'id' => $_GET['cart-id'],
            'prod_name' => $_POST['prod_name'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['prod_price']
        );
        $_SESSION['id'][] = $session_array;
    } else{
        $session_array = array(
            'id' => $_GET['cart-id'],
            'prod_name' => $_POST['prod_name'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['prod_price']
        );
        $_SESSION['id'][] = $session_array;
        // $view = $_SESSION['id'][];
    }
}
var_dump($_SESSION['id']);


?>