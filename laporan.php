<?= view('layout/header_admin'); ?>

    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="fw-800 m-0 text-white">LAPORAN <span class="text-primary">PENJUALAN</span></h1>
            <p class="text-secondary small mt-1">Rekapitulasi pendapatan bersih store lu.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-5">
            <div class="glass-card" style="background: linear-gradient(45deg, #007bff22, #00d4ff11); border: 1px solid #00d4ff33;">
                <p class="text-secondary small fw-bold mb-1">TOTAL CUAN BERSIH</p>
                <h1 class="fw-800 m-0 text-white">Rp <?= number_format($total_cuan, 0, ',', '.'); ?></h1>
            </div>
        </div>
    </div>

    <div class="glass-card">
        <h5 class="fw-bold mb-4 text-white">RIWAYAT TRANSAKSI SUKSES</h5>
        <div class="table-responsive">
            <table class="table table-borderless align-middle m-0 text-white">
                <thead class="text-secondary small text-uppercase">
                    <tr style="border-bottom: 1px solid var(--border);">
                        <th class="pb-3">TANGGAL</th>
                        <th class="pb-3">ITEM</th>
                        <th class="pb-3">USER</th>
                        <th class="pb-3 text-end">NOMINAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($laporan as $l): ?>
                   <tr style="border-bottom: 1px solid rgba(255,255,255,0.02);">
    <td class="py-4 small"><?= date('d/m/Y', strtotime($l['created_at'])) ?></td>
    <td><span class="text-primary fw-bold"><?= $l['nama_produk'] ?></span></td>
    <td class="small"><?= $l['user_id'] ?></td>
    <td class="text-end fw-800 text-white">Rp <?= number_format($l['total_harga'], 0, ',', '.') ?></td>
</tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>