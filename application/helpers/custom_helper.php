<?php
/**
* Helpers personalizados para CodeIgniter
*
* @package    Custom Helper
* @author     @khristoff
* @version    1.0
* @lastmod    2018-04-06
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Comprueba si un checkbox tiene estatus "checked" en sus propiedades
 *
 * @param		valor:String
 * @return      Devuelve 1 si el checkbox está activado, en su defecto nulo:Null
 *
 */
if(!function_exists('checkbox_valor')){
	function checkbox_valor($valor){
		return ($valor == 'on') ? 1 : null;
	}
}

/**
 *
 * Concatena la semilla con la contraseña y los encripta en base al algoritmo
 * proporcionado (sha512 por defecto); la semilla se encuentra en las constantes
 * globales de CI
 *
 * @param		contrasena:String, hash?:Enum
 * @return      Devuelve la contraseña:String encriptada
 *
 */
if(!function_exists('contrasena_encriptar')){
	function contrasena_encriptar($contrasena, $hash = 'sha512'){
		return do_hash(SEMILLA.$contrasena, $hash);
	}
}

/**
 *
 * Valida que la contraseña proporcionada contenga al menos 8 caracteres, al
 * menos 1 letra minúscula, al menos 1 letra mayúscula y al menos 1 número
 *
 * @param		contrasena:String
 * @return      Si la contraseña cumple con los requisitos devuelve true:Bool
 *
 */
if(!function_exists('contrasena_validar')){
	function contrasena_validar($contrasena){
		return (preg_match('/[^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$]/', $contrasena)) ? true : false;
	}
}

/**
 *
 * Verifica que el correo sea un formato de correo electrónico válido
 *
 * @param		correo:String
 * @return      Si el correo es formato válido true:Bool, si no false:Bool
 *
 */
if(!function_exists('correo_valido')){
	function correo_valido($correo){
		return (filter_var($correo, FILTER_VALIDATE_EMAIL)) ? true : false;
	}
}

/**
 *
 * Crea una carpeta en la ruta especificada y otorga los permisos indicados
 *
 * @param		ruta:Path, permisos?:Chmod
 * @return      Si la carpeta se creó devuelve true:Bool
 *
 */
if(!function_exists('directorio_crear')){
	function directorio_crear($ruta, $permisos = 0777){
		if(!file_exists($ruta)) mkdir($ruta, $permisos, true);
		chmod($ruta, $permisos);
		return true;
	}
}

/**
 *
 * Limpia una cadena y devuelve únicamente dígitos
 *
 * @param		numero:String
 * @return      Devuelve solo dígitos:Integer
 *
 */
if(!function_exists('digitos_validos')){
	function digitos_validos($numero){
		return preg_replace('/\D+/', '', $numero);
	}
}

/**
 *
 * Valida que un archivo sea una imagen válida (png, jpg, gif) en base a su ruta
 *
 * @param		url:Path
 * @return      Devuelve verdadero:Bool si el archivo es una imagen válida
 *
 */
if(!function_exists('imagen_url')){
	function imagen_url($url){
		return (preg_match('/(png|jpg|gif)$/', pathinfo($url, PATHINFO_EXTENSION))) ? true : false;
	}
}

/**
 *
 * Verifica que un archivo exista en el servidor en base a su ruta
 *
 * @param		archivo:Path
 * @return      Devuelve verdadero:Bool si el archivo existe en el servidor
 *
 */
if(!function_exists('imagen_existe')){
	function imagen_existe($archivo){
		return (file_exists(getcwd().$archivo)) ? true : false;
	}
}

/**
 *
 * Comprueba que una opción exista dentro de un arreglo de opciones
 *
 * @param		opcion:String, arreglo:Array
 * @return      Devuelve verdadero:Bool si la opción existe dentro del arreglo
 *
 */
if(!function_exists('menu_existe')){
	function menu_existe($opcion, $arreglo){
		return (in_array($opcion, $arreglo)) ? true : false;
	}
}

/**
 *
 * Valida que una opción exista dentro de un arreglo de opciones
 *
 * @param		opcion:String, arreglo:Array
 * @return      Devuelve el valor de la opción:String si la opción existe
 *
 */
if(!function_exists('menu_opcion')){
	function menu_opcion($opcion, $arreglo){
		return (in_array($opcion, $arreglo)) ? $opcion : false;
	}
}

/**
 *
 * Verifica si un número es igual a cero y si es así devuelve nulo
 *
 * @param		numero:Integer
 * @return      Devuelve nulo:Null si es igual a cero, si no devuelve el número
 *
 */
if(!function_exists('numero_nulo')){
	function numero_nulo($numero){
		return (intval($numero) == 0) ? null : $numero;
	}
}

/**
 *
 * Verifica si un registro existe en la base de datos
 *
 * @param		total:Integer
 * @return      Devuelve true:Bool si el registro existe en la base de datos
 *
 */
if(!function_exists('mysql_existe')){
	function mysql_existe($total){
		return (intval($total) > 0) ? true : false;
	}
}

/**
 *
 * Verifica si un valor es nulo en la base de datos, tomando en cuenta si su
 * valor es nulo, espacio en blanco o no definido
 *
 * @param		valor:String
 * @return      Devuelve nulo:Null si el registro es nulo, si no regresa el valor
 *
 */
if(!function_exists('mysql_nulo')){
	function mysql_nulo($valor){
		return ($valor === null or trim($valor) === '' or !isset($valor)) ? null : $valor;
	}
}

