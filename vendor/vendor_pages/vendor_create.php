<?php
    require_once '/xampp/htdocs/porject/connect.php';
    if(isset($_POST['submit'])){
        $full_name  = $_POST['full-name'];
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $brand = htmlspecialchars($_POST['brand-name']);
        $address = htmlspecialchars($_POST['address']);
        $role = htmlspecialchars($_POST['role']);
        $pass = htmlspecialchars($_POST['pass']);
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);
        $caught = "";
        try {
            //code...
            $sql = "INSERT INTO `vendor_users`(`full_name`,`email`,`phonenumber`,`brand_name`,`address`,`role`,`password`) VALUES('$full_name','$email','$phone','$brand','$address','$role','$password_hash')";
            // if( === "Duplicate entry"){
                // throw new Exception("The email has already been taking");
            // }
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Vendor registered Successfully')</script>";
                header("Location: ../vendor/dashboard.php?create_vendor");
            }
        } catch (Exception $e) {
            $caught = $e->getMessage() . ' ' ."Email already taken";
            //throw $th;
        }
    }

?>
<div class="create-vendor">
    <h2>Register Vendor</h2>
    <form action="" method="post">
        <div class="form-input">
            <label for="full-name">Full Name</label>
            <input type="text" placeholder="full name" required name="full-name" id="full-name">
        </div>
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" placeholder="someone@gmail.com"required name="email" id="email">
        </div>
        <div class="form-input">
            <label for="phone">Phone Number</label>
            <input type="tel" placeholder="phone number" name="phone"required id="phone">
        </div>
        <div class="form-input second">
            <label for="Brand-name">Brand Name</label>
            <input type="text" placeholder="brand name" name="brand-name"required id="brand-name">
        </div>
        <div class="form-input second">
            <label for="Address">Address</label>
            <input type="text" placeholder="address" name="address"required id="address">
        </div>
        <div class="form-input second">
            <label for="role">Role</label>
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
        <input type="password" class="hide" value="%password1" name="pass" id="pass">
        <div class="form-input">
        <input type="submit" value="Register Vendor" name="submit">
    </div>
    </form>
    <em><?php $caught; ?></em>
</div>