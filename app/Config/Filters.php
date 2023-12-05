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
        //Filtro para autenticación del administrador
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
        ],
    ];


    public array $methods = [];
    
    //Protección de Rutas
    public $filters = [
    "MyFilter" =>
            ['before' => 
            ['/palabra/index',
            '/inicio',    
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