<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanCartModel extends Model
{
    protected $allowedFields = ['id_produk', 'jumlah', 'total_cost', 'tgl'];
    protected $primaryKey = 'id_cart_pj';
    protected $table      = 'tb_cart_pj';

    public function getcartpj($id_cart_pj = false)
    {
        if ($id_cart_pj == false) {
            return $this->findAll();
        }

        return $this->where('id_cart_pj', $id_cart_pj)->first();
    }


    public function getIdProduk($id_produk)
    {
        $builder = $this->where('id_produk', $id_produk);
        return $builder->countAllResults();
    }
}
