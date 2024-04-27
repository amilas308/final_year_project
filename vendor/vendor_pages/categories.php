<div class="catego">
    <div class="catego-head">
        <h2>Categories</h2>
        <button><a href="./dashboard.php?categories_create">Insert Categories</a></button>
    </div>
    <table>
        <thead>
        <tr>
            <th>Category Id</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
                require_once '.././connect.php';
                $sql = "SELECT * FROM `categories`";
                $query = mysqli_query($conn, $sql);
                $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            ?>
            <?php foreach($result as $item): ?>
            <tr>
                <td><?php echo $item['category_id']?></td>
                <td><?php echo $item['category_name']?></td>
                <td>
                    <button class="edit_btn"><a href="./vendor_pages/edit_categ.php?editcateg=<?php echo $item['category_id']?>">Edit</a></button>
                    <button class="delete_btn"><a href="./vendor_pages/delete.php?categoryid=<?php echo $item['category_id']?>">Delete</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <td>2</td>
                <td>Rings</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr> -->
            <!-- <tr>
                <td>3</td>
                <td>Bags</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Shoes</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>