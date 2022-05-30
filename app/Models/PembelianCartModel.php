<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianCartModel extends Model
{
    protected $allowedFields = ['id_supplier', 'id_barang', 'jumlah', 'tgl_sampai', 'total_cost'];
    protected $primaryKey = 'id_cart_pb';
    protected $table      = 'tb_cart_pb';

    public function getcartpb($id_cart_pj = false)
    {
        if ($id_cart_pj == false) {
            return $this->findAll();
        }

        return $this->where('id_cart_pj', $id_cart_pj)->first();
    }


    public function getIdBarang($id_barang)
    {
        $builder = $this->where('id_barang', $id_barang);
        return $builder->countAllResults();
    }
}
