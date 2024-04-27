<div class="add-user">
    <div class="head-vendor">
        <h1>Vendors</h1>
        <button class="btn-btn"><a href="./dashboard.php?create_vendor">Register Vendor</a></button>
    </div>
    <div class="body-vendor">
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Brand Name</th>
                    <th>Location</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once ".././connect.php";
                    $sql = "SELECT * FROM `vendor_users` LEFT JOIN `roles` ON vendor_users.role_id = roles.role_id ORDER BY date DESC";
                    // $sql = "SELECT role_id FROM `vendor_users`";
                    $query = mysqli_query($conn, $sql);
                    $result  = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    // var_dump($result);
                ?>
                <?php foreach($result as $item): ?>
                <tr>
                    <td><?php echo $item['full_name']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['phonenumber']; ?></td>
                    <td><?php echo $item['brand_name']; ?></td>
                    <td><?php echo $item['address']; ?></td>
                    <td><?php echo $item['Role']; ?></td>
                    <td>
                        <button class="edit_btn"><a href="./vendor_pages/edit_ven.php?editven=<?php echo $item['vendor_id'];?>">Edit</a></button>
                        <button class="delete_btn"><a href="./vendor_pages/delete.php?delven=<?php echo $item['vendor_id']; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <!-- <tr>
                <td>Full Name</td>
                <td>Brand Name</td>
                <td>Phone Number</td>
                <td>Description</td>
                <td>Location</td>
                </tr>
                <tr>
                <td>Full Name</td>
                <td>Brand Name</td>
                <td>Phone Number</td>
                <td>Description</td>
                <td>Location</td>
                </tr>
                <tr>
                <td>Full Name</td>
                <td>Brand Name</td>
                <td>Phone Number</td>
                <td>Description</td>
                <td>Location</td>
                </tr>
                <tr>
                <td>Aminu Mallami</td>
                <td>Mallami apparells</td>
                <td>0906535425</td>
                <td>Garllic and Ginger Sales</td>
                <td>Wurno Bayan Masallachin Sarki Sokoto</td>
                </tr>
                <tr>
                <td>Aminu Mallami</td>
                <td>Mallami apparells</td>
                <td>0906535425</td>
                <td>Garllic and Ginger Sales</td>
                <td>Wurno Bayan Masallachin Sarki Sokoto</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>