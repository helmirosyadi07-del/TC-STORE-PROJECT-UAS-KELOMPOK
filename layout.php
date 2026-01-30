<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">
    <!-- SIDEBAR -->
    <div class="bg-dark text-white p-3" style="width:250px; min-height:100vh">
        <h5 class="mb-4">ADMIN PANEL</h5>

        <a href="<?= base_url('admin/dashboard') ?>" class="d-block text-white mb-2">📊 Dashboard</a>
        <a href="<?= base_url('admin/kelola_produk') ?>" class="d-block text-white mb-2">📦 Kelola Produk</a>
        <a href="<?= base_url('admin/laporan') ?>" class="d-block text-white mb-2">📈 Laporan</a>
    </div>

    <!-- CONTENT -->
    <div class="flex-fill p-4">
        <?= $this->renderSection('content') ?>
    </div>
</div>

</body>
</html>
