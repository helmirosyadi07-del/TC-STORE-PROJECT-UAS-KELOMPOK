<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami | TC STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #06090f; color: white; font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 40px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-4 px-5">
        <a class="navbar-brand fw-800" href="<?= base_url() ?>">TC <span class="text-primary">STORE</span></a>
        <div class="collapse navbar-collapse justify-content-end">
            <div class="navbar-nav gap-4">
                <a class="nav-link fw-bold" href="<?= base_url('beranda') ?>">Beranda</a>
                <a class="nav-link fw-bold" href="<?= base_url('produk') ?>">Produk</a>
                <a class="nav-link fw-bold active text-primary" href="<?= base_url('tentang') ?>">Tentang</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="fw-800 display-4 mb-4">TENTANG <span class="text-primary">KAMI</span></h1>
                
                <div class="glass-card">
                    <p class="fs-5 text-secondary lh-lg">
                        <strong>TC STORE</strong> adalah platform Top Up Game dan Aplikasi Premium terpercaya yang dibuat khusus untuk memudahkan para gamers dan mahasiswa mendapatkan item impian dengan harga pelajar.
                    </p>
                    <p class="fs-5 text-secondary mt-3">
                        Kami menjamin proses cepat, aman, dan layanan pelanggan yang siap membantu kapan saja.
                    </p>
                    
                    <hr class="border-secondary my-4">
                    
                    <h5 class="fw-bold mb-3">HUBUNGI ADMIN:</h5>
                    <a href="https://wa.me/6287797948327" class="btn btn-success rounded-pill px-4 fw-bold">
                        WhatsApp Admin
                    </a>
                </div>
                
                <div class="mt-5 text-secondary small">
                    &copy; <?= date('Y') ?> TC STORE - All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

</body>
</html>