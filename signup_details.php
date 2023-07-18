<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>


<?php

if (isset($_POST["submit"])) {
   $name=$_POST["fname"];
   $email=$_POST["email"];
   $userid=$_POST["username"];
   $password=$_POST["password"];
   $repeat_password=$_POST["repeat_password"];
    //echo $email;

require_once 'db_details.php'; // gia tin basi dedomenon
require_once 'functions.php';


if(emptyInputSignup($name, $email, $userid, $password, $repeat_password)==1){
    header("location: eggrafi.php?error=empty");
    exit();
}
if(invalidEmail($email)==true){
    header("location: eggrafi.php?error=invalidemail");
    exit();
}
if(!preg_match("/^[a-zA-Z0-9]*$/", $userid)){
    header("location: eggrafi.php?error=invaliduserid");
    exit();
}
if (pwdMatch($password, $repeat_password) !== false){
    header("location: eggrafi.php?error=passwordsdontmatch");
    exit();
}
if (uidExists($dbconnection,$userid) ==false) {
    header("location: eggrafi.php?error=usernametaken");
    exit();
}


createUser($dbconnection,$name,$email,$userid,$password);
}
else {
    header("location: eggrafi.php");
    exit();
}
   
?>


</body>
</html>