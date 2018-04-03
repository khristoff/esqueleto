<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'inicio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['panel/login']		= 'sesion/index';
$route['panel/auth']		= 'sesion/login';
$route['panel/registro']	= 'sesion/registro';
$route['panel/recuperar']	= 'sesion/recuperar';
$route['panel/salir']		= 'sesion/salir';

$route['sitemap\.xml']		= 'seo/sitemap';