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

///array tem os valores
$values = array_values($aleatorio);
var_dump($values);
echo "<hr>";

//une arrays em apenas 1 array
$carros = ["Camaro","Uno","Gol"];
$motos = ["Pop100","50cc","cb1000"];

$veiculos = array_merge($carros,$motos);
var_dump($veiculos);

echo "<hr>";

//exclui o ultimo valor
echo "foi excluido ".array_pop($veiculos);
var_dump($veiculos);


echo "<hr>";

//exclui o primeiro valor
echo "foi excluido ".array_shift($veiculos);
var_dump($veiculos);
?>