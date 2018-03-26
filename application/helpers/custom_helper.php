<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('acentos')){
	function acentos($text){
		$text = mb_strtolower($text, 'UTF-8');
		$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
		$patron = array (
			'/&agrave;/' => 'a',
			'/&egrave;/' => 'e',
			'/&igrave;/' => 'i',
			'/&ograve;/' => 'o',
			'/&ugrave;/' => 'u',
			'/&aacute;/' => 'a',
			'/&eacute;/' => 'e',
			'/&iacute;/' => 'i',
			'/&oacute;/' => 'o',
			'/&uacute;/' => 'u',
			'/&acirc;/' => 'a',
			'/&ecirc;/' => 'e',
			'/&icirc;/' => 'i',
			'/&ocirc;/' => 'o',
			'/&ucirc;/' => 'u',
			'/&atilde;/' => 'a',
			'/&etilde;/' => 'e',
			'/&itilde;/' => 'i',
			'/&otilde;/' => 'o',
			'/&utilde;/' => 'u',
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
			'/&aring;/' => 'a',
			'/&ntilde;/' => 'n',
			'/&ldquo/' => '',
			'/&rdquo/' => '',
			'/&lsquo/' => '',
			'/&rsquo/' => '',
			'/&iquest/' => '',
			'/&iexcl/' => ''
		);
		$text = preg_replace(array_keys($patron), array_values($patron), $text);
		$text = preg_replace('/[¿!¡;,:\.\?*=+#@%()"]/', '', trim($text));
		return $text;
	}
}

if(!function_exists('checkbox')){
	function checkbox($value){
		return ($value == 'on') ? 1 : null;
	}
}

if(!function_exists('dir_mkdir')){
	function dir_mkdir($path){
		if(!file_exists($path)) mkdir($path, 0777, true);
		chmod($path, 0777);
		return true;
	}
}

if(!function_exists('digits_valid')){
	function digits_valid($number){
		return preg_replace('/\D+/', '', $number);
	}
}

if(!function_exists('email_valid')){
	function email_valid($email){
		return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
	}
}

if(!function_exists('image_remote')){
	function image_remote($url){
		return (preg_match('/(png|jpg|gif)$/', pathinfo($url, PATHINFO_EXTENSION))) ? true : false;
	}
}

if(!function_exists('image_valid')){
	function image_valid($file){
		return (file_exists($file)) ? true : false;
	}
}

if(!function_exists('listio_acciones')){
	function listio_acciones($accion){
		return (in_array($accion, array('ver', 'detalle', 'editar', 'agregar', 'guardar', 'mostrar', 'ocultar', 'leido', 'noleido', 'copiar', 'mover', 'eliminar'))) ? $accion : false;
	}
}

if(!function_exists('listio_anuncios')){
	function listio_anuncios($categoria){
		return (in_array($categoria, array('publicados', 'destacados', 'pendientes', 'vencidos'))) ? $categoria : 'publicados';
	}
}

if(!function_exists('listio_catalogos')){
	function listio_catalogos($parametro){
		return (in_array($parametro, array('categoria', 'tipo', 'operacion', 'venta'))) ? $parametro : null;
	}
}

if(!function_exists('listio_categoria')){
	function listio_categoria($name){
		return (in_array($name, array('residencial', 'comercial', 'campo', 'vacacional'))) ? $name : 'residencial';
	}
}

if(!function_exists('listio_conservacion')){
	function listio_conservacion($name){
		return (in_array($name, array('nuevo','excelente','bueno','regular','malo'))) ? $name : null;
	}
}

if(!function_exists('listio_estado')){
	function listio_estado($estado){
		return (in_array($estado, array('aprobacion','publicado','republicado','finalizado','inactivo','reportado','eliminado'))) ? $estado : null;
	}
}

