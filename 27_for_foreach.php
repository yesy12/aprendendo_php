<?php
	$valor =0;	
	for($cont = 0;$contador < 2;$cont++){

		$valor +=$cont;
		echo $valor;
	}

	echo "<hr>";
	
	$frutas = ["pera","mamao","maca","banana","melancia"];
	
	foreach($frutas as $indice =>$fruta){
		echo $indice.":".$fruta;
	}
?>