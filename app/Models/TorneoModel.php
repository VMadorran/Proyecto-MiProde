<?php

namespace App\Models;

use CodeIgniter\Model;

class TorneoModel extends Model
{
    protected $table = 'torneo';
    protected $allowedFields = ['id', 'nombre', 'fecha_inicio', 'fecha_fin'];


    public function getFechasToneo($id)
    {

        /** SELECT *
        FROM fase f
        WHERE(f.fecha_inicio>=(SELECT t.fecha_inicio FROM torneo t WHERE (t.id=1))
        AND f.fecha_fin <=(SELECT t.fecha_fin FROM torneo t WHERE(t.id=1)))
        AND f.id_torneo IS NULL;
        $builder = $this->db->table('fase f');*/


        $builder = $this->db->table('torneo t');

        $builder->select('t.fecha_inicio')->where('t.id', $id);
        $a = $builder->get()->getResultArray();
        $fechaIni = $a[0]['fecha_inicio'];
        //dd($fechaIni);


        $builder->select('f.fecha_fin')->where('f.id', $id);
        $b = $builder->get()->getResultArray();
        $fechaFin = $b[0]['fecha_fin'];
        //dd($fechaFin);

        $builder = $this->db->table('fase f');

        $builder->select('*')
            ->where("f.fecha_inicio >='$fechaIni'")
            ->where("f.fecha_fin <= '$fechaFin'");

        $result = $builder->get()->getResultArray();
        return $result;
    }
    
}
