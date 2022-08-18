<?php
class DB
{
    
    function opencon(){
$DBHostname="localhost";
$DBUsername="root";
$DBPass=""; 
$DBName="project";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
    }
    function InsertData($fname , $lname , $DateOfBirth ,$gender, $company  , $email , $pass, $phn , $add ,  $filename, $comment, $tablename, $conn){
$sqlstr="INSERT INTO registration (first_name, last_name, BOD, gender, company, email,password,phone_number,address,file_name,comment) values ('$fname ', '$lname' , '$DateOfBirth' ,'$gender', '$company'  , '$email' , '$pass', '$phn' , '$add' ,  '$filename', '$comment')";

if($conn->query($sqlstr)==TRUE)
{
echo "Data Inserted Successfully";
}
else{
    echo "cant insert".$conn->err;
}
    }

function closecon($conn){
    $conn->close();
}

}
?>