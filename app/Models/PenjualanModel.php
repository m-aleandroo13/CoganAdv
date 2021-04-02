<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $allowedFields = ['id_produk', 'jumlah_penjualan', 'total_cost', 'pj_tanggal', 'pj_tahun', 'pj_bulan', 'pj_laporan'];
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
        $query = $this->db->query("SELECT substr((max(id_bill)), 13, 3) as maxKode1 FROM tb_penjualan WHERE pj_tahun='$tahun' AND pj_bulan='$bulan'");
        foreach ($query->result_array() as $row) {
            return $row['maxKode1'];
        }
    }
}
