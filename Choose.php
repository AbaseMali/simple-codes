<?php
session_start();
if(!isset($_SESSION['user_email'])){


echo "<script>window.open('loginForm.php','_self')</script>";
}
else{

require_once('connection.php');
?>


<html>
    <head>
        <title></title>
    </head>
    
    <style>
    
        Button{
            
           margin-left: 30%;
            margin-top: 5%;
            margin-bottom: 5%;
            width: 400px;
            height: 50px;
            border-radius: 10px;
            box-shadow: 2px 2px 2px 3px;
            
        }
        #ee{
            
            border: solid;
            margin-right: 10%;
            margin-left: 10%;
            margin-top: 5%;
            border-radius: 20px;
            box-shadow: 1px;
        }
    
        span{
            color: black;
            font-size: 20px;
        }
    
    </style>
    
    
    
    
    <body>
        <div id="ee">
        <button> <a href="Ind.php" ><span>Registration Customer</span></a></button> <br/><br/>
          
        <button> <a href="Display.php" ><span>Show Customer</span></a> </button> <br/><br/>
        <button> <a href="logout.php"><span>Logout </span></a></button>
        </div>

        
        
    </body>
    
</html>
<?php } ?>