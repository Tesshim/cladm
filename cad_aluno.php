<?php
include('dbconnection.php');
?>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro do Aluno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="nome_aluno">Nome Aluno</label>
                  <input required name="nome_aluno"type="text" class="form-control" id="nome_aluno" placeholder="Nome">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="rg">RG</label>
                  <input required name="rg" type="text" class="form-control" id="rg" placeholder="RG">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="telefone">Telefone</label>
                  <input required name="telefone"type="text" class="form-control" id="telefone_aluno" placeholder="Telefone">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="endereco">Endereço</label>
                  <input required name="endereco" type="text" class="form-control" id="endereco" placeholder="Endereço">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="cadastro">Tipo de Cadastro</label>
                  <input required name="tcadastro" type="text" class="form-control" id="tcadastro" placeholder="Tipo de Cadastro">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" id="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>


          <?php  
          		if (isset($_POST['enviar'])) {
          			$nome = $_POST['nome_aluno'];
          			$telefone = $_POST['telefone'];
                $rg = $_POST['rg'];
                $endereco = $_POST['endereco'];
                $cadastro = $_POST['tcadastro'];

          			$sql = "INSERT INTO aluno
          			(nome, telefone, rg, endereco, cadastro) values ('$nome', '$telefone', '$rg', '$endereco', '$cadastro')";

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
