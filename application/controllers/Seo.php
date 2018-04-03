<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('custom', 'security'));
		$this->load->model(array('google'));
	}

	public function sitemap(){
		try {
			$datos = array('secciones'	=> $this->google->secciones(),
						   'noticias'	=> $this->google->noticias());

			header('Content-Type: text/xml;charset=iso-8859-1');
		    $this->load->view('seo/sitemap', $datos);

		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

}