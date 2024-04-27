<?php
    require_once '../../connect.php';
    $id  = $_GET['editven'];
    $sql = "SELECT * FROM `vendor_users` WHERE `vendor_id` = '$id'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $prev_ven_id = $result['vendor_id'];
    $prev_ven_name = $result['full_name'];
    $prev_ven_email = $result['email'];
    $prev_ven_phone = $result['phonenumber'];
    $prev_ven_brand = $result['brand_name'];
    $prev_ven_address = $result['address'];
    $prev_ven_role = $result['role_id'];
    // $prev_ven_address = $result['category_name'];
    var_dump($result);
    if(isset($_POST['submit'])){
        // $new_ven_id = $_POST[''];
        $new_ven_name = $_POST['fname'];
        $new_ven_email = $_POST['email'];
        $new_ven_phone = $_POST['phone'];
        $new_ven_brand = $_POST['brand'];
        $new_ven_address = $_POST['address'];
        $new_ven_role = $_POST['role'];
        $sql = "UPDATE `vendor_users` SET `full_name` = '$new_ven_name', `email` = '$new_ven_email', `phonenumber` = '$new_ven_phone', `brand_name` = '$new_ven_brand', `address` = '$new_ven_address', `role_id` = '$new_ven_role' WHERE `vendor_id` = $id";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo '<script>alert("You have updated this vendor")</script>';
            echo '<script>setInterval(() => window.location.href="../dashboard.php?vendor_user", 300)</script>';
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
    <div class="edit_ven">
        <h2>Edit Vendor</h2>
        <!-- <em class="close-btn">&times;</em> -->
        <form action="" method="post">
            <div class="form-element">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" id="ftname" value="<?php echo $prev_ven_name; ?>">
            </div>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $prev_ven_email; ?>">
            </div>
            <div class="form-element">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" value="<?php echo $prev_ven_phone; ?>">
            </div>
            <div class="form-element">
                <label for="brand-name">Brand Name</label>
                <input type="text" name="brand" id="brand" value="<?php echo $prev_ven_brand; ?>">
            </div>
            <div class="form-element">
                <label for="brand-name">Address</label>
                <input type="text" name="address" id="address" value="<?php echo $prev_ven_address; ?>">
            </div>
            <div class="form-element">
                <label for="brand-name">Role</label>
                <select name="role" id="role">
                <?php
                    $sql = "SELECT * FROM `roles`";
                    $query = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    // if($result){
                        // echo $result['role_id'];
                        // echo $result['Role'];
                    // }
                    ?>
                <option value="id">select role</option>
                <?php foreach($result as $item): ?>
                    <option value="<?php echo $item['role_id']; ?>"><?php echo $item['Role']; ?></option>
                <?php endforeach; ?>
                <!-- <option value="id2">Vendor</option> -->
                </select>
            </div>
            <!-- <div class="form-element address">
                <label for="brand-name">Address</label>
                <input type="text" name="address" id="address" value="<?php echo $prev_categ_name; ?>">
            </div> -->
            <input type="submit" name="submit" class="add"  id="submit" value="Submit">
        </form>
        <!-- <a href="fo_pass">Forgot Password!</a> -->
    </div>
</body>
</html>