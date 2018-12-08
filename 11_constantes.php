<?php
	//constantes
		
	define("NOME","Alison");
	echo NOME;
	
	function exibe(){
		//constantes sao globais
		echo NOME;
	}
	
	exibe();
?>