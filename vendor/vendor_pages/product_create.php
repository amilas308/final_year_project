<?php
    require_once '.././connect.php';
    if(isset($_POST['submit'])){
        $prod_unq_id = $_POST['prod-unq'];
        $product_name = $_POST['product-name'];
        $product_category = $_POST['product-category'];
        $product_description = $_POST['product-description'];
        $product_image1 = $_FILES['product-image1']['name'];
        $product_image2 = $_FILES['product-image2']['name'];
        $product_image3 = $_FILES['product-image3']['name'];
        $tmp_product_image1 = $_FILES['product-image1']['tmp_name'];
        $tmp_product_image2 = $_FILES['product-image2']['tmp_name'];
        $tmp_product_image3 = $_FILES['product-image3']['tmp_name'];
        move_uploaded_file($tmp_product_image1, "./vendor_pages/prod-image/$product_image1");
        move_uploaded_file($tmp_product_image2, "./vendor_pages/prod-image/$product_image2");
        move_uploaded_file($tmp_product_image3, "./vendor_pages/prod-image/$product_image3");
        $prod_price = $_POST['prod-price'];
        $select_sql = "SELECT * FROM `product` WHERE `prod_name` = '$product_name'";
        $select_query = mysqli_query($conn, $select_sql);
        $num_avail = mysqli_num_rows($select_query);
        if($num_avail > 0){
            echo "<script>alert('Product Exist in the database')</script>";
        } else{
                $sql = "INSERT INTO `product`(`prod_unq_id`, `prod_name`,`prod_categ`,`prod_description`,`prod_image1`,`prod_image2`,`prod_image3`,`prod_price`)VALUES('$prod_unq_id','$product_name','$product_category ','$product_description','$product_image1','$product_image2','$product_image3','$prod_price')";
                $query = mysqli_query($conn, $sql);
                if($query){
                    echo "<script>alert('Product Registered Successfully')</script>";
                }
             }
    }
?>
<div class="create-product">
    <h2>Add Product</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="prod-unq" value="<?php echo 'prod_' . rand(1000, 9999);?>">
        <div class="form-input">
            <!-- <label for="prod-name">Product name</label> -->
            <input required type="text" name="product-name" placeholder="prodcuct name" id="prod-name">
        </div>
        <div class="form-input second">
            <select required name="product-category" id="prod-category">
                <option value="">----Select a Category----</option>
                <?php
                    $sql = "SELECT * FROM `categories`";
                    $query = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                ?>
                <?php foreach($result as $item):  ?>
                <option value="<?php echo $item['category_id']; ?>"><?php echo $item['category_name']; ?></option>
                <?php endforeach; ?>

                <!-- <option value="1">Category</option>
                <option value="1">Category</option> -->
            </select>
        </div>
        <div class="form-input">
            <input type="text" required name="product-description" placeholder="Description of product" id="prod-description">
        </div>
        <div class="form-input">
            <input type="text" required name="prod-price"   placeholder="&#8358;0.000" data-type="currency" id="prod-price">
        </div>
        <div class="form-input">
            <input type="file" required name="product-image1" id="prod-image">
        </div>
        <div class="form-input">
            <input type="file" required name="product-image2" id="prod-image">
        </div>
        <div class="form-input">
            <input type="file" required name="product-image3" id="prod-image">
        </div>
        <div class="form-input">
            <input type="submit" required class="last" value="Add Product" name="submit">
        </div>
    </form>
</div>