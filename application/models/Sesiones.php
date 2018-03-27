<?php
class Sesiones extends CI_Model {
	public function __construct() {
    	parent::__construct();
	}

	public function login($correo, $contrasena){
		$this->db->select('id, nombre, apellidos, correo, foto, tipo');
		$this->db->from('usuarios');
		$this->db->where('correo', $correo);
		$this->db->where('contrasena', $contrasena);
		$this->db->where('activo IS NULL');
		$this->db->limit(1);
		return $this->db->get()->row();
	}

}
?>