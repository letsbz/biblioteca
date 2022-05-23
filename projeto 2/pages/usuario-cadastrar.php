<h1>Cadastrar Cliente</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome:</label>
		<input type="text" name="nome_aluno" placeholder="Digite seu nome completo:" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço:</label>
		<input type="text" name="end_aluno" placeholder="Digite apenas sua cidade e estado:" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail:</label>
		<input type="text" name="email_aluno" placeholder="Digite seu e-mail:" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone:</label>
		<input type="number" name="fone_aluno" placeholder="Digite um número para contato:" class="form-control">
	</div>
	<div class="mb-3">
		<label>Número de Matricula:</label>
		<input type="number" name="rgm_aluno" placeholder="Digite seu RGM:" class="form-control">
	</div>
	<div class="mb-3">
		<label>Gênero:</label>
		<input type="text" name="genero_aluno" placeholder="Digite seu gênero:" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento:</label>
		<input type="date" name="data_nasc_aluno" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
		<button type="reset" class="btn btn-success">Redefinir</button>
	</div>
</form>