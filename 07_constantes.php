<?php
	//Constantes
	
	define("NOME","Alison");
	define("IDADE",17);
	define("ALTURA",1.78);
	define("SOLTEIRO",true);
	define("CARROS",["uno","ford","camaro"]);
	
	
	var_dump(NOME);
	
	echo "Meu nome e".NOME.",minha idade e".IDADE.',e minha altura e'.ALTURA;
	echo "<hr>";
	
	echo CARROS[0];
	echo "<hr>";
	
	//Em constantes podem se usados por funçoes
	
	function exibeNome(){
		echo NOME;
	}
	exibeNome();
?>