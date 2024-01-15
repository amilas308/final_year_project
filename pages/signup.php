<?php
require_once "../connect.php";
    $fname = $lname = $email = $phone = $address = $password = $cpassword = '';
    // $phone = htmlspecialchars($_POST['phone']);
    $fname_err = $lname_err = $email_err = $phone_err = $address_err = $password_err = $cpassword_err = '';
    if(isset($_POST['submit'])){
        // var_dump($_POST);
        // echo 'something happened';
    if(empty($_POST['fname'])){
        $fname_err = 'Enter your first name';
    } else{
        $fname = htmlspecialchars($_POST['fname']);
    }
    if(empty($_POST['lname'])){
        $lname_err = 'Enter your last name';
    } else{
        $lname = htmlspecialchars($_POST['lname']);
    }
    if(empty($_POST['email'])){
        $email_err = 'Enter your email';
    } else{
        $email = htmlspecialchars($_POST['email']);
    }
    if(empty($_POST['phone'])){
        $phone_err = 'Enter your phone number';
    } else{
        $phone = htmlspecialchars($_POST['phone']);
    }
    if(empty($_POST['address'])){
        $address_err = 'Enter your address ';
    } else{
        $address =  htmlspecialchars($_POST['address']);
    }
    if(empty($_POST['password'])){
        $password_err = 'Enter a password';
    } else{
        $password =  htmlspecialchars($_POST['password']);
    }
    if(empty($_POST['cpassword'])){
        $cpassword_err = 'Enter confirm password';
    } else{
        $cpassword =  htmlspecialchars($_POST['cpassword']);
    }
    if($password !== $cpassword){
        $pass_not_match = 'password does not match';
    }
    if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($phone_err) && empty($password_err) && empty($cpassword_err) && empty($pass_not_match)){
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `customer_users`(`first_name`, `last_name`, `email`, `phone`, `address`, `password`) VALUES (?,?,?,?,?,?)";

    $stmt = $conn->stmt_init();
    $stmt->prepare($sql);
    $stmt->bind_param('ssssss',
                      $fname,
                      $lname,
                      $email,
                      $phone,
                      $address,
                      $password_hash
    );
    if($stmt->execute()){
        echo 'I am working';
        header("Location: login.php");
    }
    // if(mysqli_query($conn, $sql)){
        // echo "Successful sign in";
        // sleep(2);
        echo 'I am working';

        // var_dump($_POST);
    // }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="png" href="../img/logo.jpg">
        <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="signin" style="height: 620px;">
            <h1>Sign In</h1>
            <form action="" method="POST">
                <!-- <label for="First-name">First Name</label> -->
                <input name="fname" class="<?php echo $fname_err ? 'is_invalid' : null; ?>" type="text"  autocomplete="off"  placeholder="First Name">
                <span class="invalid-message">
                    <?php echo $fname_err; ?>
                </span>
                <!-- <label for="Last-name">Last Name</label> -->
                <input type="text"  name="lname"class="<?php echo $lname_err ? 'is_invalid' : null; ?>"  autocomplete="off"placeholder="Last Name">
                <span class="invalid-message">
                    <?php echo $lname_err; ?>
                </span>   
                <!-- <label for="Email">Email</label> -->
                <input type="email"  name="email" class="<?php echo $email_err ? 'is_invalid' : null; ?>"autocomplete="off" placeholder="someone@gmail.com">
                <span class="invalid-message">
                    <?php echo $email_err; ?>
                </span>
                <!-- <label for="phone">Phone-number</label> -->
                <input type="tel"  name="phone" class="<?php echo $phone_err ? 'is_invalid' : null; ?>"autocomplete="off" placeholder="+2340000000000">
                <span class="invalid-message">
                    <?php echo $phone_err; ?>
                </span>
                <!-- <label for="address">Address</label> -->
                <input type="text"  name="address"class="<?php echo $address_err ? 'is_invalid' : null; ?>" autocomplete="off" placeholder="Address">
                <span class="invalid-message">
                    <?php echo $address_err; ?>
                </span>
                <!-- <label for="password">Password</label> -->
                <input type="password"  name="password" class="<?php echo $password_err ? 'is_invalid' : null; ?>"placeholder="password">
                <span class="invalid-message">
                    <?php echo $password_err; ?>
                </span>
                <!-- <label for="cpassword">Confirm Password</label> -->
                <input type="password"  name="cpassword"class="<?php echo $cpassword_err ? 'is_invalid' : null; ?>" placeholder="password">
                <span class="invalid-message">
                    <?php echo $cpassword_err; ?>
                </span>
                <input type="submit" name="submit" value="Sign in">
            </form>
            <p>Already have an account?<a href="login.php">Log in</a></p>
        </div>
    </body>
</html>