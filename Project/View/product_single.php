<?php
    require_once '../Model/products.php';
    $id = $_GET['product_id'];
    $product = getProduct($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel= "stylesheet"  type="text/css" href="../Css/product_view_single.css?v=1" >
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Single Product</title>
</head>
<body onload="getProduct(<?= $id ?>)">
<div class="navbar">
  <div class="fixed">
  <ul><li>    <a href="product.php">Go Back</a></li></ul>
</div>
      <ul><li>  <table class="content-table"></li></ul>
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Brand</th>
    <th>Catagory</th>
    <th>Actions</th>
</tr>
<tr>
    <th id="id"><?= $_GET['product_id'] ?></th>
    <th id="name"></th>
    <th id="description"></th>
    <th id="price"></th>
    <th id="brand"></th>
    <th id="catagory"></th>
    <th>
      <a href="#">Update</a>
      <a href="product_delete.php?product_id=<?=$product['id']?>">Delete</a>
    </th>
</tr>
</table>
<script>
  const getProduct = (id)=>{
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var product = JSON.parse(this.response);
        console.log(JSON.parse(this.response));
        document.getElementById("name").innerHTML = product.name;
        document.getElementById("description").innerHTML = product.description;
        document.getElementById("price").innerHTML = product.price;
        document.getElementById("brand").innerHTML = product.brand;
        document.getElementById("catagory").innerHTML = product.catagory;
      }
    };
    xmlhttp.open("GET", "get_single_product.php?product_id=" + id, true);
    xmlhttp.send();}
</script>
</body>
</html>