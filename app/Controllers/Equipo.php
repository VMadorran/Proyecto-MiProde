<?php

namespace App\Controllers;

use App\Models\EquipoModelo;

class Equipo extends BaseController
{
    public function index()
    {
        return view('template/header')
            . view('template/sidebar')
            . view('template/tablaEquipo')
            . view('template/footer');
    }

    public function agregarEquipo()
    {
    }

    public function modificarEquipo()
    {
    }

    public function eliminarEquipo()
    {
    }
}
