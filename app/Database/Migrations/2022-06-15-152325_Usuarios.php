<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario'         => [
                'type'           => 'INT',
                'constraint'     => 9,
                'usigned'        => true,
                'auto_increment' => true
            ],

            'nome'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 128
            ],

            'username'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 128
            ],

            'senha'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 128
            ],

            'created_at' => [
                'type' => 'DATETIME'
            ],

            'updated_at' => [
                'type' => 'DATETIME'
            ],

            'created_at' => [
                'type' => 'DATETIME'
            ],

            'deleted_at' => [
                'type' => 'DATETIME'
            ]

        ]);

        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios'); 
    }
}
