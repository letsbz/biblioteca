<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$aluno = $_POST["aluno_id_aluno"];
			$livro = $_POST["livro_id_livro"];
			$atendente= $_POST["atendente_id_atendente"];
			$data= $_POST["data_emprestimo"];
            $dat= $_POST["data_devolucao"];

			$sql = "INSERT INTO reserva (aluno_id_aluno, livro_id_livro, atendente_id_atendente, data_emprestimo, data_devolucao) VALUES ({$aluno}, '{$livro}', '{$atendente}', '{$data}', '{$dat}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;
		
		case 'editar':
			$aluno = $_POST["aluno_id_aluno"];
			$atendente= $_POST["atendente_id_atendente"];
			$livro = $_POST["livro_id_livro"];
			$data= $_POST["data_emprestimo"];
            $dat= $_POST["data_devolucao"];

			$sql = "UPDATE reserva SET livro_id_livro='{$livro}', atendente_id_atendente='{$atendente}', data_emprestimo='{$data}', data_devolucao='{$dat}' WHERE aluno_id_aluno=".$_POST["aluno_id_aluno"];;

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM reserva WHERE aluno_id_aluno=".$_REQUEST["aluno_id_aluno"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluído com sucesso');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;
	}