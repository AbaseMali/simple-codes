<?php
session_start();
if(!isset($_SESSION['user_email'])){


echo "<script>window.open('loginForm.php','_self')</script>";
}
else{

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

<style>
    
    Form{
        
        border: solid;
        margin-right: 10%;
        padding-left: 5%;
        margin-left: 8%;
        padding-top: 1%;
        padding-bottom: 5%;
        margin-top: 3%;
        margin-bottom: 15%;
        border-radius: 20px;
        box-shadow: 0px 1px 1px 1px;
    }
    
    input{
        width: 200px;
        height: 20px;
    }
    #btn{
        width: 600px;
        height: 40px;
        margin-left: 13%;
        border-radius: 10px;
        box-shadow: 0px 2px 2px 2px ;
        
    }
    #btn:hover{
        background-color: darkslategray;
    }
    fieldset{
        padding-top: 20px;
        padding-left: 100px;
        margin-right: 90px;
        border-radius: 20px;    
        box-shadow: 0px 2px 0px 2px;
    }
    select{
        width:300px;
        height: 30px;
    }
    
    </style>

<body>
    
<form action="action.php" method="post">
<h2> Update The User</h2>
<fieldset>
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
	<label> First Name:</label>&nbsp<input type="text" name="fname" value="<?php echo $user['firstName'];?>"/>&nbsp &nbsp
	
	<label>Last Name:</label>&nbsp<input type="text" name="lname"  value="<?php echo $user['lastName'];?>"><br><br>
	
	<label>Your Email:</label>&nbsp<input type="text" name="umail" value="<?php echo $user['email'];?>">&nbsp &nbsp
	
	<label>ContactNo:</label>&nbsp<input type="number" name="cont" value="<?php echo $user['contact'];?>"><br/> <br/>
	
	<label>PassportNo:</label>&nbsp<input type="number" name="Pno" value="<?php echo $user['passportS'];?>">&nbsp &nbsp
	<label>Length Stay</label>&nbsp<input type="number" name="lstay" value="<?php echo $user['lengthStay'];?>"><br/> <br/><br/> <br/>
	</fieldset>
	<br/><br/>
	<fieldset>
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
	
	
	
	<label>Gender:</label><br/>
	<label>Male:</label><input type="radio" name="gender" value="M" <?php if ($user['gender']=='M'): echo "checked"; ?>	 
	<?php endif ?>>
	<label>Female:</label><input type="radio" name="gender" value="F" <?php if ($user['gender']=='F'): echo "checked"; ?> <?php endif ?> ><br><br>
	
	
	Favourite Room and Floor:<br><br>
	 <input type="checkbox" name="rf[]" value="Floor1"  <?php if(strpos($user['frf'],'Floor1')!== false) echo 'checked'?>> Floor1: <br/>
	 <input type="checkbox" name="rf[]" value="Floor2"  <?php if(strpos($user['frf'],'Floor2')!== false) echo 'checked'?>> Floor2:<br/>
	 <input type="checkbox" name="rf[]" value="Single" <?php if(strpos($user['frf'],'Single')!== false) echo 'checked'?>> Single:<br/>
	 <input type="checkbox" name="rf[]" value="Family" <?php if(strpos($user['frf'],'Family')!== false) echo 'checked'?>> Family:<br><br>
</fieldset> 
<br/>
<br/>

<input type="submit" name="btn" id="btn" value="update">

</form>

</body>
</html>
<?php } ?>