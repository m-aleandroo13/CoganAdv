<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\BarangModel;
use App\Models\BarangProdukModel;

class Produk extends BaseController
{
    protected $produkModel;
    protected $barangModel;
    protected $barangProdukModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->barangModel = new BarangModel();
        $this->barangProdukModel = new BarangProdukModel();
    }
    public function insert_produk()
    {
        $stok_produk = $this->request->getVar('stok_produk');

        if ($stok_produk == null) {
            $stok_produk = "0";
        }

        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'stok_produk' => $stok_produk
        ];

        $this->produkModel->insert($data);
        session()->setFlashdata('notifinsert', 'Data Berhasil Ditambakan!');
        return redirect()->to('hal_list_produk');
    }


    public function hal_list_produk()
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data,
            'produk' => $this->produkModel->getProduk()
        ];
        return view('page/warehouse/list_produk', $data_arr);
    }

    public function hal_tambah_produk()
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data
        ];
        return view('page/warehouse/tambah_produk', $data_arr);
    }

    public function detail_produk($id_produk)
    {
        $data_arr = [
            'produk' => $this->produkModel->getProduk($id_produk),
            'barang_produk' => $this->barangProdukModel->getBarangProduk($id_produk)
        ];
        return view('page/warehouse/detail_produk', $data_arr);
    }

    public function hal_tambah_barang_produk($id_produk)
    {
        $data_arr = [
            'produk' => $this->produkModel->getProduk($id_produk),
            'barang' => $this->barangModel->getBarang()
        ];
        return view('page/warehouse/tambah_barang_produk', $data_arr);
    }

    public function insert_barang_produk()
    {
        $id_produk = $this->request->getVar('id_produk');
        $data = [
            'id_barang' => $this->request->getVar('id_barang'),
            'kebutuhan' => $this->request->getVar('kebutuhan'),
            'satuan' => $this->request->getVar('satuan'),
            'id_produk' => $id_produk
        ];

        $this->barangProdukModel->insert($data);
        session()->setFlashdata('notifinsert', 'Data Berhasil Ditambakan!');
        return redirect()->to('detail_produk/' . $id_produk);
    }
}
