<?php
	
	function exibir($nome){
		echo "Meu nome e $nome";
	}

	exibir("Vitor");
	echo "<hr>";
	
	
	function media($nome,$n1,$n2,$n3,$n4){
		$media =($n1+$n2+$n3+$n4)/4;
		
		if($media >= 7){
			$result= "Aprovado";
		}
		else if($media < 7){
			$result = "Reprovado";
		}
		return "$nome sua media e´ $media,e sua situacao $result <br>";
	}
	
	echo	media("Alison",2,3,3,3);
?>