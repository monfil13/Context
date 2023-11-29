<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario="usuario1";
        $password= password_hash("abcdef", PASSWORD_DEFAULT);     
        $type= "admin";
          $data = [  
            'usuario' => $usuario,
            'password' => $password,
            'type' => $type,
        ];

     
        // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
    }
    }
