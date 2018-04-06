<?php
defined('BASEPATH') OR exit('No direct script access allowed');
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb');
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b');
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0);
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1);
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3);
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4);
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5);
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6);
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7);
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8);
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9);
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125);


/*
 *---------------------------------------------------------------
 * CONSTANTES GLOBALES PERSONALIZADAS
 *---------------------------------------------------------------
 *
 * Puedes agregar constantes personalizadas para el proyecto en
 * cuestión, por favor agrégalas de acuerdo a su grupo y mantén
 * un orden en su declaración.
 *
 * NOTA: Por favor no modifiques los valores en la lista de arriba
 */

// Dominios
defined('PROTOCOLO')	OR define('PROTOCOLO', stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://');
defined('DOMINIO')		OR define('DOMINIO', (ENVIRONMENT == 'development') ? 'khristoff.local:5757' : 'dominio.com');

// General
defined('LENGUAJE')		OR define('LENGUAJE', 'es');
defined('NOMBRE')		OR define('NOMBRE', 'Proyecto');
defined('ROOT')			OR define('ROOT', PROTOCOLO.DOMINIO);
defined('LOGO')			OR define('LOGO', null);
defined('ESLOGAN')      OR define('ESLOGAN', null);
defined('DESCRIPCION')	OR define('DESCRIPCION', null);
defined('ETIQUETAS')	OR define('ETIQUETAS', null);
defined('USUARIO')		OR define('USUARIO', '/assets/images/default/profile.png');
defined('COPYRIGHT')	OR define('COPYRIGHT', 'Montealegre Digital Marketing');

// Redireccionamientos
defined('LOGIN')		OR define('LOGIN', ROOT.'/panel/login');
defined('WELCOME')		OR define('WELCOME', '/panel');
defined('PANEL')		OR define('PANEL', '/panel');

// Proyecto
defined('BUSQUEDA')		OR define('BUSQUEDA', true);
defined('RECUPERAR')	OR define('RECUPERAR', true);
defined('REGISTRO')		OR define('REGISTRO', true);
defined('ITEMSPORPAGINA') OR define('ITEMSPORPAGINA', null);

// Analytics
defined('ADSENSE')		OR define('ADSENSE', null);
defined('ADWORDS')		OR define('ADWORDS', null);
defined('GOOGLE')		OR define('GOOGLE', null);
defined('HISTATS')		OR define('HISTATS', null);
defined('ANALYTICS')	OR define('ANALYTICS', null);
defined('VERIFICATION')	OR define('VERIFICATION', null);
defined('GOOGLEMAPS')	OR define('GOOGLEMAPS', 'AIzaSyAoRNaIu7LtdMg6z2k8fwTTeQwwtK0MRYU');

// Facebook
defined('FACEBOOK_APPID')	  OR define('FACEBOOK_APPID', null);
defined('FACEBOOK_SECRETKEY') OR define('FACEBOOK_SECRETKEY', null);

// Contacto
defined('COORDENADAS')	OR define('COORDENADAS', null);
defined('CORREO')		OR define('CORREO', null);
defined('DIRECCION')	OR define('DIRECCION', null);
defined('TELEFONO')		OR define('TELEFONO', null);

// Redes sociales
defined('FACEBOOK')		OR define('FACEBOOK', null);
defined('FLICKR')		OR define('FLICKR', null);
defined('GOOGLEPLUS')	OR define('GOOGLEPLUS', null);
defined('INSTAGRAM')	OR define('INSTAGRAM', null);
defined('LINKEDIN')		OR define('LINKEDIN', null);
defined('PINTEREST')	OR define('PINTEREST', null);
defined('RSS')			OR define('RSS', null);
defined('SKYPE')		OR define('SKYPE', null);
defined('SNAPCHAT')		OR define('SNAPCHAT', null);
defined('TWITTER')		OR define('TWITTER', null);
defined('WHATSAPP')		OR define('WHATSAPP', null);
defined('YOUTUBE')		OR define('YOUTUBE', null);

// Seguridad
defined('SEMILLA')		OR define('SEMILLA', '3tr87TbtycUYQWvfcgd/%412+àjh()*â');