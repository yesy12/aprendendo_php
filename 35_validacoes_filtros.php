<?php
	
	$erros= [];
	
	
	//validacoes
	if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){
		$erros[0] = "Idade precisa se numero";
	}
	if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
		$erros[1] = "Apenas email";
	}
	if(!$peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)){
		$erros[2] = "Peso esta errado";
	}
	if(!$ip = filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)){
		$erros[3] = "Ip errado";
	}
	if(!$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)){
		$erros[4] = "Url invalida";
	}
	
	
	//verifica se tem erro
	if(!empty($erros)){
		foreach($erros as $erro){
			echo "<li> $erro </li>";
		}
		var_dump($erros);
	}else{
		echo "Parabens,sucesso";
	}
?>