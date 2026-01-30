<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Status</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 30px; }
        .box {
            background: #fff; padding: 20px; border-radius: 10px;
            width: 350px; box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .connected { color: green; font-weight: bold; }
        .failed { color: red; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h3>Database Status</h3>

    <?php if (strpos($status, 'successfully') !== false): ?>
        <p class="connected"><?= $status ?></p>
    <?php else: ?>
        <p class="failed"><?= $status ?></p>
    <?php endif; ?>
</div>

</body>
</html>
