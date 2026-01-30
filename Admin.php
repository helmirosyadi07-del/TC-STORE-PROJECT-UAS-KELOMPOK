<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Admin extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data['orders'] = $db->table('transaksi')
            ->orderBy('id', 'DESC')
            ->get()
            ->getResultArray();

        $data['total_pendapatan'] = $db->table('transaksi')
            ->where('status', 'Berhasil')
            ->selectSum('total_harga')
            ->get()
            ->getRow()
            ->total_harga ?? 0;

        $data['total_transaksi'] = $db->table('transaksi')->countAllResults();

        $data['pending_orders'] = $db->table('transaksi')
            ->where('status', 'Pending')
            ->countAllResults();

        return view('admin/dashboard', $data);
    }

    // ================== PESANAN / ACC ADMIN ==================
    public function update_status($id)
    {
        $db = \Config\Database::connect();

        $db->table('transaksi')
            ->where('id', $id)
            ->update([
                'status' => 'Berhasil'
            ]);

        return redirect()->to('/admin/dashboard')
            ->with('success', 'Pesanan berhasil dikonfirmasi');
    }

    // ================== KELOLA PRODUK ==================
public function kelola_produk()
{
    $model = new ProdukModel();
    $data['produk'] = $model->findAll();

    return view('admin/kelola_produk', $data);
}

public function tambah_produk()
{
    return view('admin/produk_tambah');
}

public function simpan_produk()
{
    $model = new ProdukModel();

    $model->save([
        'nama_produk' => $this->request->getPost('nama_produk'),
        'harga'       => $this->request->getPost('harga'),
        'stok'        => $this->request->getPost('stok'),
        'deskripsi'   => $this->request->getPost('deskripsi'),
    ]);

    return redirect()->to(site_url('admin/kelola_produk'));
}

public function edit_produk($id)
{
    $model = new ProdukModel();
    $data['produk'] = $model->find($id);

    return view('admin/produk_edit', $data);
}

public function update_produk($id)
{
    $model = new ProdukModel();

    $model->update($id, [
        'nama_produk' => $this->request->getPost('nama_produk'),
        'harga'       => $this->request->getPost('harga'),
        'stok'        => $this->request->getPost('stok'),
        'deskripsi'   => $this->request->getPost('deskripsi'),
    ]);

    return redirect()->to(site_url('admin/kelola_produk'));
}

public function hapus_produk($id)
{
    $model = new ProdukModel();
    $model->delete($id);

    return redirect()->to(site_url('admin/kelola_produk'));
}
    // ================== LAPORAN PENJUALAN ==================
    public function laporan()
    {
        $db = \Config\Database::connect();

        $data['total_cuan'] = $db->table('transaksi')
            ->where('status', 'Berhasil')
            ->selectSum('total_harga')
            ->get()
            ->getRow()
            ->total_harga ?? 0;

        $data['laporan'] = $db->table('transaksi')
            ->where('status', 'Berhasil')
            ->orderBy('id', 'DESC')
            ->get()
            ->getResultArray();

        return view('admin/laporan', $data);
    }
}
