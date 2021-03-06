<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}

	public function index(){		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/users';

		$options = array(
			'http'=>array(
				'method'=>'GET',
				'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'				
			)
		);

		$context = stream_context_create($options);		
		$file_content = file_get_contents($url, false, $context);		
		$json = json_decode($file_content);
		$data['users'] = $json->records;

		$data['statusCode'] = $http_response_header[0];			

		$this->load->view('userSearch', $data);
		
	}	

	public function register(){				
		$this->load->view('userRegister');		
	}

	public function registerAPI(){

		$data = array(
			'name' => $this->input->post('name'),
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass'),
			'func' => $this->input->post('func'),
			'privilegy' => $this->input->post('privilegy'),
			'status' => $this->input->post('status'),
			'entryDate' => date("Y-m-d")
		);			
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/users';

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
			$data['msg'] = 'error';
			$data['statusCode'] = substr($http_response_header[0], 9, -9);		
			$this->load->view('userRegister', $data);
		} else{
			$data['msg'] = 'ok';
			$response = json_decode( $result );
			$this->load->view('userRegister', $data);
		}		
	}

	public function search(){				
		$this->load->view('userSearch');		
	}

	public function delete($id){		
		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/users/'.$id;

		$options = array(
			'http'=>array(
				'method'=>'DELETE',
				'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'
			)
		);

		$context = stream_context_create($options);
		$file_content = file_get_contents($url, false, $context);
		$json = json_decode($file_content);		

		$this->load->view('userSearch', $data);
		
	}

	public function updateSearch($id){		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/users/'.$id;

		$options = array(
			'http'=>array(
				'method'=>'GET',
				'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'				
			)
		);

		$context = stream_context_create($options);		
		$file_content = file_get_contents($url, false, $context);		
		$json = json_decode($file_content);
		$data['users'] = $json->records;

		$data['statusCode'] = $http_response_header[0];			

		$this->load->view('userRegister', $data);
	}

	public function updateAPI($id){

		$data = array(
			'name' => $this->input->post('name'),
			'user' => $this->input->post('user'),
			'pass' => "123",
			'func' => $this->input->post('func'),
			'privilegy' => $this->input->post('privilegy'),
			'status' => $this->input->post('status')
			// 'entryDate' => date("Y-m-d")
		);			
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/users/'.$id;

		//sending request (according to prosperworks documentation):
    // use key 'http' even if you send the request to https://...
		$options = array(
			'http' => array(
				'method'  => 'PUT',
				'header'  => "Accept: application/json\r\n"."Content-Type: application/json\r\n".
				"Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s\r\n",
				'content' => json_encode($data)
			)
		);  		
		
		$context  = stream_context_create( $options );
		$result = file_get_contents( $url, false, $context );	
		$response = json_decode( $result );
		// var_dump($options);
		if ($result === FALSE) { 
			$data['msg'] = 'error';
			$data['statusCode'] = substr($http_response_header[0], 9, -9);		
			$this->load->view('userRegister', $data);
		} else{
			$data['msg'] = 'updateOk';
			$response = json_decode( $result );
			$this->load->view('userSearch', $data);
		}		
	}
	
}