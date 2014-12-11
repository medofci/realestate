<?php

class Usuarios extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Model_Login', 'login');
		$this->load->model('Model_Usuarios', 'usuarios');
		$this->load->model('Model_Geografia', 'geografia');
		$this->load->model('Model_Propiedades', 'propiedades');

	}

	public function index(){
		
		if($this->session->userdata('user_id')){
			
			$datos['propiedades'] = $this->propiedades->mostrarPropiedades();
			$this->load->view('html/home',$datos);
			
		}else{
			
			$this->load->view('html/login');
			
		}

	}

	public function registrar_usuarios(){
		
		$datos['paises'] = $this->geografia->obtenerPaises();
		$datos['provincias'] = $this->geografia->obtenerProvincias();
		$datos['sectores'] = $this->geografia->obtenerSectores();
		
		$this->load->view('html/crear-cuenta', $datos);

	}
	
	public function sectors(){
		
		$datos['paises'] = $this->geografia->obtenerPaises();
		$datos['provincias'] = $this->geografia->obtenerProvincias();
		$datos['sectores'] = $this->geografia->obtenerSectores();
		
		$this->load->view('html/sectors', $datos);

	}

	public function registrar(){
		
		$informacion_usuarios = array
(	
'full_name'=>$this->input->post('full_name'),
'email'=>$this->input->post('email'),
'username'=>$this->input->post('username'),
'password'=>md5($this->input->post('password')),
'user_type'=>$this->input->post('user_type'),
'user_status'=>'Active',
'address'=>$this->input->post('address'),
'sector_id'=>$this->input->post('sector_id'),
'province_id'=>$this->input->post('province_id'),
'country_id'=>$this->input->post('country_id'),
'phone_1'=>$this->input->post('phone_1'),
'phone_1ext'=>$this->input->post('phone_1ext'),
'phone_2'=>$this->input->post('phone_2'),
'cell_phone'=>$this->input->post('cell_phone'),
'fax'=>$this->input->post('fax'),
'company'=>$this->input->post('company'),
'scontact1_name'=>$this->input->post('scontact1_name'),
'scontact1_info'=>$this->input->post('scontact1_info'),
'scontact2_name'=>$this->input->post('scontact2_name'),
'scontact2_info'=>$this->input->post('scontact2_info'),
'scontact3_name'=>$this->input->post('scontact3_name'),
'scontact3_info'=>$this->input->post('scontact3_info'),
'scontact4_name'=>$this->input->post('scontact4_name'),
'scontact4_info'=>$this->input->post('scontact4_info'),
);

		if($this->usuarios->insertarUsuario($informacion_usuarios)){
			//echo 'Usuario Creado!';
			header('Location: http://localhost/php/realstate/index.php/usuarios/');
		}else{
			echo 'Usuario No Creado!';
		}

		//echo 'Registrar!';
	}


	public function formulario_login(){

		echo 'Formulario de login aqui...';

	}

	/**
	 *
	 * Metodo login para verificar el usuario y contrasena  y dar acceso a la aplicacion.
	 *
	 * @param string $user
	 * @param string $pass
	 * @return void
	 */

	public function login(){
		
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		
		$query = $this->login->login($email, $pass);

		if($query){

			foreach($query as $valor){

				$user_id = $valor["user_id"];
				$username = $valor["username"];
				$email = $valor["email"];
				

				$userData = array(
                   'user_id'  => $user_id,
                   'username' => $username,
                   'email' => $email
				);

				$this->session->set_userdata($userData);
					
				//Aqui va el codigo para redireccionar al area segura...
				$datos['propiedades'] = $this->propiedades->mostrarPropiedadesHome();
				$datos['logueado'] = true;
				$this->load->view('html/home',$datos);
			}
				
		}else{
				
			//echo '[ERROR]:Verificar username o password!';
			$this->load->view('html/login');
				
		}

	}
	
	public function login_propiedad(){
		
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		
		$query = $this->login->login($email, $pass);

		if($query){

			foreach($query as $valor){

				$user_id = $valor["user_id"];
				$username = $valor["username"];
				$email = $valor["email"];
				

				$userData = array(
                   'user_id'  => $user_id,
                   'username' => $username,
                   'email' => $email
				);

				$this->session->set_userdata($userData);
					
				//Aqui va el codigo para redireccionar al area segura...
				
				$datos['paises'] = $this->geografia->obtenerPaises();
				$datos['provincias'] = $this->geografia->obtenerProvincias();
				$datos['sectores'] = $this->geografia->obtenerSectores();
				$datos['features'] = $this->propiedades->mostrarFeatures();
		
				$this->load->view('html/registrar_propiedades',$datos);
			}
				
		}else{
				
			//echo '[ERROR]:Verificar username o password!';
			$this->load->view('html/login_propiedad');
				
		}

	}


	public function user_login_info(){

		echo 'User_ID:	' . $this->session->userdata('user_id') .'<br />';
		echo 'Username:	' . $this->session->userdata('username') .'<br />';
		echo 'Email:	' . $this->session->userdata('email') .'<br />';

	}
	
	public function logout(){
		
		$userData = array(
                   'user_id'  => '',
                   'username' => '',
                   'email' => ''
				);
				
		$this->session->unset_userdata($userData);
	    header('Location: http://localhost/php/realstate/index.php/usuarios/');
			
		}
}