if(!function_exists('listio_etiquetas')){
	function listio_etiquetas($text){
		$etiquetas = '';
		foreach(str_word_count($text, 1) as $palabra){
			if(strlen($palabra) > 3){
				if(!in_array(strtolower($palabra), array('abierto', 'blancos', 'completo', 'cuenta', 'esta', 'este', 'esto', 'método', 'para', 'planta', 'visitas'))){
					$etiquetas .= strtolower($palabra).', ';
				}
			}
		}
		return rtrim($etiquetas, ', ');
	}
}

if(!function_exists('listio_forma')){
	function listio_forma($name){
		return (in_array($name, array('regular','irregular','plano'))) ? $name : null;
	}
}

if(!function_exists('listio_inmueble')){
	function listio_inmueble($name){
		return (in_array($name, array('casa', 'departamento', 'habitacion', 'terreno', 'lote', 'bodega', 'nave', 'local', 'oficina', 'finca', 'granja', 'hacienda', 'huerta', 'rancho', 'bungalow', 'cabaña', 'quinta', 'villa', 'desarrollo', 'edificio', 'hotel', 'salon'))) ? $name : 'casa';
	}
}

if(!function_exists('listio_operacion')){
	function listio_operacion($name){
		return (in_array($name, array('venta', 'renta', 'traspaso'))) ? $name : 'venta';
	}
}

if(!function_exists('listio_select_conservacion')){
	function listio_select_conservacion(){
		return array('excelente' => 'Excelente', 'buena' => 'Bueno', 'regular' => 'Regular', 'mala' => 'Malo');
	}
}

if(!function_exists('listio_select_inmueble')){
	function listio_select_inmueble(){
		return array('bodega' => 'Bodega', 'bungalow' => 'Bungalow', 'cabaña' => 'Cabaña', 'casa' => 'Casa', 'departamento' => 'Departamento', 'desarrollo' => 'Desarrollo', 'edificio' => 'Edificio', 'finca' => 'Finca', 'granja' => 'Granja', 'habitacion' => 'Habitación', 'hacienda' => 'Hacienda', 'hotel' => 'Hotel', 'huerta' => 'Huerta', 'local' => 'Local', 'lote' => 'Lote', 'nave' => 'Nave', 'oficina' => 'Oficina', 'rancho' => 'Rancho', 'salon' => 'Salón', 'terreno' => 'Terreno', 'quinta' => 'Quinta', 'villa' => 'Villa');
	}
}

if(!function_exists('listio_select_moneda')){
	function listio_select_moneda(){
		return array('MXN' => 'MXN', 'USD' => 'USD');
	}
}

if(!function_exists('listio_select_operacion')){
	function listio_select_operacion(){
		return array('venta' => 'Venta', 'renta' => 'Renta', 'traspaso' => 'Traspaso');
	}
}

if(!function_exists('listio_select_terreno')){
	function listio_select_terreno(){
		return array('regular' => 'Regular', 'irregular' => 'Irregular', 'plano' => 'Plano');
	}
}

if(!function_exists('listio_select_tipo')){
	function listio_select_tipo($inmueble){
		switch ($inmueble) {
			case 'bodega':
				return array('comercial' => 'Comercial', 'industrial' => 'Industrial');
				break;
			case 'bungalow':
				return array();
				break;
			case 'cabaña':
				return array();
				break;
			case 'casa':
				return array('solo' => 'Sola', 'interes-social' => 'De interés social', 'residencial' => 'Residencial', 'condominio' => 'En condominio', 'comercial' => 'Para uso comercial', 'vacacional' => 'Vacacional');
				break;
			case 'departamento':
				return array('solo' => 'Solo', 'interes-social' => 'De interés social', 'residencial' => 'Residencial', 'condominio' => 'En condominio', 'vacacional' => 'Vacacional');
				break;
			case 'desarrollo':
				return array();
				break;
			case 'edificio':
				return array();
				break;
			case 'finca':
				return array();
				break;
			case 'granja':
				return array();
				break;
			case 'habitacion':
				return array('independiente' => 'Independiente', 'compartido' => 'Compartida');
				break;
			case 'hacienda':
				return array();
				break;
			case 'hotel':
				return array();
				break;
			case 'huerta':
				return array();
				break;
			case 'local':
				return array('comercial' => 'Comercial', 'centro-comercial' => 'En centro comercial');
				break;
			case 'lote':
				return array();
				break;
			case 'nave':
				return array('industrial' => 'Industrial', 'parque' => 'En parque industrial');
				break;
			case 'oficina':
				return array('comercial' => 'Comercial', 'centro-comercial' => 'En centro comercial');
				break;
			case 'rancho':
				return array();
				break;
			case 'salon':
				return array();
				break;
			case 'terreno':
				return array('residencial' => 'Residencial', 'comercial' => 'Para uso comercial', 'industrial' => 'Para uso industrial');
				break;
			case 'quinta':
				return array();
				break;
			case 'villa':
				return array();
				break;
		}
	}
}

