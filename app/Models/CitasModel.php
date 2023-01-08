<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    public function obtenerCita($data) {
        $Nombre = $this->db->table('citas');
        $Nombre->where($data);
        return $Nombre->get()->getResultArray();
    }
}
