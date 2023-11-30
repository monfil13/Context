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
        $palabraModel = model('PalabraModel');
        $data['palabras'] = $palabraModel->findAll();
        $data['totalPalabras'] = $palabraModel->countAll();
  
       return 
        view('common/head') .
        view('common/menu') .
        view('palabra/mostrar',$data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $palabraModel = model('palabraModel');
        $data['palabra'] = $palabraModel->findAll();

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
        $palabraModel = model('PalabraModel');

        $data = [
            
            "nombrePalabra" => $_POST['nombrePalabra'],
            "descripcion" => $_POST['descripcion'],
   "tipo" => $_POST['tipo']
        ];
        $palabraModel->insert($data, false);
        return redirect('palabra/mostrar','refresh');
    }

    public function delete($idPalabra){
        $palabraModel = model('PalabraModel');
        $palabraModel->delete($idPalabra);
        return redirect('palabra/mostrar','refresh');
    }

    public function editar($idPalabra){
        $palabraModel = model('PalabraModel');
        $data['palabra'] = $palabraModel->find($idPalabra);

        return 
        view('common/head') .
        view('common/menu') .
        view('palabra/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $palabraModel = model('PalabraModel');
        $data = [
            "nombrePalabra" => $_POST['nombrePalabra'],
            "descripcion" => $_POST['descripcion'],
            "tipo" => $_POST['tipo']
        ];
        $palabraModel->update($_POST['idPalabra'],$data);
        return redirect('palabra/mostrar','refresh');
    }

    public function buscar(){    

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
                view('common/head') .
                view('common/menu') .
                view('palabra/buscar',$data) .
                view('common/footer');
        }

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
                    view('palabra/buscarl',$data) .
                    view('common-lectura/footer');
            }

    }