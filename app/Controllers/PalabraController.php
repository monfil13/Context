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
        $palabraModel = model('ModelPalabra');
        
        $data['palabra'] = $palabraModel->findAll();
  
        return 
        view('/inicio') .
        view('palabra/mostrar',$data);
    }

    public function agregar(){
        helper(['form','url']);
        
        $palabraModel = model('ModelPalabra');
        $data['palabra'] = $palabraModel->findAll();
        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 

            view('palabra/agregar',$data);
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
        view('palabra/agregar',$data,['validation' => $validation]);
        }

    }

    public function insert(){
        $palabraModel = model('ModelPalabra');

        $data = [
            "tipo" => $_POST['tipo'],
            "palabra" => $_POST['palabra'],
            "definicion" => $_POST['definicion'],
            "sinonimo" => $_POST['sinonimo'],
            "ejemplo" => $_POST['ejemplo']
        ];
        $palabraModel->insert($data, false);
        return redirect('palabra/mostrar','refresh');
    }

    public function delete($idpalabra){
        $palabraModel = model('ModelPalabra');
        $palabraModel->delete($idpalabra);
        return redirect('palabra/mostrar','refresh');
    }

    public function editar($idpalabra){
        $palabraModel = model('ModelPalabra');
        $data['palabra'] = $palabraModel->find($idpalabra);

        return 
        view('palabra/editar',$data);
    }

    public function update(){
        $palabraModel = model('ModelPalabra');
        $data = [
            "tipo" => $_POST['tipo'],
            "palabra" => $_POST['palabra'],
            "definicion" => $_POST['definicion'],
            "sinonimo" => $_POST['sinonimo'],
            "ejemplo" => $_POST['ejemplo']
        ];
        $palabraModel->update($_POST['idPalabra'],$data);
        return redirect('palabra/mostrar','refresh');
    }

    public function buscar(){
        $definicionModel = model('DefinicionModel');
        $sinonimoModel = model('SinonimoModel');
        $ejemploModel = model('EjemploModel');

        $data['definicion'] = $definicionModel->findAll();
        $data['sinonimo'] = $sinonimoModel->findAll();
        $data['ejemplo'] = $ejemploModel->findAll();

        $palabraModel = model('ModelPalabra');
        if(isset($_GET['palabra'])){
            $palabra = $_GET['palabra'];
            $tipo = $_GET['tipo'];
            $definicion=$_GET['definicion'];
            $sinonimo = $_GET['sinonimo'];
            $ejemplo = $_GET['ejemplo'];
            
            
            $data['palabra']= $palabraModel
                                ->Like('palabra',$palabra)
                                ->Like('tipo',$tipo)
                                ->Like('definicion',$definicion)
                                ->Like('sinonimo',$sinonimo)
                                ->Like('ejemplo',$ejemplo)
                                ->findAll();
        }
        else{
            $palabra = "";
            $data['palabra']=$palabraModel->findAll();
        }

        return 
            view('palabra/buscar',$data);
    }

}
