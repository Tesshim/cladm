<?php
include('dbconnection.php');
?>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro do Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="nome_usuario">Nome</label>
                  <input required name="nome_usuario"type="text" class="form-control" id="nome_usuario" placeholder="Nome">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input required name="email"type="text" class="form-control" id="email" placeholder="email">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input required name="senha"type="text" class="form-control" id="senha" placeholder="****">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>


          <?php  
          		if (isset($_POST['enviar'])) {
          			$nome = $_POST['nome_usuario'];
          			$email = $_POST['email'];
                $senha = $_POST['senha'];

                $senhaMD5 = md5($senha);

          			$sql = "INSERT INTO tb_usuario
          			(nome_usuario, email_usuario, senha_usuario) values ('$nome', '$email', '$senhaMD5')";

          			mysqli_query($conn, $sql);

          			if($conn != 0)	
          			{
	          			echo '<div class="alert alert-success" role="alert">
	  					Aluno cadastrado com sucesso!
						</div>';
					} 
					else
					{
						echo '<div class="alert alert-danger" role="alert">
	  					Aluno não cadastrado!
						</div>';
					}
          		}

          ?>
