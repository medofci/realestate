<?php

class Model_Usuarios extends CI_Model{
	
	function __construct(){
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function insertarUsuario($campos){
		
		if($this->db->insert('users', $campos)){
			return true;
		}else{
			return false;
		}
	}
	
   //OBTENER TOTAL DE USUARIOS(AGENTES)
	public function obtenerTotalAgentes(){
		
		$query = $this->db->query("SELECT COUNT(*) AS 'total' FROM users WHERE user_type = 'Agente' ");
		
		return $query->result_array();

	}
	
	//MOSTRAR AGENTES
	public function mostrarAgentes($limit, $offset){
		
		$query = $this->db->query("SELECT * FROM users  WHERE user_type = 'agente' LIMIT $offset, $limit ");
		$results["agentes"] =  $query->result_array();
		
		return $results;
		
	}
	
	//MOSTRAR AGENTE
	public function mostrarAgente($user_id){
		
		$query = $this->db->query("SELECT *, COUNT(p.user_id) AS 'total' FROM users u, properties p  WHERE u.user_id = $user_id AND p.user_id = $user_id");
		
		return  $query->result_array();
		
	}

 //MOSTRAR PROPIEDADES
	public function mostrarPropiedadesAgentes($user_id){
			
		$query = $this->db->query("SELECT * FROM properties, properties_photos, provinces , sectors WHERE properties.province_id = provinces.province_id AND properties.sector_id = sectors.sector_id AND properties_photos.property_id = properties.property_id AND properties.user_id = $user_id GROUP BY properties.property_id");
		
		return $query->result_array();
		
	}
}