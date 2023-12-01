<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();

        // Verificar si el usuario es administrador y lleva por nombre de usuario mi apellido
        if(!session("tipo") == "admin" && ("usuario" == "monfil")){
            // Redirigir a la página de inicio de sesión
            return redirect()->to('/login');
        }

        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
