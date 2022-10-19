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
    }

    public function modificarEquipo()
    {
    }

    public function eliminarEquipo($id = NULL)
    {
        
     
        $equipoModelo = new EquipoModel();
        $data['user'] = $equipoModelo->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/tablaEquipo'));
    
         
    }
}
