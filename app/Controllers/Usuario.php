<?php

namespace App\Controllers;

class Usuario extends BaseController {
    private $usuario;

    public function __construct() {
        $this->usuario = model('App\Models\Usuario');
    }

    public function index() {
        $data['usuarios'] = $this->usuario->findAll();

        echo view('templates/header');
        echo view('usuarios/index.php', $data);
        echo view('templates/footer');
    }

    public function cadastrar() {
        echo view('templates/header');
        echo view('usuarios/form.php');
        echo view('templates/footer');
    }

    public function store() {
        $dados = $this->request->getVar();

        $session = session();

        //Atualiza dados
        if(isset($dados['id_usuario'])) {

            $this->usuario->where('id_usuario', $dados['id_usuario'])->set($dados)->update();
            $session->setFlashdata('alert', 'success_update');
            return redirect()->to("/usuarios");

        } else {  //insere novo usuario

            $this->usuario->insert($dados);
            $session->setFlashdata('alert', 'success_create');
            return redirect()->to('/usuarios');
        }

    }

    public function editar($id_usuario) {
        $data['usuario'] = $this->usuario->where('id_usuario', $id_usuario)->first();
        
        echo view('templates/header');
        echo view('usuarios/form', $data);
        echo view('templates/footer');
    }

}