<?php
    include('dbconnection.php');
    $id_aluno = $_GET['id_aluno'];

    $sql = "SELECT * FROM aluno WHERE id_aluno = $id_aluno";
    $q_aluno = mysqli_query($conn, $sql);
    $aluno = mysqli_fetch_array($q_aluno, MYSQLI_BOTH);

    $sql_select = "SELECT * FROM aluno ORDER BY nome";
    $sql_aluno_select = mysqli_query($conn, $sql_select);

?>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar do Aluno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="nome_aluno">Nome Aluno</label>
                  <input name="nome_aluno" type="text" class="form-control" id="nome_aluno" value="<?php echo $aluno['nome']; ?>" ">
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
                  <input required name="telefone"type="text" class="form-control" id="telefone" value="<?php echo $aluno['telefone']; ?>">
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
                  <input required name="tcadastro"type="text" class="form-control" id="tcadastro" placeholder="Tipo de Cadastro">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>

          <select name="teste" class="<?php echo $class;?>" id="teste">
            
            <?php 

                while($aluno_select = mysqli_fetch_array($sql_aluno_select, MYSQLI_BOTH))
                { ?>

                    <option value="<?php echo $aluno_select['id_aluno']; ?>"><?php echo $aluno_select['nome'];?></option>

               <?php } ?>


          </select>


          <?php  
              if (isset($_POST['salvar'])) {
                $nome = $_POST['nome_aluno'];
                $telefone = $_POST['telefone'];
                $rg = $_POST['rg'];
                $endereco = $_POST['endereco'];
                $cadastro = $_POST['tcadastro'];

                $sql_editar = "UPDATE aluno SET nome = '$nome', telefone = '$telefone', rg = '$rg', endereco = '$endereco', cadastro = '$cadastro' WHERE id_aluno = '$id_aluno'";

                mysqli_query($conn, $sql_editar);

                if($conn != 0)  
                {
                  echo '<div class="alert alert-success" role="alert">
              Cadastro alterado com sucesso!
            </div>';
          } 
          else
          {
            echo '<div class="alert alert-danger" role="alert">
              Cadastro não alterado!
            </div>';
          }
              }

          ?>