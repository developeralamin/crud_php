<?php 
 session_start();
 $name=$_POST['username'];
 $roll=$_POST['roll'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $mobile=$_POST['mobile'];

   $conn=mysqli_connect('localhost','root','','crud');
   $sql="INSERT INTO user VALUES(NULL,'$name','$roll','$age','$address','$mobile');";

   if(mysqli_query($conn,$sql)){
	 $_SESSION['success']="Added Successfully";
     header("Location:index.php");
   }else{
	 $_SESSION['error']="Something Wrong.";
     header("Location:insert.php");
   }



?>