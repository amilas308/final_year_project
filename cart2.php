<?php
session_start();

// Check if the cart exists in the session
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Display Cart Items
    echo '<h1>Shopping Cart</h1>';
    echo '<ul>';
    foreach ($_SESSION['cart'] as $cart_item) {
        echo '<li>' . $cart_item['name'] . ' - $' . $cart_item['price'] . ' (Quantity: ' . $cart_item['quantity'] . ')</li>';
    }
    echo '</ul>';
} else {
    // Cart is empty
    echo '<p>Your cart is empty.</p>';
}
?>
