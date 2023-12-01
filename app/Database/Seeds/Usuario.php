<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {

        $usuario= "monfil";
        $password = password_hash("sandy19", PASSWORD_DEFAULT);
        $tipo= "admin";

        $data= [
                'usuario' =>$usuario,
                'password' =>$password,
                'tipo'=>$tipo

        ];

        // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
    }
}