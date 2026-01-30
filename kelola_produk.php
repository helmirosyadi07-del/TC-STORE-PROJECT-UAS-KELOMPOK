<?= view('layout/header_admin'); ?>

    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="fw-800 m-0 text-white">KELOLA <span class="text-primary">PRODUK</span></h1>
            <p class="text-secondary small mt-1">Atur stok barang dagangan toko lu disini.</p>
        </div>
        <a href="<?= base_url('admin/produk/tambah') ?>" class="btn btn-primary fw-bold rounded-pill px-4">
            + Tambah Produk
        </a>
    </div>

    <div class="glass-card">
        <div class="table-responsive">
            <table class="table table-borderless align-middle m-0 text-white">
                <thead class="text-secondary small text-uppercase">
                    <tr style="border-bottom: 1px solid var(--border);">
                        <th class="pb-3">NAMA PRODUK</th>
                        <th class="pb-3">HARGA</th>
                        <th class="pb-3">STOK</th>
                        <th class="pb-3 text-end">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($produk)): ?>
                        <?php foreach($produk as $p): ?>
                        <tr style="border-bottom: 1px solid rgba(255,255,255,0.02);">
                            <td class="py-4">
                                <span class="fw-bold d-block"><?= $p['nama_produk'] ?></span>
                                <small class="text-secondary text-truncate d-block" style="max-width: 200px;">
                                    <?= $p['deskripsi'] ?? '-' ?>
                                </small>
                            </td>
                            <td class="fw-bold text-success">Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
                            <td>
                                <span class="badge bg-<?= ($p['stok'] > 5) ? 'info' : 'danger' ?> bg-opacity-10 text-<?= ($p['stok'] > 5) ? 'info' : 'danger' ?> px-3 py-2 rounded-pill">
                                    <?= $p['stok'] ?> Pcs
                                </span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-warning me-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editModal<?= $p['id'] ?>">
                                    Edit
                                </button>

                                <a href="<?= base_url('admin/produk/hapus/'.$p['id']) ?>" 
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Yakin mau hapus produk <?= $p['nama_produk'] ?>?');">
                                    Hapus
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="editModal<?= $p['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background: #1a1d24; border: 1px solid rgba(255,255,255,0.1); color: white;">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title fw-bold">Edit Produk</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url('admin/produk/update/'.$p['id']) ?>" method="post">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="small text-secondary mb-1">Nama Produk</label>
                                                <input type="text" name="nama_produk" class="form-control bg-dark border-secondary text-white" value="<?= $p['nama_produk'] ?>" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-3">
                                                    <label class="small text-secondary mb-1">Harga (Rp)</label>
                                                    <input type="number" name="harga" class="form-control bg-dark border-secondary text-white" value="<?= $p['harga'] ?>" required>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="small text-secondary mb-1">Stok</label>
                                                    <input type="number" name="stok" class="form-control bg-dark border-secondary text-white" value="<?= $p['stok'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="small text-secondary mb-1">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control bg-dark border-secondary text-white" rows="3"><?= $p['deskripsi'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="4" class="text-center py-5 text-secondary">Data kosong.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>