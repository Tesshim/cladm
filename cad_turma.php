<?php
include('dbconnection.php');
?>

            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de Turma</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="turma">Turma</label>
                  <input required name="turma" type="text" class="form-control" id="turma" placeholder="Entre com o nome">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="row">

                    <div class="col-xs-6">
                      <label for="iturma">Inicio da Turma</label>
                      <input required name="iturma" type="time" class="form-control" id="iturma">
                    </div>

                    <div class="col-xs-6">
                      <label for="tturma">Termino da Turma</label>
                      <input required name="tturma" type="time" class="form-control" id="tturma">
                    </div>

                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>

          <?php  
              if (isset($_POST['enviar'])) 
              {
                $nome = $_POST['turma'];
                $iturma = $_POST['iturma'];
                $tturma = $_POST['tturma'];

                $sql = "INSERT INTO tb_turma
                (nome_turma, inicio_turma, termino_turma) values ('$nome', '$iturma', '$tturma')";

                mysqli_query($conn, $sql);

                if($conn != 0)  
                {
                  echo '<div class="alert alert-success" role="alert">
                  Turma cadastrada com sucesso!
                  </div>';
                } 
                else
                {
                  echo '<div class="alert alert-danger" role="alert">
                    Turma não cadastrada!
                  </div>';
                }
              }

          ?>