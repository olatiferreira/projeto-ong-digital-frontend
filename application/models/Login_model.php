<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	public function authenticate($username, $password){
        $this->db->select('coduser, status');
        $this->db->where("login", $username);
        $this->db->where("senha", hash('sha256', $password));
        $usuario = $this->db->get("usuario")->row_array();
        
        return $usuario;
    }    
}
