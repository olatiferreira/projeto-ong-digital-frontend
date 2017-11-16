<!-- Valida usuario e senha -->
<?php
if ($mensagem == 'Logado com sucesso!') {
    //redirect('home');
  $this->load->view("home");
}
  else{      
    ?>
    <p></p>
    <?php $this->load->view('header')?>
    <script type="text/javascript">
      function usuarioError(){
        swal({
          title: "Usuário ou senha incorretos!",
          text: "Tente novamente",
          type: "error",
          closeOnConfirm: false,
          closeOnCancel: false,
        },
        function(){            
          window.location.replace("../../index.php");
        });
      };
      usuarioError();
    </script>

  <?php
  }
  ?>