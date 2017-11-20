<?php $this->load->view('header')?>
<?php $this->load->view('safety')?>
<?php $this->load->view('menu')?>  

<body class="hold-transition skin-blue sidebar-mini">  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consulta de Situação de Criança
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('index.php/dashboard')?>"><i class="fa fa-home"></i> Início</a></li>
        <li><a href="#">Situação</a></li>
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

              <div class="col-md-12">
                <label>Busca</label>
                <div class="form-group input-group">                
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input class="form-control form-control-lg" type="text" placeholder="Busca">
                </div>
              </div>             

              <div class="col-md-12">
                <div class="form-group">
                  <center>

                    <a href="<?= base_url('index.php/childrenSituation')?>" class="btn btn-primary btn-md" role="button" aria-disabled="true">
                      <i class="fa fa-search" aria-hidden="true"></i> Buscar
                    </a>
                  </center>
                </div>
              </div>
              

              <div class='col-md-12 table-responsive'>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th data-field="id"><center>Código</center></th>
                      <th data-field="description"><center>Descrição</center></th>    
                      <th data-field="action"><center>Ações</center></th>                  
                    </tr>
                  </thead>
                  <tbody>                                
                    <?php
                    if (isset($childrenSituations)){
                      foreach($childrenSituations as $situation){                     
                        echo "<tr>
                        <td>".$situation->id."</td>
                        <td>".$situation->description."</td>                   
                        <td>                       

                        <a href=".base_url('index.php/childrenSituation/updateSearch/'.$situation->id).">
                        <i class='fa fa-pencil'></i>
                        </a>|

                        <a href='javascript:confirmaDelete(".$situation->id.")'>
                        <i class='fa fa-trash' style='color: red'></i>
                        </a>


                        </td>
                        </tr>";
                      }                  
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>                
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- Alert Criança Deletado -->
  <script type="text/javascript">

    function confirmaDelete(id){
      swal({
        title: 'Você tem certeza?',
        text: "Você não conseguirá reverter a ação posteriormente!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, tenho certeza!'
      }).then(function () {      
        swal(
          'Apagado!',
          'Seu registro foi apagado com sucesso.',
          'success'
          )
        window.location.replace("childrenSituation/delete/"+id);
      })
    };

    function situationUpdate(){
      swal("Situação atualizada com sucesso!", "", "success")
    };

    function situationError(){
      swal("Ocorreu um erro!", "verifique...", "error")
    };
  </script>

  <?php
  if ($msg == "updateOk"){
    echo "<script>situationUpdate();</script>";
  }
  ?>
  
  <!-- Chama o rodapé -->
  <?php $this->load->view('footer')?>