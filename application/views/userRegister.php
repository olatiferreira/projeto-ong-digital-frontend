<!-- Referência cabeçalho -->
<?php $this->load->view('header')?>
<!-- Referência Menu -->
<?php $this->load->view('menu')?>  

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

              <form>
                <div class="col-md-12 centered">
                  <div class="col-md-offset-3 col-md-2">
                    <input class="form-control form-control-lg" type="text" placeholder="Nome">
                  </div>

                  <div class="col-md-2">
                    <select class="form-control form-control-lg">
                     <option value="" disabled selected>Status</option>
                     <option value="true">Ativo</option>
                     <option value="false">Inativo</option>
                   </select>
                 </div>
               </div>     


               <div class="row"><br><br>
                <div class="col-md-12 centered">
                  <div class="col-md-12"></div>
                  <div class="col-md-offset-3 col-md-2" align="right">

                    <button type="reset" class="btn btn-danger btn-md">
                      <i class="fa fa-close left"></i> Cancelar
                    </button>

                  </div>

                  <div class="col-md-2">
                    <a href="<?= base_url('index.php/user')?>" class="btn btn-success btn-md" role="button" aria-disabled="true">
                      <i class="fa fa-check" aria-hidden="true"></i> Gravar
                    </a>
                  </div>
                </div>
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




<!-- Chama o rodapé -->
<?php $this->load->view('footer')?>