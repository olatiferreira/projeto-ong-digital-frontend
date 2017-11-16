<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Children extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}

	public function index(){	

		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/children';

		$options = array(
			'http'=>array(
				'method'=>'GET',
				'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'				
			)
		);

		$context = stream_context_create($options);		
		$file_content = file_get_contents($url, false, $context);		
		$json = json_decode($file_content);
		$data['childrens'] = $json->records;

		$data['statusCode'] = $http_response_header[0];
		// var_dump($data['childrens'][1]->childSituation->description); die;

		$this->load->view('childrenSearch', $data);
		
	}

	public function register(){

		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/childrenSituation';

		$options = array(
			'http'=>array(
				'method'=>'GET',
				'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'				
			)
		);

		$context = stream_context_create($options);		
		$file_content = file_get_contents($url, false, $context);		
		$json = json_decode($file_content);
		$data['childrenSituations'] = $json->records;

		$data['statusCode'] = $http_response_header[0];		

		$this->load->view('childrenRegister', $data);		
	}

	public function registerAPI(){

		$data = array(
			'name' => $this->input->post('name'),
			'cpf' => $this->input->post('cpf'),
			'rg' => $this->input->post('rg'),
			'color' => $this->input->post('color'),
			'sex' => $this->input->post('sex'),
			'birth' => date("Y-m-d"),
			'school' => $this->input->post('school'),
			'responsibleCpf' => $this->input->post('responsibleCpf'),
			'responsibleName' => $this->input->post('responsibleName'),
			'responsiblePhone' => $this->input->post('responsiblePhone'),
			'entryDate' => date("Y-m-d")
		);		

		$data['status'] = array(
			'id' => intval($this->input->post('situation')),
		);

		$data['user'] = array(
			'id' => 1,
		);		
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/children';

		//sending request (according to prosperworks documentation):
    // use key 'http' even if you send the request to https://...
		$options = array(
			'http' => array(
				'method'  => 'POST',
				'header'  => "Accept: application/json\r\n"."Content-Type: application/json\r\n".
				"Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s\r\n",
				'content' => json_encode($data)
			)
		);  
		
		$context  = stream_context_create( $options );
		$result = file_get_contents( $url, false, $context );	
		if ($result === FALSE) { 			
			var_dump("erro");
			$data['msg'] = 'error';
			$data['statusCode'] = substr($http_response_header[0], 9, -9);		
			$this->load->view('childrenRegister', $data);
		} else{	
			var_dump("cheguei");
			$data['msg'] = 'ok';
			$response = json_decode( $result );
			$this->load->view('childrenRegister', $data);
		}		
	}

	public function search(){
				
		$this->load->view('childrenSearch');
		
	}
	
}