<?php 
  session_start();
   $email = $_POST['email'];
   $password = $_POST['password'];
   
   $conn=mysqli_connect('localhost','root','','crud');
   
   $sql="SELECT * FROM login WHERE email='$email' AND password='$password';";
   
   $result=mysqli_query($conn,$sql);
   $rowscount=mysqli_num_rows($result);	
   
   if($rowscount == 1){
	   $_SESSION['login']=true;
       header("Location:index.php");
   }else{
	   $_SESSION['error']="Email and password wrong";
       header("Location:login.php");
   }
   
  
 


?>
