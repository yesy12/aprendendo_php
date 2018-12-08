<?php
	include_once "includes/mensagem.php";
	include_once "includes/header.php";
		include_once "php_actions/db_connect.php"; 	

?>


<div class="row">
	<div class="col s12 m8 push-m1 "> 
		<h3 class="light">Clientes</h3>
			
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Email:</th>
					<th>Idade:</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "select * from clientes";
					
					$resultado=mysqli_query($connect,$sql);
					
					if(mysqli_num_rows($resultado) >0 ){
					
					
					while($dados= mysqli_fetch_assoc($resultado)){
					
				?>
				<tr> 
					<td><?php echo $dados['nome'];?></td>
					<td><?php echo $dados['sobrenome'];?></td>
					<td><?php echo $dados['email'];?></td>
					<td><?php echo $dados['idade'];?></td>						<td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a>
					<td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a>

				<!-- Modal Structure -->
				<div id="modal<?php echo $dados['id'];?>" class="modal">
					<div class="modal-content">
						<h4>Opa!</h4>
						<p>Tem certeza que deseja excluir esse cliente?</p>
					</div>
					<div class="modal-footer">
						<form action="php_actions/delete.php" method="post">
							<input type="hidden" name="ddk" value="<?php echo $dados['id'];?>">
	<button type="submit" name="btn-deletar" class="btn red">Sim,quero deletar</button>
<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
						</form>
						
					</div>
				</div>


				</tr>
				<?php
				}
			}
			else{?>
				<tr>
					<td>-</td>						<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
		<?php
			}
				?>
			</tbody>
		</table>
		<br>
		<a href="add_clie.php" class="btn">Adicionar clientes</a>
	</div>
</div>



<?php
	include_once "includes/footer.php";

?>