<?php include 'include/header.php'; ?>
        <section class="hero">
            <div class="jnrhero">
                <?php if(isset($_SESSION['user_id'])): ?>
                <h4>Trade-in-offer for <?php echo $name ?></h4>
                <?php else: ?>
                <h4>Welcome to Syntax</h4>
                    <?php endif; ?>
                <h2>Super Value deals</h2>
                <h1>On all products</h1>
                <p>Save moore with coupons & up to 70% off!</p>
                <button>Shop Know</button>
            </div>
            <div class="dissapear">
                <img src="" id="image" height="360" alt="">
            </div>
        </section>
    </div>
    <!-- <section class="feature section-p1"./img/pngegg.png>
        <div class="fe-box">
            <img src="./img/PngItem_1701988.png" height="70" alt="fe-box">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="./img/order.png" height="70" alt="fe-box">
            <h6>Online order</h6>
        </div>
        <div class="fe-box">
            <img src="./img/pngegg (1).png" height="70"alt="fe-box">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box dissapear">
            <img src="./img/—Pngtree—promotion headline with red speech_4991027.png" height="70" alt="fe-box">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box dissapear">
            <img src="./img/clipart1051406.png" height="70" alt="fe-box">
            <h6>Happy Sale</h6>
        </div>
         <div class="fe-box">
            <img src="" alt="fe-box">
            <h6>F24/7 Support</h6>
        </div> 
        </section> -->
    <!-- <section class="product1 section-p1">
        <h2>Featured Product</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="./img/watch1.jpg" alt="watch">
                <div class="des">
                    <span>Wrist Watch</span>
                    <h5>Patek Philips</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;20,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/watch2.jpg" alt="watch2">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/watch3.jpg" alt="watch3">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/watch4.jpg" alt="watch4">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/watch5.jpg" alt="watch5">
                <div class="des">
                    <span>Wrist Watch</span>
                    <h5>AP Chronograph</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;10,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/watch6.jpg" alt="watch6">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/watch7.jpg" alt="watch6">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/glass1.jpg" height="300" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/glass1.jpg" height="300" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro dissapear">
                <img src="./img/glass1.jpg" height="300" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section> -->
    <!-- <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% off </span>- All Wrist-watches and accessories</h2>
        <button class="normal">Explore More</button>
    </section> -->
    <!-- <dialog>
        <button id="closeEdit">close</button>
        
    </dialog> -->
    <section class="product1 section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
        <?php
            $sql = "SELECT * FROM `product`LEFT JOIN `categories` ON product.prod_categ = categories.category_id ORDER BY RAND()";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            // var_dump($result);
            foreach($result as $item){ 
                ?>
                
                    <div class="pro">
                    <a href="./view_product.php?view=<?php echo $item['prod_id']; ?>">
                        <img src="./vendor/vendor_pages/prod-image/<?php echo $item['prod_image']; ?>" alt="watch">
                        <div class="des">
                            <span><?php echo $item['category_name']; ?></span>
                            <h5><?php echo $item['prod_name']; ?></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>&#8358;<?php echo ' '.number_format($item['prod_price'],2); ?></h4>
                        </div>
                     <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </a>
                </div>
                <?php
             }?>
            <!-- <div class="pro">
                <a href="./view_product.php">
                    <img src="./imgproj/IMG-20230704-WA0026.jpg" alt="watch">
                    <div class="des">
                        <span>Wrist Watch</span>
                        <h5>Patek Philips</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>&#8358;20,000</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </a>
            </div>
            <div class="pro">
                    <a href="./view_product.php">
                    <img src="./imgproj/IMG-20230704-WA0026.jpg" alt="watch">
                    <div class="des">
                        <span>Wrist Watch</span>
                        <h5>Patek Philips</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>&#8358;20,000</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </a>
                </div>
                <div class="pro">
                    <a href="./view_product.php">
                    <img src="./imgproj/IMG-20230704-WA0026.jpg" alt="watch">
                    <div class="des">
                        <span>Wrist Watch</span>
                        <h5>Patek Philips</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>&#8358;20,000</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </a>
                </div>
                <div class="pro">
                    <a href="./view_product.php">
                    <img src="./imgproj/IMG-20230704-WA0026.jpg" alt="watch">
                    <div class="des">
                        <span>Wrist Watch</span>
                        <h5>Patek Philips</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>&#8358;20,000</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </a>
                </div>
            <div class="pro">
                    <a href="./view_product.php">
                    <img src="./imgproj/IMG-20230704-WA0026.jpg" alt="watch">
                    <div class="des">
                        <span>Wrist Watch</span>
                        <h5>Patek Philips</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>&#8358;20,000</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </a>
                </div>
            <div class="pro">
            <a href="./view_product.php">
                <img src="./imgproj/IMG-20230624-WA0004.jpg" alt="watch6">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </a>
            </div>
            <div class="pro">
            <a href="./view_product.php">
                <img src="./imgproj/IMG-20230629-WA0039.jpg" height="200" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </a>
            </div>
            <div class="pro">
            <a href="./view_product.php">
                <img src="./img/glass1.jpg" height="200" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </a>
            </div>
            <div class="pro dissapear">
            <a href="./view_product.php">
                <img src="./img/glass1.jpg" height="200" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </a>
            </div>
            <div class="pro dissapear">
            <a href="./pages/view_product.php">
                <img src="./img/glass1.jpg" height="200" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </a>
            </div>
            <div class="pro dissapear">
            <a href="./view_product.php">
                <img src="./img/glass1.jpg" height="200" alt="img">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#8358;78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </a>
            </div> -->
        </div>
    </section>
    <!-- <section id="collectives" class="section-p1">
        <div class="collect">
            <h2>Season Sale</h2>
            <h4>Winter conflection - 50% off</h4>
        </div>
        <div class="collect collect2">
            <h2>New hand</h2>
            <h4>Spring/Summer 2023</h4>
        </div>
        <div class="collect collect3">
            <h2>Eye Glasses</h2>
            <h4>Latest fashion in town</h4>
        </div>
    </section>
    <section id="subscription" class="section-p1 section-m1">
        <div class="subcontent">
            <h3>Subscribe to Syntax</h3>
            <h4>Get Updates on products from syntax</h4>
        </div>
        <div class="subform">
            <input type="email" placeholder="someone@gmail.com" name="email" id="email">
            <button>Subscribe</button>
        </div>
    </section> -->
<?php include 'include/footer.php'; ?>