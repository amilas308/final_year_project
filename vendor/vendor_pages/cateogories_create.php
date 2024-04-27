<!-- <h2>Hello category construction</h2> -->
<?php 
    require_once '.././connect.php';
    if(isset($_POST['submit'])){
        $category_name = $_POST['category-name'];
        $select_sql = "SELECT * FROM `categories` WHERE `category_name` = '$category_name'";
        $select_query = mysqli_query($conn, $select_sql);
        $num_avail = mysqli_num_rows($select_query);
        if($num_avail > 0){
            echo "<script>alert('Category Exists in the database')</script>";
        } else{
                $insert_sql = "INSERT INTO `categories`(`category_name`) VALUES ('$category_name')";
                $query = mysqli_query($conn, $insert_sql);
                if($query){
                    echo "<script>alert('Category registered Successfully')</script>";
                    echo "<script>setInterval(() => window.location.href='../vendor/dashboard.php?category', 800)</script>";
                    exit();
                }
            }
    }

?>
<div class="categocreate">
    <h2>Create Category</h2>
    <form action="" method="POST">
        <div class="form-input">
            <input type="text" name="category-name" id="category" placeholder="Enter Category">
        </div>
        <input type="submit" value="Insert Category" name="submit">
    </form>
</div>