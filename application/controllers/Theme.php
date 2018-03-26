<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		try {
			$header = array('titulo' =>	'Inicio',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/index');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appscalendar(){
		try {
			$header = array('titulo' =>	'Apps Calendar',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appscalendar');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appscontacts(){
		try {
			$header = array('titulo' =>	'Apps Contact',
							'class'  => 'no-padding');

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appscontacts');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appsgallery(){
		try {
			$header = array('titulo' =>	'Apps Gallery',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appsgallery');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appsmessages(){
		try {
			$header = array('titulo' =>	'Apps Messages',
							'class'  => 'no-padding');

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appsmessages');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appsprojects(){
		try {
			$header = array('titulo' =>	'Apps Projects',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appsprojects');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appssocial(){
		try {
			$header = array('titulo' =>	'Apps Social',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appssocial');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function appstravel(){
		try {
			$header = array('titulo' =>	'Apps Travel',
							'class'  => 'no-padding');

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/appstravel');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function cardsbasic(){
		try {
			$header = array('titulo' =>	'Cards Basic',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/cardsbasic');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function cardsportlets(){
		try {
			$header = array('titulo' =>	'Cards Portlets',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/cardsportlets');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function cardsdraggable(){
		try {
			$header = array('titulo' =>	'Cards Draggable',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/cardsdraggable');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}

	public function cardswidgets(){
		try {
			$header = array('titulo' =>	'Cards Widgets',
							'class'  => null);

			$this->load->view('layouts/theme/header', $header);
			$this->load->view('layouts/theme/menu');
			$this->load->view('theme/cardswidgets');
			$this->load->view('layouts/theme/prefooter');
			$this->load->view('layouts/theme/footer');
		} catch (Exception $e) {
			log_message('debug', $e);
		}
	}
}
