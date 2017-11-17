<!-- Alert Sessão Expirada -->
<script type="text/javascript">
  function sessionExpired(){
    swal({
      title: "Sessão expirada!",
      text: "Faça o login para acessar a página...",
      type: "error",
      closeOnConfirm: false,
      closeOnCancel: false,
    }).then(function() {
      location.href = '../../index.php';
    });
    
  };
</script>

<?php  
$this->session->username;
if($this->session->userdata('username')) {
      //echo 'do_something';
} 
else{        	
 $this->session->sess_destroy();	    
		//redirect('login');     
 ?>	
 <body>	
  <script type="text/javascript">			
   sessionExpired();				
 </script>
</body>
</html>
<?php
exit;
}
?>