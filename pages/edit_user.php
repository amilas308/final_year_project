<?php
    include('../connect.php');
    $id = $_GET['editid'];
    $sql = "SELECT * FROM `customer_users` WHERE user_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $prev_fname = $row['first_name'];
    $prev_lname = $row['last_name'];
    $prev_email = $row['email'];
    $prev_phone = $row['phone'];
    $prev_address = $row['address'];
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sql = "UPDATE `customer_users` SET `user_id` = $id, `first_name` = '$fname', `last_name` = '$lname', `email` = '$email', `phone` = '$phone', `address` = '$address' WHERE `user_id` = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: ../index.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">

    <title>Edit</title>
</head>
<body>
    <div class="edit_user">
        <h2>Edit Your Profile</h2>
        <!-- <em class="close-btn">&times;</em> -->
        <form action="" method="post">
            <div class="form-element">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="ftname" value="<?php echo $prev_fname; ?>">
            </div>
            <div class="form-element">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="ltname" value="<?php echo $prev_lname; ?>">
            </div>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $prev_email; ?>">
            </div>
            <div class="form-element">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" value="<?php echo $prev_phone; ?>">
            </div>
            <div class="form-element add">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="<?php echo $prev_address; ?>">
            </div>
            <input type="submit" name="submit" class="add"  id="submit" value="Submit">
        </form>
        <a href="fo_pass">Forgot Password!</a>
    </div>
    <script type="text/javascript" src="./main.js?v=<"></script>
 </body>
</html>