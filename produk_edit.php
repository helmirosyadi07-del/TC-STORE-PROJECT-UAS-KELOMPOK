<form method="post" action="<?= base_url('admin/produk/update/'.$produk['id']) ?>">
    <?= csrf_field() ?>

    <input type="text" name="nama_produk" value="<?= $produk['nama_produk'] ?>" class="form-control">
    <input type="number" name="harga" value="<?= $produk['harga'] ?>" class="form-control">
    <input type="number" name="stok" value="<?= $produk['stok'] ?>" class="form-control">
    <textarea name="deskripsi" class="form-control"><?= $produk['deskripsi'] ?? '' ?>

    <button class="btn btn-warning mt-2">Update</button>
</form>
