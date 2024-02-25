<?php
    include("/xampp/htdocs/porject/connect.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = '';
        if($username == 'admin' && $password == 'admin'){
            session_start();
            session_regenerate_id();
            $role = 'admin';
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['role'] = $role;
            header("Location: ../dashboard.php");
        } 
         if($username == 'vendor' && $password == '%password1'){
            session_start();
            session_regenerate_id();
            $role = 'vendor';
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            header("Location: ../dashboard.php");
        }
        $sql = "SELECT * FROM `vendor_users` WHERE `brand_name` = '$username'";
        $sel_query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($sel_query);
        if($result){
            if(password_verify($password, $result['password'])){
                session_start();
                session_regenerate_id();
                $role = $result['role'];
                $_SESSION['username'] = $result['brand_name'];
                $_SESSION['role'] = $role;
                header("Location: ../dashboard.php");
            }
        }

    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-COmpatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styling/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="/porject/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/scss/_icons.scss?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="/porject/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css?v=<?php echo time(); ?>">
        <link rel="icon" type="png" href="../img/logo.jpg">
    </head>
    <body>
        <div class="login">
            <div class="banner">
                <h1>Syntax banner</h1>
                <p>
                    Syntax provides a digital platform to peform Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ab quas explicabo inventore earum deserunt rerum, 
                    quos saepe id ipsa vel cumque voluptate tempore fuga in tenetur quisquam quasi sapiente.
                    Placeat?
                </p>
            </div>
            <div class="login-page">
                <img src="/porject/img/logo.jpg" alt="Logo-image" height="100">
                <h2>Login</h2>
                <?php
                    //  if(!$username || !$password){
                        // echo $message;
                    //  }
                ?>
                <form action="" method="post">
                    <div class="form-login">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Enter your user name/email">
                    </div>
                    <div class="form-login">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
        <script src="/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/js/all.min.js?v=<?php echo time(); ?>"></script>
    </body>
</html>