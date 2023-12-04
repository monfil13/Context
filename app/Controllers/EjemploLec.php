<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Ejemplo;

class EjemploLec extends BaseController
{
  
      public function buscarlj(){    

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
                    view('common-lectura/buscarlj',$data) .
                    view('common-lectura/footer');
            }
    }