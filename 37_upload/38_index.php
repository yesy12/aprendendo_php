
<?php
	
	if(isset($_POST['enviar'])){
	
		$formatosPermitidos = ["png","jpeg","jpg","gif"];
		$quantArquivo = count($_FILES['arquivo']['name']);

		$cont=0;
		while($cont <$quantArquivo){			
			$extensao = pathinfo($_FILES['arquivo']['name'][$cont],PATHINFO_EXTENSION);
			
			if(in_array($extensao,$formatosPermitidos)){
				$pasta = "arquivo/";
				$temporario = $_FILES['arquivo']["tmp_name"][$cont];
				$novoNome = uniqid().".$extensao";
			
			if(move_uploaded_file($temporario,$pasta.$novoNome) ){
				echo "Upload feito com sucesso $pasta.$novoNome <br>";		
			}
			else{
				echo "Upload falou <br>";
			}
			
			}
			else{
				echo ".$extensao formato Invalido <br>";
			}
			$cont++;
}
	}

?>


<html>
	<head>
		<title>Upload de Arquivos</title>
	</head>
<body>
	<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >
		<input type="file" name="arquivo[]" multiple> <br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>