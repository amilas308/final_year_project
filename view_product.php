<?php include "./include/other_header.php"; 
?>
<?php
    if(isset($_GET['view'])){
        $product_id = $_GET['view'];
        // echo $product_id;
        $sql = "SELECT * FROM `product` WHERE `prod_id` = '$product_id'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);
        if($result){
            ?>
            <form action="./checkout.php?checkoutid=<?= $result['prod_id'];?>" method="post">
                <div class="space">
                <div class="viewproduct">
                    <div class="viewimg">
                        <?php //var_dump($result['prod_image']); ?>
                        <img src="./vendor/vendor_pages/prod-image/<?php echo $result['prod_image']; ?>" height="300" alt="clock not seen">
                        <div class="item-name">
                            <h5><?php echo $result['prod_name']; ?></h5>
                        </div>
                    </div>
                    <div class="viewdetail">
                        <!-- <h3>Wrist watch</h3> -->
                        <h4>Description</h4>
                        <p>
                            <?php echo $result['prod_description']; ?>
                        </p>
                        <div class="vendor-detail">
                            <h5>Vendor: <span>Admin</span></h5>
                        </div>
                        <div class="complete">
                            <div class="complete-btn">
                                <span class="quan-name">Quantity</span>
                                <input type="number" name="quantity" value="1" id="quan">
                            </div>
                            <div class="complete-price">
                                <span>&#8358;<?php echo ' '.number_format($result['prod_price'],2); ?></span>
                            </div>
                        </div>
                        <div class="purchase-cart">
                            <input type="hidden" name="name" value="<?= $result['prod_name'];?>">
                            <input type="hidden" name="price" value="<?= number_format($result['prod_price'],2);?>">
                            <input type="submit" name="add-to-cart" value="Cart">
                            <input type="submit" name="check-submit" value="Complete Order">
                        </div>
                        <?php //endif;?>
                    </div>
                </div>
                </div>
     <?php
            }
    }
    ?>
    </form>