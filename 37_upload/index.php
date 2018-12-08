
<?php
	
	if(isset($_POST['enviar'])){
	
		$formatosPermitidos = ["png","jpeg","jpg","gif"];
		var_dump($_FILES);
		
		$extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

		if(in_array($extensao,$formatosPermitidos)){
			$pasta = "arquivo/";
			$temporario = $_FILES['arquivo']["tmp_name"];
			$novoNome = uniqid().".$extensao";
			
			if(move_uploaded_file($temporario,$pasta.$novoNome) ){
		$msg[] = "Upload sucesso";
		echo "nao sei de mais nd <br>";		
}
			else{
				$msg[] = "Upload falhou";
			}
			
}
		else{
			$msg[]= "Formato Invalido";
		}
		
		foreach($msg as $t){
			echo $t;
		}

	}

	

?>


<html>
	<head>
		<title>Upload de Arquivos</title>
	</head>
<body>
	<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >
		<input type="file" name="arquivo"> <br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>