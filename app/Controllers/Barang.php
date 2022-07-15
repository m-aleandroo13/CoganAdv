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

        $data_arr = [
            'barang' => $this->barangModel->getBarang()
        ];
        return view('page/warehouse/list_barang', $data_arr);
    }

    public function hal_tambah_barang()
    {
        return view('page/warehouse/tambah_barang');
    }
    public function hal_edit($id_barang)
    {
        $data_arr = [
            'barang' => $this->barangModel->getBarang($id_barang)
        ];
        return view('page/warehouse/edit_barang', $data_arr);
    }
    public function edit()
    {
        $id_barang = $this->request->getVar('id_barang');
        $data_arr = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'stok_barang' => $this->request->getVar('stok_barang')
        ];

        $this->barangModel->update($id_barang, $data_arr);
        session()->setFlashdata('notifedit', 'Data Berhasil Diubah!');
        return redirect()->to('hal_list_barang');
    }
    public function delete($id_barang)
    {
        $this->barangModel->where('id_barang', $id_barang)
            ->delete('tb_barang');
        return redirect()->to(base_url('barang/hal_list_barang'));
    }
}
