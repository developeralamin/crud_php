<?php 
session_start();
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
           
            <div class="col-md-6 offset-md-3">
			   <?php if(isset( $_SESSION['error'])) {?>
			      <div class="alert alert-warning" role="alert">
				    <strong>Opps!</strong> <?php echo $_SESSION['error'];?>
				</div>
			  <?php }?>
			  
			 <?php if(isset( $_SESSION['success_msg'])) {?>
			      <div class="alert alert-success" role="alert">
				    <strong>Welcome!</strong> <?php echo $_SESSION['success_msg'];?>
				</div>
			  <?php }?>
			
                 <h2>Login</h2>
                 <hr></br>

            <form action="confirmlogin.php" method="post">
                  <div class="form-group">
                    <label for="Email">Email :</label>
                    <input required type="email" class="form-control" name="email" 
					placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password :</label>
                    <input required type="password" class="form-control" name="password" 
					placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
				  <a href="registration.php"> Create an account</a>
            </form>

             </div>
        </div>
    </div>

  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html
<?php unset( $_SESSION['error']);?>
<?php unset( $_SESSION['success_msg']);?>









