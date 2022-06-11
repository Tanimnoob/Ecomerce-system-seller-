<?php
include "../Control/process_r.php"
?>


<html>
    <head>
        <h2>Log In</h2> <hr> 
    </head>
    <body>
        <form action=""  method="post" >
            <table>
              <tr>
                  <td> <label for="fname">First name:</label></td>
                  <td> <input type="text" id="fname" name="fname" required>
                  
                  </td>
                  
              </tr> 
              <tr>
              <td> <label for="password">Password:</label> </td>
              <td> <input type="password" id="password" name="password" required> 

                  </td>
                  <td><input type="submit" name="login" value="login">
                  </td>
                 
                  
              </tr> 
                  <tr>
                  <td> <a href="http://localhost/project/View/registration.php"><h4>If you want to create account?,signup!</h4></a></td>
                 
                  </td>
                  <tr>
</td>
                  <?php
                  echo $logerr;
                   ?></td>
                   </tr>
                  