<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangSupplierModel extends Model
{
    protected $allowedFields = ['id_barang', 'id_supplier', 'harga_barang'];
    protected $table      = 'tb_barang_supplier';
    public function getBarangSupplier($id_supplier)
    {

        return $this->db->table('tb_barang_supplier')
            ->join('tb_supplier', 'tb_supplier.id_supplier=tb_barang_supplier.id_supplier')
            ->join('tb_barang', 'tb_barang.id_barang=tb_barang_supplier.id_barang')
            ->where('tb_barang_supplier.id_supplier', $id_supplier)
            ->get()->getResultArray();
    }
}
