<?php
require_once('connection.php');

?>

<?php 
$res=mysqli_query($conn,"select * from abo where id=".$_GET['id']);
$user=mysqli_fetch_array($res);
$frf=explode(',', $user['frf']); 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
    
<form action="action.php" method="post">
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
	<label> First Name:</label><input type="text" name="fname" value="<?php echo $user['firstName'];?>"/>
	
	<label> Last Name:</label><input type="text" name="lname"  value="<?php echo $user['lastName'];?>"><br><br>
	
	<label>Email:</label><input type="text" name="umail" value="<?php echo $user['email'];?>"><br/> <br/>
	
	<label>Contact</label><input type="number" name="cont" value="<?php echo $user['contact'];?>"><br/> <br/>
	
	<label>Passport Serial</label><input type="number" name="Pno" value="<?php echo $user['passportS'];?>"><br/> <br/>
	
	choose dep:
	 <select name="ctry">
	 	<option value="Somalia" <?php echo ($user['country']=='Somalia')?'selected':"" ?> >Somalia</option>
	 	<option value="DJabuti" <?php echo ($user['country']=='DJabuti')?'selected':"" ?>>DJabuti</option>
	 	<option value="Ethopia" <?php echo ($user['country']=='Ethopia')?'selected':"" ?>>Ethopia</option>
	 	<option value="Kenya"  <?php echo ($user['country']=='Kenya')?'selected':"" ?> >Kenya</option>
	 	<option value="Uganda"  <?php echo ($user['country']=='Uganda')?'selected':"" ?> >Uganda</option>
	 	<option value="United Kingdom"  <?php echo ($user['country']=='United Kingdom')?'selected':"" ?> >United Kingdom</option>
	 	<option value="United State"  <?php echo ($user['country']=='United State')?'selected':"" ?> >United State</option>
	 	<option value="France"  <?php echo ($user['country']=='France')?'selected':"" ?> >France</option>
	 	<option value="Germany"  <?php echo ($user['country']=='Germany')?'selected':"" ?> >Germany</option>
	 	<option value="Turkey"  <?php echo ($user['country']=='Turkey')?'selected':"" ?> >Turkey</option>
	 	<option value="Somaliland"  <?php echo ($user['country']=='Somaliland')?'selected':"" ?> >Somaliland</option>
	 </select><br><br>
	
	<label>Length Stay</label><input type="number" name="lstay" value="<?php echo $user['lengthStay'];?>"><br/> <br/>
	
	<label>Gender:</label>
	<label>Male:</label><input type="radio" name="gender" value="M" <?php if ($user['gender']=='M'): echo "checked"; ?>	
	<?php endif ?>>
	<label>Female:</label><input type="radio" name="gender" value="F" <?php if ($user['gender']=='F'): echo "checked"; ?> <?php endif ?> ><br><br>
	
	
	Favourite Room and Floor:<br><br>
	 <input type="checkbox" name="rf[]" value="Floor1"  <?php if(strpos($user['frf'],'Floor1')!== false) echo 'checked'?>> Floor1:
	 <input type="checkbox" name="rf[]" value="Floor2"  <?php if(strpos($user['frf'],'Floor2')!== false) echo 'checked'?>> Floor2:
	 <input type="checkbox" name="rf[]" value="Single" <?php if(strpos($user['frf'],'Single')!== false) echo 'checked'?>> Single:
	 <input type="checkbox" name="rf[]" value="Family" <?php if(strpos($user['frf'],'Family')!== false) echo 'checked'?>> Family:<br><br>


<input type="submit" name="btn" value="update">

</form>

</body>
</html>