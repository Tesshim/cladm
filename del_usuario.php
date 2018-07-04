<?php 
	include('dbconnection.php');

	$id_usuario = $_GET['id_usuario'];

	$exclui = "DELETE FROM tb_usuario WHERE id_usuario = '$id_usuario'";
	$resultado = mysqli_query($conn, $exclui) or die (mysqli_error());

	echo "<script>alert(\"Registro exluido com sucesso. $id_aluno\")</script>";

	echo "<script> window.location = 'index.php?area=list_aluno'; </script>";
?>