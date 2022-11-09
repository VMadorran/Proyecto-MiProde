<?php

namespace App\Controllers;

use App\Models\PartidoModel;
use App\Models\EquipoModel;

class PartidoController extends BaseController
{

    public function index()
    {

        $equipoModel = new EquipoModel();
        $equipos = $equipoModel->findAll();

        $data = array(
            'equipos' => $equipos
        );

        return view('template/header')
            . view('template/sidebar')
            . view('partido/create-partido', $data)
            . view('template/footer');
    }

    public function newPartido()
    {

        $partidoModel = new PartidoModel();
        $id = $this->request->getPost('id_partido');
        $data = [
            'fecha' => $this->request->getPost('fecha'),
            'hora' => $this->request->getPost('hora'),
            'id_local' => $this->request->getPost('id_local'),
            'id_visitante' => $this->request->getPost('id_visitante')
        ];
        if ($id) {
            $partidoModel->where('id_partido', $id)->update($id, $data);
        } else {
            $partidoModel->insert($data);
        }

    }

}