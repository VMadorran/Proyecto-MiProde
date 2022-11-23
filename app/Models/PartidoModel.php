<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class PartidoModel extends Model
{

    protected $table = 'partido';
    protected $allowedFields = ['id_partido', 'fecha', 'hora', 'id_local', 'id_visitante', 'id_fase'];



    public function getPartidosFase($id)
    {
        $builder = $this->db->table('partido p');
        $builder->select('p.id_partido, p.fecha, p.hora, el.nombre local, ev.nombre visitante')
            ->join('equipo el', 'p.id_local = el.id')
            ->join('equipo ev', 'p.id_visitante = ev.id')
            ->where('p.id_fase', $id);
        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function listPartidosSinFase($id)
    {

        /*SELECT p.id_partido, p.fecha, p.hora, el.nombre AS local, ev.nombre AS visitante
            FROM partido p
            JOIN equipo el ON (p.id_local = el.id)
            JOIN equipo ev ON (p.id_visitante = ev.id)
            WHERE p.fecha BETWEEN (SELECT f.fecha_inicio FROM fase f WHERE f.id=2) AND (SELECT f.fecha_fin FROM fase f WHERE f.id=2)
            AND p.id_fase IS NULL;*FUNCIONA EN BASE*/


        $builder = $this->db->table('fase f');

        $builder->select('f.fecha_inicio')->where('f.id', $id);
        $a = $builder->get()->getResultArray();
        $fechaIni = $a[0]['fecha_inicio'];


        $builder->select('f.fecha_fin')->where('f.id', $id);
        $b = $builder->get()->getResultArray();
        $fechaFin = $b[0]['fecha_fin'];


        $builder = $this->db->table('partido p');

        $builder->select('p.id_partido, p.fecha, p.hora, el.nombre local, ev.nombre visitante')
            ->join('equipo el', 'p.id_local = el.id')
            ->join('equipo ev', 'p.id_visitante = ev.id')
            ->where('p.id_fase IS NULL')
            ->where("p.fecha BETWEEN '$fechaIni' AND '$fechaFin'");

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function deletePartidoOfFase($idPartido)
    {

        $builder = $this->db->table('partido p');

        $builder->set('id_fase', NULL)
            ->where('id_partido', $idPartido)
            ->update();
    }

    public function addFaseToPartido($idFase, $idPartido)
    {

        $builder = $this->db->table('partido p');

        $builder->set('id_fase', $idFase)
            ->where('id_partido', $idPartido)
            ->update();
    }
}
