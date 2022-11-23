<?php

namespace App\Controllers;

use App\Models\FixtureModel;

class FixtureController extends BaseController
{

    public function index()
    {

        $fixtureModel = new FixtureModel();
        $data = $fixtureModel->getTorneoById(9);
        return view('template/header')
            . view('template/sidebar')
            . view('fixture/view', $data)
            . view('template/footer');
    }
}
