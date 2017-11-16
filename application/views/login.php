<!-- Referência cabeçalho -->
<?php $this->load->view('header')?>


<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">    
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <h1 align="center"><b>ONG </b>Digital</h1>
      <p class="login-box-msg">
        <img width="40%" src="<?= base_url('assets/img/logo.png')?>">    

        <br>
      </p>

      <form action="<?= base_url('index.php/login/signIn')?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Usuário" id="username" name="username" required>
          <span class="fa fa-user-circle-o form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Senha" id="password" name="password" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">


            
              <div class="checkbox checkbox-primary">
                <input type="checkbox" name="radio4" id="radio1" value="option1" checked>
                <label for="radio1">
                  Lembrar-me
                </label>
              </div>            
            


          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>




    </div>
    <!-- /.login-box-body -->
  </div>

</body>
</html>
