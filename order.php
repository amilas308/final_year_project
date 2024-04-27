<?php include "./include/other_header.php";?>
<?php
  $id = $_GET['orderid'];
  $sql = "SELECT * FROM `order` WHERE `order_name` = '$id'";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
  // $row = mysqli_num_rows($result);
  ?>
  <div class="display-order">
    <h5>Order product</h5>
    <table>
          <thead>
            <tr>
              <th>Order id</th>
              <th>Order product</th>
              <th>Price</th>
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
              <td><?php echo $item['order_product'];?></td>
              <td>&#8358;<?php echo $item['order_price'];?></td>
              <td>pending</td>
              <td><?php echo $item['order_date'];?></td>
            </tr>
            <?php }
          ?>
          </tbody>
        </table>
    </div>
  </div>

<