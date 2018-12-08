<?php
	include_once "db_connect.php";
	session_start();
	function verifica($var){
		global $connect;
		$resultado= mysqli_escape_string($connect,$_POST[$var]);		
		return $resultado;
	}
	
	if(isset($_POST['btn-editar'])){
		$nome = verifica('nome');
		$sobrenome= verifica("sobrenome");
		$email = verifica("email");
		$idade = verifica("idade");	
		$id = verifica("ddk");
					
		$sql = "update clientes set nome=\"$nome\",sobrenome=\"$sobrenome\",email=\"$email\",idade=\"$idade\" where id=$id";
		
		if(mysqli_query($connect,$sql)){
			$_SESSION['mensagem']= "sucesso na ediçao";
			header("Location: ../lista.php");
		}else{
			$_SESSION['mensagem'] = "fracassou na ediçao";
			header("Location: ../lista.php");
		}
}
?>