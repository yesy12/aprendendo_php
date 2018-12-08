<?php
	
	$string = "alison";
	$novaString = strtoupper($string);
	echo $novaString."<hr>";

	$string = "ALISON";
	$novaString = strtolower($string);
	echo $novaString."<hr>";

	
	//retorna apartir de um caractere
	$msg = "Ola mundo";
	echo substr($msg,4,6);//var,inicia,comprimento
	echo "<hr>";

	$obj = "mouse";
	$novoobj = str_pad($obj,20,"&",STR_PAD_BOTH);//sting,comprimento,especifica,lado
	
	echo  $novoobj;


?>