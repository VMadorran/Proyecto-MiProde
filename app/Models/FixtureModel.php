<?php

namespace App\Models;

use CodeIgniter\Model;

class FixtureModel extends Model
{

    public function getFasesByTorneoId($id) {
     /*   $builder = $this->db->table('fase f');

       return $builder->select('f.*')
            ->where('f.id_torneo', $id)->get()->getResultArray();*/

        $builder = $this->db->table('fase f');
        return $builder->select('f.nombre fase, p.fecha fecha_partido, p.hora hora_partido, el.nombre local, ev.nombre visitante')
            ->join('partido p', 'f.id = p.id_fase')
            ->join('equipo el', 'p.id_local = el.id')
            ->join('equipo ev', 'p.id_visitante = ev.id')
            ->where('f.id_torneo', $id)->get()->getResultArray();

    }

    public function getTorneoById($id)
    {

        $builder = $this->db->table('torneo t');

        $builder->select('t.nombre, t.fecha_inicio, t.fecha_fin ')
            ->where('t.id', $id);
        $torneo = $builder->get()->getResultArray();

        // dd($torneo);


        $builder = $this->db->table('fase f');

        $builder->select('f.id, f.nombre, f.fecha_inicio, f.fecha_fin')
            ->where('f.id_torneo', $id);

        $fasesConsulta = $builder->get()->getResultArray();

        //dd($fases);


        $builder = $this->db->table('partido p');
        foreach ($fasesConsulta as $f) :


            $builder->select('p.id_partido, p.fecha, p.hora, el.nombre local, ev.nombre visitante')
                ->join('equipo el', 'p.id_local = el.id')
                ->join('equipo ev', 'p.id_visitante = ev.id')
                ->where('p.id_fase', $f['id']);
            $partidosFase = $builder->get()->getResultArray();

            $faseN = array(
                'fase' => $f,
                'partidos' => $partidosFase
            );

            $fixture = array(
                'torneo' => $torneo,
                'fases' => $fasesTorneo = array(
                    'fase' => $faseN
                )
            );

          
        endforeach;  dd($fixture);
        //dd($fases)

    }

    public function getPartidosByFase($idFase) {
        $partidoModel = new PartidoModel();
        $partidos = $partidoModel->getPartidosFase($idFase);
    }

}
