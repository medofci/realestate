<?php
class Home extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Model_Propiedades', 'propiedades');
	
	}

	public function index(){

		$datos['propiedades'] = $this->propiedades->mostrarPropiedadesHome();
		$this->load->view('html/home',$datos);

	}
	
	///TEST PARA BORRAR
	
	public function testimagen(){
		$this->load->view('html/testimagen');
	}
	
	public function imagen(){
		
		$len = count($_FILES["imagenes"]["name"]);
		$len2 = count($_FILES["planos"]["name"]);
		
		echo 'MALES: ' . $len . '<br /><br />';
		echo 'FEMALES: ' .$len2 . '<br /><br />';
		
		$fotos = array();
				
		for($i=0; $i<$len;$i++){
			
			
			$fotos[] =  $_FILES["imagenes"]["name"][$i];
			move_uploaded_file($_FILES["imagenes"]["tmp_name"][$i], './uploads/' . $_FILES["imagenes"]["name"][$i]);
		}
		
		for($i=0; $i<$len2;$i++){
			
			
			$fotos[] =  $_FILES["planos"]["name"][$i];
			move_uploaded_file($_FILES["planos"]["tmp_name"][$i], './uploads/' . $_FILES["planos"]["name"][$i]);
		}
		
		foreach($fotos as $foto){
			echo '<img src="'.base_url().'/uploads/' . $foto . '" /><br />';
		}

	}
	
	///END TEST PARA BORRAR
	
}