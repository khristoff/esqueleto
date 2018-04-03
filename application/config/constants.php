<?php
defined('BASEPATH') OR exit('No direct script access allowed');

defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


defined('LENGUAJE')		OR define('LENGUAJE', 'es');
defined('NOMBRE')		OR define('NOMBRE', 'Proyecto');
defined('PROTOCOLO')	OR define('PROTOCOLO', 'http://');
defined('DOMINIO')		OR define('DOMINIO', 'khristoff.local:5757');
defined('ROOT')			OR define('ROOT', PROTOCOLO.DOMINIO);
defined('LOGO')			OR define('LOGO', false);
defined('ESLOGAN')      OR define('ESLOGAN', false);
defined('DESCRIPCION')	OR define('DESCRIPCION', false);
defined('ETIQUETAS')	OR define('ETIQUETAS', false);
defined('USUARIO')		OR define('USUARIO', '/assets/images/default/profile.png');
defined('COPYRIGHT')	OR define('COPYRIGHT', 'Montealegre Digital Marketing');

defined('LOGIN')		OR define('LOGIN', ROOT.'/panel/login');
defined('WELCOME')		OR define('WELCOME', '/panel');
defined('PANEL')		OR define('PANEL', '/panel');

defined('BUSQUEDA')		OR define('BUSQUEDA', true);
defined('RECUPERAR')	OR define('RECUPERAR', true);
defined('REGISTRO')		OR define('REGISTRO', true);

defined('ITEMSPORPAGINA') OR define('ITEMSPORPAGINA', false);

defined('GOOGLE')		OR define('GOOGLE', false);
defined('HISTATS')		OR define('HISTATS', false);
defined('ANALYTICS')	OR define('ANALYTICS', false);
defined('VERIFICATION')	OR define('VERIFICATION', false);
defined('MAPS')			OR define('MAPS', 'AIzaSyAoRNaIu7LtdMg6z2k8fwTTeQwwtK0MRYU');

defined('COORDENADAS')	OR define('COORDENADAS', false);
defined('CORREO')		OR define('CORREO', false);
defined('DIRECCION')	OR define('DIRECCION', false);
defined('TELEFONO')		OR define('TELEFONO', false);

defined('FACEBOOK')		OR define('FACEBOOK', false);
defined('FLICKR')		OR define('FLICKR', false);
defined('GOOGLEPLUS')	OR define('GOOGLEPLUS', false);
defined('INSTAGRAM')	OR define('INSTAGRAM', false);
defined('LINKEDIN')		OR define('LINKEDIN', false);
defined('PINTEREST')	OR define('PINTEREST', false);
defined('RSS')			OR define('RSS', false);
defined('SKYPE')		OR define('SKYPE', false);
defined('SNAPCHAT')		OR define('SNAPCHAT', false);
defined('TWITTER')		OR define('TWITTER', false);
defined('WHATSAPP')		OR define('WHATSAPP', false);
defined('YOUTUBE')		OR define('YOUTUBE', false);

defined('SEMILLA')		OR define('SEMILLA', '3tr87TbtycUYQWvfcgd/%412+àjh()*â');