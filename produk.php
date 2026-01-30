<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Item | TC STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #06090f; color: white; font-family: 'Plus Jakarta Sans', sans-serif; }
        .product-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 20px;
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
            border-color: #00d4ff;
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.2);
        }
        .section-title {
            border-left: 5px solid #00d4ff;
            padding-left: 15px;
            margin-bottom: 30px;
            font-weight: 800;
        }
        .btn-buy { background: #00d4ff; color: #000; font-weight: bold; width: 100%; border-radius: 10px; padding: 10px; text-decoration: none; display: block; text-align: center; }
        .btn-buy:hover { background: #00b8e6; color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-4 px-5">
        <a class="navbar-brand fw-800" href="<?= base_url() ?>">TC <span class="text-primary">STORE</span></a>
        <div class="collapse navbar-collapse justify-content-end">
            <div class="navbar-nav gap-4">
                <a class="nav-link fw-bold" href="<?= base_url('beranda') ?>">Beranda</a>
                <a class="nav-link fw-bold active text-primary" href="<?= base_url('produk') ?>">Produk</a>
                <a class="nav-link fw-bold" href="<?= base_url('tentang') ?>">Tentang</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-5">
        
        <h3 class="section-title text-white">🎮 POPULAR GAMES</h3>
        <div class="row g-4 mb-5">
            <?php foreach($produk as $p): ?>
                <?php if(strpos($p['nama_produk'], 'Premium') === false): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card h-100">
                        <div class="bg-dark rounded-4 mb-3 d-flex align-items-center justify-content-center" style="height: 100px;">
                            <span style="font-size: 40px;">👾</span>
                        </div>
                        <h5 class="fw-bold mb-1"><?= $p['nama_produk'] ?></h5>
                        <p class="text-secondary small"><?= $p['stok'] > 0 ? 'Ready Stok' : 'Habis' ?></p>
                        <div class="mt-3">
                            <h5 class="fw-bold text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h5>
                            <a href="<?= base_url('produk/beli/'.$p['id']) ?>" class="btn-buy mt-2">TOP UP</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <h3 class="section-title text-white">💎 APPS PREMIUM</h3>
        <div class="row g-4">
            <?php foreach($produk as $p): ?>
                <?php if(strpos($p['nama_produk'], 'Premium') !== false): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card h-100">
                        <div class="bg-dark rounded-4 mb-3 d-flex align-items-center justify-content-center" style="height: 100px;">
                            <span style="font-size: 40px;">🎵</span>
                        </div>
                        <h5 class="fw-bold mb-1"><?= $p['nama_produk'] ?></h5>
                        <p class="text-secondary small">Legal 100%</p>
                        <div class="mt-3">
                            <h5 class="fw-bold text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h5>
                            <a href="<?= base_url('produk/beli/'.$p['id']) ?>" class="btn-buy mt-2">BELI</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</body>
</html>