<?= view('layout/header'); ?>
<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="tc-card p-5 text-center shadow-lg" style="max-width: 500px; border-radius: 40px;">
        <?php if ($status_sekarang == 'Pending') : ?>
            <div class="mb-4">
                <div class="spinner-grow text-primary" role="status" style="width: 4rem; height: 4rem;"></div>
            </div>
            <h2 class="fw-800 text-white">PESANAN DIPROSES</h2>
            <p class="text-secondary mb-4 small">Pembayaran Anda sedang kami verifikasi secara manual. Mohon tunggu maksimal 15 menit.</p>
            <div class="p-3 rounded-4 mb-4" style="background: rgba(255, 193, 7, 0.05); border: 1px solid rgba(255, 193, 7, 0.2);">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-secondary small">Status:</span>
                    <span class="badge bg-warning text-dark px-3 rounded-pill fw-bold">PENDING ADMIN</span>
                </div>
            </div>
            <script>setTimeout(function(){ location.reload(); }, 5000);</script>
            <p class="text-muted small italic">Halaman otomatis refresh dalam 5 detik...</p>
        <?php else : ?>
            <div class="mb-4">
                <span style="font-size: 5rem; filter: drop-shadow(0 0 20px rgba(40, 167, 69, 0.5));">✅</span>
            </div>
            <h2 class="fw-800 text-success">TOP UP BERHASIL</h2>
            <p class="text-secondary mb-4">Diamond/Item sudah dikirim ke akun Anda. Terima kasih telah menggunakan <b>TC STORE</b>!</p>
            <div class="p-3 rounded-4 mb-4" style="background: rgba(40, 167, 69, 0.05); border: 1px solid rgba(40, 167, 69, 0.2);">
                <div class="d-flex justify-content-between">
                    <span class="text-secondary small">Status:</span>
                    <span class="text-success fw-bold">COMPLETED</span>
                </div>
            </div>
        <?php endif; ?>
        
        <a href="<?= base_url('beranda') ?>" class="btn-mesra w-100 py-3 rounded-pill">KEMBALI KE BERANDA</a>
    </div>
</div>
<?= view('layout/footer'); ?>