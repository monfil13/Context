<?php namespace App\Models;
use CodeIgniter\Model;

class ModelUsuario extends Model{
public function obtenerUsuarios($data){
$Usuario= $this->db->table('t_usuario');
$Usuario->where($data);
return $Usuario->get()->getResultArray();
}
}