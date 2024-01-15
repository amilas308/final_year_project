<?php
require_once "../connect.php";
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address =  htmlspecialchars($_POST['address']);
    $password =  htmlspecialchars($_POST['password']);
    $cpassword =  htmlspecialchars($_POST['cpassword']);
    $fname_err = $lname_err = $email_err = $phone_err = $address_err = $password_err = $cpassword_err = '';
    if(empty($fname)){
        $fname_err = 'Enter your first name';
    }
    if(empty($lname)){
        $lname_err = 'Enter your last name';
    }
    if(empty($email)){
        $email_err = 'Enter your email';
    }
    if(empty($address)){
        $address_err = 'Enter your address ';
    }
    if(empty($password)){
        $password_err = 'Enter a password';
    }
    if(empty($cpassword)){
        $cpassword_err = 'Enter confirm password';
    }
    if($password !== $cpassword){
        $pass_not_match = 'password does not match';
    }
    if(!$fname_err && !$lname_err && !$email_err && !$phone_err && !$password_err && !$cpassword_err && !$pass_not_match){
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
        // echo "Successful sign in";
        // sleep(2);
        header("Location: login.php");
        // var_dump($_POST);
    // }
    }
?>