<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=pengendalian_biaya", "root", "");
  echo "Koneksi PDO berhasil!";
} catch (PDOException $e) {
  echo "Koneksi gagal: " . $e->getMessage();
}
?>
