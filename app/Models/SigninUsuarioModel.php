<?php

namespace App\Models;

use CodeIgniter\Model;
class SigninUsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = ['id', 'nombre_usuario', 'contraseña', 'dni','nombre', 'apellido', 'email', 'fecha_nacimiento'];
}