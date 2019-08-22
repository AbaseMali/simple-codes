<?php
require_once('connection.php');

?> 
     <html>
    <head>
        
        
        <title>Login</title>
 
   <style>
        
       body{
           background-color: #ccc;
       }
       #fr{
           background-color: antiquewhite;
          margin-left: 25%;
           margin-top: 10%;
           margin-right: 25%;
           border:solid;
           border-color:black; 
           padding-left: 150px;
           padding-bottom: 40px;
           box-shadow: 5px 5px 5px 5px ;
           border-radius: 20px;
           
       }  
       input{
           width: 300px;
           height: 30px;
           padding:20px;
       }
       label{
           font-size: 25px;
           color: #001;
           margin-right: 10px;
       }
       h1{
           font-weight: bolder;
           margin-left: 20%;
           border: solid;
           margin-right: 170px;
           border-radius: 10px;
           background-color: darkgray;
           box-shadow: 0px 2px 3px 0px;
           padding-left: 25px;
        
       }
       
       #btn{
           margin-left: 110px;
           border-radius: 30px;
       }  
       #btn:hover{
           background-color: chocolate;
       }
        
        </style>
   
   
    </head>
    <body>
       
            <form action="login.php" method="post" id="fr" >        
              
              <h1>Log In Form </h1><br/>
              
              <label>Username</label>
                <input type="text" name="uname" placeholder="enter your username" required/><br/><br/>
                 <label>Password</label>
                 <input type="password" name="pass"  placeholder="enter your password" required/><br/><br/>
                 
                <br/> <input type="submit" id="btn" value="LOGIN" name="login" />
                  
              
            
           </form>
     
              
         

    </body>
    
    
</html>