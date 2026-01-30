<?= view('layout/header'); ?>

<style>
    /* Hero Banner Styling */
    .hero-gradient {
        background: radial-gradient(circle at 0% 0%, rgba(0, 123, 255, 0.15) 0%, transparent 40%);
        padding: 100px 0 60px;
    }
    
    .floating-icon {
        animation: floating 3s ease-in-out infinite;
    }
    
    @keyframes floating {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    .stat-box {
        border-right: 1px solid rgba(255,255,255,0.1);
    }
    .stat-box:last-child { border: none; }

    /* Step Alur Styling */
    .step-number {
        width: 40px; height: 40px;
        background: var(--primary);
        color: white;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-weight: 800; margin-bottom: 20px;
    }

    .trust-badge {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 20px;
        transition: 0.3s;
    }
    .trust-badge:hover { background: rgba(0, 123, 255, 0.05); border-color: var(--primary); }
</style>

<div class="hero-gradient">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 text-start">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-3" style="font-size: 0.7rem; letter-spacing: 1px;">#1 TOP UP PLATFORM IN INDONESIA</span>
                <h1 class="display-3 fw-800 text-white mb-3" style="line-height: 1;">LEVEL UP YOUR <br><span style="color: var(--primary);">GAMING SKILL</span></h1>
                <p class="text-secondary fs-5 mb-4">Nikmati kemudahan top-up game favorit dan langganan aplikasi premium dengan harga yang bikin dompet tetap "mesra".</p>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <span class="display-1 floating-icon">🎮</span>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-5 pb-5">
            <div class="col-md-6">
                <a href="<?= base_url('produk/index/game') ?>" class="text-decoration-none">
                    <div class="tc-card p-5 text-center position-relative overflow-hidden">
                        <div class="position-absolute opacity-10" style="bottom: -20px; right: -10px; font-size: 8rem;">🎮</div>
                        <div class="display-4 mb-3">🕹️</div>
                        <h2 class="text-white fw-800">TOP UP GAME</h2>
                        <p class="text-secondary mb-0">MLBB, Free Fire, Valorant, & Lainnya.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?= base_url('produk/index/app') ?>" class="text-decoration-none">
                    <div class="tc-card p-5 text-center position-relative overflow-hidden">
                        <div class="position-absolute opacity-10" style="bottom: -20px; right: -10px; font-size: 8rem;">📱</div>
                        <div class="display-4 mb-3">💎</div>
                        <h2 class="text-white fw-800">APPS PREMIUM</h2>
                        <p class="text-secondary mb-0">Netflix, Spotify, YouTube Premium, dll.</p>
                    </div>
                </a>
            </div>
        </div>

        <hr class="border-secondary opacity-10 my-5">

        <div class="row text-center py-5">
            <div class="col-md-4 stat-box">
                <h2 class="fw-800 text-white mb-0">10K+</h2>
                <p class="text-secondary">Transaksi Berhasil</p>
            </div>
            <div class="col-md-4 stat-box">
                <h2 class="fw-800 text-white mb-0">24/7</h2>
                <p class="text-secondary">Sistem Otomatis</p>
            </div>
            <div class="col-md-4 stat-box">
                <h2 class="fw-800 text-white mb-0">50+</h2>
                <p class="text-secondary">Pilihan Produk</p>
            </div>
        </div>

        <div class="py-5 mt-5">
            <div class="text-center mb-5">
                <h2 class="fw-800">CARA <span class="text-primary">BELANJA</span></h2>
                <p class="text-secondary">Hanya butuh 3 langkah untuk level-up!</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="tc-card p-4">
                        <div class="step-number mx-auto">1</div>
                        <h5 class="fw-bold">Pilih Produk</h5>
                        <p class="small text-secondary m-0">Cari game atau aplikasi favoritmu di menu produk.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tc-card p-4">
                        <div class="step-number mx-auto">2</div>
                        <h5 class="fw-bold">Bayar Kilat</h5>
                        <p class="small text-secondary m-0">Gunakan QRIS atau E-Wallet favoritmu.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tc-card p-4">
                        <div class="step-number mx-auto">3</div>
                        <h5 class="fw-bold">Selesai</h5>
                        <p class="small text-secondary m-0">Item otomatis masuk ke akun dalam hitungan detik.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <h2 class="fw-800 mb-4">KEUNGGULAN <span class="text-primary">TC STORE</span></h2>
                    <div class="trust-badge mb-3">
                        <h6 class="fw-bold text-white mb-1">⚡ Instant Delivery</h6>
                        <p class="small text-secondary m-0">Nggak pake lama, setelah bayar langsung diproses sistem.</p>
                    </div>
                    <div class="trust-badge mb-3">
                        <h6 class="fw-bold text-white mb-1">💸 Harga Mahasiswa</h6>
                        <p class="small text-secondary m-0">Harga miring kualitas bintang lima, pas buat kantong pelajar.</p>
                    </div>
                    <div class="trust-badge mb-3">
                        <h6 class="fw-bold text-white mb-1">🛡️ Aman & Legal</h6>
                        <p class="small text-secondary m-0">Semua produk resmi dan bergaransi penuh.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="p-5 tc-card">
                        <h3 class="fw-bold text-white">Butuh Bantuan?</h3>
                        <p class="text-secondary">CS kami siap membantu kendalamu 24 jam nonstop.</p>
                        <a href="#" class="btn-mesra mt-3">HUBUNGI WHATSAPP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('layout/footer'); ?>