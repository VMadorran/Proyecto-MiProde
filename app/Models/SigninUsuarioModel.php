<?php

namespace App\Models;

use CodeIgniter\Model;
class SigninUsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = ['id', 'id_rol', 'nombre_usuario', 'contraseña', 'dni','nombre', 'apellido', 'email', 'fecha_nacimiento'];


    public function getUserById($id) {
        $builder = $this->db->table('usuario u');
        $builder->select('u.*, r.nombre')
            ->join('rol r', 'u.id_rol = r.id')
            ->where('u.id =', $id);
        return $builder->get()->getResult();
    }
}
