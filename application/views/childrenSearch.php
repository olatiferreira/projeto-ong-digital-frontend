<!-- Referência cabeçalho -->
<?php $this->load->view('header')?>
<!-- Referência Menu -->
<?php $this->load->view('menu')?>  

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Consulta de Usuário
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('index.php/dashboard')?>"><i class="fa fa-home"></i> Início</a></li>
      <li><a href="#">Usuários</a></li>
      <li class="active">Buscar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th data-field="id"><u>Código</u></th>
                    <th data-field="name"><u>Nome</th>
                      <th data-field="active"><u>Status</u></th>            
                    </tr>
                  </thead>
                  <tbody>                                
                    <?php
                    if (isset($users)){
                      foreach($users as $user){ 
                        echo "<tr>
                        <td>".$user->id."</td>
                        <td>".$user->name."</td>";
                        if ($user->active == true){
                                echo "<td>Ativo</td>";
                             }else{
                              echo "<td>Inativo</td>";
                             }                          
                        echo "</tr>";
                      }          
                      echo "
                      <tr class='#eceff1 blue-grey lighten-5'>          
                      <td></td>
                      <td></td>                                
                      <td></td>          
                      </tr>";
                    }
                    ?>
                  </tbody>
                </table>

                <div class="col-md-12" style="text-align: center">
                  <a type="button" class="btn btn-default" href="<?= base_url('index.php/user')?>">Consultar Usuários</a>
                </div>

              </div>                
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>        



    <!-- Chama o rodapé -->
    <?php $this->load->view('footer')?>