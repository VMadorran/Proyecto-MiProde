<?php

namespace App\Models;

use CodeIgniter\Model;

class PartidoModel extends Model
{
    protected  $table = 'partido';
    protected $allowedFields = ['id_partido','fecha','hora','id_local','id_visitante','id_fase'];

}