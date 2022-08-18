<?php
require_once '../Model/products.php';
require_once '../Model/user.php';
session_start();
$current_user = getUser($_SESSION['current_user']);
$products = getUserProducts($current_user['id']);
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
  if (!$products) {
?>
  <h2>Hey <?= $current_user['name'] ?>, You Currently Have No Products</h2>
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
    <th>Description</th>
    <th>Price</th>
    <th>Brand</th>
    <th>Catagory</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($products as $product) {?>
  <tr class="active-row">
    <td ><?php echo $product['id'] ?></td>
    <td><?php echo $product['name'] ?></td>
    <td><?php echo $product['description'] ?></td>
    <td><?php echo $product['price'] ?></td>
    <td><?php echo $product['brand'] ?></td>
    <td><?php echo $product['catagory'] ?></td>
    <td>


      <a  href="product_single.php?product_id=<?=$product['id']?>">View</a>
      <a href="#">Update</a>
      <a href="product_delete.php?product_id=<?=$product['id']?>">Delete</a>
    
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