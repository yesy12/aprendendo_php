<?php

$aleatorio = ["a"=> "b","c"=>"d","e"=>"f"];

if( is_array($aleatorio)){
	echo "isto ´e um array <hr>";
}

//////
$escolha ="Alison";

if( in_array($escolha,$aleatorio)){
	echo $escolha." faz parte do array ".$nome;
}
else{
	echo $escolha." nao existe no array".$nome;
}

echo "<hr>";


//indices viram os valores
$keys = array_keys($aleatorio);
var_dump($keys);

echo "<hr>";





?>