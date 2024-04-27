<?php
    require '.././connect.php';
  $sql = "SELECT * FROM `order` LEFT JOIN `customer_users1` ON order.order_name = customer_users1.cus_id";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
  // $row = mysqli_num_rows($result);
  // $full_name = $user['first_name'] . $user['last_name'];
  ?>
  <div class="display-order">
    <h5>Order product</h5>
    <table>
          <thead>
            <tr>
              <th>Order id</th>
              <th>Customer Name</th>
              <th>Order product</th>
              <th>Price</th>
              <th>Address</th>
              <th>Contact</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Order Date</th>
            </tr>
          </thead>
          <tbody>
    <?php
  foreach($result as $item){?>
    <div class="display-card">
            <tr>
              <td>orderid_<?php echo $item['order_id'];?></td>
              <td><?php echo $item['first_name'] . ' ' . $item['last_name'];?></td>
              <td><?php echo $item['order_product'];?></td>
              <td>&#8358;<?php echo $item['order_price'];?></td>
              <!-- <?php //var_dump($item['order_price'])?> -->
              <td><?php echo $item['address'];?></td>
              <td><?php echo $item['phone'];?></td>
              <td><?php echo $item['order_quantity'];?></td>
              <td>pending</td>
              <td><?php echo $item['order_date'];?></td>
            </tr>
            <?php }
          ?>
          </tbody>
        </table>
    </div>
  </div>