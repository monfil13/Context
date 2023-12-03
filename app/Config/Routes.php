<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

class Routes extends BaseConfig
{
    // ...

    public $routes = [
        '/palabra' => 'palabra::index',
        '/palabra/mostrar'=> 'palabra::mostrar',
        '/palabra/agregar'=> 'palabra::agregar',
        '/palabra/buscar'=> 'palabra::buscar',
        '/palabra/editar/(:num)' =>'palabra::editar/$1',
        '/palabra/delete/(:num)'=> 'palabra::delete/$1',
        '/palabra/editar'=> 'palabra::editar',
        '/palabra/delete'=> 'palabra::delete',
        
        '/palabra/insert'=> 'palabra::insert',
        '/palabra/update'=> 'palabra::update',

        '/ejemplo'=>  'ejemplo::index',
        '/ejemplo/mostrar'=>  'ejemplo::mostrar',
        '/ejemplo/agregar'=>  'ejemplo::agregar',
        '/ejemplo/buscar'=>  'ejemplo::buscar',
        '/ejemplo/editar/(:num)'=>  'ejemplo::editar/$1',
        '/ejemplo/delete/(:num)'=>  'ejemplo::delete/$1',
        '/ejemplo/editar'=>  'ejemplo::editar',
        '/ejemplo/delete'=>  'ejemplo::delete',

        '/ejemplo/insert'=>  'ejemplo::insert',
        '/ejemplo/update'=>  'ejemplo::update'
    ];

}


$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/salir', 'Home::salir');

$routes->post('/login', 'Home::login');

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
$routes->get('/common-lectura/buscarl', 'palabralec::buscarl');


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
$routes->get('/common-lectura/buscarlj', 'ejemplolec::buscarlj');




