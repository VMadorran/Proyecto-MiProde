<?php

namespace App\Controllers;

use App\Models\FixtureModel;

class FixtureController extends BaseController
{

    public function index()
    {

        $fixtureModel = new FixtureModel();
        $torneos = $fixtureModel->getTorneoById(1);
        $data = array( 'torneos' => $torneos);

        //dd($data);
        return view('template/header')
            . view('template/sidebar')
            . view('fixture/fixture', $data)
            . view('template/footer');
    }
}
