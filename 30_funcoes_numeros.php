<?php
	$n1 = 1833.58676;
	$preco = number_format($n1,2,",","."); //var numero,casa decimais,sepador de casas desimais,separador de milhar
	echo $preco."<hr>";

	echo round(3.2)."<hr>";
	
	echo ceil(3.4)."<hr>";
	
	echo floor(3.7)."<hr>";
	
	echo rand(1,10*9)."<hr>";//sorteio
?>