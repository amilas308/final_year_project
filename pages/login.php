<?php
    require  "../connect.php";
    // $email = $_POST['email'];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // if(isset($_POST['submit'])){
        $sql = sprintf("SELECT * FROM `customer_users` WHERE email = '%s'", $conn->real_escape_string($_POST['email']));
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        // echo $user['user_id'];
        if($user){
            if(password_verify($_POST['password'], $user["password"])){
            // echo $user['password'];
            session_start();
            session_regenerate_id();
            $_SESSION["id"] = $user["user_id"];
            $_SESSION["fname"] = $user["first_name"];
            $_SESSION["email"] = $user["email"];
            // echo $_SESSION["fname"];
            header("Location: ../index.php");
            // print_r($_SESSION["id"]);
            // $_SESSION['user_id'] = $user['id'];
            // echo ['id'];
            // } else{
                // echo 'I am not working1';
            // }
        } else{
            echo 'Wrong Password';
        }
    // } else{
    //     echo 'I am not working3';
    // }
    // } else{
    //     // echo 'I am not working4';
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
                <input type="email" required name="email" value="<?php echo $_POST['email'] ?? null; ?>" placeholder="someone@gmail.com">
                <!-- <label for="password">Password</label> -->
                <input type="password"  name="password" placeholder="**********">
                <input type="submit" name="submit" value="Log in">
            </form>
            <p>I don't have an account?<a href="#">Sign in</a></p>
        </div>
    </body>
</html>