<?php
session_start();

// Check if the product is added to the cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Create a new item to add to the cart
    $item = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => 1
    );

    // Check if the cart exists in the session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product is already in the cart
    $index = -1;
    foreach ($_SESSION['cart'] as $key => $cart_item) {
        if ($cart_item['id'] == $product_id) {
            $index = $key;
            break;
        }
    }

    // If the product is already in the cart, update the quantity
    if ($index !== -1) {
        $_SESSION['cart'][$index]['quantity']++;
    } else {
        // If the product is not in the cart, add it
        $_SESSION['cart'][] = $item;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Cart Example</title>
</head>
<body>

    <h1>Product List</h1>

    <!-- Product 1 -->
    <form method="post" action="cart2.php">
        <input type="hidden" name="product_id" value="1">
        <input type="hidden" name="product_name" value="Product 1">
        <input type="hidden" name="product_price" value="10.00">
        <p>Product 1 - $10.00 <button type="submit" name="add_to_cart">Add to Cart</button></p>
    </form>

    <!-- Product 2 -->
    <form method="post" action="cart2.php">
        <input type="hidden" name="product_id" value="2">
        <input type="hidden" name="product_name" value="Product 2">
        <input type="hidden" name="product_price" value="15.00">
        <p>Product 2 - $15.00 <button type="submit" name="add_to_cart">Add to Cart</button></p>
    </form>

    <h1>Shopping Cart</h1>

    <!-- Display Cart Items -->
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $cart_item): ?>
                <li><?php echo $cart_item['name']; ?> - $<?php echo $cart_item['price']; ?> (Quantity: <?php echo $cart_item['quantity']; ?>)</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

</body>
</html>
