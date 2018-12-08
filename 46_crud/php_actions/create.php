<?php
	include_once "db_connect.php";
	session_start();
	function verifica($var){
		global $connect;
		$resultado= mysqli_escape_string($connect,$_POST[$var]);		
		//xss
		$resultado = htmlspecialchars($resultado);
		
		return $resultado;
	}
	
	if(isset($_POST['btn-cadastrar'])){
		$nome = verifica('nome');
		$sobrenome= verifica("sobrenome");
		$email = verifica("email");
		$idade = verifica("idade");				
		
		$sql = "INSERT INTO clientes(nome,sobrenome,email,idade) VALUES (\"$nome\",\"$sobrenome\",\"$email\",$idade);";
		if(mysqli_query($connect,$sql)){
			$_SESSION['mensagem']= "sucesso no cadastro";
			header("Location: ../lista.php");
		}else{
			$_SESSION['mensagem'] = "fracassou no cadastro";
			header("Location: ../lista.php");
		}
}
?>