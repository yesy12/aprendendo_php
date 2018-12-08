<?php
	date_default_timezone_set('America/Sao_Paulo');
	echo date("d/m/y H:i:s")."<br>";
	echo date("l")." dia da semana <hr>";
	
	$date = date("Y-m-d");//date
	$datetime = date("Y-m-d H:i:s");//datetime
	echo "$datetime<hr>";

	//time
	$time = time();
	echo date("d/m/Y",$time)."<hr>";
	
	//mktime
	$data_pagamento = mktime(15,30,00,02,15,2023);
	echo date("d/m/y - h:i",$data_pagamento)."<hr>";

	//strtotime
	$datadb = "2018-06-06 13:30:00";
	$datadb = strtotime($datadb);
	
	echo date('d/m/y h:i',$datadb);
?>