<?php
	/*super globais */
	
	/*
	$GLOBALS
	$_SERVER
	$_REQUEST
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
	
	*/
	
	$x = 10;
	$y =15;
	
	function soma(){
		echo $GLOBALS["x"] + $GLOBALS["y"];
		//acessa variaveis globais e pode se usado em lugares nao globais
	}
	
	soma();
	
	echo "<hr>";
	
	echo $_SERVER["SERVER_NAME"]."<br>";
	echo $_SERVER["PHP_SELF"]."<br>";
	echo $_SERVER["REMOTE_ADDR"]."<br>";
?>