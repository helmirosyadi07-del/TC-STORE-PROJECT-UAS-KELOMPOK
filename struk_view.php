<?= view('layout/header'); ?>
<div class="row justify-content-center">
    <div class="col-md-5 text-center">
        <div class="card card-produk p-4 border-success shadow-lg" style="border-style: solid; border-width: 2px;">
            <div class="mb-3">
                <div class="bg-success d-inline-block rounded-circle p-3 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-check-lg" viewBox="0 0 16 16">
                      <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.42-6.446z"/>
                    </svg>
                </div>
            </div>

            <h4 class="text-success fw-bold">PEMBAYARAN BERHASIL!</h4>
            <p class="text-secondary small">Terima kasih telah berbelanja di TC Store</p>
            <hr class="border-secondary">
            
            <div class="text-start text-white mb-3">
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary">Produk:</span>
                    <span class="fw-bold"><?= $order['nama_produk']; ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary">User ID:</span>
                    <span class="text-info fw-bold"><?= $order['user_id']; ?></span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-secondary">Total:</span>
                    <span class="text-primary fw-bold">Rp <?= number_format($order['total_harga'], 0, ',', '.'); ?></span>
                </div>
            </div>

            <div class="alert alert-dark border-secondary py-2 small">
                Status: <span class="badge bg-success">TERBAYAR</span>
            </div>

            <hr class="border-secondary">
            
            <a href="<?= base_url('produk') ?>" class="btn btn-primary w-100 py-2 fw-bold rounded-pill">
                SELESAI & KEMBALI
            </a>
        </div>
    </div>
</div>
<?= view('layout/footer'); ?>