<?php

namespace App\Controllers;
use App\Models\SigninUsuarioModel;
class SignUpController extends BaseController
{
    public function index(){

        return view('signup/header')
        . view('signup/signup')
            . view('signup/footer');
    }

    public function signUp(){

        $user=$this->request->getPost('nombre_usuario');
        $dni = $this->request->getPost('dni');
        $email = $this->request->getPost('email');

        if(!$this->existUser($email,$user,$dni)){
            $usuarioModel = new SigninUsuarioModel();
            $id = $this->request->getPost('id');
            $data = [
                'id_rol' => 2,
                'nombre_usuario'=>$user,
                'contraseña'=>$this->request->getPost('contraseña'),
                'dni' => $dni,
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'email' => $email,
                'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento')
            ];
            if ($id) {
                $usuarioModel->where('id', $id)->update($id, $data);
            } else {
                $usuarioModel->insert($data);
            }

            return redirect()->to('/login');
        }else{
            return view('signup/header')
                .view('signup/error')
                .view('signup/signup');

        }

    }

    private function existUser($email, $user, $dni){
        $usuarioModel = new SigninUsuarioModel();
        $usuarios = $usuarioModel->findAll();
        foreach ($usuarios as $usuario){
            if(($usuario['email']== $email )||( $usuario['nombre_usuario'] )== $user||($usuario['dni']==$dni)){
                return true;
            }
        }
        return false;
    }

    public function createUser(){
        $usuarioModel = new UsuarioModel();

        $data=[
            'id'=>$this->request->getPost('id'),
            'contraseña'=>$this->request->getPost('contraseña')
        ];

        return view('');
    }


}
