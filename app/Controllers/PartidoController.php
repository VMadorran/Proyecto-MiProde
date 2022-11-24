<?php

namespace App\Controllers;

use App\Models\PartidoModel;
use App\Models\EquipoModel;

class PartidoController extends BaseController
{

    public function index()
    {

        $equipoModel = new EquipoModel();
        $partidoModel = new PartidoModel();
        $partidos = $partidoModel->findAllPartidos();
        $equiposLocales = $equipoModel->findAll();
        $equiposVisitantes = $equipoModel->findAll();

        $data = array(
            'equiposLocales' => $equiposLocales,
            'equiposVisitantes' => $equiposVisitantes,
            'partidos' => $partidos
        );

        return view('template/header')
            . view('template/sidebar')
            . view('partido/list-partido', $data)
            . view('template/footer');
    }

    public function createPartido()
    {
        $partidoModel = new PartidoModel();
        $id = $this->request->getPost('id');
        $data = [
            'fecha' => $this->request->getPost('fecha'),
            'hora' => $this->request->getPost('hora'),
            'id_local' => $this->request->getPost('local_select'),
            'id_visitante' => $this->request->getPost('visitante_select'),
        ];

        if ($id) {
            $partidoModel->where('id', $id)->update($id, $data);
        } else {
             $partidoModel->insert($data);
        }
        return $this->response->redirect(site_url('/list-partido'));

    }

    public function findAllVisitantes($equipoLocal = NULL) {
        foreach ($equipoLocal.equipos as $e) {
            echo $e;
        }
        $equipoModel = new EquipoModel();
        $equiposLocales = $equipoModel->findAll();
        return  $equiposLocales;
    }

    public function deletePartido($id = NULL)
    {
        $partidoModel = new PartidoModel();
        $partidoModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/list-partido'));
    }

}
