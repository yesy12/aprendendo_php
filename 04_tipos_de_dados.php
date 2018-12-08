<?php
	/*Escalares*/
	
	//string
	
	$nome = "Alison";
	var_dump($nome);
	
	if(is_string($nome)){
		echo "String";
	}else{
		echo "Nao e string";
	}
	echo "<hr>";
	
	
	//int
	$idade =17;
	var_dump($idade);
	if(is_int($idade)){
		echo "Int";
	}else{
		echo "Nao e int";
	}
	echo "<hr>";
	
	//float
	$altura =1.78;
	var_dump($altura);
	if(is_float($altura)){
		echo "float";
	}else{
		echo "nao e float";
	}
	echo "<hr>";
	
	//boolean
	$admin = false;
	var_dump($admin);
	if(is_bool($admin)){
		echo "Boolean";
	}else{
		echo "Nao e boolean";
	}
	echo "<hr>";
	
	/*Compostos*/
	
	//array
	$carros= array("Gol","Uno","Camaro");
	var_dump($carros);
	if(is_array($carros)){
		echo "Array";
	}else{
		echo "Nao e array";
	}
	echo "<hr>";
	
	//objects
	
	class Cliente{
		public $nome;
		
		public function atribuirNome($nome){
			$this->$nome = $nome;
			
		}
		
	}
	
	$cliente = new Cliente();
	$cliente->atribuirNome("Alison");
	var_dump($cliente);
	if(is_object($cliente)){
		echo "Object";
	}else{
		echo "Nao e object";
	}
	echo "<hr>";
	
	
	/*Especiais*/
	//Null
	
	$cidade = NULL;
	var_dump($cidade);
	echo "<hr>";
	
	//Resource
	
	
?>