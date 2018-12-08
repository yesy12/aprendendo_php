<?php
	session_start();
	$_SESSION['cor'] = "Amarelo";
	$_SESSION['carro'] = "Veloster";
	
	var_dump( $_SESSION);
	echo session_id();
?>