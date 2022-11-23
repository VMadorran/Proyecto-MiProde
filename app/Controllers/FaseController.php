<?php

namespace App\Controllers;

use App\Models\EquipoModel;
use App\Models\FaseModel;
use App\Models\PartidoModel;

class FaseController extends BaseController
{

    public function index()
    {
        $faseModel = new FaseModel();
        $fases = $faseModel->findAll();

        $data = array(
            'titulo' => 'Lista de Fases',
            'fases' => $fases
        );

        return view('template/header')
            . view('template/sidebar')
            . view('fase/table-fase', $data)
            . view('template/footer');
    }

    public function addFase()
    {
        $faseModel = new FaseModel();
        $id = $this->request->getPost('id');
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_fin' => $this->request->getPost('fecha_fin')
        ];
        if ($id) {
            $faseModel->where('id', $id)->update($id, $data);
        } else {
            $faseModel->insert($data);
        }
        return $this->response->redirect(site_url('/table-fase'));
    }

    public function deleteFase($id)
    {
        $faseModel = new FaseModel();
        $faseModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/table-fase'));
    }

    public function getPartidos($id)
    {

        $partidoModel = new PartidoModel();
        $partidos = $partidoModel->getPartidosFase($id);
        $data = array(
            'partidos' => $partidos,
            'id'=>$id
        );

        return view('template/header')
            . view('template/sidebar')
            . view('fase/partidos-fase', $data)
            . view('template/footer');
    }

    public function deletePartido($id, $idPartido)
    {
        $partidoModel = new PartidoModel();
        $partidoModel->deletePartidoOfFase($idPartido);
        return $this->response->redirect(site_url('/get-partidos/'. $id));
    }

    public function addPartidos($id)
    {

        $partidoModel = new PartidoModel();

        $data = array(
            'partidos' => $partidoModel->listPartidosSinFase($id),
            'id' => $id

        );

        return view('template/header')
            . view('template/sidebar')
            . view('fase/add-partidos', $data)
            . view('template/footer');
    }

    public function addPartidoToFase($idFase, $idPartido)
    {
        // dd($idFase, $idPartido);
        $partidoModel = new PartidoModel();
        $partidoModel->addFaseToPartido($idFase, $idPartido);
        return $this->response->redirect(site_url('/add-partidos/'. $idFase));
    }
}
