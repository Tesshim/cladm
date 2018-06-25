<?php 
	include('dbconnection.php');

	$id_aluno = $_GET['id_aluno'];

	$exclui = "DELETE FROM aluno WHERE id_aluno = '$id_aluno'";
	$resultado = mysqli_query($conn, $exclui) or die (mysqli_error());

	echo "<script>alert(\"Registro exluido com sucesso. $id_aluno\")</script>";

	echo "<script> window.location = 'index.php?area=list_aluno'; </script>";
?>