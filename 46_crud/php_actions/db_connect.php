<?php
	$ip = "127.0.0.1";
	$user= "root";
	$password= "";
	$db= "crud";
	
	$connect = mysqli_connect($ip,$user,$password,$db);
	mysqli_set_charset($connect,"utf8");
	
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>