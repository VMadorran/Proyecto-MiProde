<?php

namespace App\Models;

use CodeIgniter\Model;

class FaseModel extends Model
{
    protected $table = 'fase';
    protected $allowedFields = ['id_fase', 'nombre', 'fecha_inicio', 'fecha_fin'];

    public function getPartidosFase($id)
    {

        $this->select('p.*, el.nombre as local, ev.nombre as visitante')
            ->from('partido p')
            ->join('equipo el', 'p.id_local = el.id')
            ->join('equipo ev', 'p.id_visitante = ev.id')
            ->where('p.id_fase =', $id)->findAll();

    }

    public function getPartidosSinFase(){

    }
}
