<?php
	require_once("db_connect.php");

	session_start();
	if(isset($_SESSION['logado']) ){
	header("Location: home.php");
}
	if(isset($_POST['btn-entrar'])){
		$erros = [];
		$login = mysqli_escape_string($connect,$_POST['login']);
		$senha = mysqli_escape_string($connect,$_POST['senha']);
		
		if(empty($login)){
			$erros[]="<li>Login vazio</li>";
		}
		if(empty($senha)){
			$erros[]="<li>Senha vazia</li>";
		}
		else{
			$sql = "SELECT usuario from usuarios WHERE usuario=\"$login\" ";
			$resultado = mysqli_query($connect,$sql);
			
			if(mysqli_num_rows($resultado) > 0){
				$senha = md5($senha);
				$sql = "Select * from usuarios where usuario=\"$login\" and senha = \"$senha\"";
				
				$resultado = mysqli_query($connect,$sql);
				
				$quantidade =mysqli_num_rows($resultado);
				
				if($quantidade == 1){
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($connect);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					$endereco = "home.php";			
					header("Location: $endereco");
	
			}
				else{
					$erros[] ="<li>Senha invalida</li>";
				}
		}
		else{
			$erros[] = "<li>Usuario inexistente </li>";
		}
			
	}		
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Login</h1>
	<hr>
	<?php
		if(!empty($erros)){
			foreach($erros as $erro){
			echo $erro;
			}
		echo "<hr>";
		}
	
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		Nome:<input type="text" name="login" value=""><br>
		Senha:<input type="password" name="senha"><br>
		
	<button type="submit" name="btn-entrar">Entrar</button>

	</form>
</body>
</html>