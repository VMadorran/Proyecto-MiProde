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
}
