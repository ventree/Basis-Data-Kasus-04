<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan View Kasus 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Laporan View Kasus 04</h2>
    <div class="list-group">
        <a href="view.php?v=view_laporan_a" class="list-group-item list-group-item-action">View (a) - Laporan biaya langsung per pesanan</a>
        <a href="view.php?v=view_laporan_b" class="list-group-item list-group-item-action">View (b) - Laporan biaya per bulan</a>
        <a href="view.php?v=view_laporan_c" class="list-group-item list-group-item-action">View (c) - Laporan biaya per produk</a>
        <a href="view.php?v=view_laporan_d" class="list-group-item list-group-item-action">View (d) - Penghitungan biaya per pesanan</a>
        <a href="view.php?v=view_laporan_e" class="list-group-item list-group-item-action">View (e) - Laporan biaya per SubKelompok</a>
        <a href="view.php?v=view_laporan_f" class="list-group-item list-group-item-action">View (f) - Produk 'Sepatu'</a>
        <a href="view.php?v=view_laporan_g" class="list-group-item list-group-item-action">View (g) - Total biaya > 20 juta</a>
        <a href="view.php?v=view_laporan_h" class="list-group-item list-group-item-action">View (h) - Top 3 kelompok biaya terbesar</a>
    </div>
</div>

</body>
</html>
