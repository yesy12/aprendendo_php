<?php
	$senha ="ncb6 sr84/)3.fdj* hf";
	$novasenha= base64_encode($senha);

	echo "base64 $novasenha <br>";
	echo "Sua senha e ".base64_decode($novasenha);

	echo "<hr>";
	
	echo "Md5: ".md5($senha)."<hr>";
	echo "Sha1: ".sha1($senha)."<hr>";

?>