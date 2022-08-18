<?php

session_start();
require_once '../Model/user.php';
$user = getUser($_SESSION['current_user']);
if (!$user) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Css/seller_dash.css?v=1"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../Js/seller_dash.js?v=1"></script>

    <title>Seller Dashboard</title>
</head>
<body>
    <h1><div class="design">Wellcome Back, <?php echo $user['name'] ?></h1></div>
    <?php if (isset($user['Image'])) { ?>
        <img style="width: 21rem;" src="../File/<?php echo $user['Image'] ?>" alt="Profile Pic">
    <?php } ?>


    <div id="flip">+</div> 
    <ul> 
    <div id="panel">  <a href="create_product.php">Add Products</a></div><ul>
    <ul> <div id="panel1">  <a href="product.php">Show Products</a></div> <ul>
     <ul> <div id="panel2"><a href="order.php">Order Info</a></div> <ul>
   <ul> <div id="panel3"><a href="../Control/logout.php">Logout</a></div><ul>
    </ul>

    <!-- <ul>
        <li>
            <a href="../Control/logout.php">Logout</a>
        </li>
        <li>
            <a href="create_product.php">Add Products</a>
        </li>
        <li>
            <a href="product.php">Show Products</a>
        </li>
    </ul> -->
</body>
</html>