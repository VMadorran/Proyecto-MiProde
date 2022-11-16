<?php

namespace App\Models;

use CodeIgniter\Model;

class PartidoModel extends Model
{
    protected  $table = 'partido';
    protected $allowedFields = ['id_partido','fecha','hora','id_local','id_visitante','id_fase'];

    function findAllPartidos() {
        return $this->select('p.*, 
     
        el.nombre local, el.mundiales_ganados l_mundiales_ganados, el.ranking_fifa l_ranking_fifa, el.mundiales_jugados l_mundiales_jugados,
        ev.nombre visitante, ev.mundiales_ganados v_mundiales_ganados, ev.ranking_fifa v_ranking_fifa, ev.mundiales_jugados v_mundiales_jugados')
            -> from('partido p')
            ->join('equipo el', 'p.id_local = el.id')
            ->join('equipo ev', 'p.id_visitante = ev.id')->findAll();

    }

}
