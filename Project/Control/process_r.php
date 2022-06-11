<?php
$fname = $lname = $company = $age = $pass = $phn = $email = $id = $add = $comment = "";
$fnameerr = $lnameerr = $companyeerr = $ageerr = $passerr = $iderr=$logerr= $cpasserr = $phoneerr = $emailerr = $comerr = $gendererr = $adderr = $fileerr = $dataerr = "";
$count = 0;
//$id=0;

if (isset($_POST["Submit"])) {

    $fname = $_POST["fname"];

    if (empty($fname) || strlen($fname) < 3) {

        $fnameerr = "->please enter a valid a name";
    } else {
        $count++;
        $fnameerr = "->your first name is " . $fname;
    }

    $lname = $_POST["lname"];

    if (empty($lname) || strlen($lname) < 3) {

        $lnameerr = "->please enter a valid a name";
    } else {
        $count++;
        $lnameerr = "->your last name is " . $lname;
    }
    $company = $_POST["company"];

    if (empty($company)) {

        $companyeerr = "->please fill this information";
    } else {
        $count++;
        $companyeerr = "->your company name is " . $company;
    }

    $age = $_POST["age"];
    if (empty("$age")) {

        $ageerr = "->please enter your age";
    } else {
        $count++;
        $ageerr = "-> your age is " . $age;
    }
    if (isset($_POST["gender"])) {
        $count++;
        $gendererr = "-> you have selected " . $_POST["gender"];
    } else {
        $gendererr = "->you have not selected gender";
    }

    $pass = $_POST["password"];

    if (empty($pass) || strlen($pass) < 3) {

        $passerr = "->please enter a password upto 8 letter/character";
    } else {
        $count++;
        $passerr = "->your password is " . $pass;
    }
    $cpass = $_POST["cpassword"];

    if (($pass == $cpass) && (!empty($cpass)) && (strlen($cpass) >= 3)) {
        $count++;
        $cpasserr = "->your password is confirmed " . $cpass;
    }
    // else if(empty($cpass)|| (strlen($cpass)<8)||($pass!=$cpass)){
    else { //if(empty($cpass) || strlen($cpass)<8){
        $cpasserr = "->Please match password! ";
    }


    $email = $_POST["email"];
    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $emailerr = "->please enter a valid email";
    } else {
        $count++;
        $emailerr = "->your email is " . $email;
    }

    $phn = $_POST["phone"];
    if (empty($phn)) {

        $phoneerr = "->please enter 11 digit phone number";
    } else {
        $count++;
        $phoneerr = "-> your number is " . $phn;
    }

    if ($_FILES["myfile"]["type"] == "image/jpeg") {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../File/" . $fname . date("Y-m-d") . ".jpg")) {
            $count++;
            $fileerr = "->you have selected " . $_FILES["myfile"]["name"];
        } else {
            $fileerr = "->please choose a jpg file under 6mb";
        }
    } else {
        $fileerr = "->please choose a jpg file under 6mb";
    }

    $comment = $_POST["comment"];
    if (!empty($comment)) {
        $count++;
    }
    $add = $_POST["address"];
    if ((empty($add))) {
        $adderr = "->Please enter valid address";
    } else {
        $count++;
        $adderr = "->Your address is:" . $add;
    }

   

    if ($count == 12) {

        //$id=$id+$filereadphp;
        //$filereadphp=$filereadphp+$id;
        $formdata = array(
            'First_Name' => $fname,
            'Last_Name' => $lname,
            'Age' => $age,
            'Gender' => $_POST["gender"],
            'Company' => $company,
            'Email' => $email,
            'Password' => $pass,
            'cPassword' => $cpass,
            'Phone' => $phn,
            'Message_(if any)' => $comment,
            'Address' => $add,
            //'id' => "1"//++$last_item_id,





        );

        $existingdata = file_get_contents('../Data/data_r.json');
        // $existingdata = file_get_contents('data.json');
        $tempJSONdata = json_decode($existingdata);//cut true

       
       
        $tempJSONdata[] = $formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        if (file_put_contents("../Data/data_r.json", $jsondata)) {
            $dataerr = "Data successfully saved <br>";
        } else {
            $dataerr = "No data saved";
        }
    }


    //$id=$_POST["id"];
    //$fileread=file_get_contents("../Data/data_r.json");
    //$filereadphp=json_decode($fileread);
    //echo $filereadphp[11]->ID;
}

session_start();
$customer_data = file_get_contents('../Data/data_r.json');
$decoded_data = json_decode($customer_data);

if (isset($_POST["login"])) {
    foreach ($decoded_data as  $key => $udata) {


        if ($udata->First_Name == $_POST["fname"] && $udata->Password == $_POST["password"]) {

            $_SESSION["First_Name"] = $_POST["fname"];
            $_SESSION["Password"] = $_POST["password"];
            header("location: ../View/seller_dash.php");
        }
    }
    
    $logerr= "<h4>Your username or password is incorrect !<h4>";
    
}
