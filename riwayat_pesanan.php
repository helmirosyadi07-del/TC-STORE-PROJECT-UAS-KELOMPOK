<?php if ($order['status'] == 'Berhasil'): ?>
    <span class="badge bg-success">
        ✔ Pembayaran berhasil
    </span>
<?php else: ?>
    <span class="badge bg-warning">
        ⏳ Menunggu konfirmasi admin
    </span>
<?php endif; ?>
