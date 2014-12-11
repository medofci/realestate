<?php
class Contacto extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Model_Contacto', 'contacto');
		$this->load->model('Model_Propiedades', 'propiedades');
		

	}

	public function index(){
		
		$this->load->view('html/contacto');

	}
	
	public function enviar(){
		
		$informacion_contacto = array
(	
'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'subject'=>$this->input->post('subject'),
'message'=>$this->input->post('message')
);

	if($this->contacto->enviar($informacion_contacto)){
		
		$this->load->view('html/contacto');
			
		}else{
			echo 'ERROR AL ENVIAR EL INFORMACION!';
		}
		

	}
}