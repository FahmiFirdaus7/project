<?php
session_start();

// SEMENTARA aktifkan admin untuk memastikan tombol muncul
$isAdmin = true;

include "../koneksi.php";

$galeri = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri Pendakian</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .gallery-card img {
      height: 220px;
      object-fit: cover;
      border-radius: 12px;
    }
  </style>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Hiking Hub</a>
    <div>
      <a href="index.php" class="btn btn-light me-2">Beranda</a>
      <a href="../controller/logout_controller.php" class="btn btn-danger">Logout</a>
    </div>
  </div>
</nav>

<div class="container py-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Galeri Pendakian</h2>

    <a href="galeri_tambah.php" class="btn btn-success">
      + Tambah Foto
    </a>
  </div>

  <div class="row g-4">

    <?php while ($g = mysqli_fetch_assoc($galeri)) : ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card border-0 shadow-sm gallery-card p-2 rounded-4">

          <img src="uploads/<?= $g['foto'] ?>" class="w-100 rounded-3">

          <div class="p-2">
            <h6 class="fw-bold mb-1"><?= $g['judul'] ?></h6>
            <p class="text-muted small"><?= $g['deskripsi'] ?></p>
          </div>

          <div class="d-flex justify-content-between p-2">
            <a href="galeri_edit.php?id=<?= $g['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a onclick="return confirm('Hapus foto ini?')"
              href="../controller/galeri_controller_hapus.php?id=<?= $g['id'] ?>"
              class="btn btn-danger btn-sm">Hapus</a>
          </div>

        </div>
      </div>
    <?php endwhile; ?>

  </div>

</div>

</body>
</html>
