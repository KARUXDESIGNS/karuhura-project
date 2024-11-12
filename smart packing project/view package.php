
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Packages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>All Packages</h2>
        <?php foreach ($packages as $package): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Package ID: <?= htmlspecialchars($package['id']) ?></h5>
                    <p><strong>Weight:</strong> <?= htmlspecialchars($package['weight']) ?> kg</p>
                    <p><strong>Contents:</strong> <?= htmlspecialchars($package['contents']) ?></p>
                    <p><strong>Destination:</strong> <?= htmlspecialchars($package['destination']) ?></p>
                    <p><strong>Status:</strong>
                        <span class="badge <?= $package['status'] === 'shipped' ? 'badge-success' : 'badge-secondary' ?>">
                            <?= htmlspecialchars($package['status']) ?>
                        </span>
                    </p>
                    <?php if ($package['status'] !== 'shipped'): ?>
                        <a href="update_status.php?id=<?= $package['id'] ?>" class="btn btn-outline-primary btn-sm">Mark as Shipped</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <a href="index.php" class="btn btn-link">Back to Home</a>
    </div>
</body>
</html>
<?php 
include 'config.php';
 ?>

