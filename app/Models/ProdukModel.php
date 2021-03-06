<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'tb_produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk'];

    public function getProduk($id_produk = false)
    {
        if ($id_produk == false) {
            return $this->findAll();
        }

        return $this->where('id_produk', $id_produk)->first();
    }
}
