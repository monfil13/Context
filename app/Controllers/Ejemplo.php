<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ejemplo extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        //
    }

    public function mostrar(){
        $EjemploModel = model('EjemploModel');
        $data['ejemplos'] = $EjemploModel->findAll();
        $data['totalEjemplos'] = $EjemploModel->countAll();
  
       return 
        view('common/head') .
        view('common/menu') .
        view('ejemplo/mostrar',$data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $EjemploModel = model('EjemploModel');
        $data['ejemplo'] = $EjemploModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('ejemplo/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
            view('common/head') .
        view('common/menu') .
        view('ejemplo/agregar',$data,['validation' => $validation]) .
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
        $EjemploModel = model('EjemploModel');

        $data = [
            "ingles" => $_POST['ingles'],
            "español" => $_POST['español']
        ];
        $EjemploModel->insert($data, false);
        return redirect('ejemplo/mostrar','refresh');
    }

    public function delete($idEjemplo){
        $EjemploModel = model('EjemploModel');
        $EjemploModel->delete($idEjemplo);
        return redirect('ejemplo/mostrar','refresh');
    }

    public function editar($idEjemplo){
        $EjemploModel = model('EjemploModel');
        $data['ejemplo'] = $EjemploModel->find($idEjemplo);

        return 
        view('common/head') .
        view('common/menu') .
        view('ejemplo/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $EjemploModel = model('EjemploModel');
        $data = [
            "ingles" => $_POST['ingles'],
            "español" => $_POST['español']
        ];
        $EjemploModel->update($_POST['idEjemplo'],$data);
        return redirect('ejemplo/mostrar','refresh');
    }

    public function buscar(){    

        $EjemploModel = model('EjemploModel');

            if(isset($_GET['ingles'])){
                $ingles = $_GET['ingles'];   
                $español = $_GET['español'];  
                
                $data['ejemplos']= $EjemploModel
                                    ->like('ingles',$ingles)
                                    ->like('español',$español)
                                    ->findAll();
            }
            else{
                $ejemplo = "";
                $data['ejemplos']=$EjemploModel->findAll();
            }
    
            return 
                view('common/head') .
                view('common/menu') .
                view('ejemplo/buscar',$data) .
                view('common/footer');
        }

        public function buscarl(){    

            $EjemploModel = model('EjemploModel');
    
                if(isset($_GET['ingles'])){
                    $ingles = $_GET['ingles'];   
                    $español = $_GET['español'];  
                    
                    $data['ejemplos']= $EjemploModel
                                        ->like('ingles',$ingles)
                                        ->like('español',$español)
                                        ->findAll();
                }
                else{
                    $ejemplo = "";
                    $data['ejemplos']=$EjemploModel->findAll();
                }
        
                return 
                    view('common-lectura/head') .
                    view('common-lectura/menu') .
                    view('ejemplo/buscarl',$data) .
                    view('common-lectura/footer');
            }

    }