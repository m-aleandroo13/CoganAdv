<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function insert_barang()
    {
        $stok_barang = $this->request->getVar('stok_barang');

        if ($stok_barang == null) {
            $stok_barang = "0";
        }

        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'stok_barang' => $stok_barang
        ];

        $this->barangModel->insert($data);
        session()->setFlashdata('notifinsert', 'Data Berhasil Ditambakan!');
        return redirect()->to('hal_list_barang');
    }


    public function hal_list_barang()
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data,
            'barang' => $this->barangModel->getBarang()
        ];
        return view('page/warehouse/list_barang', $data_arr);
    }

    public function hal_tambah_barang()
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data
        ];
        return view('page/warehouse/tambah_barang', $data_arr);
    }
}
