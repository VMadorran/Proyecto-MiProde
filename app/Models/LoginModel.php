<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table= 'usuario';

    protected $allowedFields =['id','id_rol', 'nombre_usuario', 'contraseña'];

}
