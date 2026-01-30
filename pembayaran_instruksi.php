<?= view('layout/header'); ?>
<div class="container py-5 d-flex justify-content-center">
    <div class="tc-card p-5 text-center shadow-lg" style="max-width: 500px; border-radius: 30px;">
        <h3 class="fw-800 text-white mb-4">INSTRUKSI PEMBAYARAN</h3>
        
        <div class="p-4 mb-4" style="background: rgba(0, 123, 255, 0.1); border-radius: 20px;">
            <p class="small text-secondary mb-1">Total Bayar:</p>
            <h2 class="fw-800 text-primary">Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></h2>
        </div>

        <div class="text-start mb-4">
            <p class="text-secondary small mb-2">TRANSFER KE REKENING/E-WALLET:</p>
            <div class="p-3 rounded-3 mb-2" style="background: rgba(255,255,255,0.05); border: 1px dashed #007bff;">
                <h5 class="fw-bold text-white mb-1"><?= $metode; ?> (A/N TC STORE)</h5>
                <h4 class="text-primary fw-800 mb-0">0812-3456-7890</h4>
            </div>
            <small class="text-muted italic">*Admin akan verifikasi setelah Anda klik tombol di bawah.</small>
        </div>

        <button onclick="prosesVerifikasi()" class="btn-mesra w-100 py-3 rounded-pill">SAYA SUDAH TRANSFER</button>
    </div>
</div>

<div id="loading-overlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(11,14,20,0.95); z-index:9999; flex-direction:column; align-items:center; justify-content:center;">
    <div class="spinner-border text-primary mb-3" style="width: 3rem; height: 3rem;"></div>
    <h4 class="text-white fw-bold">MEMVERIFIKASI...</h4>
</div>

<script>
function prosesVerifikasi() {
    document.getElementById('loading-overlay').style.display = 'flex';
    setTimeout(function() {
        window.location.href = "<?= base_url('produk/konfirmasi_final') ?>";
    }, 3000);
}
</script>
<?= view('layout/footer'); ?>