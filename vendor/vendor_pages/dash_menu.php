
<div class="container-topping">
    <?php
        require '../../porject/connect.php';
        $order_sql = "SELECT COUNT(*) AS incoming_orders FROM `order`";
        $order_query = mysqli_query($conn,$order_sql);
        $result = mysqli_fetch_assoc($order_query);
        if($result){
            // echo "Total Order". ' ' . $result['incoming_orders'];
            $order = $result['incoming_orders'];
            // $row = $result->fetch_assoc();

        }
        // $prod_sql = "SELECT COUNT(*) AS number_product FROM `product`";
        // $prod_query = mysqli_query($conn,$prod_query);
        // $vend_sql = "SELECT COUNT(*) AS number_vendor FROM `vendor_users`";
        // $vend_query = mysqli_query($conn,$vend_sql);

    ?>
    <!-- <h2>Registered Product</h2>
    <form action="" method="post">
        <input type="search" placeholder="search" name="search" id="">
        <button name="submit" class="sech-btn"><i class="fas fa-search"></i></button>
    </form> -->

<div class="container-card">
    <h1>Total Orders</h1>
    <span><?php echo $order;?></span>
    <!-- <table>
        //$order
        <thead>
            <tr>
                <th>product_id</th>
                <th>Description of product</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">Product_id</a></td>
                <td>Description of product</td>
                <td>Status</td>
            </tr>
            <tr>
                <td><a href="#">Product_id</a></td>
                <td>Description of product</td>
                <td>Status</td>
            </tr>
            <tr>
                <td><a href="#">Product_id</a></td>
                <td>Description of product</td>
                <td>Status</td>
            </tr>
            <tr>
                <td><a href="#">Product_id</a></td>
                <td>Description of product</td>
                <td>Status</td>
            </tr>
            <tr>
                <td><a href="#">Product_id</a></td>
                <td>Description of product</td>
                <td>Status</td>
            </tr>
        </tbody>
    </table> -->
</div>
</div>