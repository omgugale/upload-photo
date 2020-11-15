<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./db.php" ?>
    <?php include "./style.php" ?>
    <?php include "./links.php" ?>
    
</head>
<body>
<div class="container">
  <h2>Black/Dark Table</h2>
  <p>The .table-dark class adds a black background to the table:</p>            
  <table class="table table-dark">
    <thead>
      <tr>
        <th>id</th>
        <th>username</th>
        <th>Email</th>
        <th>Cource</th>
        <th>Language</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $selectquery = "select * from r";
          $query = mysqli_query($con,$selectquery);
         // $result = mysqli_fetch_array($query);
          while( $result = mysqli_fetch_array($query)){
        ?>

     <tr>
         
        <td><?php echo $result['id'] ?></td>
        
        <td><?php echo $result['username'] ?></td>
        
        <td><?php echo $result['email'] ?></td>
      
        <td><?php echo $result['cource'] ?></td>
        
        <td><?php echo $result['language'] ?></td>
        <td><img src="<?php echo $result['pic'] ?>" height="100" width="100"></td>
      </tr>

        <?php
          }
        
        ?>
    </tbody>
  </table>
</div>

    
</body>
</html>