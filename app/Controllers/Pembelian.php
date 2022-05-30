<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\ProdukModel;
use App\Models\PembelianModel;
use App\Models\SupplierModel;
use App\Models\PembelianCartModel;

class Pembelian extends BaseController
{
    protected $barangModel;
    protected $supplierModel;
    protected $pembelianModel;
    protected $pembelianCartModel;
    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
        $this->barangModel = new BarangModel();
        $this->pembelianModel = new PembelianModel();
        $this->pembelianCartModel = new PembelianCartModel();
    }
    public function hal_pembelian()
    {
        $data_arr = [
            'supplier' => $this->supplierModel->getSupplier(),
            'barang' => $this->barangModel->getBarang(),
            'cart_pembelian' => $this->pembelianCartModel->getcartpb()
        ];

        return view('page/transaksi/pembelian', $data_arr);
    }
    public function insert_cart_pembelian()
    {
        $id_barang = $this->request->getVar('id_barang');
        $tgl = date('y-m-d');
        $cek = $this->pembelianCartModel->getIdBarang($id_barang);
        $jumlah = $this->request->getVar('jumlah');
        if ($cek == 0) {



            $data_arr = [
                'id_barang' => $id_barang,
                'jumlah' => $jumlah,
                'tgl' => $tgl
            ];
            $this->pembelianCartModel->insert($data_arr);
            session()->setFlashdata('notifinsert', 'Data Berhasil Ditambahkan!');
            return redirect()->to('hal_pembelian');
        } else {

            $data_cart = [
                'cart' => $this->pembelianCartModel->getcartpb()
            ];

            foreach ($data_cart['cart'] as $c) {
                if ($c['id_barang'] == $id_barang) {
                    $tambah_jumlah = $c['jumlah'] + $jumlah;
                    $id_cart_pb = $c['id_cart_pb'];
                }
            }
            $data_arr = [
                'jumlah' => $tambah_jumlah
            ];

            $this->pembelianCartModel->update($id_cart_pb, $data_arr);
            session()->setFlashdata('notifinsert', 'Data Berhasil Ditambahkan!');
            return redirect()->to('hal_pembelian');
        }
    }

    public function insert_pembelian()
    {
        $id_barang = $this->request->getVar('id_barang');
        $jumlah_pembelian = $this->request->getVar('jumlah_pembelian');
        $tgl = $this->request->getVar('tgl');
        $tanggal = substr(($tgl), 8, 2);
        $bulan = substr(($tgl), 5, 2);
        $tahun = substr(($tgl), 0, 4);
        $cek_Selesai = substr(($tgl), 0, 7);
        $sekarang = date('Y-m');

        $id2 = $this->pembelianModel->getbill($tahun, $bulan);
        foreach ($id2 as $idbill) {
            echo $idbill;
            $idbill++;

            if ($idbill < 10) {
                $bill = "BILL-" . $bulan . $tahun . "-" . "00" . $idbill;
            } else if ($idbill < 100) {
                $bill = "BILL-" . $bulan . $tahun . "-" . "0" . $idbill;
            } else {
                $bill = "BILL-" . $bulan . $tahun . "-" . $idbill;
            }
        }
        $data_arr = [
            'id_barang' => $id_barang,
            'id_bill' => $bill,
            'jumlah_pembelian' => $jumlah_pembelian,
            'pb_tanggal' => $tanggal,
            'pb_tahun' => $tahun,
            'pb_bulan' => $bulan,
            'pb_laporan' => $tgl

        ];
        $this->pembelianModel->insert($data_arr);
        $this->pembelianCartModel->emptyTable();
        session()->setFlashdata('notifinsert', 'Pembelian Berhasil!');
        return redirect()->to(base_url('pembelian/hal_pembelian'));
    }

    public function delete_cart($id_cart_pb)
    {
        $this->pembelianCartModel->where('id_cart_pb', $id_cart_pb)
            ->delete('tb_cart_pb');
        return redirect()->to(base_url('pembelian/hal_pembelian'));
    }
}
