<?php
	include('dbconnection.php');

	$sql_nvendas = mysqli_query($conn, "SELECT count(*) as total FROM tb_venda");
	$n_vendas1 = mysqli_fetch_assoc($sql_nvendas);
	$n_total_de_vendas = $n_vendas1['total'];

	$mes_atual = date('m');

	$sql = mysqli_query($conn, "SELECT * FROM tb_venda WHERE MONTH(data)= '$mes_atual'");
	$n_vendas_mes = mysqli_num_rows($sql);

	$sql_nalunos = mysqli_query($conn, "SELECT count(*) as total_alunos FROM aluno");
	$n_alunos = mysqli_fetch_assoc($sql_nalunos);
	$nt_alunos = $n_alunos['total_alunos'];

?>


<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $n_total_de_vendas?></h3>

              <p>Vendas</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $nt_alunos?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>