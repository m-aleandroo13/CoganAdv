<?php

namespace App\Controllers;

use App\Models\SupplierModel;
use App\Models\BarangModel;
use App\Models\BarangSupplierModel;

class Supplier extends BaseController
{
    protected $supplierModel;
    protected $barangModel;
    protected $barangSupplierModel;
    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
        $this->barangModel = new BarangModel();
        $this->barangSupplierModel = new BarangSupplierModel();
    }
    public function insertSupplier()
    {
        $alamat_supplier = $this->request->getVar('alamat_supplier');
        $telp_supplier = $this->request->getVar('telp_supplier');
        $email_supplier = $this->request->getVar('email_supplier');
        $link_catalog_supplier = $this->request->getVar('link_catalog_supplier');

        if ($alamat_supplier == null) {
            $alamat_supplier = "-";
        }
        if ($telp_supplier == null) {
            $telp_supplier = "-";
        }
        if ($email_supplier == null) {
            $email_supplier = "-";
        }
        if ($link_catalog_supplier == null) {
            $link_catalog_supplier = "-";
        }

        $data = [
            'nama_supplier' => $this->request->getVar('nama_supplier'),
            'alamat_supplier' => $alamat_supplier,
            'telp_supplier' => $telp_supplier,
            'email_supplier' => $email_supplier,
            'link_catalog_supplier' => $link_catalog_supplier,
        ];

        $this->supplierModel->insert($data);
        session()->setFlashdata('notifinsert', 'Data Berhasil Ditambakan!');
        return redirect()->to('hal_list_supplier');
    }

    public function hal_list_supplier()
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data,
            'supplier' => $this->supplierModel->getSupplier()
        ];
        return view('page/data/list_supplier', $data_arr);
    }

    public function hal_tambah_barang_supplier($id_supplier)
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data,
            'supplier' => $this->supplierModel->getSupplier($id_supplier),
            'barang' => $this->barangModel->getBarang()
        ];
        return view('page/data/tambah_barang_supplier', $data_arr);
    }

    public function detail_supplier($id_supplier)
    {
        $session = session();
        $data = $session->get('nama');
        $data_arr = [
            'login_sess' =>    $data,
            'supplier' => $this->supplierModel->getSupplier($id_supplier),
            'barang_supplier' => $this->barangSupplierModel->getBarangSupplier($id_supplier)
        ];
        return view('page/data/detail_supplier', $data_arr);
    }
    public function hal_tambah_supplier()
    {
        return view('page/data/tambah_supplier');
    }
    public function insert_barang_supplier()
    {
        $id_supplier = $this->request->getVar('id_supplier');
        $data = [
            'id_barang' => $this->request->getVar('id_barang'),
            'id_supplier' => $id_supplier,
            'harga_barang' => $this->request->getVar('harga_barang'),
            'link_barang' => $this->request->getVar('link_barang'),
        ];

        $this->barangSupplierModel->insert($data);
        session()->setFlashdata('notifinsert', 'Data Berhasil Ditambakan!');
        return redirect()->to('detail_supplier/' . $id_supplier);
    }

    //--------------------------------------------------------------------

}
