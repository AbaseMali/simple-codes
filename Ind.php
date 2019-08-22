<?php
session_start();
if(!isset($_SESSION['user_email'])){


echo "<script>window.open('loginForm.php','_self')</script>";
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Oriental Hotel</title>
 
<style type="text/css">
    body{
        background-image: url(Amaz.jpg);
        background-size: cover;
        background-position: center;
    }
    
    #ui{
        border: solid;
        background-color: #999;
       padding-left: 20%;
        margin-right: 5%;
        margin-left: 5%;
      
        
        border-radius: 20px;
        padding-top: 20px;    
        padding-bottom: 20px;
        
    } 
    label{
        font-size: 20px;
        font-weight: bold;
        padding-right: 30px;
    }
    input{
        width: 190px;
        height: 22px;
    }
   
    select{
        width: 400px;
        height: 30px;
    }
    #btn{
        margin-top: 20px;
        width: 500px;
        height: 30px;
        border-radius: 10px;
    }
    #btn:hover{
        background-color: darkorchid;
    }
    button{
        margin-left:10%;
        width: 200px;
        height: 30px;
        border-radius: 10px;
    }
    span{
        color: black;
        font-size: 15px;
    }
 
    button{
        width: 100px;
        height: 30px;
    }
    
    
    </style>
</head>
<body>
   
        
         
               <div id="ui">
                   
           <h1>Registration Form</h1>
                  <fieldset>
                   <form action="action.php"  method="post" >
                      
                    
                     
                       <!-- first name -->
                       
                     
                           <label>First Name:</label>    
                    <input type="text" name="fname"  placeholder="Enter your first name" reqiured/>&nbsp
                       
                         
                           
                           <!-- Last Name-->
                          
                           <label>Last Name:</label>    
                     <input type="text" name="lname"  placeholder="Enter your last name " reqiured/><br/><br/>
        
                         
                           
                           <!-- Email-->
                            <label>Your Emal:</label>
                         <input type="text" name="umail"  placeholder="enter your email address" reqiured/>&nbsp
                        
                     
                          <!--Contact-->
                           <label>ContactNo:</label>    
                    <input type="number" name="cont" placeholder="Enter your tellphoe number" reqiured/><br/> <br/>
                          
                           
                           <label>PasportNo:</label>    
                     <input type="Number" name="Pno"  placeholder="Enter your passport number" reqiured/>
                    
                          
                           <label>LenghStay:</label>
                           <input type="number" name="lstay"  placeholder="enter the length stay" reqiured/>
                           </fieldset>
                           <br/><br/>
                           <br/><br/>
                           
                          
                       <fieldset>
                         
                        
                           <label>Country</label>
                           <select name="ctry" reqiured>
                               <option> Somalia</option>
                               <option> DJabuti</option>
                               <option> Ethopia </option>
                               <option> Kenya </option>
                               <option> Uganda</option>
                               <option> United kingdom</option>
                               <option> United state</option>
                               <option> France </option>
                               <option> Germany</option>
                               <option> Turkey </option>
                               <option> Somaliland</option>
                           </select> <br/> <br/>
                        
                   
                   
                          <label > Gender </label> <br/>
                           
                         <input value="M" type="radio" name="gender"  reqiured/>Male
                         
                          
                          <input value="F" type="radio" name="gender"  reqiured/>Female
                       
                         <br/><br/>
                          
                          <label>Favourite room and floor</label>  <br/><br/>
                       
                         
                            <label>Floor1</label><br/><input type="checkbox" name="rf[]"  value="Floor1"> <br/>
                           
                           
                           
                            <label>Floor2</label><br/><input type="checkbox" name="rf[]"  value="Floor2"> <br/>
                          
                           
                            <label>Single</label><br/><input type="checkbox" name="rf[]"  value="Single"> <br/>
                          
                           
                           
                            <label>Family</label><br/><input type="checkbox" name="rf[]" value="Family"> <br/>
                           <br/>
                      </fieldset>
                             <input type="submit" id="btn" name="btn" value="Register" /> &nbsp &nbsp
                             <a href="logout.php"><span>Logout </span></a> &nbsp &nbsp
                             <a href="Choose.php"><span>Back </span></a> 
                             
                       </div>   <br/><br/>
                          
 
                          
                     
                           
                   </form> 
                   
               </div>
           
    
    
    
</body>
</html>
<?php } ?>