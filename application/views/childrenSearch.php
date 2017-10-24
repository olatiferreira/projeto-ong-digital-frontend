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

              <div class="col-md-offset-3 col-md-6">
                <label>Busca</label>
                <div class="form-group input-group">                
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input class="form-control form-control-lg" type="text" placeholder="Busca">
                </div>
              </div>

              <div class="col-md-offset-3 col-md-3">
                <label>Data Nascimento</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input class="form-control form-control-lg" type="text" name="daterange" value=""/>
                </div>
              </div>

              <div class="col-md-3">
                <label>Data Entrada ONG</label>
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
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th data-field="id"><u>Código</u></th>
                      <th data-field="name"><u>Nome</th>
                        <th data-field="rg"><u>RG</u></th>
                        <th data-field="cpf"><u>CPF</u></th>
                        <th data-field="color"><u>cor</u></th>
                        <th data-field="sex"><u>Sexo</u></th>
                        <th data-field="birth"><u>Aniversário</u></th>
                        <th data-field="school"><u>Escola</u></th>
                        <th data-field="responsibleCpf"><u>CPF Resp.</u></th>
                        <th data-field="responsibleName"><u>Nome Resp.</u></th>
                        <th data-field="responsiblePhone"><u>Tel Resp.</u></th>
                        <th data-field="entryDate"><u>Data Entrada</u></th>
                        <th data-field="description"><u>Situação</u></th>
                        <th data-field="action"><u>Ações</u></th>
                      </tr>
                    </thead>
                    <tbody>                                
                      <tr>
                        <td>1</td>
                        <td>Maria das Dores</td>
                        <td>45.759.004-x</td>
                        <td>431.462.388-88</td>
                        <td>Branco</td>
                        <td>Masculino</td>                      
                        <td>27/01/1996</td>                      
                        <td>Antonio Fachada</td>                      
                        <td>45.759.004-x</td>                      
                        <td>Robson Luiz</td>                      
                        <td>(16)99213-5689</td>                      
                        <td>23/12/2016</td>                      
                        <td><span class='label label-success'>Ativo</span></td>                    
                        <td>
                          <a href="#" data-toggle="modal" data-target="#exampleModal">
                            <i class='fa fa-search' style='color: green'></i>
                          </a>|

                          <a href=''>
                            <i class='fa fa-pencil'></i>
                          </a>| 

                          <a href=".base_url('index.php/user/delete/'.$user->id).">
                            <i class='fa fa-trash' style='color: red'></i>
                          </a>                      

                        </td></tr>
                        
                      </tbody>
                    </table>
                  </div>
                  
                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Documentos</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <div class="col-md-12">
                            <div class="col-md-8 ml-auto">
                              <label>Documento 1</label>
                              <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('assets/ong_digital.pdf')?>"></iframe>
                              </div>
                            </div>
                            
                            <div class="col-md-4 ml-auto">
                              <span><b>Usuário: </b></span>
                              <span>DAI_CORREA</span>                            
                            </div>                          
                            <div class="col-md-4">
                              <button type="button" class="btn btn-success">Visualizar</button>
                            </div>                                                        
                          </div>

                          <div class="col-md-12">                            
                            <hr class="style2">
                          </div>

                          <div class="col-md-12">
                            <div class="col-md-8 ml-auto">
                              <label>Documento 2</label>
                              <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('assets/ong_digital.pdf')?>"></iframe>
                              </div>
                            </div>
                            
                            <div class="col-md-4 ml-auto">
                              <span><b>Usuário: </b></span>
                              <span>DAI_CORREA</span>                            
                            </div>                          
                            <div class="col-md-4">
                              <button type="button" class="btn btn-success">Visualizar</button>
                            </div>                            
                          </div>

                          <div class="col-md-12">                            
                            <hr class="style2">
                          </div>

                        </div>
                        <div class="modal-footer ml-auto">                          
                          <div class="col-md-12">                          
                            <input style="text-align: right;" type="file" id="input03">
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