<?php
		//recupera arquivo de conexão
		require 'dbconnection.php';


		//recupera login
		$email = $_POST['email'];
		//recupera senha
		$senha = $_POST['senha'];

		$consulta = "SELECT * FROM tb_usuario WHERE email_usuario = '$email'";
		$query = mysqli_query($conn, $consulta);
		$resultado = mysqli_fetch_array($query, MYSQLI_BOTH);

		$senhaBanco = ($resultado['senha_usuario']);
		$senhaDigitada = md5($senha);


		if ( ($resultado['email_usuario'] == $email) & ($senhaBanco ===$senhaDigitada) ) {
			$validacao = "3"; //usaremos essa variavel para verificar se ele esta logado, se o usuario não tiver o valor 1 nessa variavel ele não esta logado!

			echo "Entrou";
			//inicia a sessão
			session_start();
			//gravo as informações das variaveis dentro das sessões
			$_SESSION[login] = $email;
			$_SESSION[validacao] = $validacao;
			$_SESSION[id_usuario] = $resultado['id_usuario'];
			$_SESSION[nome_usuario] = $resultado['nome_usuario'];
			//pronto agora redirecione o usuario para a página secreta
			header("Location: index.php");
		}
		else
		{
			echo("ERRO");
		}

?>