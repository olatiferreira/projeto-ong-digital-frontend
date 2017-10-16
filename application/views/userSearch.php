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

              <div class="col-md-12 centered">
                <div class="col-md-offset-3 col-md-2">
                  <input class="form-control form-control-lg" type="text" placeholder="Busca">
                </div>

                <div class="col-md-2">
                  <select class="form-control form-control-lg">
                     <option value="" disabled selected>Filtro</option>
                     <option value="id">Código</option>
                  </select>
                </div>

                <div class="col-md-2">
                  <a href="<?= base_url('index.php/user')?>" class="btn btn-primary btn-md" role="button" aria-disabled="true">
                    <i class="fa fa-search" aria-hidden="true"></i> Buscar
                  </a>
                </div>
              </div>

              
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th data-field="id"><u>Código</u></th>
                    <th data-field="name"><u>Nome</th>
                      <th data-field="active"><u>Status</u></th>
                      <th data-field="action"><u>Ações</u></th>
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
                        echo "<td>
                        <a href=''>
                        <i class='fa fa-pencil'></i>
                        </a>|   

                        <a href=".base_url('index.php/user/delete/'.$user->id).">
                        <i class='fa fa-trash' style='color: red'></i>
                        </a>


                        </td>";
                        echo "</tr>";
                      }          
                      echo "
                      <tr class='#eceff1 blue-grey lighten-5'>          
                      <td></td>
                      <td></td>                                
                      <td></td>          
                      <td></td> 
                      </tr>";
                    }
                    ?>
                  </tbody>
                </table>
                
              </div>                
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>

    <?php
    if (isset($statusCode)){
      if ($statusCode == "HTTP/1.1 204 No Content"){
        echo "<script>
              swal(
                'Excluído!',
                'Registro apagado com sucesso!',
                'success'
              );
              </script>";
      }
      else{
        echo "<script>
                swal(
                  'Oops...',
                  'Ocorreu um erro!',
                  'error'
                );
              </script>";
      }
    }

    ?>




    <!-- Chama o rodapé -->
    <?php $this->load->view('footer')?>