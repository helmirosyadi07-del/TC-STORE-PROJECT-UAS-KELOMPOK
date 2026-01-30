<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TC STORE | OWNER PANEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root { --glass: rgba(255, 255, 255, 0.02); --border: rgba(255, 255, 255, 0.05); }
        body { background: #06090f !important; font-family: 'Plus Jakarta Sans', sans-serif; color: white; overflow-x: hidden; }
        .sidebar { background: rgba(255,255,255,0.01); backdrop-filter: blur(20px); border-right: 1px solid var(--border); min-height: 100vh; padding: 45px 25px; position: fixed; width: 280px; z-index: 1000; }
        .main-content { margin-left: 280px; padding: 50px 70px; min-height: 100vh; }
        .nav-admin-link { display: flex; align-items: center; padding: 14px 22px; color: #64748b; text-decoration: none; border-radius: 14px; margin-bottom: 10px; transition: 0.3s; font-weight: 600; }
        .nav-admin-link.active { background: rgba(0, 123, 255, 0.1); color: #00d4ff; border: 1px solid rgba(0, 212, 255, 0.2); }
        .glass-card { background: var(--glass); border: 1px solid var(--border); border-radius: 32px; padding: 35px; }
    </style>
</head>
<body>
<div class="sidebar">
    <h2 class="fw-800 mb-5 px-3">TC <span class="text-primary">ADMIN</span></h2>
    <a href="<?= base_url('admin/dashboard') ?>" class="nav-admin-link <?= (url_is('admin/dashboard') ? 'active' : '') ?>">📥 Pesanan Masuk</a>
    <a href="<?= base_url('admin/kelola_produk') ?>" class="nav-admin-link <?= (url_is('admin/kelola_produk') ? 'active' : '') ?>">📦 Kelola Produk</a>
    <a href="<?= base_url('admin/laporan') ?>" class="nav-admin-link <?= (url_is('admin/laporan') ? 'active' : '') ?>">📊 Laporan Penjualan</a>
    <div style="margin-top: 150px;"><a href="<?= base_url('beranda') ?>" class="nav-admin-link text-danger">⬅ Logout Panel</a></div>
</div>
<div class="main-content">