<?php 
     session_start();
   if(!isset($_SESSION['login'])){
	   header("Location:login.php");
   }
   
   $id = $_GET['id'];
   $conn=mysqli_connect('localhost','root','','crud');
   $sql="SELECT * FROM user WHERE id=$id;";
   $result=mysqli_query($conn,$sql);

   $std=mysqli_fetch_assoc($result);


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUDE SYSTEM</title>
  </head>
  <body>
  </br></br></br></br>
    <div class="container">
        <div class="row">
             <div class="col-md-4">
                 <a href="index.php" class="btn btn-info">Student List</a>
             </div>
            <div class="col-md-8">
                 <h2>Student Information</h2>
                 <hr></br>
                 <table class="table">
                      <tr>
                          <th width="100" class="text-right">Name :</th>
                          <td> <?php  echo $std['name'];?> </td>
                      </tr>
                      <tr>
                          <th  class="text-right">Roll :</th>
                          <td><?php  echo $std['roll'];?></td>
                      </tr>
                      <tr>
                          <th width="100" class="text-right">Age :</th>
                          <td><?php  echo $std['age'];?></td>
                      </tr>
                      <tr>
                          <th width="100" class="text-right">Address :</th>
                          <td><?php  echo $std['address'];?></td>
                      </tr>
                      <tr>
                          <th width="100" class="text-right">Mobile :</th>
                          <td><?php  echo $std['mobile'];?></td>
                      </tr>
                 </table>
             </div>
        </div>
    </div>

  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>