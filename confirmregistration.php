<?php 
 session_start();
 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $con_pass=$_POST['con_pass'];
 
  if($pass != $con_pass){
	  $_SESSION['error_msg']="Password and Confirm Password didn't match";
	  header('Location:registration.php');
  }
 
 
  $conn=mysqli_connect('localhost','root','','crud');
   
   $sql1="SELECT * FROM login WHERE email='$email'";
   $result1=mysqli_query($conn,$sql1);
   $rowscount=mysqli_num_rows($result1);
   
   if($rowscount == 1){
	   $_SESSION['error_msg_re']="Account Already Exists Please Login";
	   header('Location:registration.php');
   }else{
	   
  $sql="INSERT INTO login VALUES(NULL,'$name','$email','$pass')";
  $result=mysqli_query($conn,$sql);
    if($result){
		$_SESSION['success_msg']="Registration Successfull Please Login";
		header('Location:login.php');
	}
}
 



?>