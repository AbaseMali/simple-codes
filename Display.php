<?php 
session_start();
if(!isset($_SESSION['user_email'])){


echo "<script>window.open('loginForm.php','_self')</script>";
}
else{

require_once('connection.php');
 ?> 
 
 
 <style>


     table{
        margin-left: 15%;
        box-shadow: 5px 5px 5px 5px gray; 
     }
     th{
         background-color: aquamarine;
     }
     
    
     
     #ww{
         width: 170px;
         margin-top: -150px;
         height: 30px;
         border-radius: 20px;
     }
     #mm{
         width: 170px;
         height: 30px;
         border-radius: 20px;
         margin-top: -100px;
     }
</style>
  
  
 <h3></h3>

 <table border="2">
 	<tr>
 	<th>No</th>
 	<th>FirstName</th>
 	<th>lastName</th>
 	<th>Email</th>
 	<th>Contact</th>
 	<th>passportSerial</th>
 	<th>Country</th>
 	<th>lengthStay</th>
 	<th>Gender</th>
 	<th>Favourite place</th>
 	<th colspan="2">Action</th>
</tr>
<?php 
$res=mysqli_query($conn,"select * from abo");
$i=1;
while ( $user=mysqli_fetch_array($res)) {
echo "
<tr>
<td>$i</td>
<td> {$user['firstName']}</td>
<td> {$user['lastName']}</td>
<td> {$user['email']}</td>
<td> {$user['contact']}</td>
<td> {$user['passportS']}</td>
<td> {$user['country']}</td>
<td> {$user['lengthStay']}</td>
<td> {$user['gender']}</td>
<td> {$user['frf']}</td>
<td> <a href='updateForm.php?id={$user['id']}'>update</a></td>  
<td> <a href='deleteForm.php?id={$user['id']}' onclick = 'return confirm(\"Are you You sure\")' >delete</a></td>

</tr>

";
$i++;
}
 ?>

 </table>
 <button id="ww"><a href="logout.php"><span>Logout </span></a></button <br/><br/>
 <button id="mm"> <a href="Choose.php"><span>Back</span></a> </button>
 
<?php } ?>