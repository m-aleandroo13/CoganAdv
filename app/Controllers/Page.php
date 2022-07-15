<?php

namespace App\Controllers;



class Page extends BaseController
{

	public function __construct()
	{
	}
	public function index()
	{
		return view('auth/login');
	}

	public function admin()
	{
		return view('page/index');
	}

	public function hal_pembelian()
	{
		return view('page/transaksi/pembelian');
	}

	public function hal_catatan_pembelian()
	{
		return view('page/data/transaksi_pembelian');
	}

	public function hal_catatan_penjualan()
	{
		return view('page/data/transaksi_penjualan');
	}



	public function hal_user_data()
	{
		return view('page/user_data');
	}


	//--------------------------------------------------------------------

}
