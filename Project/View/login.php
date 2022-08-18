<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
   
<!-- <meta charset="UTF-8"> -->
<!-- <meta name = "viewpoint" content="width=device-width, initial-scale1.0"> -->
<link rel= "stylesheet"  type="text/css" href="../Css/login.css?v=1" />
<title>Login from</title>
</head>
<body>
    <div class="container">
    
    <form action="../Control/login_validation.php" method="post">
    <h1>Log in</h1>
            <div class="form-group">
            
                <label for="">Username:</label>
                
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                   
</div>
        
            <div class="form-group">
            
                <label for="">Password:</label>
                
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
</div>

                <input type="checkbox" name="remember" id="remember">
                <label for="">Remember Me</label>

             
                
                    <input type="submit" class="btn" value="Log In">
              <br>
                    <br>Don't have an account, <a href="registration.php">Sign Up</a>?
              
    </form>


</body>
</html>