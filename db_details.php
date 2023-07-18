<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="users";

$dbconnection=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

    if(!$dbconnection) { // to grafoume giati an den petixei h sindesi  
        die("Connection failed: ".mysqli_connect_error()); // gia na mas pei pou exoume kanei to lathos
    }



?>