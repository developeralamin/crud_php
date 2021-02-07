<?php 
   session_start();
   if(!isset($_SESSION['login'])){
	   header("Location:login.php");
   }
  
   $conn=mysqli_connect('localhost','root','','crud');
   $sql="SELECT * FROM user";
   $result=mysqli_query($conn,$sql);
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
                 <a href="insert.php" class="btn btn-info">New Student</a>
             </div>
            <div class="col-md-8">
			
			  <?php if(isset( $_SESSION['success'])) {?>
			      <div class="alert alert-primary" role="alert">
				    <strong>Success!</strong> <?php echo $_SESSION['success'];?>
				</div>
			  <?php }?>
                 
				 <a href="logout.php" class="btn btn-danger float-right">Logout</a>
                 <h2>Student List</h2>
                 <hr></br>
                 <table class="table">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Roll</th>
                             <th>Age</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php  while($row=mysqli_fetch_assoc($result)){ ?>
                         <tr>
                             <td> <?php echo $row['id']?> </td>
                             <td><?php echo $row['name']?></td>
                             <td><?php echo $row['roll']?></td>
                             <td><?php echo $row['age']?></td>
                             <td>
                                 <a class="btn btn-info" href="view.php?id=<?php echo $row['id']; ?>">View</a>
                                 <a class="btn btn-warning" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                 <a  onclick="return confirm('Are you sure?')"  class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                             </td>
                         </tr>
                      <?php } ?>

                     </tbody>
                 </table>

             </div>
        </div>
    </div>

  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>

<?php unset( $_SESSION['success']);?>


