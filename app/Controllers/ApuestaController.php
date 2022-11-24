<?php

namespace App\Controllers;

use App\Models\ApuestaModel;
use App\Models\EquipoModel;
use App\Models\FaseModel;
use App\Models\PartidoModel;
use App\Models\TorneoModel;

class ApuestaController extends BaseController
{

    public function index()
    {
        $torneoModel = new TorneoModel();
        $torneos = $torneoModel->findAll();
        $faseModel = new FaseModel();
        $fases = $faseModel->findAll();

        $data = array(
            'titulo' => 'Torneos Vigentes',
            'torneos' => $torneos,
            'fases' => $fases
        );

        return view('template/header')
            . view('template/sidebar')
            . view('apuesta/torneos', $data)
            . view('template/footer');

    }

    public function apuestas()
    {
        $apuestaModel = new ApuestaModel();
        $apuestas = $apuestaModel->findAll();
        $faseModel = new FaseModel();
        $fases = $faseModel->findAll();
        $resultados = $apuestaModel->getResultados();

        $data = array(
            'titulo' => 'Apuestas',
            'apuestas' => $apuestas,
            'resultados' => $resultados,
            'fases' => $fases
        );

        return view('template/header')
            . view('template/sidebar')
            . view('apuesta/list-apuesta', $data)
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

    public function  getPartidos($id = NULL){

        $faseModel= new FaseModel();
        $partidos=$faseModel->getPartidosFase($id);
        $data = array('partidos'=>$partidos);

        return view('template/header')
            . view('template/sidebar')
            . view('fase/partidos-fase', $data)
            . view('template/footer');

    }

}
