<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\PenjualanModel;
use App\Models\PenjualanCartModel;

class Penjualan extends BaseController
{
    protected $produkModel;
    protected $penjualanModel;
    protected $penjualanCartModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->penjualanModel = new PenjualanModel();
        $this->penjualanCartModel = new PenjualanCartModel();
    }
    public function hal_penjualan()
    {
        $data_arr = [
            'produk' => $this->produkModel->getProduk(),
            'cart_penjualan' => $this->penjualanCartModel->getcartpj()
        ];

        return view('page/transaksi/penjualan', $data_arr);
    }
    public function insert_cart_penjualan()
    {
        $id_produk = $this->request->getVar('id_produk');
        $tgl = date('y-m-d');
        $cek = $this->penjualanCartModel->getIdProduk($id_produk);
        $jumlah = $this->request->getVar('jumlah');
        if ($cek == 0) {



            $data_arr = [
                'id_produk' => $id_produk,
                'jumlah' => $jumlah,
                'tgl' => $tgl
            ];
            $this->penjualanCartModel->insert($data_arr);
            session()->setFlashdata('notifinsert', 'Data Berhasil Ditambahkan!');
            return redirect()->to('hal_penjualan');
        } else {

            $data_cart = [
                'cart' => $this->penjualanCartModel->getcartpj()
            ];

            foreach ($data_cart['cart'] as $c) {
                if ($c['id_produk'] == $id_produk) {
                    $tambah_jumlah = $c['jumlah'] + $jumlah;
                    $id_cart_pj = $c['id_cart_pj'];
                }
            }
            $data_arr = [
                'jumlah' => $tambah_jumlah
            ];

            $this->penjualanCartModel->update($id_cart_pj, $data_arr);
            session()->setFlashdata('notifinsert', 'Data Berhasil Ditambahkan!');
            return redirect()->to('hal_penjualan');
        }
    }

    public function insert_penjualan()
    {
        $id_produk = $this->request->getVar('id_produk');
        $jumlah_penjualan = $this->request->getVar('jumlah_penjualan');
        $tgl = $this->request->getVar('tgl');
        $tanggal = substr(($tgl), 8, 2);
        $bulan = substr(($tgl), 5, 2);
        $tahun = substr(($tgl), 0, 4);
        $cek_Selesai = substr(($tgl), 0, 7);
        $sekarang = date('Y-m');

        $id2 = $this->penjualanModel->getbill($tahun, $bulan);
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
            'id_produk' => $id_produk,
            'id_bill' => $bill,
            'jumlah_penjualan' => $jumlah_penjualan,
            'pj_tanggal' => $tanggal,
            'pj_tahun' => $tahun,
            'pj_bulan' => $bulan,
            'pj_laporan' => $tgl

        ];
        $this->penjualanModel->insert($data_arr);
        $this->penjualanCartModel->emptyTable();
        session()->setFlashdata('notifinsert', 'Pembelian Berhasil!');
        return redirect()->to(base_url('penjualan/hal_penjualan'));
    }

    public function delete_cart($id_cart_pj)
    {
        $this->penjualanCartModel->where('id_cart_pj', $id_cart_pj)
            ->delete('tb_cart_pj');
        return redirect()->to(base_url('penjualan/hal_penjualan'));
    }
}
