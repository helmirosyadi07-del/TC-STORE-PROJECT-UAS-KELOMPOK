<form method="post" action="<?= base_url('admin/produk/simpan') ?>">
    <?= csrf_field() ?>

    <input type="text" name="nama_produk" class="form-control" required>
    <input type="number" name="harga" class="form-control" required>
    <input type="number" name="stok" class="form-control" required>
    <textarea name="deskripsi" class="form-control"></textarea>

    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>
