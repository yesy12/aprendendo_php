<?php
	$cor = "az";
	
	switch($cor):
		case "vermelho":
			echo "Sua cor preferida e o vermelho";
			break;
		
		case "azul":
			echo "Sua cor preferida e o azul";
			break;
			
		default:
			echo "error";
			break;	
			
	endswitch;

?>