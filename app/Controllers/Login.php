<?php

namespace App\Controllers;

class Login extends BaseController {
    private $usuario;
    public $session;

    function __construct() {
        $this->usuario = model('App\Models\Usuario');
        $this->session = session();
    }

    public function autenticar() {
        $dados = $this->request->getVar();

        $usuario = $this->usuario->where('username', $dados['username'])
                                 ->where('senha', md5($dados['senha']))->first();

       if (!empty($usuario)) {

        $this->session->set('usuario', $usuario['nome']);
        $this->session->set('id_usuario', $usuario['id_usuario']);
        $this->session->set('privilegio', $usuario['privilege']);

        return redirect()->to('/inicio');
        
       } else {

        $this->session->setFlashdata('alert', 'error_login');
        return redirect()->to('');

       }

    }

    public function logout() {
        $this->session->destroy();
        return redirect()->to('/');
    }

}