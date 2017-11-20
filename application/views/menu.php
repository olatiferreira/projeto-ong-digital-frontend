<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('index.php/home')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ONG</b> Digital</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ONG</b> Digital</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('assets/img/logo.jpg')?>" class="user-image" alt="User Image">        

              <span class="hidden-xs">ONG Digital</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">          
                <img src="<?= base_url('assets/img/logo.jpg')?>" class="user-image" alt="User Image">

                <p>
                  ONG Digital
                  <small><u><b>Administrador</b></u></small>
                  <small>Membro desde 2017</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('index.php/login')?>" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">        
          <img src="<?= base_url('assets/img/logo.jpg')?>" class="user-image" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ONG Digital</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de Navegação</li>
        <li>
          <a href="<?= base_url('index.php/home')?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>            
          </a>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>Crianças</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('index.php/children/register')?>"><i class="fa fa-plus"></i> Cadastrar</a></li>
            <li><a href="<?= base_url('index.php/children/search')?>"><i class="fa fa-search"></i> Buscar</a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-stethoscope"></i>
            <span>Situação</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('index.php/childrenSituation/register')?>"><i class="fa fa-plus"></i> Cadastrar</a></li>
            <li><a href="<?= base_url('index.php/childrenSituation/search')?>"><i class="fa fa-search"></i> Buscar</a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Usuários</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('index.php/user/register')?>"><i class="fa fa-plus"></i> Cadastrar</a></li>
            <li><a href="<?= base_url('index.php/user/search')?>"><i class="fa fa-search"></i> Buscar</a></li>            
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>