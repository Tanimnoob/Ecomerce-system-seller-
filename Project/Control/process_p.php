<?php
$ptittle=$des=$price=$brand="";
$ptittleerr=$deserr=$priceerr=$branderr=$catagoryerr=$fileerr=$dataperr="";
$count=0;

if(isset($_POST["Submit"])){
 
$ptittle=$_POST["ptittle"];

if(empty($ptittle)){

    $ptittleerr= "->please fill";

}
else{
    $count++;
    $ptittleerr="->your product tittle is ".$ptittle;
}

$des=$_POST["description"];

if(empty($des)){

$deserr="->please fill";

}
else{
    $count++;
}
$price=$_POST["price"];

if(empty($price)){

$priceerr= "->please fill this information";

}
else{
    $count++;
    $priceerr="->your product price is ".$price;
}

$brand=$_POST["brand"];
if(empty($brand)){

    $branderr= "->please enter the brand";
    
    }
    else{
        $count++;
        $branderr="-> Brand name is ".$brand;
    }
    if(isset($_POST["catagory"])){
        $count++;
        $catagoryerr="-> you have selected ".$_POST["catagory"];
    }
    else{
        $catagoryerr="->you have not selected any catagory";
    }

$total = count($_FILES['upload']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "../File/" . $_FILES['upload']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    }
  }
}




if($count==5){
    session_start();
    require_once '../Model/user.php';
    $current_user = getUser($_SESSION['current_user']);
   $formdata=array(
    'name'=>$ptittle,
    'description'=>$des,
    'price'=>$price,
    'brand'=>$brand,
    'catagory'=>$_POST["catagory"],
    'seller_id'=>$current_user['id']
   );
  require_once '../Model/products.php';
   $result = addProduct($formdata);
   if($result) {
    $dataperr= "Product info successfully saved <br>";
}
else {
    $dataperr= "No data saved";
}

}


}

?>