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

              <form action="<?= base_url('index.php/user/registerAPI')?>" method="POST">

                <div class="col-md-6">
                  <label>Nome</label>
                  <div class="form-group input-group">                
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control form-control-lg" type="text" placeholder="Nome" id="name" name="name">
                  </div>
                </div>

                <div class="col-md-3">
                  <label>Usuário</label>
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>                
                    <input class="form-control form-control-lg" type="text" placeholder="Usuário" id="user" name="user">
                  </div>
                </div>

                <div class="col-md-3">
                  <label>Senha</label>
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>                
                    <input class="form-control form-control-lg" type="password" user="password" placeholder="Senha" id="pass" name="pass">
                  </div>
                </div>

                <div class="col-md-2">
                  <label>Função</label>
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-cogs"></i></span>                
                    <select class="form-control form-control-lg" id="func" name="func">
                     <option value="" disabled selected>Função</option>
                     <option value="voluntaria">Voluntária</option>
                     <option value="ajudante">Voluntária</option>
                   </select>
                 </div>
               </div>    

               <div class="col-md-2">
                <label>Privilégio</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-check"></i></span>                
                  <select class="form-control form-control-lg" id="privilegy" name="privilegy">
                   <option value="" disabled selected>Privilégio</option>
                   <option value="adm">Administrador</option>
                   <option value="adm">Usuário</option>
                 </select>
               </div>
             </div>

             <div class="col-md-2">
              <label>Status</label>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>                
                <select class="form-control form-control-lg" id="status" name="status">
                 <option value="" disabled selected>Status</option>
                 <option value="true">Ativo</option>
                 <option value="false">Inativo</option>
               </select>
             </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
              <label></label>              
              <button type="reset" class="form-control form-control-lg btn btn-warning btn-md">
                <i class="fa fa-refresh left"></i> Resetar Senha
              </button>                
            </div>
          </div>

          <div class="col-md-12"><br>              
           <center>
            <button type="reset" class="btn btn-danger btn-md col-md-offset-5 col-md-1">
              <i class="fa fa-close left"></i> Cancelar
            </button>
            <button type="submit" class="btn btn-success btn-md col-md-1" role="button" aria-disabled="true">
              <i class="fa fa-floppy-o" aria-hidden="true"></i> Gravar
            </button>
          </center>
        </div>    

      </form>

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

<!-- Alert Cliente Cadastrado -->
<script type="text/javascript">
  function userSuccess(){
    swal("Usuário cadastrado com sucesso!", "", "success")
  };  
</script>
<?php 
if(isset($msg)){
  echo "<script>userSuccess();</script>";
}
?>

<!-- Chama o rodapé -->
<?php $this->load->view('footer')?>