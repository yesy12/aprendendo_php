<?php
$numero = 10;

if($numero > 10){
	echo "maior";
}
else if($numero == 10){
	echo "e igual";
}
else{
	echo "menor";
}
echo "<hr>";


//operador ternario

$media = 6;

echo ($media >= 7) ? "Aprovado":"Reprovado";