<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('custom', 'array', 'security', 'string', 'url'));
	}

	public function index(){
		try {
			$this->load->view('layouts/panel/login');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function login(){
		try {
			$usuario 	= texto_limpiar(xss_clean($this->input->post('usuario')));
			$contrasena = contrasena_encriptar(xss_clean($this->input->post('contrasena')));
			if(correo_valido($usuario) && !empty($this->input->post('contrasena'))){
				try {
					$this->load->model('sesiones');
					$response = $this->sesiones->login($usuario, $contrasena);
					if(!empty($response->id)){
						$response->redirect = WELCOME;
						$this->session->set_userdata(objeto_a_arreglo($response));
						return $this->output->set_content_type('application/json')->set_status_header(200)->set_output(json_encode(array(
			            	'status'  => 'success',
			                'data'    => $response
			            )));
			        } else {
				        return $this->output->set_content_type('application/json')->set_status_header(200)->set_output(json_encode(array(
			            	'status'  => 'fail',
			                'data'    => array('message' => 'Correo y/o contraseña incorrectos')
			            )));
			        }
				} catch (Exception $e) {
					log_message('debug', $e);
				}
			} else {
				return $this->output->set_content_type('application/json')->set_status_header(200)->set_output(json_encode(array(
	            	'status'  => 'error',
	                'data'	  => array('message' => 'Se ha producido un error, por favor intenta más tarde')
	            )));
			}
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function registro(){
		try {
			echo "Registro de nuevo usuario";
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function recuperar(){
		try {
			echo "Recuperar contraseña";
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function salir(){
		try {
			$data = array('id' => '', 'nombre' => '', 'apellidos' => '', 'correo' => '', 'foto' => '', 'tipo' => '', 'redirect' => '');
	        $this->session->unset_userdata($data);
	        $this->session->sess_destroy();
			redirect(LOGIN);
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

}
