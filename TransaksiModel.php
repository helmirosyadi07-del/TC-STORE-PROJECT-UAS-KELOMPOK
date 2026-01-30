<?php
namespace App\Models;
use CodeIgniter\Model;

class TransaksiModel extends Model {
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_produk', 'user_id', 'metode_pembayaran', 'total_harga', 'status'];
}