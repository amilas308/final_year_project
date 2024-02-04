<?php
    require_once './connect.php';
    session_start();
    if(isset($_SESSION['id'])){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE user_id = {$_SESSION['id']}");
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        $name = $user['first_name'];
    }else{
        // header("Location: ./pages/login.php");
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
    <link rel="icon" type="png" href="/img/logo.jpg?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="./style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="./scrollnav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>  
    <div class="about-header-nav"> 
        <section id="about-header">
            <div class="about-navbar1">
                <div class="about-navBar about-heading" id="about-navBar">
                    <a href="index.html">
                        <img src="./img/logo.jpg" height="47" alt="#" class="logo">
                    </a>
                    <div>
                        <ul class="about-navbar" id="chntxt">
                            <li><a href="index.php">Home</a></li>
                            <!-- <li><a href="shop.html">Shop</a></li> -->
                            <li><a class="active1" href="./about.php">About</a></li>
                            <li><a href="./pages/product.php">Product</a></li>
                            <?php if(isset($user)): ?>
                                <div class="dropdown">
                                    <button id="drop" class="about-dropbtn">Account</button>
                                    <div class="dropdown-content">
                                        <span><?php echo "Welcome back, " . $user['first_name'] . $user['last_name']?></span>
                                        <span><?php echo $user['email'] ?></span>
                                        <span><?php echo $user['phone'] ?></span>
                                        <button id="ed">
                                            <a href="/porject/pages/edit_user.php?editid=<?php echo $user['user_id'] ?>" class="ed">Edit</a>
                                        </button>
                                        <a href="/porject/pages/logout.php" class="sin">Log out</a>
                                    </div>
                                </div>
                                <!-- <select>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <a href="#">edit</a>
                                </select> -->
                            <?php else: ?>
                            <li><a href="./pages/signup.php">Signup</a></li>
                            <?php endif; ?>
                            <li><a href="cart.html"><i title="Cart" class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <i class="fas fa-bars marsh"  id="icol"></i>
                </div>
            </div>
        </section>
    </div>
    <div class="about-desc">
        <div class="about-des">
            <h1>About Syntax</h1>
            <p>
                Welcome to Syntax, your one-stop destination for the finest accessories that elevate your style game to the next level.
                At Syntax, we specialize in curating a diverse collection of shoes, caps, eye-glasses, rings, wrist-watches, 
                and bunch of other accessories that cater to your fashion needs.
                Shoes that define comfort without compromising on style, from sleek sneakers to elegant heels,
                designed to complement every occasion and outfit. Our bags range from chic to functional, 
                ensuring you stay organized while making a fashion statement.
                Explore our exquisite selection of eye-glasses, crafted to enhance your vision and elevate your look. 
                Our rings are a testament to timeless elegance, offering a blend of contemporary designs and classic craftsmanship.
                For the timepiece enthusiasts, our collection of wrist-watches boasts precision and sophistication,
                blending innovation with timeless aesthetics. 
                But that's not all  our inventory spans an extensive arrangement of accessories that encompass the latest trends and timeless classics.
                At Syntax, we pride ourselves on offering not just products, but experiences. Our commitment to quality, style, and customer satisfaction is unwavering.
                Whether you're seeking the perfect accessory for a special occasion or a staple piece for everyday wear, Syntax is here to cater for your diverse tastes and preferences.
                With a seamless online shopping experience and a dedication to providing the utmost convenience,
                we ensure that your journey with us is as enjoyable as it is stylish.
                Join us at Syntax and indulge in the world of accessories that speak volumes about your individuality and fashion-forward mindset.
            </p>
        </div>
        <div class="delive-info">
            <h1>Delivery Information</h1>
            <p>
                At Syntax, we understand the importance of convenience when it comes to delivering your much-desired accessories. That's why we offer a variety of delivery options tailored to suit your preferences and schedule.
                <bold>Home Delivery:</bold>
                Experience the ease of shopping from the comfort of your home and having your chosen items delivered right to your doorstep. Our reliable and efficient delivery partners ensure that your package arrives safely and promptly.
                <bold>Pickup:</bold>
                Prefer to collect your items at your own convenience? Opt for our pickup service, allowing you to select a convenient location from our network of pickup points. Whether it's a nearby store or a designated pickup center, we ensure a seamless and hassle-free process for you to retrieve your order on your schedule.
                <bold>Express Delivery:<bold>
                When time is of the essence, choose our express delivery option to receive your coveted accessories in the shortest possible time frame. Perfect for those last-minute fashion emergencies or special occasions when you need your items urgently.
            </p>
        </div>
        <div class="privacy-info">
            <h1>Privacy Information</h1>
            <p>
                At Syntax, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and manage the information provided to us through our website, services, and interactions with our platform.
                <bold>Information Collection:</bold>
                We collect personal information, such as name, address, email, and payment details, when voluntarily provided by users during account creation, purchases, or communication with our customer support.
                Information Usage:
                Personal information is used to process orders, provide customer service, improve our services, personalize user experiences, and communicate updates, promotions, or relevant information.
                Information Disclosure:
                We do not sell, trade, or rent personal information to third parties without consent, except as required to fulfill orders, comply with legal obligations, or protect against fraudulent activities.
                Data Security:
                We employ industry-standard security measures to protect personal information from unauthorized access, misuse, or alteration.
                Cookies and Tracking:
                Our website uses cookies and similar technologies to enhance user experience, analyze website traffic, and personalize content. Users can manage cookie preferences through their browser settings.
                Third-Party Links:
                Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these sites.
                Children's Privacy:
                Our services are not intended for individuals under the age of 13. We do not knowingly collect personal information from children without parental consent.
                Updates to Privacy Policy
                We reserve the right to update this Privacy Policy periodically. Users will be notified of any material changes via email or prominent notices on our website.
                Contact Us:
                If you have any questions, concerns, or requests regarding our Privacy Policy or the handling of your personal information, please contact us at [contact information].
                By using our services, you agree to the terms outlined in this Privacy Policy.
            </p>
        </div>
    </div>
<?php include 'include/footer.php'; ?>