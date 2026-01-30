<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Checkout | TC STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #06090f; color: white; font-family: 'Plus Jakarta Sans', sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; }
        .glass-checkout { background: #11141a; border: 1px solid rgba(255,255,255,0.1); padding: 40px; border-radius: 24px; max-width: 450px; width: 100%; }
        .form-control { background: #06090f; border: 1px solid rgba(255,255,255,0.1); color: white; padding: 12px; }
        .form-control:focus { background: #06090f; color: white; border-color: #00d4ff; box-shadow: none; }
    </style>
</head>
<body>

    <div class="glass-checkout">
        <h3 class="fw-800 text-center mb-4">CHECKOUT</h3>
        
        <form action="<?= base_url('produk/proses_bayar') ?>" method="post">
            
            <input type="hidden" name="produk_nama" value="<?= $p['nama_produk'] ?>">
            <input type="hidden" name="harga" value="<?= $p['harga'] ?>">

            <div class="bg-primary bg-opacity-10 p-3 rounded mb-4 text-center border border-primary border-opacity-25">
                <span class="d-block text-secondary small text-uppercase fw-bold">Item yang dipilih</span>
                <h4 class="fw-bold m-0 text-white"><?= $p['nama_produk'] ?></h4>
                <h5 class="fw-bold text-primary mt-1">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h5>
            </div>

            <div class="mb-3">
                <label class="small text-secondary fw-bold mb-2">ID PLAYER / EMAIL</label>
                <input type="text" name="user_id" class="form-control rounded-3" placeholder="Contoh: 12345678 (2022)" required>
            </div>

            <div class="mb-4">
                <label class="small text-secondary fw-bold mb-2">METODE PEMBAYARAN</label>
                <select class="form-control rounded-3" required>
                    <option value="DANA">DANA (Otomatis)</option>
                    <option value="GOPAY">GOPAY</option>
                    <option value="QRIS">QRIS (All Payment)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-3 fw-bold rounded-pill">
                BAYAR SEKARANG ⚡
            </button>
            
            <div class="text-center mt-3">
                <a href="<?= base_url('produk') ?>" class="text-secondary small text-decoration-none">← Batal Beli</a>
            </div>
        </form>
    </div>

</body>
</html>