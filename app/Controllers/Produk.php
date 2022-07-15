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
    // fungsi untuk menginputkan suatu produk
    public function insert_produk()
    {
        $stok_produk = $this->request->getVar('stok_produk');

        if ($stok_produk == null) {
            $stok_produk = "0";
        }

        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga_produk' => $this->request->getVar('harga_produk'),
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
    // fungsi untuk halaman tambah produk
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
    public function hal_edit_produk($id_produk)
    {
        $data_arr = [
            'produk' => $this->produkModel->getProduk($id_produk)
        ];
        return view('page/warehouse/edit_produk', $data_arr);
    }
    public function edit()
    {
        $id_produk = $this->request->getVar('id_produk');
        $data_arr = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga_produk' => $this->request->getVar('harga_produk')
        ];

        $this->produkModel->update($id_produk, $data_arr);
        session()->setFlashdata('notifedit', 'Data Berhasil Diubah!');
        return redirect()->to('hal_list_produk');
    }
    public function delete($id_produk)
    {
        $this->produkModel->where('id_produk', $id_produk)
            ->delete('tb_produk');
        return redirect()->to(base_url('produk/hal_list_produk'));
    }
    public function delete_barang_produk($id_barang, $id_produk)
    {
        $this->barangProdukModel->where('id_barang_produk', $id_barang)
            ->delete('tb_barang_produk');
        return redirect()->to(base_url('produk/detail_produk/' . $id_produk));
    }
    public function hal_edit_barang_produk($id_barang, $id_produk)
    {
        $data_arr = [
            'barang' => $this->barangModel->getBarang(),
            'barang_produk' => $this->barangProdukModel->getBarangProduk($id_produk),
            'current_barang' => $id_barang,
            'produk' => $this->produkModel->getProduk($id_produk)
        ];
        return view('page/warehouse/edit_barang_produk', $data_arr);
    }
}
