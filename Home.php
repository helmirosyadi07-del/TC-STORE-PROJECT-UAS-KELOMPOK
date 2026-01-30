<?php
namespace App\Controllers;
use App\Models\ProdukModel;

class Home extends BaseController {
    public function index() {
        $model = new ProdukModel();
        $data['semua_produk'] = $model->findAll();
        $data['judul_halaman'] = 'SEMUA PRODUK';
        // PASTIIN INI MANGGIL beranda_view BUKAN YANG LAIN
        return view('beranda_view', $data); 
    }
}