<div class="produst-page">
    <div class="product-head">
        <h2>Product</h2>
        <button><a href="./dashboard.php?product_create">Add Product</a></button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product id</th>
                <th>Product Name</th>
                <th>Vendor</th>
                <th>Product Category</th>
                <th width="300px">Product Description</th>
                <th>Date</th>
                <th>Product image</th>
                <th>Product price</th>
                <th>Product Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once '.././connect.php';
                $sql = "SELECT * FROM `product` LIMIT 5";
                $query = mysqli_query($conn, $sql);
                $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                $user = $_SESSION['username'];
            ?>
            <?php foreach($result as $item): ?>
             <tr>
                <td><a href="#"><?php echo 'prod_'.$item['prod_id']; ?></a></td>
                <td><?php echo $item['prod_name']; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $item['prod_categ']; ?></td>
                <td><?php echo $item['prod_description']; ?></td>
                <td><?php echo $item['date']; ?></td>
                <td>
                    <img src="./vendor_pages/prod-image/<?php echo $item['prod_image']; ?>" width="25" alt="Image Description">
                </td>
                <td><?php echo $item['prod_price']; ?></td>
                <td>
                    <button class="edit_btn"><a href="#">Edit</a></button>
                    <button class="delete_btn"><a href="#">Delete</a></button>
                </td>
            </tr>
            <?php endforeach;  ?>
            <!--<tr>
                <td>prod1</td>
                <td>Rayband</td>
                <td>Jamil Ahmad</td>
                <td>EyeGlass</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, optio?</td>
                <td><img src=".././img/clipart1051406.png" height="15" alt="Image Description"></td>
                <td>
                    <button class="edit_btn"><a href="#">Edit</a></button>
                    <button class="delete_btn"><a href="#">Delete</a></button>
                </td>
            </tr>
            <tr>
                <td>prod1</td>
                <td>Rayband</td>
                <td>Rufai Shamsudeen</td>
                <td>EyeGlass</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, optio?</td>
                <td><img src=".././img/clipart1051406.png" height="15" alt="Image Description"></td>
                <td>
                    <button class="edit_btn"><a href="#">Edit</a></button>
                    <button class="delete_btn"><a href="#">Delete</a></button>
                </td>
            </tr>
            <tr>
                <td>prod1</td>
                <td>Rayband</td>
                <td>Kamal Ibrahim</td>
                <td>EyeGlass</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, optio?</td>
                <td><img src=".././img/clipart1051406.png" height="15" alt="Image Description"></td>
                <td>
                    <button class="edit_btn"><a href="#">Edit</a></button>
                  <button class="delete_btn"><a href="#">Delete</a></button>
                </td>
            </tr>
            <tr>
                <td>prod1</td>
                <td>Rayband</td>
                <td>Atinuke Kunle</td>
                <td>EyeGlass</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, optio?</td>
                <td><img src=".././img/PngItem_1701988.png" height="15" alt="Image Description"></td>
                <td>
                    <button class="edit_btn"><a href="#">Edit</a></button>
                    <button class="delete_btn"><a href="#">Delete</a></button>
                </td>
            </tr>
            <tr>
                <td>prod1</td>
                <td>Rayband</td>
                <td>Joy Ananias</td>
                <td>EyeGlass</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, optio?</td>
                <td><img src=".././img/glass3.jpg" height="15" alt="Image Description"></td>
                <td>
                    <button class="edit_btn"><a href="#">Edit</a></button>
                    <button class="delete_btn"><a href="#">Delete</a></button>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>