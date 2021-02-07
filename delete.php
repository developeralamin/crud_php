<?php 
     session_start();
   if(!isset($_SESSION['login'])){
	   header("Location:login.php");
   }
   $id = $_GET['id'];
   $conn=mysqli_connect('localhost','root','','crud');
   $sql="DELETE FROM user WHERE id=$id;";
   if(mysqli_query($conn,$sql)){
   	  header("Location:index.php");
   }else{
   	 echo"No Data Delete";
   }

 


?>
