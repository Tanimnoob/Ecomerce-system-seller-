<?php
    require_once '../Model/products.php';
    $id = $_GET['product_id'];
    $product = getProduct($id);
    echo json_encode($product);
?>
