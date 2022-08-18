<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once '../Model/user.php';

    $user = getUser($username);
    if ($user) {
        if ($password === $user['password']) {
            session_start();
            $_SESSION['current_user'] = $username;
            if (isset($_POST['remember']))
                setcookie('current_user', $username, time() + 24000);
            else
                setcookie('current_user', $username, time() + 1800);
            header('location: ../View/seller_dash.php');
        }
    }
}

    
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>No Such User Found</h1>
    <a href="../View/login.php">Go Back</a>
</body>
</html>
