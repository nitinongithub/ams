<?php  
  
session_start(); 
session_destroy();  
header("Location:http://localhost/ams/index.php/web/login"); 
?>  