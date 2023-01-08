<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    public function obtenerProducto($data) {
        $Nombre = $this->db->table('productos');
        $Nombre->where($data);
        return $Nombre->get()->getResultArray();
    }
}
