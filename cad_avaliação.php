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
              <h3 class="box-title">Cadastro de Avaliação</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">

              	<div class="box-body">
                <div class="form-group">
                <label>Aluno</label>
                <select name="aluno" id="aluno" class="form-control select2 <?php echo $class;?>" style="width: 100%;">
                  <?php 

                while($aluno_select = mysqli_fetch_array($sql_aluno_select, MYSQLI_BOTH))
                { ?>

                    <option value="<?php echo $aluno_select['id_aluno']; ?>"><?php echo $aluno_select['nome'];?></option>

               <?php } ?>
                </select>
              </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Altura</label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00 M">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Peso</label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00 KG">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">IMC</label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00">
                </div>
              </div>


              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Dobras Cutâneas </label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Gordura </label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="%">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Lesoes </label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Medicamentos </label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="altura">Complicações </label>
                  <input required name="altura" type="double" class="form-control" id="altura" placeholder="0,00">
                </div>
              </div>


              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>