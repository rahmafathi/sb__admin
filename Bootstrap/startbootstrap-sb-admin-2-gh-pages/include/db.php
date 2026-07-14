<?php

$server="localhost";
$username="root";
$pass="";
$databaseName="sb_admin2";

$connect= new mysqli($server , $username , $pass , $databaseName);

if($connect->connect_error){
    die("connection_error".$connect->connect_error);
}else{
echo "conected...<br>";     
}


?>