/**
 *
 * Convierte un objecto en formato de arreglo, conservando la misma estructura
 *
 * @param		objecto:Object
 * @return      Devuelve el objeto en un arreglo:Array
 *
 */
if(!function_exists('objeto_a_arreglo')){
	function objeto_a_arreglo($objeto){
		if(is_object($objeto)){ $objeto = get_object_vars($objeto); }
	    return (is_array($objeto)) ? array_map(__FUNCTION__, $objeto) : $objeto;
	}
}

/**
 *
 * Verifica que la foto especificada para un usuario desde la base de datos se
 * encuentre físicamente en el servidor, si no está pone la ruta de la foto por
 * defecto, esta ruta por defecto se encuentra en las constantes globales de CI
 *
 * @param		foto:Path
 * @return      Devuelve la foto del usuario:Path si existe o la foto por defecto
 *
 */
if(!function_exists('perfil_foto')){
	function perfil_foto($foto){
		return (file_exists(getcwd().$foto)) ? $foto : USUARIO;
	}
}

/**
 *
 * Genera una clave numérica de 10 dígitos de acuerdo el microtiempo que puede
 * servir como unique id
 *
 * @param
 * @return      Devuelve una clave numérica:Integer única de 10 dígitos
 *
 */
if(!function_exists('seo_key')){
	function seo_key(){
		return substr(explode(' ', microtime())[1], -5) . substr(explode(' ', explode('.', microtime())[1] )[0], 0, 5);
	}
}

/**
 *
 * Genera una clave alfanumérica de longitud 13 con la función nativa de php uniqid,
 * si bien es más confiable por usar letras es más lenta que la función seo_key
 *
 * @param
 * @return      Devuelve una clave alfanumérica:String única de 13 dígitos
 *
 */
if(!function_exists('seo_uniqueid')){
	function seo_uniqueid(){
		return uniqid();
	}
}

/**
 *
 * Comprueba que una sesión de usuario exista
 *
 * @param
 * @return      Devuelve verdadero:Bool si la sesión existe, si no falso:Bool
 *
 */
if(!function_exists('sesion_existe')){
	function sesion_existe(){
		return ($this->session->userdata('session_id')) ? true: false;
	}
}

/**
 *
 * Crea una sesión de usuario con los datos enviados por parámetro
 *
 * @param		datos:Dictionary
 * @return      Devuelve verdadero:Bool si la sesión se crea, si no falso:Bool
 *
 */
if(!function_exists('sesion_crear')){
	function sesion_crear($datos){
		return ($this->session->set_userdata($datos)) ? true: false;
	}
}

/**
 *
 * Comprueba si un texto o variable están declarados pero vacíos
 *
 * @param		texto:String
 * @return      Devuelve verdadero:Bool si el texto está vacío o en blanco
 *
 */
if(!function_exists('texto_nulo')){
	function texto_nulo($texto){
		return (!isset($texto) || trim($texto) === '');
	}
}

/**
 *
 * Sanitiza el texto especificado, remueve espacios innecesarios, etiquetas html,
 * caracteres especiales, tabulaciones, saltos de línea, etc.
 *
 * @param		texto:String
 * @return      Devuelve el texto:String sanitizado
 *
 */
if(!function_exists('texto_limpiar')){
	function texto_limpiar($texto){
		$texto = strip_tags($texto);
		$texto = htmlspecialchars($texto, ENT_QUOTES);
		$texto = trim($texto);
		$texto = preg_replace('[\n|\r|\n\r]', '', $texto);
		$texto = preg_replace('/[^A-Za-z0-9áéíóúñÁÉÍÓÚÑ\-¿!¡;,:\.\?*=+#@()_ ]/', '', $texto);
		return mb_convert_encoding($texto, 'UTF-8');
	}
}

/**
 *
 * Convierte un título en una cadena seo para las urls, remueve acentos y caracteres
 * especiales, convierte a minúsculas y reemplaza los espacios por guiones medios
 *
 * @param		titulo:String
 * @return      Devuelve una url:String válida para navegación web
 *
 */
if(!function_exists('url_generar')){
	function url_generar($texto){
		return url_title(preg_replace('/[^a-z0-9[:space:]]/', '', trim(convert_accented_characters(mb_strtolower($texto, 'UTF-8')))));
	}
}

/**
 *
 * Comprueba vía http que una url (http://dominio.abc) realmente exista
 *
 * @param		url:Url
 * @return      Devuelve verdadero:Bool si la url existe físicamente
 *
 */
if(!function_exists('url_existe')){
	function url_existe($url){
		$http = @get_headers($url);
		return (!$http || $http[0] == 'HTTP/1.1 404 Not Found') ? false: true;
	}
}

/**
 *
 * Verifica si un texto especificado como url es válido, comprueba que en la cadena
 * no existan mayúsculas, etiquetas html, caracteres especiales, tabulaciones,
 * saltos de línea o espacios innecesarios en el texto, si existen los cambia
 *
 * @param		url:String
 * @return      Devuelve la url:String sanitizada
 *
 */
if(!function_exists('url_valida')){
	function url_valida($url){
		$url = strtolower($url);
		$url = strip_tags($url);
		$url = htmlspecialchars($url, ENT_QUOTES);
		$url = trim($url);
		$url = preg_replace('[\n|\r|\n\r]', '', $url);
		$url = preg_replace('/[^a-z0-9\-_]/', '', $url);
		return mb_convert_encoding($url, 'UTF-8');
	}
}