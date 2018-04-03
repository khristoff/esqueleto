<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google extends CI_Model {
	public function __construct() {
    	parent::__construct();
	}

	public function secciones(){
		$this->db->select('url');
		$this->db->from('secciones');
		$this->db->where('activo IS NULL');
		$this->db->order_by('nombre', 'asc');
		return $this->db->get()->result();
	}

	public function noticias(){
		$this->db->select('url, DATE(edicion) AS fecha');
		$this->db->from('noticias');
		$this->db->where('estado', 'publicado');
		$this->db->order_by('edicion', 'desc');
		return $this->db->get()->result();
	}

}
?>