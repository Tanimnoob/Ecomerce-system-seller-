<?php
    require_once '../Model/order.php';
    if (deleteOrder($_GET['order_id']))
        header('Location: order.php');
    header('Location: order.php');
?>