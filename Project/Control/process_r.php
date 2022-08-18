
<?php
include ("../model/model.php");
$fname = $lname = $company = $DateOfBirth = $gender = $filename = $pass = $phn = $email = $id = $add = $comment = $image = "";
$fnameerr = $lnameerr = $companyeerr = $DateOfBirtherr = $passerr = $iderr=$logerr= $cpasserr = $phoneerr = $emailerr = $comerr = $gendererr = $adderr = $fileerr = $dataerr = "";
$count = 0;

if (isset($_POST["Submit"])) {

    $fname = $_POST["fname"];

    if (empty($fname) || strlen($fname) < 3|| is_numeric($fname) || preg_match('/[A-Za-z ]/', $fname) && preg_match('/[0-9]/', $fname)) {

        $fnameerr = "->please enter a valid a name";
    } else {
        $count++;
        $fnameerr = "->your first name is " . $fname;
    }

    $lname = $_POST["lname"];

    if (empty($lname) || strlen($lname) < 3|| is_numeric($lname) || preg_match('/[A-Za-z]/', $lname) && preg_match('/[0-9]/', $lname)) {

        $lnameerr = "->please enter a valid a name";
    } else {
        $count++;
        $lnameerr = "->your last name is " . $lname;
    }
    $company = $_POST["company"];

    if (empty($company)||is_numeric($company)) {

        $companyeerr = "->please fill this information";
    } else {
        $count++;
        $companyeerr = "->your company name is " . $company;
    }

    $DateOfBirth = $_REQUEST["BOD"];
    if (empty("$DateOfBirth")) {

        $DateOfBirtherr = "->please enter your Date Of Birth";
    } else {
        $count++;
        $DateOfBirtherr = "-> your Date Of Birth is " . $DateOfBirth;
    }
    // $designation=$_POST["designation"];
    // if(isset($_POST["designation"]))
    // $designation=$_POST["designation"];
    // if(isset($_POST["designation"]))
    // {
    //     $d= "Designation =".$designation ;
    // }
    // else{
    //     $d= "Please select designation ";
    // }


     //$gender = $_POST["gender"];
    if (isset($_POST["gender"])) {
        $count++;
        $gendererr = "-> you have selected " . $gender;
    } else {
        $gendererr = "->you have not selected gender";
    }

    $pass = $_POST["password"];

    if (empty($pass) || strlen($pass) < 3||is_numeric($pass
)) {

        $passerr = "->please enter a password upto 8 letter/character";
    } else {
        $count++;
        $passerr = "->your password is " . $pass;
    }
    $cpass = $_POST["cpassword"];

    if (($pass == $cpass) && (!empty($cpass)) && (strlen($cpass) >= 3)||is_numeric($pass)) {
        $count++;
        $cpasserr = "->your password is confirmed " . $cpass;
    }
    else { 
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
//     $filename=$_FILES["myfile"]["name"];
//     //if filesize is more than 2mb it will not upload
//     if (($file_size = $_FILES['myfile']['size'] > 2097152)){
//            $h= 'File too large. File must be less than 2 megabytes.'; 
//     }
   
//     else{
//        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
//        {
//            $h= "File Uploaded";
//        }
//        else
//        {
//            $h= "File Cannot Upload";
//        }
//    }
$filename=$_FILES["myfile"]["type"] ;
    if ($_FILES["myfile"]["type"] == "image/jpeg") {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../File/" . $_FILES["myfile"]['name'])) {
            $count++;
            $fileerr = "->you have selected " . $_FILES["myfile"]["name"];
            $image = $_FILES["myfile"]["name"];
        } else {
            $fileerr = "->please choose a jpg file under 6mb";
        }
    } else {
        $fileerr = "->please choose a jpg file under 6mb";
    }

    $comment = $_POST["comment"];
    if (!empty($comment)) {
        //$count++;
    }
    $add = $_POST["address"];
    if ((empty($add))) {
        $adderr = "->Please enter valid address";
    } else {
        $count++;
        $adderr = "->Your address is:" . $add;
    }
if($count!=11)
    {
        // echo "No data Saved";
        }
        
        else{
            $user = array(
            'name' => $fname . ' ' . $lname,
            'BOD' => $DateOfBirth,
            'gender' => $gender,
            'company' => $company,
            'email' => $email,
            'password' => $pass,
            'phone_number' => $phn,
            'address' => $add,
            'file_name' => $filename
            );
            require_once '../Model/user.php';
            addUser($user);
        }
}
?>

