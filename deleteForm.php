    <?php require_once('connection.php');   ?>
    
  

<?php
$q="delete from abo where id =".$_GET['id'];
if(mysqli_query($conn,$q))
    header('location:display.php');
else
    die("Unable to delete pro");
?>