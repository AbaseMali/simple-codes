<?php 
require_once('connection.php');
 ?>

 <?php 


$fn = $_POST['fname'];
$ls = $_POST['lname'];
$um = $_POST['umail'];
$cont= $_POST['cont'];
$ps = $_POST['Pno'];
$coun = $_POST['ctry'];
$lstay= $_POST['lstay'];
$gen = $_POST['gender'];
$fr = implode(',', $_POST['rf']);



  ?>

  <?php 
if ($_POST['btn']=='Register'):
	$q="INSERT INTO `Abo`(`firstName`, `lastName`, `email`, `contact`, `passportS`, `country`, `lengthStay`, `gender`, `frf`) VALUES  ('$fn','$ls','$um','$cont','$ps','$coun','$lstay','$gen','$fr')";


if (!mysqli_query($conn,$q)) {
	die('failed to insert'.mysqli_error($q));
}
mysqli_close($conn);

header('location:display.php');
endif;

   ?>

  

    <?php 
   
if ($_POST['btn']=='update'): 
   $id=$_POST['id'];
	$q="UPDATE `abo` SET `firstName`='$fn',`lastName`='$ls',`email`='$um',`contact`='$cont',`passportS`='$ps',`country`='$coun',`lengthStay`='$lstay',`gender`='$gen',`frf`='$fr' WHERE id=".$id;


if (!mysqli_query($conn,$q)) {
    die('failed to update'.mysqli_error($conn));
	
}
mysqli_close($conn);
  header('location:display.php');

endif;
   ?>