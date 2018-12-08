<?php
	//Global
	$nome = "Alison";
	$a =1;
	$b=3;
	$c = 7;
	
	function view(){
		//local
		global $nome;
		echo $nome;
	}
	
	view();
	echo "<hr>";
	
	////////////////////
	
	
	function exibe(){
	//local
		global $cidade;
		$cidade = "Sp";
	}
	
	exibe();
	echo  $cidade."<hr>";
	
	
	function soma(){
		echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
		//passa para a funç˜ao
	}
	
	soma();
?>