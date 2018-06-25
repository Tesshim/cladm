
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
                <label>Aluno</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="telefone">Valor</label>
                  <input required name="valor" type="double" class="form-control" id="valor" placeholder="0,00">
                </div>
              </div>

              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>

