<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $allowedFields = ['id_produk', 'id_bill', 'jumlah_penjualan', 'pj_tanggal', 'pj_tahun', 'pj_bulan', 'pj_laporan'];
    protected $primaryKey = 'id_penjualan';
    protected $table      = 'tb_penjualan';

    public function getpenjualan($id_penjualan = false)
    {
        if ($id_penjualan == false) {
            return $this->findAll();
        }

        return $this->where('id_penjualan', $id_penjualan)->first();
    }

    public function getbill($tahun, $bulan)
    {
        return $this->select('substr(max(id_bill), 13, 3) as id_bill')
            ->where('pj_tahun', $tahun)
            ->where('pj_bulan', $bulan)->first();
    }
}
