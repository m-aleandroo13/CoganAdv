<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'tb_barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'stok_barang'];

    public function getBarang($id_barang = false)
    {
        if ($id_barang == false) {
            return $this->findAll();
        }

        return $this->where('id_barang', $id_barang)->first();
    }
}
