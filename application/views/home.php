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
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php echo "<h3>".$qtdeChildren."</h3>"; ?>
                  <!-- <h3>{{11}}</h3> -->

                  <p>Crianças</p>
                </div>
                <div class="icon">
                  <i class="fa fa-child"></i>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <?php echo "<h3>".$qtdeUser."</h3>"; ?>
                  <!-- <h3>{{5}}</h3> -->

                  <p>Usuários</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </section>
      </div>




      <!-- Chama o rodapé -->
      <?php $this->load->view('footer')?>