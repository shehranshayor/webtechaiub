<?php
$validateall=""; 
$validatename="";
$validateemail="";
$validatepass="";
$validateradio="";
$v1 = $v2 = $v3 =$v4=$v5="";
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name1=$_REQUEST["fname"]; 
$name=$_REQUEST["Uname"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["pname"];
$Cpass=$_REQUEST["cname"];
$day=$_REQUEST["dayname"];
 
 
 
 
if(empty($name1) ||empty($name) ||empty($email) ||empty($pass) ||empty($Cpass)||empty($day))
{
  $validateall="You must enter all information";
   
}
else{
    $v4=$validatename= "your DOB is ".$day;
    $v5=$validatename= "your Name is ".$name1;
if((strlen($name)<5) ||!preg_match("/[a-zA-Z0-9._]+/", $name))
{
    $validatename="You must enter user name";
}
else
{
    $validatename= "your user name is ".$name;
}
  
if((strlen($pass)<8) ||!preg_match("/(?=.*[@#$%^&+=]).*$/",$pass))
{
    $validatename="You must enter password";
}
else
{
    $validatepass= "your password is ".$pass;
}
if($pass==$Cpass)
{
   $v1= "Both Password match";
  
}
else
{
    $v1="password does not match";
}


if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i", $email))
{
    $validateemail="You must enter email";
}
else
{
    $validateemail= "your email is ".$email;
}
 
if(isset($_REQUEST["gender"]))
{
    $validateradio=$_REQUEST["gender"] ;
}
else{
    $validateradio="Please select an option for gender";
}
}
$target_dir= "files/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);


if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
 {
$v3="<img src='".$target_file."'>";
} 
else {
$v3 ="Sorry, there was an error uploading your file";
}
}
?>






