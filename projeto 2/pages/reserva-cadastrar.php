<h1>Cadastrar Reserva</h1>
<form action="?page=reserva-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Cliente</label>
		<select name="aluno_id_aluno" class="form-control">
			<option>-=Escolha o Cliente=-</option>
		<?php
			$sql = "SELECT * FROM aluno";

			$res = $conn->query($sql) or die($conn->error);

			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_aluno."'>";
					print $row->nome_aluno."</option>";
				}
			}else{
				print "Não há clientes cadastrados";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Livros</label>

		<select name="livros_id_livros" class="form-control">
			<option>-=Escolha o Livro=-</option>
		<?php
			$sql = "SELECT * FROM livro";

			$res = $conn->query($sql) or die($conn->error);

			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_livro."'>";
					print $row->titulo_livro."</option>";
				}
			}else{
				print "Não há livros cadastrados";
			}
		?>
		</select>
	</div>	
	<div class="mb-3">
		<label>atendente</label>
		<select name="atendente_id_atendente" class="form-control">
			<option>-=Escolha a atendente=-</option>
		<?php
			$sql = "SELECT * FROM atendente";

			$res = $conn->query($sql) or die($conn->error);

			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_atendente."'>";
					print $row->nome_atendente."</option>";
				}
			}else{
				print "Não há atendentes cadastrados";
			}
		?>
		</select>
	</div>

	<div class="mb-3">
		<label>Escolha a data de empréstimo desejada:</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Escolha a data de devolução:</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
		<button type="reset" class="btn btn-success">Redefinir</button>
 	</div>
</form>