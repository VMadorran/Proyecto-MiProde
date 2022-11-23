<?php

namespace App\Controllers;

use App\Models\FaseModel;
use App\Models\PartidoModel;
use App\Models\TorneoModel;

class TorneoController extends BaseController
{

    public function index()
    {
        $torneoModel = new TorneoModel();
        $torneos = $torneoModel->findAll();
        $data = array(
            'titulo' => 'Lista de Torneos',
            'torneos' => $torneos
        );
        return view('template/header')
            . view('template/sidebar')
            . view('torneo/torneo-list', $data)
            . view('template/footer');
    }

    public function addTorneo()
    {

        $torneoModel = new TorneoModel();
        $id = $this->request->getPost('id');

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_fin' => $this->request->getPost('fecha_fin')
        ];

        if ($id) {
            $torneoModel->where('id', $id)->update($id, $data);
        } else {
            $torneoModel->insert($data);
        }

        return $this->response->redirect(site_url('/list-torneo'));
    }

    public function deleteTorneo($id)
    {
        $torneoModel = new TorneoModel();
        $torneoModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/list-torneo'));
    }

    public function listFasesOfTorneo($id)
    {

        $faseModel = new FaseModel();

        $data = array(
            'fases' => $faseModel->getFaseOfTorneo($id),
            'id'=>$id
        );
        return view('template/header')
            . view('template/sidebar')
            . view('torneo/fases-torneo', $data)
            . view('template/footer');
    }

    public function listFasesWithoutTorneo($id)
    {
        $torneoModel = new TorneoModel();
        $faseModel = new FaseModel();

        $fases = array(
            'fases' => $faseModel->getFasesWithoutTorneo($id),
            'id'=>$id
        );

        return view('template/header')
            . view('template/sidebar')
            . view('torneo/add-fase', $fases)
            . view('template/footer');
    }

    public function addFaseToTorneo($id, $idFase)
    {

        $faseModel = new FaseModel();

        $faseModel->addTorneoToFase($id, $idFase);

        return $this->response->redirect(site_url('/add-fases/'. $id));
    }

    public function deleteFaseOfTorneo($idTorneo, $idFase)
    {

        $faseModel = new FaseModel();
        $faseModel->deleteTorneoOfFase($idFase);

        return $this->response->redirect(site_url('/get-fases/'.$idTorneo));
    }
}
