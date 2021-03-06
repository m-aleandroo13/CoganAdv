<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'tb_supplier';
    protected $primaryKey = 'id_supplier';
    protected $allowedFields = ['nama_supplier', 'alamat_supplier', 'telp_supplier', 'email_supplier', 'link_catalog_supplier'];

    public function getSupplier($id_supplier = false)
    {
        if ($id_supplier == false) {
            return $this->findAll();
        }

        return $this->where('id_supplier', $id_supplier)->first();
    }
}