if(!function_exists('listio_select_vacacional')){
	function listio_select_vacacional($inmueble){
		switch ($inmueble) {
			case 'bodega':
				return array();
				break;
			case 'bungalow':
				return array('campo' => 'Campo', 'montaña' => 'Montaña', 'playa' => 'Playa', 'suburbios' => 'Suburbios', 'bosque' => 'Bosque');
				break;
			case 'cabaña':
				return array('campo' => 'Campo', 'montaña' => 'Montaña', 'playa' => 'Playa', 'suburbios' => 'Suburbios', 'bosque' => 'Bosque');
				break;
			case 'casa':
				return array('campo' => 'Campo', 'ciudad' => 'Ciudad', 'montaña' => 'Montaña', 'playa' => 'Playa', 'suburbios' => 'Suburbios', 'bosque' => 'Bosque');
				break;
			case 'departamento':
				return array('ciudad' => 'Ciudad', 'playa' => 'Playa', 'suburbios' => 'Suburbios');
				break;
			case 'desarrollo':
				return array();
				break;
			case 'edificio':
				return array();
				break;
			case 'finca':
				return array();
				break;
			case 'granja':
				return array();
				break;
			case 'habitacion':
				return array();
				break;
			case 'hacienda':
				return array();
				break;
			case 'hotel':
				return array();
				break;
			case 'huerta':
				return array();
				break;
			case 'local':
				return array();
				break;
			case 'lote':
				return array();
				break;
			case 'nave':
				return array();
				break;
			case 'oficina':
				return array();
				break;
			case 'rancho':
				return array();
				break;
			case 'salon':
				return array();
				break;
			case 'terreno':
				return array();
				break;
			case 'quinta':
				return array('campo' => 'Campo', 'ciudad' => 'Ciudad', 'montaña' => 'Montaña', 'playa' => 'Playa', 'suburbios' => 'Suburbios', 'bosque' => 'Bosque');
				break;
			case 'villa':
				return array('campo' => 'Campo', 'ciudad' => 'Ciudad', 'montaña' => 'Montaña', 'playa' => 'Playa', 'suburbios' => 'Suburbios', 'bosque' => 'Bosque');
				break;
		}
	}
}

if(!function_exists('listio_select_venta')){
	function listio_select_venta(){
		return array('preventa' => 'Preventa', 'remate' => 'Remate', 'oportunidad' => 'Oportunidad');
	}
}

if(!function_exists('listio_tipo')){
	function listio_tipo($name){
		return (in_array($name, array('solo', 'interes-social', 'residencial', 'condominio', 'comercial', 'vacacional', 'independiente', 'compartido', 'industrial', 'parque', 'centro-comercial'))) ? $name : 'residencial';
	}
}

if(!function_exists('listio_ubicaciones')){
	function listio_ubicaciones($tipo){
		return (in_array($tipo, array('paises','provincias','municipios','lugares'))) ? $tipo : null;
	}
}

if(!function_exists('listio_vacacional')){
	function listio_vacacional($name){
		return (in_array($name, array('campo', 'ciudad', 'montaña', 'playa', 'suburbios', 'bosque'))) ? $name : null;
	}
}

