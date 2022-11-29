<?php

namespace App\Models;

use CodeIgniter\Model;

class ApuestaModel extends Model
{
    protected $table = 'apuesta';
    protected $allowedFields = ['id', 'id_usuario', 'id_partido', 'resultado', 'fecha'];

    public function getResultados() {
        $builder = $this->db->table('resultado_apuesta');
        $builder->select('*');

        return $builder->get()->getResultArray();
    }

    public function getFaseOfTorneo($idTorneo)
    {
        $builder = $this->db->table('fase f');
        $builder->select('*')
            ->where('f.id_torneo', $idTorneo);

        return $result = $builder->get()->getResultArray();
    }

    public function getFasesWithoutTorneo($id)
    {

        $builder = $this->db->table('torneo t');

        $builder->select('t.fecha_inicio')->where('t.id', $id);
        $a = $builder->get()->getResultArray();
        $fechaIni = $a[0]['fecha_inicio'];//implode() convierte el array en cadena
        //dd($fechaIni);


        $builder->select('t.fecha_fin')->where('t.id', $id);
        $b = $builder->get()->getResultArray();
        $fechaFin = $b[0]['fecha_fin'];
        //dd($fechaFin);

        $builder = $this->db->table('fase f');

        $builder->select('*')
            ->where('f.id_torneo IS NULL')
            ->where("f.fecha_inicio >='$fechaIni'")
            ->where("f.fecha_fin <= '$fechaFin'");

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function deleteTorneoOfFase($idFase)
    {
        $builder = $this->db->table('fase f');

        $builder->set('id_torneo', NULL)
            ->where('id', $idFase)
            ->update();
    }

    public function addTorneoToFase($idTorneo, $idFase)
    {

        $builder = $this->db->table('fase f');
        $builder->set('id_torneo', $idTorneo)
            ->where('id', $idFase)
            ->update();
    }

    public function actualTorneos()
    {

        $builder = $this->db->table('torneo t');
        $builder->select('t.id, t.nombre, t.fecha_inicio, t.fecha_fin')
            ->join('fase f', 't.id = f.id_torneo')
            ->join('partido p', 'f.id = p.id_fase')
            ->where('p.fecha>=CURRENT_DATE')
            ->where('p.hora<CURRENT_TIME')
            ->groupBy('t.id');
        $resultado = $builder->get()->getResultArray();
        return $resultado;
    }

    public function actualFase($idTorneo)
    {
        $builder = $this->db->table('fase f');
        $builder->select('f.id, f.nombre, f.fecha_inicio, fecha_fin')
            ->join('partido p', 'f.id = p.id_fase')
            ->where('p.fecha>=CURRENT_DATE')
            ->where('p.hora<CURRENT_TIME')
            ->where('f.id_torneo', $idTorneo)
            ->groupBy('f.id');
        $resultado = $builder->get()->getResultArray();
        // dd($resultado);
        return $resultado;
    }

    public function actualPartido($idFase){

        $builder = $this->db->table('partido P');
        $builder->select('p.id_partido, el.nombre as local, ev.nombre visitante ')
            ->join('equipo el', 'p.id_local = el.id')
            ->join('equipo ev', 'p.id_visitante = ev.id')
            ->where('p.fecha>=CURRENT_DATE')
            ->where('p.hora<CURRENT_TIME')
            ->where('p.id_fase');
        $resultado = $builder->get()->getResultArray();
        dd($resultado);
    }
}
