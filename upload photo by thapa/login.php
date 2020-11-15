<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <?php include './links.php' ?>
     
     <?php include './style.php' ?>
</head>
<body>
    <div class="container center">
      <div class="row color">
       <div class="col-md-4 text-center mt-4">
         <h2 class="mr-4">Login Page</h2>
         <p class="mt-4 text-white">Please fill form carefully it can change your life</p>
         <a href="display.php" class=" btn btn-outline-success mt-2">Check Form</a>
       </div>
       <div class="col-md-8 form">
         <div class="row ">
             <div class="col-lg-6 offset-3">
             <form action="l.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Cource</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="cource" id="pwd">
                </div>
           
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>

                </div>
                </form>

             </div>

         </div>
       </div>
      
      </div>
    
    </div>
    
</body>
</html>