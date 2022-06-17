<?php

namespace App\Controllers;

class Login extends BaseController {
    
    private $usuario;

    function __construct() {
        $this->usuario = model('App\Models\Usuario');
    }

    public function autenticar() {
        $dados = $this->request->getVar();
        $session = session();

        $usuario = $this->usuario->where('username', $dados['username'])
                                 ->where('senha', $dados['senha'])->first();

       if (!empty($usuario)) {

        $session->set('usuario', $usuario['nome']);
        $session->set('id_usuario', $usuario['id_usuario']);
        $session->setFlashdata('alert', 'success_login');

        return redirect()->to('/inicio');
        
       } else {

        $session->setFlashdata('alert', 'error_login');
        return redirect()->to('');

       }

    }
/*
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }*/
/*
    public function trocarSenha() {
        echo view('templates/header');
        echo view('login/trocar_senha');
        echo view('templates/footer');
    }*/

    public function store() {
        $dados = $this->request->getVar();

        $usuario = $this->usuario->where('id_usuario', $dados['id_usuario'])->first();
        $session = session();

        if(md5($dados['senha_atual']) == $usuario['senha']) {
            if($dados['nova_senha'] ==  $dados['confirmar_nova_senha']){
                $this->usuario->where('id_usuario', $dados['id_usuario'])->set('senha', md5($dados['nova_senha']))->update();

                $session->setFlashdata('alert', 'success_trocar_senha');

                return redirect()->to('login/trocar_senha');
            }
        }

        $session->setFlashdata('alert', 'error_trocar_senha');

        return redirect()->to('login/trocar_senha');
    }

}
