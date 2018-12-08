<?php
	include_once "includes/header.php";
	include_once "php_actions/db_connect.php";
	
	if(isset($_GET['id'])){
		$id = mysqli_escape_string($connect,$_GET['id']);

		$sql= "SELECT * from clientes where id=$id";
		
		$resultado = mysqli_query($connect,$sql);
		$dados = mysqli_fetch_array($resultado);
	}

?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Editar cliente</h3>
		<form method="post" action="php_actions/update.php">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>">
				<label for="nome">Nome</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']?>">
				<label for="sobrenome">Sobrenome</label>
			</div>
			
			<div class="input-field col s12">
				<input type="email" name="email" id="email" value="<?php echo $dados['email']?>">
				<label for="email">Email</label>
			</div>
			
			<div class="input-field col s12 m10">
				<input type="number" name="idade" id="idade" value="<?php echo $dados['idade']?>">
				<label for="idade">Idade</label>
			</div>
			<input type="hidden" value="<?php echo $dados['idade']?>" name="ddk">
			
			<button type="submit" class="btn" name="btn-editar">Atualizar</button>
 			<a href="lista.php" class="btn green">Lista de Clientes</a>

		</form>
	</div>
</div>

<?php
	include_once "includes/footer.php";
?>