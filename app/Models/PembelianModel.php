<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $allowedFields = ['id_faktur', 'id_barang', 'id_supplier', 'pb_tanggal', 'pb_tgl_tiba', 'pb_laporan', 'pb_bulan', 'pb_tahun', 'pb_jumlah', 'pb_total_cost', 'pb_status_kirim'];
    protected $primaryKey = 'id_pembelian';
    protected $table      = 'tb_pembelian';

    public function getpembelian($id_pembelian = false)
    {
        if ($id_pembelian == false) {
            return $this->findAll();
        }

        return $this->where('id_pembelian', $id_pembelian)->first();
    }

    public function getfaktur($tahun, $bulan)
    {
        return $this->select('substr(max(id_bill), 13, 3) as id_faktur')
            ->where('pb_tahun', $tahun)
            ->where('pb_bulan', $bulan)->first();
    }
}
