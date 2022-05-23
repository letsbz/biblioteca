<h1>Listar Reserva</h1>
<?php
	$sql = "SELECT * FROM reserva AS a
			INNER JOIN aluno AS b
			INNER JOIN livro AS c
			INNER JOIN atendente AS d
			ON b.id_aluno = a.aluno_id_aluno
			AND c.id_livro = a.livro_id_livro
			AND d.id_atendente = a.atendente_id_atendente";
                   
	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>Livro</th>";
		print "<th>Nome do Aluno</th>";
		print "<th>Data de Reserva</th>";
		print "<th>Data de Devolução</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há resultados</div>";
	}
?>
