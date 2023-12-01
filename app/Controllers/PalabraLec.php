<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Palabra;

class PalabraLec extends BaseController
{

public function buscarl(){    

$palabraModel = model('PalabraModel');

    if(isset($_GET['nombrePalabra'])){   
        $nombrePalabra= $_GET['nombrePalabra'];  
        $descripcion = $_GET['descripcion'];  
        $tipo = $_GET['tipo']; 
        $data['palabras']= $palabraModel

                            ->like('nombrePalabra',$nombrePalabra)
                            ->like('descripcion',$descripcion)
                            ->like('tipo',$tipo)             
                            ->findAll();
    }
    else{
        $nombrePalabra = "";
        $data['palabras']=$palabraModel->findAll();
    }

    return 
        view('common-lectura/head') .
        view('common-lectura/menu') .
        view('common-lectura/buscarl',$data) .
        view('common-lectura/footer');
}
}