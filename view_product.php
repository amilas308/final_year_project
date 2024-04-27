<?php include "./include/other_header.php"; 
?>
<?php
    if(isset($_GET['view'])){
        $product_id = $_GET['view'];
        $sql = "SELECT * FROM `product` WHERE `prod_id` = '$product_id'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);
        if($result){
            ?>
            <div class="blog-post">
            <button title="previous"  id="prev" class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
            <button title="next"  id="next" class="carousel-button next" data-carousel-button="next">&#8658;</button>
            <form action="./checkout.php?checkoutid=<?= $result['prod_id'];?>" method="post">
                <div class="space">
                <div class="viewproduct">
                    <div class="viewimg" id="viewimg">
                            <div class="list">
                                <div class="item">
                                    <img src="./vendor/vendor_pages/prod-image/<?php echo $result['prod_image1']; ?>" alt="image1">
                                </div>
                                <div class="item">
                                    <img src="./vendor/vendor_pages/prod-image/<?php echo $result['prod_image2']; ?>" alt="image2">
                                </div>
                                <div class="item">
                                    <img src="./vendor/vendor_pages/prod-image/<?php echo $result['prod_image3']; ?>" alt="image3">
                                </div>
                            </div>
                    </div>
                    <div class="viewdetail">
                        <div class="item-name">
                                <h5><?php echo $result['prod_name']; ?></h5>
                            </div>
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
                            <?php if(isset($_SESSION['id'])):?>
                            <input type="submit" name="check-submit" value="Complete Order">
                            <?php else:?>
                                <?php header("Location: ./pages/login.php");?>
                            <?php endif;?>
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
    </div>
    <script src="aos.js?v=<?php echo time();?>"></script>
    <script defer type="text/javascript" src="main.js?v=<?php echo time();?>"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js?v=<?php echo time(); ?>"></script>
    <script src="jquery.js?v=<?php echo time(); ?>"></script>