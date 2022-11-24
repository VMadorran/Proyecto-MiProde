<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultadoModel extends Model
{
    protected $table = 'resultado_apuesta';
    protected $allowedFields = ['id', 'descripcion'];

    public function getResultados() {
        $builder = $this->db->table('resultado_apuesta');
        $builder->select('*');

        return $builder->get()->getResultArray();
    }
}
