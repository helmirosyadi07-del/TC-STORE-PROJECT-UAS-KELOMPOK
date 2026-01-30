<?= view('layout/header'); ?>
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-produk p-4 border-primary" style="border-style: dashed;">
            <h4 class="text-center text-primary fw-bold">STRUK PEMBELIAN</h4>
            <hr class="border-secondary">
            <div class="d-flex justify-content-between">
                <span>Game:</span>
                <span class="fw-bold">Mobile Legends</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Item:</span>
                <span class="fw-bold">86 Diamonds</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>User ID:</span>
                <span class="fw-bold">12345678 (2024)</span>
            </div>
            <hr class="border-secondary">
            <h5 class="text-center text-white">Total: Rp 20.000</h5>
            <div class="alert alert-info mt-3 small">
                Silahkan transfer ke DANA: 0812-xxxx-xxxx a/n TC STORE
            </div>
            <button class="btn btn-success w-100">Konfirmasi via WA</button>
        </div>
    </div>
</div>
<?= view('layout/footer'); ?>