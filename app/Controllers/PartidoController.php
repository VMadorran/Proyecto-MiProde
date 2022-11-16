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
        $id = $this->request->getPost('id_partido');
        $data = [
            'fecha' => $this->request->getPost('fecha'),
            'hora' => $this->request->getPost('hora'),
            'id_local' => $this->request->getPost('id_local'),
            'id_visitante' => $this->request->getPost('id_visitante')
        ];
        echo $data['id_local'];
        echo $id;
        if ($id) {
            echo "in update";
            $partidoModel->where('id_partido', $id)->update($id, $data);
        } else {
             echo "in insert";
             $partidoModel->insert($data);
        }
        //return $this->response->redirect(site_url('/list-partido'));

    }

    public function findAllVisitantes($equipoLocal = NULL) {
        foreach ($equipoLocal.equipos as $e) {
            echo $e;
        }
        $equipoModel = new EquipoModel();
        $equiposLocales = $equipoModel->findAll();
        return  $equiposLocales;
    }

}
