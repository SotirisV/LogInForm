<?php

use LDAP\Result;

function emptyInputSignup($input1, $input2, $input3, $input4, $input5) {
  $result=0;  
if (empty($input1) or empty($input2) or empty($input3) or empty($input4) or empty($input5)){

    $result=1;
}
else{
    $result=0;
}
return $result;
}
function invalidEmail($email){
    // result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // !=not αν δεν υσχιει αυτο τοτε το $result=true;
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function pwdMatch($password, $repeat_password){
    
    if($password !== $repeat_password){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;

}
function uidExists($dbconnection, $userid){
    $sql="SELECT * FROM members WHERE membersUID='$userid';";

    $result=$dbconnection->query($sql);
    if($result){
        return true;
    }
    else{
        return false;
    }
}


function createUser($dbconnection, $name, $email, $userid, $password) {
// kodikas sql
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO members(membersName,membersErmail,membersUid,membersPwd) VALUES ('$name', '$email', '$userid', '$hashedPwd');";
// grafo to erotima
$dbconnection->query($sql);

}

?>