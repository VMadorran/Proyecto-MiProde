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
            . view('fase/list-fase', $data)
            . view('template/footer');

    }

    public function addFase()
    {
        $faseModel = new FaseModel();
        $id = $this->request->getPost('id_fase');
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_fin' => $this->request->getPost('fecha_fin')
        ];
        if ($id) {
            $faseModel->where('id_fase', $id)->update($id, $data);
        } else {
            $faseModel->insert($data);
        }
        return $this->response->redirect(site_url('/list-fase'));
    }

    public function deleteFase($id = NULL)
    {
        $faseModel = new FaseModel();
        $faseModel->where('id_fase', $id)->delete($id);
        return $this->response->redirect(site_url('/list-fase'));
    }

    public function getPartidos($id)
    {

        $faseModel= new PartidoModel();
        $partidos=$faseModel->getPartidosFase($id);
        $data = array('partidos'=>$partidos);
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

    public function addPartidoToFase($id, $idPartido)
    {
        // dd($idFase, $idPartido);
        $partidoModel = new PartidoModel();
        $partidoModel->addFaseToPartido($id, $idPartido);
        return $this->response->redirect(site_url('/add-partidos/'. $id));
    }

}
