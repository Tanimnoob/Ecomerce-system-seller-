<?php
    session_start();
    if (isset($_SESSION['current_user'])) {
        session_destroy();
        setcookie('current_user', $username, time() - 5);
        header('location: ../View/login.php');
    }
?>