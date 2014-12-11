<?php

class Propiedades extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	    $this->load->library("pagination");
		$this->load->model('Model_Login', 'login');
		$this->load->model('Model_Usuarios', 'usuarios');
		$this->load->model('Model_Geografia', 'geografia');
		$this->load->model('Model_Propiedades', 'propiedades');

	}

	public function ver($sort_by = 'sale_price', $sort_order = 'asc', $offset = 0){

		$limit = 9;
		$totales = $this->propiedades->obtenerTotalPropiedades();
		$t = 0;
		
		foreach($totales as $total){
			
			$t = $total['total'];
			
		}
		
		// pagination
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = base_url() . "index.php/propiedades/ver/$sort_by/$sort_order/";
		$config['total_rows'] = $t;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$datos['pagination'] = $this->pagination->create_links();
		$datos['total_propiedades'] = $t;
	
		
		$datos['propiedades'] = $this->propiedades->mostrarPropiedades($limit, $offset,$sort_by, $sort_order);
		$this->load->view('html/lista_propiedades',$datos);

	}
	
	public function mostrar($property_id){
		
		//$datos["property_id"] = $property_id;
		$datos['propiedad'] = $this->propiedades->mostrarPropiedad($property_id);
		$datos['features'] = $this->propiedades->mostrarPropiedadesFeatures($property_id);
		$datos['fotos'] = $this->propiedades->mostrarPropiedadesFotos($property_id);
		$datos['locations'] = $this->propiedades->mostrarPropiedadesLocations($property_id);
		
		$this->load->view('html/propiedad', $datos);
		
	}
	
	public function formulario_propiedades(){
		//echo 'Formulario para insertar propiedades';
		
		if($this->session->userdata('user_id')){
			
			$datos['paises'] = $this->geografia->obtenerPaises();
			$datos['provincias'] = $this->geografia->obtenerProvincias();
			$datos['sectores'] = $this->geografia->obtenerSectores();
			$datos['features'] = $this->propiedades->mostrarFeatures();
			$datos['properties_type'] = $this->propiedades->obtenerPropertiesType();
			
		
			$this->load->view('html/registrar_propiedades',$datos);
			
		}else{
			
			$this->load->view('html/login_propiedad');
			
		}
		
		
	}
	
	public function registrar(){
		
		$informacion_propiedades = array
		(

'type'=>$this->input->post('type'),
'user_id'=>$this->input->post('user_id'),
'mode'=>$this->input->post('mode'),
'status'=>'Active',
'general_description'=>$this->input->post('general_description'),
'actual_use'=>$this->input->post('actual_use'),
'currency_id'=>$this->input->post('currency_id'),
'rental_price'=>$this->input->post('rental_price'),
'furnished_rental_price'=>$this->input->post('furnished_rental_price'),
'sale_price'=>$this->input->post('sale_price'),
'address'=>$this->input->post('address'),
'number'=>$this->input->post('number'),
'building'=>$this->input->post('building'),
'sector_id'=>$this->input->post('sector_id'),
'province_id'=>$this->input->post('province_id'),
'country_id'=>$this->input->post('country_id'),
'bedrooms'=>$this->input->post('bedrooms'),
'bathrooms'=>$this->input->post('bathrooms'),
'parking_slots'=>$this->input->post('parking_slots'),
'construction_status'=>$this->input->post('construction_status'),
'level'=>$this->input->post('level'),
'plot_area'=>$this->input->post('plot_area'),
'construction_area'=>$this->input->post('construction_area')
);

    $features = $this->input->post('features');
    $location = array($this->input->post('latitude'),$this->input->post('longitude'));
    
    $len = count($_FILES["imagenes"]["name"]);

    $photos = array();
    
	for($i=0; $i<$len;$i++){
	
		$photos[] =  $_FILES["imagenes"]["name"][$i];
		
	}
    
    
	if($this->propiedades->insertarPropiedades($informacion_propiedades, $photos, $location ,$features)){
			//echo 'Propiedad Guardada!';
			$datos['enviado'] = "Propiedad Registrada";
			$this->load->view('html/registrar_propiedades',$datos);
			
			//move_uploaded_file($_FILES["imagenes"]["tmp_name"], './uploads/' . $_FILES["imagenes"]["name"]);
			
			for($i=0; $i<$len;$i++){

				 $fotos[] =  $_FILES["imagenes"]["name"][$i];
			 	 move_uploaded_file($_FILES["imagenes"]["tmp_name"][$i], './uploads/' . $_FILES["imagenes"]["name"][$i]);
			}
			
			/*
			 * $len = count($_FILES["imagenes"]["name"]);
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
			 * */

		}else{
			echo 'Error al insertar propiedad!';
		}

	}
	
	public function lista_propiedades(){
		
	}
	
	
	//pagination
	
function display($sort_by = 'title', $sort_order = 'asc', $offset = 0) {
		
		$limit = 20;
		$data['fields'] = array(
			'sector_id' => 'ID',
			'sector_name' => 'Name'
			
		);
		
		$results = $this->propiedades->search($limit, $offset, $sort_by, $sort_order);
		
		$data['films'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];
		
		// pagination
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = site_url("propiedades/display/$sort_by/$sort_order");
		$config['total_rows'] = $data['num_results'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;

		
		$this->load->view('example1', $data);
	}
}