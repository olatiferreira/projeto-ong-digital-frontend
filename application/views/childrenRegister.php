<?php $this->load->view('header')?>
<?php $this->load->view('safety')?>
<?php $this->load->view('menu')?>  

<body class="hold-transition skin-blue sidebar-mini">  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastro de Crianças
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('index.php/dashboard')?>"><i class="fa fa-home"></i> Início</a></li>
        <li><a href="#">Crianças</a></li>
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

              <form action="<?= base_url('index.php/children/registerAPI')?>" method="POST">

                <div class="col-md-6">
                  <label>Nome</label>
                  <div class="form-group input-group">                
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control form-control-lg" type="text" placeholder="Nome" id="name" name="name" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <label>CPF</label>
                  <div class="form-group input-group">                
                    <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
                    <input class="form-control form-control-lg" type="text" placeholder="CPF" id="cpf" name="cpf" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <label>RG</label>
                  <div class="form-group input-group">                
                    <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
                    <input class="form-control form-control-lg" type="text" placeholder="RG" id="rg" name="rg" required>
                  </div>
                </div>  

                <div class="col-md-3">
                  <label>Data Nascimento</label>
                  <div class="input-group date" data-provide="datepicker">
                    <div class="input-group-addon">
                      <span class="fa fa-calendar"></span>
                    </div>
                    <input type="text" class="form-control" id="birth" name="birth" required>                  
                  </div>
                </div>  

                <div class="col-md-3">
                  <label>Sexo</label>
                  <div class="form-group input-group">                
                    <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
                    <select class="form-control form-control-lg" id="sex" name="sex" required>
                     <option value="" disabled selected>Sexo</option>
                     <option value="masculino">Masculino</option>
                     <option value="feminino">Feminino</option>                   
                   </select>
                 </div>
               </div>          

               <div class="col-md-6">
                <label>Escola Atual</label>
                <div class="form-group input-group">                
                  <span class="input-group-addon"><i class="fa fa-university"></i></span>
                  <input class="form-control form-control-lg" type="text" placeholder="Escola Atual" id="school" name="school" required>
                </div>
              </div>                                            

              <div class="col-md-6">
                <label>Cor</label>
                <div class="form-group input-group">                
                  <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
                  <select class="form-control form-control-lg" id="color" name="color" required>
                   <option value="" disabled selected>Cor</option>
                   <option value="branca">Branca</option>
                   <option value="parda">Parda</option>
                   <option value="negra">Negra</option>
                 </select>
               </div>
             </div>
             
             <div class="col-md-6">
              <label>Situação</label>
              <div class="form-group input-group">                
                <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                <select class="form-control form-control-lg" id="situation" name="situation" required>
                 <option value="" disabled selected>Situação</option>
                 <?php 
                 for ($i=0; $i < count($childrenSituations); $i++) { 
                  echo "<option value=".$childrenSituations[$i]->id.">".$childrenSituations[$i]->id." - ".$childrenSituations[$i]->description."</option>";
                }                
                ?>
              </select>
            </div>
          </div>

          <h5><u><b>Dados do Reponsável</b></u></h5>

          <div class="col-md-6">
            <label>Nome</label>
            <div class="form-group input-group">                
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control form-control-lg" type="text" placeholder="Nome" id="responsibleName" name="responsibleName">
            </div>
          </div>

          <div class="col-md-3">
            <label>CPF</label>
            <div class="form-group input-group">                
              <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
              <input class="form-control form-control-lg" type="text" placeholder="CPF" id="responsibleCpf" name="responsibleCpf">
            </div>
          </div>

          <div class="col-md-3">
            <label>Telefone</label>
            <div class="form-group input-group">                
              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
              <input class="form-control form-control-lg" type="text" placeholder="Telefone" id="responsiblePhone" name="responsiblePhone">
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
</section>
<!-- /.content -->
</div>

<script type="text/javascript">
  function childrenSuccess(){
    swal("Criança cadastrada com sucesso!", "", "success")
  };  
  function childrenError(){
    swal(
      'Algo deu errado!',
      'Já existe esta criança, verifique...',
      'error'
      )
  };  
</script>
<?php 
if(isset($msg)){
  if ($msg == 'ok'){
    echo "<script>childrenSuccess();</script>";  
  } else if ($msg == 'error') {
    if ($statusCode == '409'){
      echo "<script>childrenError();</script>";
    }    
  }
}
?>

<!-- Chama o rodapé -->
<?php $this->load->view('footer')?>