if(!function_exists('listio_venta')){
	function listio_venta($name){
		return (in_array($name, array('preventa', 'remate', 'oportunidad'))) ? $name : null;
	}
}

if(!function_exists('numerico_nulo')){
	function numerico_nulo($val){
		return (intval($val) == 0) ? null : $val;
	}
}

if(!function_exists('mysql_exists')){
	function mysql_exists($count){
		return (intval($count) > 0) ? true : false;
	}
}

if(!function_exists('mysql_nulo')){
	function mysql_nulo($val){
		return ($val === null or trim($val) === '' or !isset($val)) ? null : $val;
	}
}

if(!function_exists('object_to_array')){
	function object_to_array($object){
		if (is_object($object)) {
	        $object = get_object_vars($object);
	    }
	    if (is_array($object)) {
	        return array_map(__FUNCTION__, $object);
	    } else {
	        return $object;
	    }
	}
}

if(!function_exists('password_encrypt')){
	function password_encrypt($password, $hash = 'sha512'){
		return do_hash(SEMILLA.$password, $hash);
	}
}

if(!function_exists('password_valid')){
	/*
	Contraseña de al menos 8 caracteres, al menos 1 letra minúscula, al menos 1
	letra mayúscula y al menos 1 número
	*/
	function password_valid($password){
		return (preg_match('/[^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$]/', $password)) ? true : false;
	}
}

if(!function_exists('seo_key')){
	function seo_key(){
		return substr(explode(' ', microtime())[1], -5) . substr(explode(' ', explode('.', microtime())[1] )[0], 0, 5);
	}
}

if(!function_exists('seo_uniqueid')){
	function seo_uniqueid(){
		return uniqid();
	}
}

if(!function_exists('session_exists')){
	function session_exists(){
		return ($this->session->userdata('session_id')) ? true: false;
	}
}

if(!function_exists('session_welcome')){
	function session_welcome($category){
		switch ($category){
			case 'usuario':
				return '/panel';
				break;
			case 'editor':
				return '/admin';
				break;
			case 'administrador':
				return '/admin';
				break;
			default:
				return '/panel';
				break;
		}
	}
}

if(!function_exists('session_create')){
	function session_create($array){
		return ($this->session->set_userdata($array)) ? true: false;
	}
}

if(!function_exists('session_destroy')){
	function session_destroy(){
		return ($this->session->unset_userdata(array('id' => null, 'usuario' => null, 'nombre' => null, 'apellidos' => null, 'correo' => null, 'ubicacion' => null, 'municipio' => null, 'provincia' => null, 'pais' => null, 'categoria' => null, 'estado' => null, 'nivel' => null, 'redirect' => null)) && $this->session->sess_destroy()) ? true: false;
	}
}

if(!function_exists('text_null')){
	function text_null($text){
		return (!isset($text) || trim($text) === '');
	}
}

if(!function_exists('text_sweep')){
	function text_sweep($text){
		$text = strip_tags($text);
		$text = htmlspecialchars($text, ENT_QUOTES);
		$text = trim($text);
		$text = preg_replace('[\n|\r|\n\r]', '', $text);
		$text = preg_replace('/[^A-Za-z0-9áéíóúñÁÉÍÓÚÑ\-¿!¡;,:\.\?*=+#@()_ ]/', '', $text);
		return mb_convert_encoding($text, 'UTF-8');
	}
}

if(!function_exists('url_exists')){
	function url_exists($url){
		if (!$fp = curl_init($url)) return false;
		return true;
	}
}

if(!function_exists('url_valid')){
	function url_valid($url){
		$url = strtolower($url);
		$url = strip_tags($url);
		$url = htmlspecialchars($url, ENT_QUOTES);
		$url = trim($url);
		$url = preg_replace('[\n|\r|\n\r]', '', $url);
		$url = preg_replace('/[^a-z0-9\-_]/', '', $url);
		return mb_convert_encoding($url, 'UTF-8');
	}
}
