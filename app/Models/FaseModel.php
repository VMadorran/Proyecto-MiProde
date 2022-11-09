<?php

namespace App\Models;

use CodeIgniter\Model;

class FaseModel extends Model
{
    protected $table = 'fase';
    protected $allowedFields = ['id_fase', 'nombre', 'fecha_inicio', 'fecha_fin'];

    public function getFase()
    {

    }
}
