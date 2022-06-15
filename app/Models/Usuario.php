<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = [
        'id_usuario',
        'username',
        'nome',
        'senha',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>