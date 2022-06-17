<?php

namespace App\Controllers;

class Usuario extends BaseController {

    public function index() {
        echo view('templates/header');
        echo view('usuarios/index.php');
        echo view('templates/footer');
    }

}