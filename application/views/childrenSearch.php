<!-- Referência cabeçalho -->
<?php $this->load->view('header')?>
<!-- Referência Menu -->
<?php $this->load->view('menu')?>  

<body class="hold-transition skin-blue sidebar-mini">  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consulta de Criança
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

              <div class="col-md-6">
                <label>Busca</label>
                <div class="form-group input-group">                
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input class="form-control form-control-lg" type="text" placeholder="Busca">
                </div>
              </div>

              <div class="col-md-3">
                <label>Data Nascimento (Período)</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control form-control-lg" type="text" name="daterange" value=""/>
                </div>
              </div>

              <div class="col-md-3">
                <label>Data Entrada ONG (Período)</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control form-control-lg" type="text" name="daterange" value=""/>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <center>

                    <a href="<?= base_url('index.php/children/search')?>" class="btn btn-primary btn-md" role="button" aria-disabled="true">
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
                      <th data-field="name"><center>Nome</center></th>
                      <th data-field="rg"><center>RG</center></th>
                      <th data-field="cpf"><center>CPF</center></th>                        
                      <th data-field="sex"><center>Sexo</center></th>
                      <th data-field="birth"><center>Data Nasc.</center></th>
                      <th data-field="school"><center>Escola</center></th>                                                
                      <th data-field="entryDate"><center>Data Entrada</center></th>
                      <th data-field="description"><center>Situação</center></th>
                      <th data-field="action"><center>Ações</center></th>
                    </tr>
                  </thead>
                  <tbody>                                
                    <tr>
                      <td>1</td>
                      <td>Pedro Paulo da Silva Junior</td>
                      <td>12.756.258-x</td>
                      <td>123.123.123-88</td>                        
                      <td>Masculino</td>                      
                      <td>27/01/1996</td>                      
                      <td>Antonio Fachada</td>                                                                    
                      <td>23/12/2016</td>                      
                      <td><span class='label label-success'>Ativo</span></td>                    
                      <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                          <i class='fa fa-search' style='color: green' title="Visualizar Documentos"></i>
                        </a>|

                        <a href=''>
                          <i class='fa fa-pencil' title="Editar"></i>
                        </a>| 

                        <a href=".base_url('index.php/user/delete/'.$user->id).">
                          <i class='fa fa-trash' style='color: red' title="Excluir"></i>
                        </a>                      

                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Ítalo César Ferreira da Costa</td>
                      <td>98.789.456</td>
                      <td>654.321.654-65</td>                        
                      <td>Masculino</td>                      
                      <td>20/01/2000</td>                      
                      <td>Pestalozzi</td>                                                                    
                      <td>23/12/2016</td>                      
                      <td><span class='label label-success'>Ativo</span></td>                    
                      <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                          <i class='fa fa-search' style='color: green' title="Visualizar Documentos"></i>
                        </a>|

                        <a href=''>
                          <i class='fa fa-pencil' title="Editar"></i>
                        </a>| 

                        <a href=".base_url('index.php/user/delete/'.$user->id).">
                          <i class='fa fa-trash' style='color: red' title="Excluir"></i>
                        </a>                      

                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLabel">Documentos</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                    <div class="col-md-12">

                      <div class="col-md-2 ml-auto">
                        <center>
                          <label>Documento 1</label><br><br>
                          <i class="fa fa-file-pdf-o fa-4x" style="color:blue"></i><br><br>
                          <span><b>Usuário: </b>DAI_CORREA</span>
                        </center>
                      </div>

                      <div class="col-md-2 ml-auto">
                        <center>
                          <label>Documento 2</label><br><br>
                          <i class="fa fa-file-pdf-o fa-4x" style="color:blue"></i><br><br>
                          <span><b>Usuário: </b>DAI_CORREA</span>
                        </center>
                      </div>

                      <div class="col-md-2 ml-auto">
                        <center>
                          <label>Documento 3</label><br><br>
                          <i class="fa fa-file-pdf-o fa-4x" style="color:blue"></i><br><br>
                          <span><b>Usuário: </b>DAI_CORREA</span>
                        </center>
                      </div>

                      <div class="col-md-2 ml-auto">
                        <center>
                          <label>Documento 4</label><br><br>
                          <i class="fa fa-file-pdf-o fa-4x" style="color:blue"></i><br><br>
                          <span><b>Usuário: </b>DAI_CORREA</span>
                        </center>
                      </div>

                      <div class="col-md-12"><br></div>

                      <div class="col-md-6">
                        <label>Descrição Documento</label>
                        <div class="form-group input-group">                
                          <span class="input-group-addon"><i class="fa fa-commenting"></i></span>
                          <input class="form-control form-control-lg" type="text" placeholder="Descrição">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label>Anexar</label>
                        <div class="form-group input-group">                
                          <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
                          <input  type="file" id="input03">
                        </div>
                      </div>  

                      <div class="col-md-12">
                        <label>Tags</label>
                        <div class="form-group input-group">                                            
                          <input type="text" value="" data-role="tagsinput">
                        </div>
                      </div>                            

                    </div>

                    <div class="modal-footer ml-auto">                          
                      <div class="col-md-12">                                                    
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>


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

  <script type="text/javascript">
    $(function() {
      $('input[name="daterange"]').daterangepicker({
       locale: {
        format: 'DD-MM-YYYY'
      },
    });
    });
  </script>

  <script type="text/javascript">      

    $('#input03').filestyle({
      badge: true,
        // input : false,
        btnClass : 'btn-primary',
        htmlIcon : '<span class="oi oi-folder"></span> '
      });

    $('#countRed').on('click', function () {
      $('#input03').filestyle('badgeName', 'badge-danger');
    })

    $('#countToggle').on('click', function () {
      if ($('#input03').filestyle('badge'))
        $('#input03').filestyle('badge', false);
      else
        $('#input03').filestyle('badge', true);
    })
  </script>



  <!-- Chama o rodapé -->
  <?php $this->load->view('footer')?>