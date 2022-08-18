<?php
    require_once '../Model/products.php';
    if (deleteProduct($_GET['product_id']))
        header('Location: product.php');
    header('Location: product.php');
?>