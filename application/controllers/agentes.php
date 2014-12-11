<?php

class Agentes extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Model_Login', 'login');
		$this->load->model('Model_Usuarios', 'usuarios');
		$this->load->model('Model_Geografia', 'geografia');
		$this->load->model('Model_Propiedades', 'propiedades');

	}

	public function mostrar($offset = 0){
		
		$limit = 10;
		
	    $totales = $this->usuarios->obtenerTotalAgentes();
		$t = 0;
		
		foreach($totales as $total){
			
			$t = $total['total'];
			
		}
		
		
		// pagination
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = base_url() . "index.php/agentes/mostrar/";
		$config['total_rows'] = $t;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$datos['pagination'] = $this->pagination->create_links();

		$results =  $this->usuarios->mostrarAgentes($limit, $offset);
		$datos['agentes'] = $results["agentes"];
		
		//$this->load->view('html/lista_agentes',$datos);
		
		$this->load->view('html/lista_agente',$datos);

	}
	
	public function mostrar_agente($user_id){

		$datos['agente'] = $this->usuarios->mostrarAgente($user_id);
		$datos['agente_propiedades'] =  $this->usuarios->mostrarPropiedadesAgentes($user_id);
		
		$this->load->view('html/mostrar_agente',$datos);
		
	}
	
}