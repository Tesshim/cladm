<?php
include('dbconnection.php');

$sql = "SELECT * FROM aluno ORDER BY nome";
$q_cliente = mysqli_query($conn, $sql);

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Listar Alunos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                  <!-- inicio -->
                <div class="box-body">
                  <label for="busca_nome">Nome:</label>
                  <div class="input-group margin">
                  <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-flat">Go!</button>
                      </span>
                  </div>
                </div>
                <!-- fim -->

                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Alunos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Aluno</th>
                  <th>Nome Aluno</th>
                  <th>Telefone</th>
                  <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    while ($linha_cliente = mysqli_fetch_array($q_cliente,MYSQLI_BOTH)) 
                    { ?>

                      <tr>
                        <td><?php echo ($linha_cliente["id_aluno"]);?> </td>
                        <td><?php echo ($linha_cliente["nome"]);?> </td>
                        <td><?php echo ($linha_cliente["telefone"]);?> </td>
                        <td><a href="del_aluno.php?id_aluno=<?php echo $linha_cliente['id_aluno']; ?>"><button name="exluir" type="submit" class="btn btn-primary">Excluir</button></a></td>

                      </tr>

                   <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Aluno</th>
                  <th>Nome Aluno</th>
                  <th>Telefone</th>
                  <th>Ações</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
         
          </div>