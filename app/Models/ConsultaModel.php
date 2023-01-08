<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model
{
    public function obtenerConsulta($data) {
        $Nombre = $this->db->table('consultas');
        $Nombre->where($data);
        return $Nombre->get()->getResultArray();
    }
}
