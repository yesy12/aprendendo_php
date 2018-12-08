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
echo "<hr>";


//adiciona no primeiro indice
$frutas = ["banana","abacate","mamao","pera"];
var_dump($frutas);
array_unshift($frutas,"maca","manga");
var_dump($frutas);
echo "<hr>";

//adiciona no ultimo indice
$frutas = ["banana","abacate","mamao","pera"];
var_dump($frutas);
array_push($frutas,"maca","manga");
var_dump($frutas);

echo "<hr>";

//combina arrays para o primeiro se indice e o segundo valores
$numero = ["primeiro","segundo","terceiro"];
$letra = ["a","b","c"];

$valores = array_combine($numero,$letra);

var_dump($valores);

echo "<hr>";

//soma os valores dentro do array

$soma = [45.9,3,-2-498,2994];
$total= array_sum($soma);
echo $total;
echo "<hr>";


//funcao explode
$data = "26/07/2009";
$newdata = explode("/",$data);
var_dump($newdata);

$frase ="a b c d e f g h i";
$frase_array= explode(" ",$frase);
var_dump($frase_array);
echo "<hr>";

//transforma array em string
$soma = [3,534,45,6344,36,36,0];
$stringsoma= implode(",",$soma);
var_dump($stringsoma);


?>