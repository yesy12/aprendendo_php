<?php
	$senha ="ncb6 sr84/)3.fdj* hf";
	$novasenha= base64_encode($senha);

	echo "base64 $novasenha <br>";
	echo "Sua senha e ".base64_decode($novasenha);

	echo "<hr>";
	
	echo "Md5: ".md5($senha)."<hr>";
	echo "Sha1: ".sha1($senha)."<hr>";

	$senha = "12348568";
	$senha_db = "$2y$10$mlgVZ7SXuri7QW7EZKooPemHRYmbyeYoRLabikT/8IUPw.c3PwD1u";
	/*$options=[
		'cost' =>10
		
	];*/
	$senhaSegura = password_hash($senha,PASSWORD_DEFAULT);//options
	if(password_verify($senha,$senhaSegura)){
		echo "senha valida";
	}else{
		echo "senha invalida";
	}

	echo "<hr>$senhaSegura";
?>