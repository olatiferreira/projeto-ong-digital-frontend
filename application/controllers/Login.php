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
		
		$this->load->model("Login_model");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$usuario = $this->Login_model->authenticate($username,$password);

		if(($usuario) && ($usuario[status] == 'true')){			
			$this->session->set_userdata(array('name' => 'session', 'username' => $username, 'codUser' => $usuario[coduser]));
			$dados = array("mensagem" => "Logado com sucesso!");				

			$data = array();

			//Consumindo API
			$qtdeUser = 'http://localhost:9000/v1/users';
			$qtdeChildren = 'http://localhost:9000/v1/children';

			$options = array(
				'http'=>array(
					'method'=>'GET',
					'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'
				)
			);

			$context = stream_context_create($options);
			$contentUser = file_get_contents($qtdeUser, false, $context);
			$contentChildren = file_get_contents($qtdeChildren, false, $context);
			$jsonUser = json_decode($contentUser);
			$jsonChildren = json_decode($contentChildren);
			$data['qtdeUser'] = $jsonUser->meta->recordCount;
			$data['qtdeChildren'] = $jsonChildren->meta->recordCount;				

			$this->load->view('home', $data);

		}else{
			$dados = array("mensagem" => "Não foi possível fazer o Login!");                        
			$this->load->view("validUser", $dados);
		}		
	}	
}