<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    // 1. HALAMAN PRODUK (Pisah Game & Apps di View)
    public function index()
    {
        $model = new ProdukModel();
        $data['produk'] = $model->findAll();
        
        // Pastikan lu udah buat file 'app/Views/user/produk.php' (Langkah 2)
        return view('user/produk', $data); 
    }

    // 2. HALAMAN TENTANG (Panggil file lu: tentang_view.php)
    public function tentang()
    {
        // Pastikan file 'tentang_view.php' ada di folder 'app/Views/user/'
        return view('user/tentang_view');
    }

    // 3. HALAMAN CHECKOUT
    public function beli($id)
    {
        $model = new ProdukModel();
        $data['p'] = $model->find($id);

        if (!$data['p']) {
            return redirect()->to('produk');
        }

        return view('user/beli', $data);
    }

    // 4. PROSES BAYAR (Disini kuncinya biar gak 404)
    public function proses_bayar()
    {
        $db = \Config\Database::connect();
        
        // Tangkap data dari form
        $data = [
            'user_id'       => $this->request->getPost('user_id'),
            'produk_nama'   => $this->request->getPost('produk_nama'), 
            'total_harga'   => $this->request->getPost('harga'),
            'status'        => 'Pending',
            'created_at'    => date('Y-m-d H:i:s')
        ];

        $db->table('transaksi')->insert($data);
        $insertID = $db->insertID(); 

        // Redirect ke halaman loading
        return redirect()->to('produk/menunggu/' . $insertID);
    }

    // 5. HALAMAN LOADING
    public function menunggu($id)
    {
        $db = \Config\Database::connect();
        $data['transaksi'] = $db->table('transaksi')->where('id', $id)->get()->getRowArray();

        if (!$data['transaksi']) {
            return redirect()->to('produk');
        }

        return view('user/menunggu_verifikasi', $data);
    }

    // 6. API CEK STATUS
    public function cek_status_transaksi($id)
    {
        $db = \Config\Database::connect();
        $trx = $db->table('transaksi')->where('id', $id)->get()->getRowArray();

        return $this->response->setJSON(['status' => $trx['status']]);
    }
}