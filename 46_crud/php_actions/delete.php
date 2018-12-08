<?php
	include_once "db_connect.php";
	session_start();
	function verifica($var){
		global $connect;
		$resultado= mysqli_escape_string($connect,$_POST[$var]);		
		return $resultado;
	}
	
	if(isset($_POST['btn-deletar'])){
		$id = verifica('ddk');
					
		$sql = "delete from clientes where id=$id";
		
		if(mysqli_query($connect,$sql)){
			$_SESSION['mensagem']= "sucesso ao apagar";
			header("Location: ../lista.php");
		}else{
			$_SESSION['mensagem'] = "fracassou ao apagar";
			header("Location: ../lista.php");
		}
}
?>