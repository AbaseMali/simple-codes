<?php
//session_start();
require_once('connection.php');

?>
<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pass'];

$q="SELECT * FROM `login` WHERE username='$username' and PASSWORD ='$password'";
$sql=mysqli_query($conn,$q);
$user=mysqli_fetch_array($sql);


if($user){
    $_SESSION['user_email']=$username; 
	
	echo "<script>window.open('Choose.php','_self')</script>";
    
}else{
    echo"password or username is not correct".header('location:loginForm.php');
}
   
?>
