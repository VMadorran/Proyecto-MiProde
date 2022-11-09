<?php

namespace App\Controllers;

use App\Models\FaseModel;

class FaseController extends BaseController
{
    public function index()
    {
        $faseModel = new FaseModel();
        $fases = $faseModel->findAll();

        $data = array(
            'titulo' => 'Lista de Fases',
            'fase' => $fases
        );

        return view('template/header')
            . view('template/sidebar')
            . view('fase/create-fase', $data)
            . view('template/footer');

    }

    /*public function agregarEquipo()
    {
        $equipoModel = new EquipoModel();
        $id = $this->request->getPost('id');

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'mundiales_ganados' => $this->request->getPost('mundiales_ganados'),
            'ranking_fifa' => $this->request->getPost('ranking_fifa'),
            'mundiales_jugados' => $this->request->getPost('mundiales_jugados'),
        ];
        if ($id) {
            $equipoModel->where('id', $id)->update($id, $data);
        } else {
            $equipoModel->insert($data);
        }
        return $this->response->redirect(site_url('/tablaEquipo'));
    }

    public function eliminarEquipo($id = NULL)
    {
        $equipoModelo = new EquipoModel();
        $equipoModelo->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/tablaEquipo'));
    }*/
}
