<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('custom', 'array', 'security', 'string', 'text', 'url'));
		//$this->load->model('cuenta');
	}

	public function index(){
		try {
			if($this->session->userdata('id')){

				$header = array('titulo'	=> 'Inicio',
								'class'		=> null);

				$menu 	= array('nombre'	=> mb_convert_case($this->session->userdata('nombre'), MB_CASE_TITLE, 'UTF-8'),
							  	'apellidos'	=> mb_convert_case($this->session->userdata('apellidos'), MB_CASE_TITLE, 'UTF-8'),
							  	'foto'	 	=> perfil_foto($this->session->userdata('foto')),
							  	'opcion'	=> null);

				$datos  = array();

				$this->load->view('layouts/panel/header', $header);
				$this->load->view('layouts/panel/menu', $menu);
				$this->load->view('panel/index', $datos);
				$this->load->view('layouts/panel/footer');

			} else {
				redirect(LOGIN);
			}
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

}
