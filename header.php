<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TC STORE | Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #06090f !important; font-family: 'Plus Jakarta Sans', sans-serif; color: white; }
        .navbar { background: rgba(6, 9, 15, 0.9); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255,255,255,0.05); padding: 20px 0; }
        .nav-link { color: #9ca3af !important; font-weight: 600; margin: 0 15px; }
        .nav-link:hover { color: #007bff !important; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-800 text-white" href="<?= base_url('/') ?>">TC <span class="text-primary">STORE</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('beranda') ?>">BERANDA</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('produk') ?>">PRODUK</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('tentang') ?>">TENTANG</a></li>
            </ul>
        </div>
    </div>
</nav>