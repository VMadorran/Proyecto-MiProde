<?php

namespace App\Controllers;

use App\Models\FixtureModel;

class FixtureController extends BaseController
{

    public function index()
    {

        $fixtureModel = new FixtureModel();
        $fases = $fixtureModel->getFasesByTorneoId(1);
        $data = array( 'fases' => $fases);
        $fasesWithEquipos = array();
        foreach ($fases as $f) {
            $fasesWithEquipos = array('fase', $f['nombre'],);
        }


        return view('template/header')
            . view('template/sidebar')
            . view('fixture/fixture', $data)
            . view('template/footer');
    }
}
