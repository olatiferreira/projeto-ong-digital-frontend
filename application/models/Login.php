<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	
	public function authenticate($username, $password){
        var_dump($this->db->query("SELECT * FROM usuario;")->result());
        $this->db->where("login", $username);
        $this->db->where("password", md5($password));
        $usuario = $this->db->get("usuario")->row_array();
        var_dump($usuario);
    }

    public function parametro(){
		$parametro['precoPizza'] = $this->db->query("SELECT valor FROM tb_parametro WHERE nome = 'PRECO_PIZZA';")->result();
        $parametro['data_movimento'] = $this->db->query("SELECT valor FROM tb_parametro WHERE nome LIKE 'DATA_MOVIMENTO';")->result();
        return $parametro;
    }
}
