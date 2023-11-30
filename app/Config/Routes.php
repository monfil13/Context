<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/welcome_message', 'Home::welcome_message');
$routes->get('/inicio', 'Home::inicio');

$routes->post('/', 'Home::inicio');

//Rutas de Palabras
$routes->get('/palabra', 'palabra::index');
$routes->get('/palabra/mostrar', 'palabra::mostrar');
$routes->get('/palabra/agregar', 'palabra::agregar');
$routes->get('/palabra/buscar', 'palabra::buscar');
$routes->get('/palabra/editar/(:num)', 'palabra::editar/$1');
$routes->get('/palabra/delete/(:num)', 'palabra::delete/$1');
$routes->get('/palabra/editar', 'palabra::editar');
$routes->get('/palabra/delete', 'palabra::delete');

$routes->post('/palabra/insert', 'palabra::insert');
$routes->post('/palabra/update', 'palabra::update');

//Rutas de Palabras (Búsqueda de Lectura)
$routes->get('/palabra/buscarl', 'palabra::buscarl');


//Rutas de Ejemplos
$routes->get('/ejemplo', 'ejemplo::index');
$routes->get('/ejemplo/mostrar', 'ejemplo::mostrar');
$routes->get('/ejemplo/agregar', 'ejemplo::agregar');
$routes->get('/ejemplo/buscar', 'ejemplo::buscar');
$routes->get('/ejemplo/editar/(:num)', 'ejemplo::editar/$1');
$routes->get('/ejemplo/delete/(:num)', 'ejemplo::delete/$1');
$routes->get('/ejemplo/editar', 'ejemplo::editar');
$routes->get('/ejemplo/delete', 'ejemplo::delete');

$routes->post('/ejemplo/insert', 'ejemplo::insert');
$routes->post('/ejemplo/update', 'ejemplo::update');

//Rutas de Ejemplos (Búsqueda de Lectura)
$routes->get('/ejemplo/buscarl', 'ejemplo::buscarl');