<?php
	$ip = "127.0.0.1";
	$user= "root";
	$password= "";
	$db= "sistemalogin";
	
	$connect = mysqli_connect($ip,$user,$password,$db);
	
	

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>