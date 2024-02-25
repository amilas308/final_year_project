<?php
    session_start();
    if(isset($_POST['submit'])){
        $cart = "cart";
        $_SESSION['cart'] = $cart;
        print_r($_SESSION['cart']);
        if(isset($_SESSION['cart'])){

        } else{
            $session_array = array(
                'id' => $_GET['cart-id'],
                'prod_name' => $_POST['prod_name'],
                'quantity' => $_POST['quantity'],
                'price' => $_POST['prod_price']
            );
            $_SESSION['cart'][] = $session_array;
        }
    }
    print_r($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart</title>
    <style>
        .control{
            width: 70%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
    </style>
</head>
<body>
    <div class="control">
    <?php
        $conn = mysqli_connect('localhost','root','','syntax_db');
        $sql = "SELECT * FROM `product`";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){?>
            <form action="./examplecart.php?cart-id=<?=$row['prod_id'];?>" method="post" >
                <img src="./vendor//vendor_pages/prod-image/<?=$row['prod_image']?>" height="200" alt="prod_image">
                <h5><?=$row['prod_name']?></h5>
                <h5>&#5843;<?=number_format($row['prod_price'],2)?></h5>
                <input type="number" name="quantity" id="quan" value="1">
                <input type="hidden" name="prod_name" id="quan" value="<?=$row['prod_name']?>">
                <input type="hidden" name="prod_price" id="price" value="<?=number_format($row['prod_price'],2)?>">
                <input type="submit" value="Add-to-cart" name="add-to-cart">
            </form>
        <?php }
        
    
    ?>
 
    </div>
    <div class="display">
        <?php
            // print_r($_SESSION['cart']);
        ?>
    </div>
</body>
</html>