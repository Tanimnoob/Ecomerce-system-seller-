<?php
include "../Control/process_p.php"
?>

<!DOCTYPE html>
<html>
    <head> 
    <link rel= "stylesheet"  type="text/css" href="../Css/product_create.css?v=1" >  
    <div class="navbar">
  <div class="fixed">
    <ul>
  <li>  <a href="seller_dash.php">Go Back</a> 
    </ul>
</div>
  </div>
  </head>
    <body>
    <div class="regform"><h1>Create Product</h1></div> 
    <div class="main">
       
        <form action=""  method="post" enctype="multipart/form-data">
        
          <form>
              <div id="name"> 
              <label for="ptittle"><div class="name">Product tittle:</div></label>
               <input type="text" id="ptittle" class="firstname" name="ptittle">
                  <?php
                  echo $ptittleerr;
                  ?>
                 
                 
                  
              
          
          <label for="description"><div class="name">Full description:</div></label>
         <textarea  id="description" name="description" class="company "> </textarea>
             <?php
                  echo $deserr;
                  ?>
          

              
          <div class="name">     <label for="price">Pricing:</label> </div>
                 <input type="number" id="price" class="email" name="price"> 
                <?php
                  echo $priceerr;
                  ?>
          
          <div class="name"> <label for="brand">Brand name:</label> </div>
                <input type="text" id="brand" class="code" name="brand"> 
                <?php
                  echo $branderr;
                  ?>
           
        
           <div class="name"> <label for="catagory"> Catagory:</label> </td></div>
                <input class="radio-one" type="radio" id="Clothes" name="catagory" value="Clothes">
                <label class="radio"  for="catagory">Clothes</label>
                <input class="radio-one" type="radio" id="Smartphones" name="catagory" value="Smartphones">
                <label class="radio" for="catagory">Smartphones</label>
                <input class="radio-one" type="radio" id="Sports" name="catagory" value="Sports">
                <label class="radio" for="catagory">Sports</label> 
                <input class="radio-one" type="radio" id="Books" name="catagory" value="Books">
                <label class="radio" for="catagory">Books</label> <br>
                <input class="radio-one" type="radio" id="Automobile" name="catagory" value="Automobile">
                <label class="radio" for="catagory">Automobile</label> 
                <input class="radio-one" type="radio" id="Electronics" name="catagory" value="Electronics">
                <label class="radio" for="catagory">Electronics</label> 
                <input class="radio-one" type="radio" id="Sports" name="catagory" value="Sports">
                <label class="radio" for="catagory">Sports</label> 
                <input class="radio-one" type="radio" id="Others" name="catagory" value="Others">
                <label class="radio" for="catagory">Others</label> 
                    
                    <?php
                  echo $catagoryerr;
                  ?>
            
        
        
          
            <div class="name">   Media :</div>
         <input name="upload[]" type="file" multiple="multiple"  class="file"/>
             <?php
                  echo $fileerr;
                  ?>
         
 
         
        
          
            
          <input type="submit" name="Submit" value="Upload"  class="btn">
       

      
         <?php
                  echo $dataperr;
                  ?>

       
            </table>
</form>
        </form>

    </body>
</html>