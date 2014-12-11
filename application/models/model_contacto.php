<?php

class Model_Contacto extends CI_Model{
	
	function __construct(){
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function enviar($campos){
		
		if($this->db->insert('contact', $campos)){
			return true;
		}else{
			return false;
		}
	}
	
	
	
}