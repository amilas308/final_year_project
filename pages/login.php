<?php
    require  "../connect.php";
    $email = $_POST['email'];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE email = '%s'", $conn->real_escape_string($email));
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        // var_dump($user);
        // echo $user['user_id'];
        if($user){
            session_start();
            session_regenerate_id();
            $_SESSION["id"] = $user["user_id"];
            $_SESSION["fname"] = $user["first_name"];
            $_SESSION["email"] = $user["email"];
            // print_r($_SESSION["id"]);
            // $_SESSION['user_id'] = $user['id'];
            // echo ['id'];
            header("Location: ../index.php");
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-COmpatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <link rel="icon" type="png" href="../img/logo.jpg">
    </head>
    <body>
        <div class="login">
            <h1>Log In</h1>
            <form action="" method="post">
                <!-- <label for="Email">Email</label> -->
                <input type="email" required name="email" placeholder="someone@gmail.com">
                <!-- <label for="password">Password</label> -->
                <input type="password" required name="password" placeholder="**********">
                <input type="submit" value="Sign in">
            </form>
            <p>I don't have an account?<a href="#">Sign in</a></p>
        </div>
    </body>
</html>