<?php 
session_start(); 

session_destroy(); 

echo "<script>window.open('loginForm.php','_self')</script>";



?> 