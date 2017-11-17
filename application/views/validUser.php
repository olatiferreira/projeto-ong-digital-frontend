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
        }).then(function() {
          location.href = '../../index.php';
        });
      };
      usuarioError();
    </script>
