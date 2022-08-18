
function check_fname(){
    var fname = document.getElementById('fname').value;
    var fname_regex = /^[a-zA-Z ]{3,25}$/;
    if(fname_regex.test(fname)){
        document.getElementById('fname_error').innerHTML = "Name is valid";
        document.getElementById('fname_error').style.color = "blue";
        document.getElementById('fname_error').style.fontSize = "14px";
        document.getElementById('fname_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('fname_error').innerHTML = "Name is not valid";
        document.getElementById('fname_error').style.color='red';
        document.getElementById('fname_error').style.fontSize = "14px";
        document.getElementById('fname_error').style.marginTop = "-10px";
        return false;
    }
}

function check_lname(){
    var lname = document.getElementById('lname').value;
    var lname_regex = /^[a-zA-Z ]{3,25}$/;
    if(lname_regex.test(lname)){
        document.getElementById('lname_error').innerHTML = "lastname is valid";
        document.getElementById('lname_error').style.color = "blue";
        document.getElementById('lname_error').style.fontSize = "14px";
        document.getElementById('lname_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('lname_error').innerHTML = "lastname is not valid";
        document.getElementById('lname_error').style.color = "red";
        document.getElementById('lname_error').style.fontSize = "14px";
        document.getElementById('lname_error').style.marginTop = "-10px";
        return false;
    }
}


function check_birthday(){
    var birthday = document.getElementById('BOD').value;
    var today = new Date();
    var BOD = new Date(birthday);
    if(birthday == ""){
        document.getElementById('birthday_error').innerHTML = "Birthday is invalid";
        document.getElementById('birthday_error').style.color = "red";
        document.getElementById('birthday_error').style.fontSize = "14px";
        document.getElementById('birthday_error').style.marginTop = "-10px";
        return false;
    }
    else if(BOD >= today){
        document.getElementById('birthday_error').innerHTML = "Birthday is invalid";
        document.getElementById('birthday_error').style.color = "red";
        document.getElementById('birthday_error').style.fontSize = "14px";
        document.getElementById('birthday_error').style.marginTop = "-10px";
        return false;
    }
    else{
        document.getElementById('birthday_error').innerHTML = "Birthday is valid";
        document.getElementById('birthday_error').style.color = "blue";
        document.getElementById('birthday_error').style.fontSize = "14px";
        document.getElementById('birthday_error').style.marginTop = "-10px";
        return true;
    }

}

function check_gender(){
    if(document.getElementById('male').checked == true || document.getElementById('female').checked == true || document.getElementById('others').checked == true) 
    {   
        document.getElementById("gender_error").innerHTML="gender is selected"; 
        document.getElementById("gender_error").style.color="blue";
        document.getElementById("gender_error").style.fontSize="14px";
        document.getElementById("gender_error").style.marginTop="1px";
    } 
else {
         document.getElementById("gender_error").innerHTML="please choice gender";
         document.getElementById("gender_error").style.color="red";
         document.getElementById("gender_error").style.fontSize="14px";
         document.getElementById("gender_error").style.marginTop="1px";
    }  
}

function check_company(){
    var address = document.getElementById('company').value;
    if(address == ""){
        document.getElementById('company_error').innerHTML = "company name can't be empty";
        document.getElementById('company_error').style.color = "red";
        document.getElementById('company_error').style.fontSize = "14px";
        document.getElementById('company_error').style.marginTop = "-10px";
        return false;
    }
    else{
        document.getElementById('company_error').innerHTML = "company is valid";
        document.getElementById('company_error').style.color = "blue";  
        document.getElementById('company_error').style.fontSize = "14px";
        document.getElementById('company_error').style.marginTop = "-10px";
        return true;
    }
}

function check_email(){
    var email = document.getElementById('email').value;
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(email_regex.test(email)){
        document.getElementById('email_error').innerHTML = "Email is valid";
        document.getElementById('email_error').style.color = "blue";
        document.getElementById('email_error').style.fontSize = "14px";
        document.getElementById('email_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('email_error').innerHTML = "Email is not valid";
        document.getElementById('email_error').style.color = "red";
        document.getElementById('email_error').style.fontSize = "14px";
        document.getElementById('email_error').style.marginTop = "-10px";
        return false;
    }
}

function check_phone(){
    var phone = document.getElementById('phone').value;
    var phone_regex = /^[0-9]{11}$/;
    if(phone_regex.test(phone)){
        document.getElementById('phone_error').innerHTML = "Phone is valid";
        document.getElementById('phone_error').style.color = "blue";
        document.getElementById('phone_error').style.fontSize = "14px";
        document.getElementById('phone_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('phone_error').innerHTML = "Phone is not valid";
        document.getElementById('phone_error').style.color = "red";
        document.getElementById('phone_error').style.fontSize = "14px";
        document.getElementById('phone_error').style.marginTop = "-10px";
        return false;
    }
}

function check_password(){
    var password = document.getElementById('password').value;
    var password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if(password_regex.test(password)){
        document.getElementById('password_error').innerHTML = "Password is valid";
        document.getElementById('password_error').style.color = "blue";
        document.getElementById('password_error').style.fontSize = "14px";
        document.getElementById('password_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('password_error').innerHTML = "Password is not valid";
        document.getElementById('password_error').style.color = "red";
        document.getElementById('password_error').style.fontSize = "14px";
        document.getElementById('password_error').style.marginTop = "-10px";
        return false;
    }
}

function check_confirm_password(){
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('cpassword').value;
    if(password == confirm_password){
        document.getElementById('cp_error').innerHTML = "Password is valid";
        document.getElementById('cp_error').style.color = "blue";
        document.getElementById('cp_error').style.fontSize = "14px";
        document.getElementById('cp_error').style.marginTop = "-10px";
        return true;
    }
    else{
        document.getElementById('cp_error').innerHTML = "Password is not valid";
        document.getElementById('cp_error').style.color = "red";
        document.getElementById('cp_error').style.fontSize = "14px";
        document.getElementById('cp_error').style.marginTop = "-10px";
        return false;
    }
}

function check_address(){
    var address = document.getElementById('address').value;
    if(address == ""){
        document.getElementById('address_error').innerHTML = "Address is not valid";
        document.getElementById('address_error').style.color = "red";
        document.getElementById('address_error').style.fontSize = "14px";
        document.getElementById('address_error').style.marginTop = "-10px";
        return false;
    }
    else{
        document.getElementById('address_error').innerHTML = "Address is valid";
        document.getElementById('address_error').style.color = "blue";  
        document.getElementById('address_error').style.fontSize = "14px";
        document.getElementById('address_error').style.marginTop = "-10px";
        return true;
    }
}

function check_file(){
    var file = document.getElementById('file').value;
    if(file == ""){
        document.getElementById('file_error').innerHTML = "Empty file";
        document.getElementById('file_error').style.color = "red";
        document.getElementById('file_error').style.fontSize = "14px";
        document.getElementById('file_error').style.marginTop = "-10px";
        return false;
    }
    else{
        document.getElementById('file_error').innerHTML = "Address is valid";
        document.getElementById('file_error').style.color = "blue";  
        document.getElementById('file_error').style.fontSize = "14px";
        document.getElementById('file_error').style.marginTop = "-10px";
        return true;
    }
}

function form_check(){
    if(check_fname() == true && check_lname() == true && check_birthday() == true && check_phone() == true && check_birthday() == true 
    && check_password() == true && check_confirm_password() == true && check_email() == true && check_address() == true && check_gender() == true && check_file() == true)
    {
        console.log('success');
        document.getElementById("errorform").innerHTML="All fields are ok";
        return true;
    }
    else{
    // {<div>class="try"</div>
        document.getElementById("errorform").innerHTML="All filed are required";
        return false;
    }
}