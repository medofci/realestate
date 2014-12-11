<?php

class Model_Login extends CI_Model{
	
	public function __construct(){
		
		parent::__construct();
		$this->load->database();
		
	}
	
	/**
	 * 
	 * Funcion login para verificar si el usuario y la contrasena existe en la tabla users
	 * @param string $username 
	 * @param string $password
	 * @return boolean|array
	 */
	
	public function login($email, $password){
		
		$md5_password = md5($password);
		
		$query = $this->db->query("SELECT * FROM users WHERE email = '$email' AND password = '$md5_password'");
		
		if ($query->num_rows() > 0){
			
			$this->db->query("UPDATE users SET last_login = NOW() WHERE email = '$email'");
			
			return $query->result_array();
			
		}else{
			
			return false;
		}
		
	}
	
}
