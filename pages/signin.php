<?php



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="png" href="../img/logo.jpg">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="signin" style="height: 560px;">
            <h1>Sing In</h1>
            <form action="./process-signup.php" method="post">
                <label for="First-name">First Name</label>
                <input name="fname" type="text" required autocomplete="off"  placeholder="First Name">
                <label for="Last-name">Last Name</label>
                <input type="text" required name="lname"  autocomplete="off"placeholder="Last Name">
                <label for="Email">Email</label>
                <input type="email" required name="email" autocomplete="off" placeholder="someone@gmail.com">
                <label for="phone">Phone-number</label>
                <input type="tel" required name="phone" autocomplete="off" placeholder="+2340000000000">
                <label for="address">Address</label>
                <input type="text" required name="address" autocomplete="off" placeholder="Address">
                <label for="password">Password</label>
                <input type="password" required name="password" placeholder="**********">
                <label for="cpassword">Confirm Password</label>
                <input type="password" required name="cpassword" placeholder="**********">
                <input type="submit" value="Sign in">
            </form>
            <p>Already have an account?<a href="#">Log in</a></p>
        </div>
    </body>
</html>