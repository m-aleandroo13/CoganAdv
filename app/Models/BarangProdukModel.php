<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangProdukModel extends Model
{
    protected $allowedFields = ['id_barang', 'id_produk', 'kebutuhan', 'satuan'];
    protected $table      = 'tb_barang_produk';
    public function getBarangProduk($id_produk)
    {

        return $this->db->table('tb_barang_produk')
            ->join('tb_produk', 'tb_produk.id_produk=tb_barang_produk.id_produk')
            ->join('tb_barang', 'tb_barang.id_barang=tb_barang_produk.id_barang')
            ->where('tb_barang_produk.id_produk', $id_produk)
            ->get()->getResultArray();
    }
}
