<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        $data = [
            'nome' => 'admin',
            'username' => 'admin',
            'senha' => md5('123456'),
            'privilege' => 'admin',
        ];

        $this->db->table('usuarios')->insert($data);
    }
}
