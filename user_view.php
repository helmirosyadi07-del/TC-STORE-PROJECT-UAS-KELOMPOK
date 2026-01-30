<?= view('layout/header'); ?>

<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h4 class="mb-0">Daftar User Store</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($users as $user): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($user['nama']) ?></td>
                        <td><?= esc($user['email']) ?></td>
                        <td>
                            <span class="badge bg-info text-dark">
                                <?= esc($user['level']) ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= view('layout/footer'); ?>