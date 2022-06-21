<?php

namespace App\Controllers;

class Usuario extends BaseController {
    private $usuario;
    public $session;

    public function __construct() {
        $this->usuario = model('App\Models\Usuario');
        $this->session = session();
        $access = $this->session->get('privilegio');

        if ($access == 'usuario') {
            $this->session->destroy();
            return redirect()->to('/');
        }
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

        if(isset($dados['id_usuario'])) {  //Atualiza dados
            $dados['senha'] = md5($dados['senha']);
            
            $this->usuario->where('id_usuario', $dados['id_usuario'])->set($dados)->update();
            $this->session->setFlashdata('alert', 'success_update');
            return redirect()->to("/usuarios");

        } else {  //insere novo usuario
            $dados['senha'] = md5($dados['senha']);

            $this->usuario->insert($dados);
            $this->session->setFlashdata('alert', 'success_create');

            return redirect()->to('/usuarios');
        }

    }

    public function editar($id_usuario) {
        $data['usuario'] = $this->usuario->where('id_usuario', $id_usuario)->first();
        
        echo view('templates/header');
        echo view('usuarios/form', $data);
        echo view('templates/footer');
    }

    public function excluir() {
        $this->usuario->where('id_usuario', $_POST['id_usuario'])->delete();
        $this->session->setFlashdata('alert', 'success_delete');

        return redirect()->to('/usuarios');
    }

}