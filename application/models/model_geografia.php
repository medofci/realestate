<?php

class Model_Geografia extends CI_Model{
	
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
	
	public function obtenerPaises(){
		
		$query = $this->db->query("SELECT * FROM countries");
		
		return $query->result_array();

	}
	
	public function obtenerProvincias(){
		
		$query = $this->db->query("SELECT * FROM provinces");
		
		return $query->result_array();

	}
	
	public function obtenerSectores(){
		
		$query = $this->db->query("SELECT DISTINCT sector_name, sector_id FROM sectors GROUP BY sector_name LIMIT 300");
		
		return $query->result_array();

	}
	
}