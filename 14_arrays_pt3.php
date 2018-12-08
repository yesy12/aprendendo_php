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
	
	//arays assoacitivo
	
	$rua = array("nome"=>"Alison","idade" => 17,"altura"=>1.83);
	$rua['cidade'] = "SP";
	var_dump($rua);
	
	foreach($rua as $indice => $valor){
		echo $indice.":".$valor."<br>";
	}

	echo "<hr>";
	
	///Arrays multidimensionais
	
	$c = array(
	"l"=> array("a"=>"u","b" => "i","c"=>"sj"),
	"g" =>array("e"=>"us","F"=>"ah","g"=>"uj"),	
	"h" =>array("g"=>"ud","y"=>"uc","i"=>"un")
	
	);
	
	foreach($c as $indices =>  $valor){
		print_r( $indices.":");
		foreach($valor as $e => $s){
			print_r($s);
		}
		echo "<br>";
	}
	


?>