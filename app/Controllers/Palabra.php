<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Palabra extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        //
    }

    public function mostrar(){
        $PalabraModel = model('PalabraModel');        
        $data['palabras'] = $PalabraModel->findAll();
        $data['totalPalabras'] = $PalabraModel->countAll();

  
       return 
        view('common/head') .
        view('common/menu') .
        view('palabra/mostrar',$data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $PalabraModel = model('PalabraModel');
        $data['palabra'] = $PalabraModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('palabra/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
            view('common/head') .
        view('common/menu') .
        view('palabra/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }

        // If you want to get the validated data.
        //$validData = $this->validator->getValidated();
       /* return 
        view('common/head') .
        view('common/menu') .
        view('alumno/agregar') .
        view('common/footer');*/
    }

    public function insert(){
        $PalabraModel = model('PalabraModel');

        $data = [
            
            "nombrePalabra" => $_POST['nombrePalabra'],
            "descripcion" => $_POST['descripcion'],
   "tipo" => $_POST['tipo']
        ];
        $PalabraModel->insert($data, false);
        return redirect('palabra/mostrar','refresh');
    }

    public function delete($idPalabra){
        $PalabraModel = model('PalabraModel');
        $PalabraModel->delete($idPalabra);
        return redirect('palabra/mostrar','refresh');
    }

    public function editar($idPalabra){
        $PalabraModel = model('PalabraModel');
        $data['palabra'] = $PalabraModel->find($idPalabra);

        return 
        view('common/head') .
        view('common/menu') .
        view('palabra/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $PalabraModel = model('PalabraModel');
        $data = [
            "nombrePalabra" => $_POST['nombrePalabra'],
            "descripcion" => $_POST['descripcion'],
            "tipo" => $_POST['tipo']
        ];
        $PalabraModel->update($_POST['idPalabra'],$data);
        return redirect('palabra/mostrar','refresh');
    }

    public function buscar(){    

        $PalabraModel = model('PalabraModel');

            if(isset($_GET['nombrePalabra'])){   
                $nombrePalabra= $_GET['nombrePalabra'];  
                $descripcion = $_GET['descripcion'];  
                $tipo = $_GET['tipo']; 
                $data['palabras']= $PalabraModel

                                    ->like('nombrePalabra',$nombrePalabra)
                                    ->like('descripcion',$descripcion)
                                    ->like('tipo',$tipo)             
                                    ->findAll();
            }
            else{
                $nombrePalabra = "";
                $data['palabras']=$PalabraModel->findAll();
            }
    
            return 
                view('common/head') .
                view('common/menu') .
                view('palabra/buscar',$data) .
                view('common/footer');
        }

    }