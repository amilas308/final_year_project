<?php
require_once "../connect.php";
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password =  htmlspecialchars($_POST['password']);
    $address =  htmlspecialchars($_POST['address']);
    $cpassword =  htmlspecialchars($_POST['cpassword']);
    $error_message = 'You must fill in all feilds';
    if(empty($fname)){
        die('first name is required');
    }
    if(empty($lname)){
        die('last name is required');
    }
    if(empty($email)){
        die('email is required');
    }
    if(empty($address)){
        die('address is required');
    }
    if(empty($password)){
        die('password is required');
    }
    if(empty($cpassword)){
        die('confirm your password ');
    }
    if($password !== $cpassword){
        die('Password does not match');
    }
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
    $stmt->execute();
    // if(mysqli_query($conn, $sql)){
        echo "Successful sign in";
        sleep(2);
        header("Location: login.php");
        // var_dump($_POST);
    // }

?>