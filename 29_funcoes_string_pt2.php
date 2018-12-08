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
	
	echo  $novoobj."<hr>";



	///repete
	
	$msg = str_repeat("Sucesso ",10);
	echo $msg."<hr>";
	
	//quantidade
	echo strlen($msg)."<hr>";
	
	//subsitui
	$text = "Eu nao sei de nada";
	$newtext = str_replace("Eu","eu",$text);
	
	echo $text."<br>";
	echo $newtext."<hr>";

	//procura
	
	echo strpos($text,"Eu");
	
	
?>
