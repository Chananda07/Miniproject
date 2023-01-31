<?php session_start();  
include('connection.php'); 
$ID = $_SESSION['a_id']; 
$name = $_SESSION['a_username']; 
$level = $_SESSION['a_level']; 
if($level!='A'){ 
Header("Location:logout.php");  
}  
?>
