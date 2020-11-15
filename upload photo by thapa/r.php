<?php
include './db.php';
if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $email = $_POST['email'];
     $cource = $_POST['cource'];
     $lang = $_POST['lang'];
     $file = $_FILES['file'];
     
     $filename = $file['name'];
     $filetype = $file['type'];
     $file_tmp = $file['tmp_name'];
     $fileerror = $file['error'];
     if($fileerror == 0){
         $file_store = 'upload/'.$filename;
         move_uploaded_file($file_tmp,$file_store);
         

         $insertquery = "insert into r(username,email,cource,language, pic	)values('$username','$email','$cource','$lang','$file_store')";
         $query = mysqli_query($con,$insertquery);
         if($query){
             echo "inserted";
         }else{
             echo "not inseted";
         }


     }else{
         echo "image not inserted";
     }
}


?>