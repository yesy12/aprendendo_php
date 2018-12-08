<?php

	$erros =[];

	$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	
	$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
	if(!filter_var($idade,FILTER_VALIDATE_INT)){
		$erros[] = "Idade precisa se um inteiro";
	}
	
	
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$erros[] ="Email invalido";
	}


	$peso = filter_input(INPUT_POST,'peso',	FILTER_SANITIZE_NUMBER_FLOAT);
	if(!filter_var($peso,FILTER_VALIDATE_FLOAT)){
		$erros[] = "Precisa se tipo float";
}
	
	
	$url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
	if(!filter_var($url,FILTER_VALIDATE_URL)){
		$erros[]= "Url invalida";
	}
	
	foreach($erros as $erro){
		echo "<li>$erro </li>";
	}
?>