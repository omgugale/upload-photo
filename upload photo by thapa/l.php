<?php
include './db.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $cource = $_POST['cource'];


    

    $q = "select * from r where email = '$email' && cource = '$cource' ";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    if($num == 1){
        header('location:home.php');

    }else{
        header('location:login.php');
    }





}

?>