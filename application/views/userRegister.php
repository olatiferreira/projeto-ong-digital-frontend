<?php $this->load->view('header')?>
<?php $this->load->view('safety')?>
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
        <li><a href="<?= base_url('index.php/home')?>"><i class="fa fa-home"></i> Início</a></li>
        <li><a href="#">Usuários</a></li>
        <?php if(isset($users[0]->id)) {?>
        <li class="active">Editar</li>
        <?php } else {?>
        <li class="active">Cadastrar</li>
        <?php } ?>
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

              <?php if(isset($users[0]->id)) {?>
              <form name = "frmUpdateUser" method="POST" action="<?=base_url('index.php/user/updateAPI/'.$users[0]->id.'')?>">
                <input type="hidden" name="action" value="edit"/>
                <?php } else {?>
                <form name="frmRegisterUser" action="<?= base_url('index.php/user/registerAPI')?>" method="POST">
                  <input type="hidden" name="action" value="insert"/>
                  <?php } ?>

                  <div class="col-md-6">
                    <label>Nome</label>
                    <div class="form-group input-group">                
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input class="form-control form-control-lg" type="text" placeholder="Nome" id="name" name="name" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label>Usuário</label>
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-users"></i></span>                
                      <input class="form-control form-control-lg" type="text" placeholder="Usuário" id="user" name="user" required>
                    </div>
                  </div>

                  <?php if(isset($users[0]->id)) {?>                  
                  <?php } else {?>
                  <div class="col-md-3">
                    <label>Senha</label>
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>                
                      <input class="form-control form-control-lg" type="password" user="password" placeholder="Senha" id="pass" name="pass" required>
                    </div>
                  </div>
                  <?php } ?>    

                  <?php if(isset($users[0]->id)) {?>                   
                  <div class="col-md-3">
                    <?php } else {?>
                    <div class="col-md-2">
                      <?php } ?>                  
                      <label>Função</label>
                      <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-cogs"></i></span>                
                        <select class="form-control form-control-lg" id="func" name="func" required>
                         <option value="" disabled selected>Função</option>
                         <option value="voluntario">Voluntária</option>
                         <option value="ajudante">Ajudante</option>
                       </select>
                     </div>
                   </div>    

                   <div class="col-md-2">
                    <label>Privilégio</label>
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-check"></i></span>                
                      <select class="form-control form-control-lg" id="privilegy" name="privilegy" required>
                       <option value="" disabled selected>Privilégio</option>
                       <option value="adm">Administrador</option>
                       <option value="user">Usuário</option>
                     </select>
                   </div>
                 </div>

                 <div class="col-md-2">
                  <label>Status</label>
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>                
                    <select class="form-control form-control-lg" id="status" name="status" required>
                     <option value="" disabled selected>Status</option>
                     <option value="true">Ativo</option>
                     <option value="false">Inativo</option>
                   </select>
                 </div>
               </div>

               <?php if(isset($users[0]->id)) {?>
               <div class="col-md-offset-2 col-md-6">
                <div class="form-group">
                  <label></label>              
                  <button type="reset" class="form-control form-control-lg btn btn-warning btn-md">
                    <i class="fa fa-refresh left"></i> Resetar Senha
                  </button>                
                </div>
              </div>
              <?php } ?>             


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

          <?php if(isset($users)) {
            echo"
            <script>        
            document.getElementById('name').value = '".$users[0]->name."';
            document.getElementById('user').value = '".$users[0]->user."';                
            document.getElementById('func').value = '".$users[0]->func."';
            document.getElementById('privilegy').value = '".$users[0]->privilegy."';
            document.getElementById('status').value = '".$users[0]->status."';          
            </script>";
          } ?>

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
  // else{
  //   echo "<script>
  //   swal(
  //     'Oops...',
  //     'Ocorreu um erro!',
  //     'error'
  //   );
  //   </script>";
  // }
}
?>

<!-- Alert Cliente Cadastrado -->
<script type="text/javascript">
  function userSuccess(){
    swal("Usuário cadastrado com sucesso!", "", "success")
  };  
  function userError(){
    swal(
      'Algo deu errado!',
      'Já existe este usuário, verifique...',
      'error'
      )
  };  
</script>
<?php 
if(isset($msg)){
  if ($msg == 'ok'){
    echo "<script>userSuccess();</script>";  
  } else if ($msg == 'error') {
    if ($statusCode == '409'){
      echo "<script>userError();</script>";
    }    
  }
}
?>

<!-- Chama o rodapé -->
<?php $this->load->view('footer')?>