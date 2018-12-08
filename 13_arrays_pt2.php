<?php
	
	$carros = array("bmw","fox","sei la","jdh");
	$carros[] ="Arrojkd";
	$carros[100] = "djdj";
	
	var_dump($carros);
	
	$pessoas = ["Alison","dhd"];
	print_r($pessoas);
	
	
	echo "<hr>";
	
	echo count($pessoas)."total de pessoas";
	echo "<hr>";
	
	//foreach
	
	foreach($carros as $pessoa){
		echo $pessoa."<br>";
	}
	
	echo "<hr>";
	
	
	?>