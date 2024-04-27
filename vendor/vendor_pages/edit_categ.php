<?php
    require_once '../../connect.php';
    $id  = $_GET['editcateg'];
    $sql = "SELECT * FROM `categories` WHERE `category_id` = '$id'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $prev_categ_id = $result['category_id'];
    $prev_categ_name = $result['category_name'];
    var_dump($result);
    if(isset($_POST['submit'])){
        $new_categ = htmlspecialchars($_POST['categ']);
        $sql = "UPDATE `categories` SET `category_name` = '$new_categ' WHERE `category_id` = '$id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo '<script>alert("You have updated this category")</script>';
            echo '<script>setInterval(() => window.location.href="../dashboard.php?category", 800)</script>';
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
    <div class="edit_categ">
        <h2>Edit Category</h2>
        <!-- <em class="close-btn">&times;</em> -->
        <form action="" method="post">
            <!-- <div class="form-element">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="ftname" value="<?php //echo $prev_categ_id; ?>">
            </div> -->
            <div class="form-element">
                <label for="lname">Category</label>
                <input type="text" name="categ" id="categ" value="<?php echo $prev_categ_name; ?>">
            </div>
            <input type="submit" name="submit" class="add"  id="submit" value="Submit">
        </form>
        <!-- <a href="fo_pass">Forgot Password!</a> -->
    </div>
</body>
</html>