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
		
	}

	public function search(){
				
		$this->load->view('childrenSearch');
		
	}
	
}