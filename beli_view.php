<?= view('layout/header'); ?>

<style>
    .buy-container { min-height: 90vh; display: flex; align-items: center; padding: 50px 0; }
    .glass-card { 
        background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(20px); 
        border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 30px; padding: 40px;
    }
    .product-badge { background: rgba(0, 123, 255, 0.1); border: 1px solid rgba(0, 123, 255, 0.2); border-radius: 20px; padding: 25px; }
    .input-tc { 
        background: rgba(0, 0, 0, 0.3) !important; border: 1px solid rgba(255, 255, 255, 0.1) !important; 
        color: #fff !important; border-radius: 15px; padding: 15px;
    }
    .input-tc:focus { border-color: #007bff !important; box-shadow: 0 0 15px rgba(0, 123, 255, 0.2); }
    .label-custom { font-weight: 700; color: #9ca3af; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px; }
</style>

<div class="buy-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="glass-card shadow-lg">
                    <h2 class="fw-800 text-white mb-4 text-center">CHECKOUT</h2>
                    
                    <div class="product-badge mb-4 text-center">
                        <p class="text-secondary small mb-1">Item yang dipilih:</p>
                        <h4 class="fw-bold text-white"><?= $produk['nama_produk']; ?></h4>
                        <h3 class="fw-800 text-primary">Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></h3>
                    </div>

                    <form action="<?= base_url('produk/proses_bayar') ?>" method="POST">
                        <input type="hidden" name="produk_id" value="<?= $produk['id']; ?>">

                        <div class="mb-4">
                            <label class="label-custom">ID Akun / No. Tujuan</label>
                            <input type="text" name="user_id" class="form-control input-tc" 
                                   placeholder="<?= ($produk['kategori'] == 'game') ? 'Contoh: 1234567 (2001)' : 'Email atau Nomor WhatsApp'; ?>" required>
                        </div>

                        <div class="mb-5">
                            <label class="label-custom">Pilih Metode Pembayaran</label>
                            <select name="metode" class="form-select input-tc">
                                <option value="DANA">DANA (Otomatis)</option>
                                <option value="QRIS">QRIS (All Payment)</option>
                                <option value="GOPAY">GoPay</option>
                                <option value="SHOPEEPAY">ShopeePay</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-mesra w-100 py-3 rounded-pill shadow">LANJUTKAN PEMBAYARAN</button>
                        
                        <div class="text-center mt-4">
                            <a href="<?= base_url('produk') ?>" class="text-secondary text-decoration-none small">← Kembali pilih item</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('layout/footer'); ?>