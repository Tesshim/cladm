<?php
    include('dbconnection.php');
    $id_aluno = $_GET['id_aluno'];

    $sql = "SELECT * FROM aluno WHERE id_aluno = $id_aluno";
    $q_aluno = mysqli_query($conn, $sql);
    $aluno = mysqli_fetch_array($q_aluno, MYSQLI_BOTH);

    $sql_select = "SELECT * FROM aluno ORDER BY nome";
    $sql_aluno_select = mysqli_query($conn, $sql_select);

    $sql_select_turma = "SELECT * FROM tb_turma ORDER BY nome_turma";
    $sql_turma_select = mysqli_query($conn, $sql_select_turma);

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Receber Pagamento</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">

              <div class="box-body">
              <div class="form-group">
                <label>Data:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>
              </div>


              <div class="box-body">
                <div class="form-group">
                <label>Turma</label>
                <select name="aluno" id="aluno" class="form-control select2 <?php echo $class;?>" style="width: 100%;">
                  <?php 

                while($turma_select = mysqli_fetch_array($sql_turma_select, MYSQLI_BOTH))
                { ?>

                    <option value="<?php echo $turma_select['id_turma']; ?>"><?php echo $turma_select['nome_turma'];?></option>

               <?php } ?>
                </select>
              </div>
              </div>

                <div class="box-body">
                <div class="form-group">
                <label>Alunos</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              </div>

              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>