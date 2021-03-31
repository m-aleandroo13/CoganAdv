<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// ROUTE USER
$routes->get('/', 'Page::index');

/* ROUTE PER-PAGE */
$routes->get('/admin', 'Page::admin');
$routes->get('/admin/hal_pembelian', 'Page::hal_pembelian/$1');
$routes->get('/admin/hal_catatan_pembelian', 'Page::hal_catatan_pembelian/$1');
$routes->get('/admin/hal_catatan_penjualan', 'Page::hal_catatan_penjualan/$1');

$routes->get('/admin/hal_user_data', 'Page::hal_user_data/$1');


/* ROUTE UNTUK PROSES SUPPLIER */
$routes->get('/supplier/insert', 'Supplier::insertSupplier');
$routes->get('/supplier/hal_tambah_supplier', 'Supplier::hal_tambah_supplier/$1');
$routes->get('/supplier/hal_list_supplier', 'Supplier::hal_list_supplier');
$routes->get('/supplier/hal_tambah_barang_supplier/(:any)', 'Supplier::hal_tambah_barang_supplier/$1');
$routes->get('/supplier/insert_barang_supplier/(:any)', 'Supplier::insert_barang_supplier/$1');
$routes->get('/supplier/detail/(:any)', 'Supplier::detail_supplier/$1');

/* ROUTE UNTUK PROSES BARANG */
$routes->get('/barang/hal_list_barang', 'Barang::hal_list_barang/$1');
$routes->get('/barang/hal_tambah_barang', 'Barang::hal_tambah_barang/$1');
$routes->get('/barang/insert', 'Barang::insert_barang');
$routes->get('/barang/hal_edit/(:any)', 'Barang::hal_edit/$1');
$routes->post('/barang/edit', 'Barang::edit');
$routes->delete('/barang/(:num)', 'Barang::delete/$1');


/* ROUTE UNTUK PROSES PRODUK */
$routes->get('/produk/hal_list_produk', 'Produk::hal_list_produk/$1');
$routes->get('/produk/hal_tambah_produk', 'Produk::hal_tambah_produk/$1');
$routes->get('/produk/insert', 'Produk::insert_produk');
$routes->get('/produk/detail/(:any)', 'Produk::detail_produk/$1');
$routes->get('/produk/hal_tambah_barang_produk/(:any)', 'Produk::hal_tambah_barang_produk/$1');
$routes->post('/produk/insert_barang_produk/(:any)', 'Produk::insert_barang_produk/$1');


/* ROUTE UNTUK PROSES PENJUALAN */
$routes->get('/penjualan/hal_penjualan', 'Penjualan::hal_penjualan/$1');
$routes->post('/penjualan/insert_cart_penjualan', 'Penjualan::insert_cart_penjualan');
$routes->get('/penjualan/delete_cart/(:any)', 'Penjualan::delete_cart/$1');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
