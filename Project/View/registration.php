 <?php
include "../Control/process_r.php"
?>
<!DOCTYPE html>
<html>
    <head>
      
      <link rel= "stylesheet"  type="text/css" href="../Css/registration.css" />
        
    </head>
    
    <body>
      <div class="signup-box">
      <h1>Seller Registration</h1>
      <form action="" onsubmit="return check_form()"  method="post" enctype="multipart/form-data">
              
                   <label for="fname">First name:</label>
                   <input type="text" id="fname" name="fname" onkeyup="check_fname()">
                   <p id="fname_error"></p>
                  <?php
                  echo $fnameerr;
                  ?>
                   <label for="lname">Last name:</label> 
                  <input type="text" id="lname" name="lname" onkeyup="check_lname()">
                  <p id="lname_error"></p>
                  <?php
                  echo $lnameerr;
                  ?>
                  
             
                 <label for="DateOfBirth">Date Of Birth:</label> 
                 <input type="date" id="BOD" name="BOD" onchange="check_birthday()">
                 <p id="birthday_error"></p> 
                <?php
                  echo $DateOfBirtherr;
                  ?>
                 
                 <label for="gender" >Gender:</label>
          <label for="gender" class="radio">
          <input type="radio" id="male" name="gender" class="radio__input" value="Male" onchange="check_gender()"/>
          <div class ="radio__radio"></div> 
          Male</label>
              

          <label for="gender" class="radio">
          <input type="radio" id="female" name="gender" class="radio__input" value="Female"onchange="check_gender()"/></td>
          <div class ="radio__radio"></div> 
          Female</label>     

          <label for="gender" class=radio>
            <input type="radio" id="others" name="gender" class="radio__input" value="others"onchange="check_gender()"/>
            <div class ="radio__radio"></div> 
          others</label>  
          <p id="gender_error"></p>
                   <?php
                  echo $gendererr;
                  ?>
    
           
                <label for="company">Company:</label> 
                  <input type="text" id="company" name="company" onkeyup="check_company()">
                 <p id="company_error"></p>
                <?php
                  echo $companyeerr;
                  ?>
           
            
                 <label for="email">Email:</label> 
                 <input type="text" id="email" name="email" onkeyup="check_email()"> 
                 <p id="email_error"></p>
                <?php
                  echo $emailerr;
                  ?>
           
               <label for="password">Password:</label> 
               <input type="password" id="password" name="password" onkeyup="check_password()"> 
               <p id="password_error"></p>
              <?php
                  echo $passerr;
                  ?>
          
               <label for="cpassword">Confirm Password:</label>
              <input type="password" id="cpassword" name="cpassword" onkeyup="check_confirm_password()"> 
              <p id="cp_error"></p>
              <?php
                  echo $cpasserr;
                  ?>
           
         
        
                 <label for="phone">Phone:</label> 
                 <input type="tel" id="phone" name="phone" onkeyup="check_phone()" > 
                 <p id="phone_error"></p>
                <?php
                  echo $phoneerr;
                  ?>
         

                 <label for="address">Address:</label> 
                 <input type="text" id="address" name="address" onkeyup="check_address()" > 
                 <p id="address_error"></p>
               <?php
                  echo $adderr;
                  ?>
         

          
         <label > Please submit your photo :</label>
         <input type="file" id="file" name="myfile"onkclick="check_file()">
         <p id="file_error"></p>
            <?php
                echo $fileerr;
                  ?>
       
          
          <label for="comment">Message (if any):</label>
         <textarea id="comment" name="comment" rows="4" cols="50"> </textarea>
             <?php
               echo $comerr;
                  ?>
                
                
        <labe></label>
           
        <input type="submit" name="Submit" class="btn" value="Submit Form">
         <?php
                  echo $dataerr;
                  ?>

     
           
      </form>
<p>By clicking the Sign Up button,you agree to our <br>
<a href="condition.php" >Term and Condition</a> and <a href='condition.php' >Policy & Privacy</a>
</p>
</div>
  <p class="para-2">If you are already Registrated you can login, <a href="login.php">Click here!</a></p>
  <p id= "errorform"></p>
  <script src="../Js/registration_script.js"></script>
    </body>
</html>