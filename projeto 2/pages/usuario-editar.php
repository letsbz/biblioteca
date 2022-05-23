<h1>Editar Cliente</h1>
<?php
	$sql = "SELECT * FROM aluno WHERE id_aluno=".$_REQUEST["id_aluno"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

?>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">
	<div class="mb-3">
		<label>Nome:</label>
		<input type="text" name="nome_aluno" value="<?php print $row->nome_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço:</label>
		<input type="text" name="end_aluno" value="<?php print $row->end_aluno; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail:</label>
		<input type="text" name="email_aluno" value="<?php print $row->email_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone:</label>
		<input type="number" name="fone_aluno" value="<?php print $row->fone_aluno; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Número de Matricula:</label>
		<input type="number" name="rgm_aluno" value="<?php print $row->rgm_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Gênero:</label>
		<input type="text" name="genero_aluno" value="<?php print $row->genero_aluno; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento:</label>
		<input type="date" name="data_nasc_aluno" value="<?php print $row->data_nasc_aluno; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
		<button type="reset" class="btn btn-success">Redefinir</button>
	</div>
</form>