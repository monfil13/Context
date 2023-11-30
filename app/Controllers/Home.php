<?php

namespace App\Controllers;
use App\Models\Usuarios;
class Home extends BaseController
{
    public function index(): string
    {
    $mensaje= session('mensaje');
        return view('welcome_message', ["mensaje" =>$mensaje]);
    }

    public function inicio(){
        return view('/welcome_message');
    }

    public function login()
    {
$usuario= $this->request->getPost('usuario');
$password = $this->request->getPost('password');
$Usuario = new Usuarios ();

$datosUsuario = $Usuario->obtenerUsuario(['usuario' =>$usuario]);

if(count($datosUsuario) > 0 && 
password_verify($password, $datosUsuario[0]['password'])){
    
    $data=[
"usuario"=> $datosUsuario[0]['usuario'],
"tipo"=> $datosUsuario[0]['tipo']
    ];
    $session=session();
    $session->set($data);

    return redirect()->to(base_url('/welcome_message'))->with('mensaje'. '1');

} else{
    return redirect()->to(base_url('/'))->with('mensaje'. '0');
}

    }

}
