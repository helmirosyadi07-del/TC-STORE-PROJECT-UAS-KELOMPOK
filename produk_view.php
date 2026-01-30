<?= view('layout/header'); ?>
<div class="container py-5 mt-4">
    <div class="text-center mb-5">
        <h2 class="fw-800 text-white"><?= $judul_halaman ?></h2>
        <p class="text-secondary">Pilih layanan top-up favoritmu</p>
    </div>

    <?php 
    $kategori_list = [
        ['key' => 'game', 'title' => 'TOP UP GAME', 'icon' => '🎮', 'color' => 'primary'],
        ['key' => 'app', 'title' => 'APPS PREMIUM', 'icon' => '📱', 'color' => 'success']
    ];

    foreach ($kategori_list as $kat) : 
        if ($judul_halaman == 'SEMUA PRODUK' || strpos($judul_halaman, $kat['key']) !== false) :
    ?>
    <section class="mb-5">
        <div class="category-divider d-flex align-items-center mb-4">
            <h3 class="text-white m-0 me-3"><span><?= $kat['icon'] ?></span> <?= $kat['title'] ?></h3>
            <div class="flex-grow-1" style="height: 2px; background: linear-gradient(to right, var(--bs-<?= $kat['color'] ?>), transparent);"></div>
        </div>
        
        <div class="row g-4"> <?php foreach ($semua_produk as $p) : ?>
                <?php if ($p['kategori'] == $kat['key']) : ?>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="item-card text-center h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="item-icon-wrapper mb-3"><?= ($kat['key'] == 'game' ? '🕹️' : '💎') ?></div>
                            <h5 class="fw-bold text-white mb-1"><?= $p['nama_produk']; ?></h5>
                            <h5 class="fw-800 text-<?= $kat['color'] ?>">Rp <?= number_format($p['harga'], 0, ',', '.'); ?></h5>
                        </div>
                        <a href="<?= base_url('produk/beli/'.$p['id']); ?>" class="btn-beli mt-3">BELI SEKARANG</a>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php 
        endif;
    endforeach; ?>
</div>
<?= view('layout/footer'); ?>