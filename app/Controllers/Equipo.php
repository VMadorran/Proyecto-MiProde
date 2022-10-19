<?php

namespace App\Controllers;

use App\Models\EquipoModel;

class Equipo extends BaseController
{
    public function index()
    {

        $equipoModel = new EquipoModel();
        $equipos = $equipoModel->findAll();

        $data = array(
            'titulo' => 'Lista de Equipos',
            'equipos' => $equipos
        );

        return view('template/header')
            . view('template/sidebar')
            . view('template/tablaEquipo', $data)
            . view('template/footer');
    }

    public function agregarEquipo()
    {
        echo 'hola';
        $equipoModelo = new EquipoModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'mundiales_ganados' => $this->request->getPost('mundiales_ganados'),
            'rancking_fifa' => $this->request->getPost('rancking_fifa'),
            'mundiales_jugados' => $this->request->getPost('mundiales_jugados'),
        ];
        $equipoModelo->insert($data);
        // return $this->response->redirect(site_url('/tablaEquipo'));
    }

    public function modificarEquipo()
    {
    }

    public function eliminarEquipo($id = NULL)
    {
        echo 'hola';
        $equipoModelo = new EquipoModel();
        $equipoModelo->where('id', $id)->delete($id);
       // return $this->response->redirect(site_url('/tablaEquipo'));
         
    }
}
