<?php 
   session_start();
   if(!isset($_SESSION['login'])){
	   header("Location:login.php");
   }

  $id=$_GET['id'];
 $name=$_POST['username'];
 $roll=$_POST['roll'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $mobile=$_POST['mobile'];

   $conn=mysqli_connect('localhost','root','','crud');

   $sql="UPDATE user SET name='$name', roll='$roll', age='$age' , address='$address',mobile='$mobile' WHERE id=$id ";

   if(mysqli_query($conn,$sql)){
     header("Location:view.php?id=" . $id);
   }else{
      echo"Not Update";
   }



?>