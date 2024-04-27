<?php include "./include/other_header.php";?>
<?php
    if(isset($_SESSION['id'])){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE user_id = {$_SESSION['id']}");
        session_regenerate_id();
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        $prev_fname = $user['first_name'];
        $prev_lname = $user['last_name'];
        // echo $full_name; 
        $prev_email = $user['email'];
        $prev_phone = $user['phone'];
        $prev_address = $user['address'];
        if($_GET['checkoutid']){
            $quantity = $_POST['quantity'];
            // $quan = $_POST
            $_SESSION['quantity'] = $quantity;
            echo $_SESSION['quantity'];
            $prod = $_POST['name'];
            $id = $_GET['checkoutid'];
            $sql = "SELECT * FROM `product` WHERE prod_id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $total =  $row['prod_price'] * $_SESSION['quantity'];
            $_SESSION['total'] = $total;
            // echo $_SESSION['total'] . 'This is total price';
            // echo $_SESSION['quantity'] . 'This is quantity';
            if(isset($_POST['submit'])){
                $order_name = $_SESSION['id'];
                // $order_cus_name = $full_name;
                // echo $order_cus_name;
                $unq_id = htmlspecialchars($_POST['unq-id']);
                $order_product = htmlspecialchars($row['prod_name']);
                $order_off_price = $row['prod_price'];
                $order_price = number_format($_POST['quantity'], 2);
                $state = $_POST['state'];
                $order_quantity = $_POST['howmany'];
                echo $order_quantity;
                $sql = "INSERT INTO `order` (`order_unq_id`,`order_name`,`order_product`,`state`,`order_price`,`order_quantity`) VALUES('$unq_id','$order_name','$order_product','$state','$order_price','$order_quantity')";
                $query = mysqli_query($conn, $sql);
                if($query){
                    echo "<script>alert('You have successfully made an order wait for a call deleivery')</script>";
                    ?><script>
                        setTimeout(() => window.location.href='index.php', 3000);
                    </script>
                    <?php
                    exit();
                } else{
                    echo "<script>alert('oops! Order was not made')</script>";
                }
            }
        }
    }
?>
<div class="checkoutbody">
    <div class="checkout-container">
      <h2>Checkout</h2>
      <form action="" method="post">
            <div class="form-element">
                <label for="full name">Full Name</label>
                <h5><?php echo $prev_fname.' '.$prev_lname; ?></h5>
                <hr>
            </div>
            <div class="form-element">
            <label for="email">Email</label>
                <h5><?php echo $prev_email; ?></h5>
                <hr>
            </div>
            <div class="form-element">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" value="<?php echo $prev_phone; ?>">
            </div>
            <div class="form-element add">
                <label for="state">State</label>
                <select name="state" id="state">
                    <option value="1">---select state---</option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue"> Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross River">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="FCT">FCT</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nasarawa">Nasarawa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Osun">Osun</option>
                    <option value="Oyo"> Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option> 	          
                </select>
            </div>
            <div class="form-element add">
                <label for="address">Address</label>
                <input type="hidden" name="howmany" value="<?php  echo $quantity; ?>">
                <input type="text" name="address" id="address" value="<?php echo $prev_address; ?>">
            </div>
            <div class="form-element">
                <input type="hidden" name="quantity" value="<?php  echo $total; ?>">
                <input type="hidden" name="unq-id" value="<?php  echo 'order_'. range(1000,9999); ?>">
                <input type="submit" name="submit" class="add"  id="submit" value="Checkout">
            </div>
      </form>
    </div>
    <div class="productbody">
        <h2>Product</h2>
        <div class="productdisplay">
            <div class="proddisp">
            <label for="product-name">Product Name</label>
            <h5><?php echo $row['prod_name']; ?></h5>
            </div>
            <div class="proddisp">
            <label for="product-name">Product price</label>
            <h5 class="prc"><?php echo number_format($row['prod_price'],2); ?></h5>
            </div>
            <div class="proddisp ann">
            <label for="product-name" >Quantity</label>
            <h5><?php echo $quantity; ?></h5>
            </div>
            <div class="proddisp">
            <label for="product-total">Total</label>
            <h5 class="total"><?php echo number_format($row['prod_price'] * $quantity, 2); ?></h5>
            </div>
        </div>
    </div>
</div>
