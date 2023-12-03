<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, array<int, string>|string> [filter_name => classname]
     *                                               or [filter_name => [classname1, classname2, ...]]
     * @phpstan-var array<string, class-string|list<class-string>>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'MyFilter'   => \App\Filters\MyFilter::class,
        'Auth'          => \App\Filters\Auth::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, array<string>>
     * @phpstan-var array<string, list<string>>|array<string, array<string, array<string, string>>>
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

   /* public array  $filters = [
        'Auth' => ['before' => 
        ['/palabra/index',    
        "/palabra/mostrar",        
        '/palabra/agregar', 
        '/palabra/buscar', 
        '/palabra/editar/(:num)', 
        '/palabra/delete/(:num)', 
        '/palabra/editar', 
        '/palabra/delete', 
        '/palabra/insert', 
        '/palabra/update',
        '/ejemplo/index', 
        '/ejemplo/mostrar', 
        '/ejemplo/agregar', 
        '/ejemplo/buscar', 
        '/ejemplo/editar/(:num)', 
        '/ejemplo/delete/(:num)', 
        '/ejemplo/editar', 
        '/ejemplo/delete', 
        
        '/ejemplo/insert', 
        '/ejemplo/update']],


        
        "Sesion" =>[
            "before "=> [
               
         //Rutas de Palabras
        '/palabra/index',    
        "/palabra/mostrar",        
        '/palabra/agregar', 
        '/palabra/buscar', 
        '/palabra/editar/(:num)', 
        '/palabra/delete/(:num)', 
        '/palabra/editar', 
        '/palabra/delete', 
        
        '/palabra/insert', 
        '/palabra/update', 
        
        //Rutas de Ejemplos
        '/ejemplo/index', 
        '/ejemplo/mostrar', 
        '/ejemplo/agregar', 
        '/ejemplo/buscar', 
        '/ejemplo/editar/(:num)', 
        '/ejemplo/delete/(:num)', 
        '/ejemplo/editar', 
        '/ejemplo/delete', 
        
        '/ejemplo/insert', 
        '/ejemplo/update'
            ]
        ]

    ];

*/


public $filters = [

    "MyFilter" =>

            ['before' => 
            ['/palabra/index',    
            "/palabra/mostrar",        
            '/palabra/agregar', 
            '/palabra/buscar', 
            '/palabra/editar/(:num)', 
            '/palabra/delete/(:num)', 
            '/palabra/editar', 
            '/palabra/delete', 
            '/palabra/insert', 
            '/palabra/update',
            '/ejemplo/index', 
            '/ejemplo/mostrar', 
            '/ejemplo/agregar', 
            '/ejemplo/buscar', 
            '/ejemplo/editar/(:num)', 
            '/ejemplo/delete/(:num)', 
            '/ejemplo/editar', 
            '/ejemplo/delete', 
            
            '/ejemplo/insert', 
            '/ejemplo/update']]

];

}