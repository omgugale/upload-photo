<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "om";

$con = mysqli_connect($server,$password,$user,$db);
if($con){
    echo "Connection Successfull";
}else{
    echo "Connection Failed";
}




?>