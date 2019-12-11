<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'EmpresaController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//Routing de Auth
$route['login'] = 'Auth/index';
$route['register'] = 'Auth/register';
$route['logout'] = 'Auth/logout';

//Routing de empresas
$route['empresas'] = 'EmpresaController/index';
$route['empresas/delete'] = 'EmpresaController/delete';
$route['empresas/new'] = 'EmpresaController/news';
$route['empresas/edit/(:any)'] = 'EmpresaController/edit/$1';
$route['empresas/ver'] = 'EmpresaController/ver';
$route['empresas/detalle/(:any)'] = 'EmpresaController/detalle/$1';
$route['empresas/update/(:any)'] = 'EmpresaController/update/$1';
$route['empresas/(:num)'] = "EmpresaController/show/$1";

//Routing de usuarios
$route['usuarios'] = 'UsuarioController/index';
$route['usuarios/delete'] = 'UsuarioController/delete';
$route['usuarios/new'] = 'UsuarioController/news';
$route['usuarios/edit/(:any)'] = 'UsuarioController/edit/$1';
$route['usuarios/update/(:any)'] = 'UsuarioController/update/$1';
$route['usuarios/(:num)'] = "UsuarioController/show/$1";

