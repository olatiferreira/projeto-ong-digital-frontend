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
		$url = 'http://localhost:9000/v1/hapies6referencia/users?limit=50';

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

		$this->load->view('childrenSearch', $data);
		
	}	
	
}