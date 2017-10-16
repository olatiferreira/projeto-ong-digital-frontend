<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}

	public function index(){
		
		$data = array();
		
		//Consumindo API
		$qtdeUser = 'http://localhost:9000/v1/hapies6referencia/users?limit=50';
		$qtdeChildren = 'http://localhost:9000/v1/hapies6referencia/children?limit=50';

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
		// $data['qtdeUser'] = $json->records[0]->name;
		// $data['qtdeChildren'] = $json->records[0]->name;


		$this->load->view('home', $data);
	}
	
}