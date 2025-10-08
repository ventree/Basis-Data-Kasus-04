<?php
include 'connection.php';
$view = isset($_GET['v']) ? $_GET['v'] : '';

if ($view) {
    try {
        $stmt = $pdo->query("SELECT * FROM $view");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Query gagal: " . $e->getMessage());
    }
} else {
    die("View tidak ditentukan.");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tampilan <?= htmlspecialchars($view) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h3 class="mb-3 text-center">Hasil dari <?= htmlspecialchars($view) ?></h3>
    <a href="index.php" class="btn btn-secondary mb-3">← Kembali</a>

    <?php if (!empty($rows)) : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <?php foreach (array_keys($rows[0]) as $col): ?>
                        <th><?= htmlspecialchars($col) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <?php foreach ($row as $data): ?>
                            <td><?= htmlspecialchars($data) ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">Data tidak ditemukan di view ini.</div>
    <?php endif; ?>
</div>
</body>
</html>
