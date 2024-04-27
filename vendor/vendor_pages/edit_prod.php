<?php
    require_once '../../connect.php';
    $id  = $_GET['prod-edit'];
    $sql = "SELECT * FROM `product` WHERE `prod_id` = '$id'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $prev_prod_id = $result['prod_id'];
    $prev_prod_name = $result['prod_name'];
    $prev_prod_categ = $result['prod_categ'];
    $prev_prod_desc = $result['prod_description'];
    $prev_prod_image1 = $result['prod_image1'];
    $prev_prod_image2 = $result['prod_image2'];
    $prev_prod_image3 = $result['prod_image3'];
    $prev_prod_price = $result['prod_price'];
    // $prev_prod_image2 = $result['category_name'];
    var_dump($result);
    if(isset($_POST['submit'])){
        // $new_prod_id = $_POST['prod_id'];
        $new_prod_name = $_POST['prod_name'];
        $new_prod_categ = $_POST['prod_categ'];
        $new_prod_desc = $_POST['prod_description'];
        $new_prod_image1 = $_POST['prod_image1'];
        $new_prod_image2 = $_POST['prod_image2'];
        $new_prod_image3 = $_POST['prod_image3'];
        $new_prod_price = $_POST['price'];
        $sql = "UPDATE `product` SET `prod_name` = '$new_prod_name', `prod_categ` = '$new_prod_categ', `prod_description` = '$new_prod_desc', `prod_image1` = '$new_prod_image1', `prod_image2` = '$new_prod_image2', `prod_image3` = '$new_prod_image3', `prod_price` = '$new_prod_price' WHERE `prod_id` = $id";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo '<script>alert("You have updated this product")</script>';
            echo '<script>setInterval(() => window.location.href="../dashboard.php?product", 300)</script>';
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styling/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div class="edit_prod">
        <h2>Edit Product</h2>
        <!-- <em class="close-btn">&times;</em> -->
        <form action="" method="post">
            <div class="form-element">
                <label for="pname">Product Name</label>
                <input type="text" name="prod_name" id="pname" value="<?php echo $prev_prod_name; ?>">
            </div>
            <div class="form-element">
                <label for="prod_categ">Product Category</label>
                <select name="prod_categ" id="prod_categ">
                    <option value="#">---select Category----</option>
                    <?php
                        $sql = "SELECT * FROM `categories`";
                        $query = mysqli_query($conn, $sql);
                        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        // var_dump($result);
                    ?>
                    <?php foreach($result as $item):?>
                    <option value="<?php echo $item['category_id'];?>"><?php echo $item['category_name'];?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-element">
                <label for="prod_des">Product Description</label>
                <input type="text" name="prod_description" id="phone" value="<?php echo $prev_prod_desc; ?>">
            </div>
            <div class="form-element">
                <label for="prod_image1">product Image</label>
                <input type="file" name="prod_image1" id="prod_image1" value="<?php echo $prev_prod_image1; ?>">
            </div>
            <div class="form-element">
                <label for="prod_image2">product Image</label>
                <input type="file" name="prod_image2" id="prod_image2" value="<?php echo $prev_prod_image2; ?>">
            </div>
            <div class="form-element">
                <label for="prod_image3">product Image</label>
                <input type="file" name="prod_image3" id="prod_image3" value="<?php echo $prev_prod_image3; ?>">
            </div>
            <div class="form-element pin">
                <label for="price">Price</label>
                <input type="text" value="<?php echo $prev_prod_price; ?>" name="price" id="price">
            </div>
            <!-- <div class="form-element address">
                <label for="brand-name">Address</label>
                <input type="text" name="address" id="address" value="<?php //echo $prev_categ_name; ?>">
            </div> -->
            <input type="submit" name="submit" class="prod_add"  id="submit" value="Submit">
        </form>
        <!-- <a href="fo_pass">Forgot Password!</a> -->
    </div>
</body>
</html>