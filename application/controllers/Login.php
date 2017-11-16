<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}

	public function index(){	
		$this->load->view('login');		
	}	

	public function signIn(){	
		// var_dump("?");
		$teste = $this->db->query("SELECT * FROM usuario;")->result();
		var_dump($teste);
		// $this->load->model("Login");
		// $username = $this->input->post("username");
  //       $password = $this->input->post("password");
  //       $usuario = $this->Login->authenticate($username,$password);

  //       // sessão
  //       //$this->session->set_userdata(array('nome' => 'click2call', 'usuario' => $username));
 

		//  if($usuario){
		//  	// $parametro = $this->SignIn_model->parametro();
  //           $this->session->set_userdata(array('nome' => 'session', 'username' => $username, 'parametro' => $parametro['precoPizza'][0]->valor, 'data_movimento' => $parametro['data_movimento'][0]->valor));
  //           $dados = array("mensagem" => "Logado com sucesso!");
  //       }else{
  //           $dados = array("mensagem" => "Não foi possível fazer o Login!");                        
  //       }
 
  //       $this->load->view("validUser", $dados);        
    }
	
}