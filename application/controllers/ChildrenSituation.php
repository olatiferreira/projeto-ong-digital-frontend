<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChildrenSituation extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}	

	public function index(){	

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
		// var_dump($data['childrens'][1]->childSituation->description); die;

		$this->load->view('childrenSituationSearch', $data);
		
	}

	public function register(){

		// $data = array();
		
		// //Consumindo API
		// $url = 'http://localhost:9000/v1/childrenSituation';

		// $options = array(
		// 	'http'=>array(
		// 		'method'=>'GET',
		// 		'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'				
		// 	)
		// );

		// $context = stream_context_create($options);		
		// $file_content = file_get_contents($url, false, $context);		
		// $json = json_decode($file_content);
		// $data['childrenSituations'] = $json->records;

		// $data['statusCode'] = $http_response_header[0];		

		$this->load->view('childrenSituationRegister');		
	}

	public function registerAPI(){		
		$data = array(
			'description' => $this->input->post('description')			
		);			
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/childrenSituation';

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
			$this->load->view('childrenSituationRegister', $data);
		} else{				
			$data['msg'] = 'ok';
			$response = json_decode( $result );
			$this->load->view('childrenSituationRegister', $data);
		}		
	}

	public function search(){				
		$this->load->view('childrenSituationSearch');		
	}

	public function delete($id){		
		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/childrenSituation/'.$id;

		$options = array(
			'http'=>array(
				'method'=>'DELETE',
				'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'
			)
		);

		$context = stream_context_create($options);
		$file_content = file_get_contents($url, false, $context);
		$json = json_decode($file_content);		

		$this->load->view('childrenSituationSearch', $data);
		
	}

	public function updateSearch($id){		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/childrenSituation/'.$id;

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

		$this->load->view('childrenSituationRegister', $data);
	}

	public function updateAPI($id){		

		$data = array(
			'description' => $this->input->post('description')
		);		
		
		//Consumindo API
		$url = 'http://localhost:9000/v1/childrenSituation/'.$id;

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
			$this->load->view('childrenSituationRegister', $data);
		} else{
			$data['msg'] = 'updateOk';
			$response = json_decode( $result );
			$this->load->view('childrenSituationSearch', $data);
		}		
	}
	
}