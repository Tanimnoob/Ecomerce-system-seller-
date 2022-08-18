<?php
require_once '../Model/products.php';
require_once '../Model/user.php';
require_once '../Model/order.php';
session_start();
$current_user = getUser($_SESSION['current_user']);
$orders = getAllOrders();
?>
<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet"  type="text/css" href="../Css/product_display.css?v=1" >
</head>
<body>
  <div class="navbar">
  <div class="fixed">
    <ul>
<li><a href="seller_dash.php">Go Back</a></li>

</ul>
</div>
  </div>
  <div class="navbar">
  <div class="fixed1">
    <ul>
  <li><a  href="create_product.php">Create Product</a></li>
</ul>
</div>
</div>


<?php
  if (!$orders) {
?>
  <h2>Hey <?= $current_user['name'] ?>, You Currently Have No Orders</h2>
<?php
  }else {
?>
<center>
<!-- <table border="1"> -->
  <table class="content-table">
    <thead>
  <h1>Product Table</h1><hr>
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>User</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Status</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($orders as $order) {
  $product = getProduct($order['product_id']);
  $user = getUserByID($order['user_id']);?>
  <tr class="active-row">
    <td ><?php echo $product['id'] ?></td>
    <td><?php echo $product['name'] ?></td>
    <td><?php echo $user['name'] ?></td>
    <td><?php echo $product['price'] ?></td>
    <td><?php echo $order['quantity'] ?></td>
    <td><?php echo $order['status'] ?></td>
    <td>


      <a href="order_delete.php?order_id=<?=$order['id']?>">Cancel Order</a>
    
    </td>
  </tr>
<?php } ?>

</table>
</center>
<?php
  }
?>
</body>
</html>