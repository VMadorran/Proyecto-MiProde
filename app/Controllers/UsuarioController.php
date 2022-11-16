<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll();

        $data = array(
            'titulo' => 'Lista de Usuarios',
            'usuarios' => $usuarios
        );

        return view('template/header')
            . view('template/sidebar')
            . view('template/tablaUsuario', $data)
            . view('template/footer');

    }

    public function createUsuario()
    {
        $usuarioModel = new UsuarioModel();
        $id = $this->request->getPost('id');

        $data = [
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'contraseña' => $this->request->getPost('contraseña'),
            'dni' => $this->request->getPost('dni'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
        ];
        if ($id) {
            $usuarioModel->where('id', $id)->update($id, $data);
        } else {
            $usuarioModel->insert($data);
        }
        return $this->response->redirect(site_url('/tablaUsuario'));
    }

    public function deleteUsuario($id = NULL)
    {
        $usuarioModelo = new UsuarioModel();
        $usuarioModelo->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/tablaUsuario'));
    }
}
