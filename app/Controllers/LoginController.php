<?php

namespace App\Controllers;
use App\Models\LoginModel;

class LoginController extends BaseController
{

    public function index(){

        return view('login/header')
            .view('login/login')
            . view('login/footer');
    }

    public function login(){

        $validation = \Config\Services::validation();
        $session = session();

        $loginModel= new LoginModel();
        $nombre_usuario= $this->request->getPost('nombre_usuario');
        $contraseña = $this->request->getPost('contraseña');


        $data=$loginModel ->where('nombre_usuario', $nombre_usuario)->first();

        if($data){

            $pass = $data['contraseña'];

            if($pass == $contraseña){
                echo 'Ingreso';
                $data_session=[
                    'id'=>$data['id'],
                    'nombre_usuario'=>$data['nombre_usuario'],
                    'id_rol'=>$data['id_rol'],
                    'contraseña'=>$data['contraseña'],
                    'logged'=>true
                ];
                $session->set($data_session);
                return redirect()->to('/fixture');
            }

        } else{

            return view('login/header')
                .view('login/error')
                .view('login/login')
                . view('login/footer');
        }

    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}
