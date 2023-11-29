<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/logout', 'Home::logout');

$routes->post('/login', 'Home::login');

//Rutas de Palabras
$routes->get('/palabra', 'palabra::index');
$routes->get('/palabra/mostrar', 'palabra::mostrar');
$routes->get('/palabra/agregar', 'palabra::agregar');
$routes->get('/palabra/buscar', 'palabra::buscar');
$routes->get('/palabra/editar/(:int)', 'palabra::editar/$1');
$routes->get('/palabra/delete/(:int)','palabra::delete/$1');

$routes->post('/palabra/insert', 'palabra::insert');
$routes->post('/palabra/update', 'palabra::update');