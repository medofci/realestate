<?php

class Sesiones extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this->load->library('session');
		
	}
	
	public function index(){
		echo 'Email: ' . $this->session->userdata('email');
	}
}