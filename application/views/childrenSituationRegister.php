<?php $this->load->view('header')?>
<?php $this->load->view('safety')?>
<?php $this->load->view('menu')?>  

<body class="hold-transition skin-blue sidebar-mini">  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastro de Situação de Crianças
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('index.php/dashboard')?>"><i class="fa fa-home"></i> Início</a></li>
        <li><a href="#">Situação</a></li>
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

              <?php if(isset($childrenSituations[0]->id)) {?>
              <form name="frmUpdateChildrenSituation" method="POST" action="<?=base_url('index.php/childrenSituation/updateAPI/'.$childrenSituations[0]->id.'')?>">
                <input type="hidden" name="action" value="edit"/>
                <?php } else {?>
                <form name="frmRegisterChildrenSituation" action="<?= base_url('index.php/childrenSituation/registerAPI')?>" method="POST">
                  <input type="hidden" name="action" value="insert"/>
                  <?php } ?>

                  <div class="col-md-12">
                    <label>Descrição</label>
                    <div class="form-group input-group">                
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input class="form-control form-control-lg" type="text" placeholder="Descrição" id="description" name="description" required>
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

        <?php if(isset($childrenSituations)) {                        
          echo"
          <script>        
          document.getElementById('description').value = '".$childrenSituations[0]->description."';            
          </script>";
        } ?>

      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>

<script type="text/javascript">
  function situationSuccess(){
    swal("Situação cadastrada com sucesso!", "", "success")
  };  
  function situationError(){
    swal(
      'Algo deu errado!',
      'Já existe esta situação, verifique...',
      'error'
      )
  };  

  // function dateConvert(){  
  //   var birth = $('#birth').val();    
  //   var birthNew = birth.substring(6, 10) + '-' + birth.substring(3, 5) + '-' + birth.substring(0, 2);  
  //   $("#birthNew").val(birthNew);
  // };
</script>

<?php 
if(isset($msg)){
  if ($msg == 'ok'){
    echo "<script>situationSuccess();</script>";  
  } else if ($msg == 'error') {
    if ($statusCode == '409'){
      echo "<script>situationError();</script>";
    }    
  }
}
?>

<!-- Chama o rodapé -->
<?php $this->load->view('footer')?>