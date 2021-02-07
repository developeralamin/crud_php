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
                 <h2>Update Student Information</h2>
                 <hr></br>

            <form action="edit.php?id=<?php echo $id; ?>" method="post">
                  <div class="form-group">
                    <label for="Name">Name :</label>
                    <input required type="text" class="form-control" name="username" placeholder="Name" value="<?php echo $std['name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="Roll">Roll :</label>
                    <input required type="text" class="form-control" name="roll" placeholder="Roll" value="<?php echo $std['roll']; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="Age">Age :</label>
                    <input required type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $std['age']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="Adress">Adress :</label>
                    <input required type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $std['address']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="Mobile">Mobile :</label>
                    <input required type="text" class="form-control" name="mobile" placeholder="Mobile Number" value="<?php echo $std['mobile']; ?>">
                  </div>
               
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>

             </div>
        </div>
    </div>

  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>