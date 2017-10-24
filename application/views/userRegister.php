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
        Cadastro de Usuário
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('index.php/dashboard')?>"><i class="fa fa-home"></i> Início</a></li>
        <li><a href="#">Usuários</a></li>
        <li class="active">Cadastrar</li>
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

              <form>

                <div class="col-md-offset-3 col-md-3">
                  <label>Nome</label>
                  <div class="form-group input-group">                
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control form-control-lg" type="text" placeholder="Nome">
                  </div>
                </div>
                

                <div class="col-md-3">
                  <label>Status</label>
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>                
                    <select class="form-control form-control-lg">
                     <option value="" disabled selected>Status</option>
                     <option value="true">Ativo</option>
                     <option value="false">Inativo</option>
                   </select>
                 </div>
               </div>
               
               <div class="col-md-offset-3 col-md-3">
                <label>Função</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-cogs"></i></span>                
                  <select class="form-control form-control-lg">
                   <option value="" disabled selected>Função</option>
                   <option value="voluntaria">Voluntária</option>
                 </select>
               </div>
             </div>             

             
             

             <div class="col-md-3">
              <label>Usuário</label>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>                
                <input class="form-control form-control-lg" type="text" id="user" placeholder="Usuário">
              </div>
            </div>

            <div class="col-md-offset-3 col-md-3">
              <label>Senha</label>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>                
                <input class="form-control form-control-lg" type="password" user="password" placeholder="Senha">
              </div>
            </div>


            <div class="col-md-3">
              <div class="form-group">

                <label></label>              
                <button type="reset" class="btn btn-warning btn-md form-control form-control-lg">

                  <i class="fa fa-refresh left"></i> Resetar Senha
                </button>
                
              </div>
            </div>

            
            <div class="col-md-12 centered">
              <center>



               <div class="col-md-12"><br>
                <center>


                  <button type="reset" class="btn btn-danger btn-md">
                    <i class="fa fa-close left"></i> Cancelar
                  </button>


                  <a href="<?= base_url('index.php/user')?>" class="btn btn-success btn-md" role="button" aria-disabled="true">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Gravar
                  </a>

                </center>
              </div>

            </form>
            

            
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