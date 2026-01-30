<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false); // Kita pakai Rute Manual biar Aman

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// =======================================================================
// 1. RUTE PUBLIK / USER (JANGAN TARUH DI DALAM GRUP ADMIN)
// =======================================================================

$routes->get('/', 'Home::index');
$routes->get('beranda', 'Home::index');

// Halaman Produk & Checkout
$routes->get('produk', 'Produk::index');
$routes->get('produk/beli/(:num)', 'Produk::beli/$1');
$routes->post('produk/proses_bayar', 'Produk::proses_bayar');

// HALAMAN WAITING & CEK STATUS (Ini yang bikin 404 tadi)
$routes->get('produk/menunggu/(:num)', 'Produk::menunggu/$1');
$routes->get('produk/cek_status_transaksi/(:num)', 'Produk::cek_status_transaksi/$1');

// Halaman Tentang
$routes->get('tentang', 'Produk::tentang');


// =======================================================================
// 2. RUTE KHUSUS ADMIN (Baru masuk sini)
// =======================================================================
$routes->group('admin', function($routes) {
    
    // Dashboard
    $routes->get('/', 'Admin::index');
    $routes->get('dashboard', 'Admin::index');

    // Kelola Produk
    $routes->get('kelola_produk', 'Admin::kelola_produk');
    $routes->get('produk/tambah', 'Admin::tambah_produk');
    $routes->post('produk/simpan', 'Admin::simpan_produk');
    $routes->get('produk/edit/(:num)', 'Admin::edit_produk/$1');
    $routes->post('produk/update/(:num)', 'Admin::update_produk/$1');
    $routes->get('produk/hapus/(:num)', 'Admin::hapus_produk/$1');

    // Transaksi & Laporan
    $routes->post('update_status/(:num)', 'Admin::update_status/$1');
    $routes->get('laporan', 'Admin::laporan');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}