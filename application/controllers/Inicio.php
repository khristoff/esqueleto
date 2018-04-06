<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('custom', 'array', 'security', 'string', 'text', 'url'));
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function prueba(){
		//$texto = "¡El Canelo es suspendido!";
		$texto = "   ";
		echo texto_nulo($texto);
	}
}
