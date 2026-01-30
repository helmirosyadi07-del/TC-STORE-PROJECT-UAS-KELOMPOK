<?= view('layout/header'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card bg-dark border-secondary shadow-lg">
            <div class="card-header bg-primary text-white fw-bold">Customer Service TC Store</div>
            <div id="chat-box" class="card-body overflow-auto" style="height: 400px; display: flex; flex-direction: column-reverse;">
                </div>
            <div class="card-footer border-secondary">
                <form id="form-chat" class="d-flex gap-2">
                    <input type="text" id="pesan-input" class="form-control bg-dark text-white border-secondary" placeholder="Tulis pesan..." required>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Nanti di sini kita taro script AJAX buat kirim & ambil pesan otomatis
</script>
<?= view('layout/footer'); ?>