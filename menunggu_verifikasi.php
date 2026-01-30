<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menunggu Konfirmasi | TC STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body { 
            background: #06090f; 
            color: white; 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            text-align: center;
        }
        .glass-box { 
            background: rgba(255, 255, 255, 0.05); 
            border: 1px solid rgba(255, 255, 255, 0.1); 
            padding: 50px; 
            border-radius: 24px; 
            width: 100%; 
            max-width: 500px; 
            box-shadow: 0 0 50px rgba(0, 212, 255, 0.1);
        }
        .loader { 
            width: 70px; 
            height: 70px; 
            border: 6px solid rgba(255,255,255,0.1); 
            border-bottom-color: #00d4ff; 
            border-radius: 50%; 
            display: inline-block; 
            animation: rotation 1s linear infinite; 
            margin-bottom: 30px; 
        }
        @keyframes rotation { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>

    <div class="glass-box">
        <div id="loading-area">
            <div class="loader"></div>
            <h3 class="fw-bold mb-2">Sedang Memverifikasi...</h3>
            <p class="text-secondary small">Admin sedang mengecek pembayaran kamu.<br>Jangan tutup halaman ini.</p>
            
            <div class="mt-4 p-3 rounded border border-secondary bg-dark">
                <small class="text-secondary d-block">Item:</small>
                <span class="fw-bold text-primary fs-5"><?= $transaksi['produk_nama'] ?></span>
            </div>
        </div>

        <div id="success-area" style="display: none;">
            <div style="font-size: 80px; margin-bottom: 20px;">✅</div>
            <h2 class="fw-800 text-success mb-2">TOP UP BERHASIL!</h2>
            <p class="text-secondary small">Diamond/Item sudah masuk ke akun kamu.</p>
            <a href="<?= base_url('produk') ?>" class="btn btn-primary w-100 mt-4 rounded-pill fw-bold">BELI LAGI</a>
        </div>
    </div>

    <script>
        let transaksiId = "<?= $transaksi['id'] ?>";

        // Cek Status Tiap 2 Detik
        let cekStatus = setInterval(() => {
            fetch("<?= base_url('produk/cek_status_transaksi/') ?>/" + transaksiId)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'Berhasil') {
                    clearInterval(cekStatus);
                    document.getElementById('loading-area').style.display = 'none';
                    document.getElementById('success-area').style.display = 'block';
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Pembayaran diterima.',
                        icon: 'success',
                        background: '#1a1d24',
                        color: '#fff'
                    });
                }
            });
        }, 2000);
    </script>
</body>
</html>