<?php
$gunung = [
    "nama" => "Gunung Slamet",
    "tinggi" => "3.428 mdpl",
    "lokasi" => "Kabupaten Banyumas, Purbalingga, Pemalang, Tegal, dan Brebes — Jawa Tengah",
    "deskripsi" => "Gunung Slamet adalah gunung tertinggi di Jawa Tengah dan gunung berapi aktif tipe strato. 
                    Pendakiannya cukup menantang dengan jalur panjang, cuaca ekstrem, serta medan berbatu di 
                    area puncak. Karakter khasnya adalah kawah besar yang selalu mengeluarkan asap sulfur.",
    "fakta" => [
        "Termasuk gunung paling luas di Jawa.",
        "Puncaknya sering berkabut tebal dengan suhu bisa mencapai 5°C.",
        "Jalur paling populer: Bambangan (Purbalingga).",
        "Dijuluki sebagai 'atap Jawa Tengah'."
    ],
    "gambar" => [
        "https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1500&q=80",
        "https://images.unsplash.com/photo-1482192596544-9eb780fc7f66?auto=format&fit=crop&w=1500&q=80",
        "https://images.unsplash.com/photo-1500048993959-d6b4757e39c0?auto=format&fit=crop&w=1500&q=80"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $gunung['nama']; ?> - Detail Gunung</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Background Header Fullscreen */
    .header-full {
        height: 100vh;
        background-size: cover;
        background-position: center;
        position: relative;
        transition: background-image 1s ease-in-out;
    }
    .header-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.55);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .booking-box {
        background: #28a745;
        color: white;
        padding: 13px 20px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: bold;
        text-decoration: none;
        transition: .3s;
    }
    .booking-box:hover {
        background: #1e7e34;
        color: #fff;
        text-decoration: none;
    }
  </style>
</head>

<body class="bg-light text-dark">

<!-- NAVBAR -->
<header class="bg-success text-white py-3 shadow">
  <div class="container d-flex justify-content-between align-items-center">
    <h1 class="fw-bold fs-3">Hiking<span class="text-dark">Hub</span></h1>
    <nav>
      <a href="index.php" class="me-3 text-white text-decoration-none fw-semibold">Beranda</a>
      <a href="../controller/logout_controller.php" class="text-white text-decoration-none fw-semibold">Logout</a>
    </nav>
  </div>
</header>

<!-- FULL BACKGROUND HEADER -->
<section id="headerBg"
         class="header-full"
         style="background-image: url('<?= $gunung['gambar'][0] ?>');">

    <div class="header-overlay">
        <h2 class="text-white fw-bold display-3 text-center">
            <?= $gunung['nama']; ?>
        </h2>
    </div>

</section>

<!-- DETAIL -->
<section class="container py-5">

    <div class="bg-white p-5 rounded-4 shadow">

        <h3 class="fw-bold mb-3"><?= $gunung['nama']; ?></h3>
        <p class="text-secondary lh-lg"><?= $gunung['deskripsi']; ?></p>

        <div class="row my-4 align-items-center">
            
            <!-- Tinggi -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-semibold mb-2">📌 Tinggi</h4>
                <p class="text-secondary"><?= $gunung['tinggi']; ?></p>
            </div>

            <!-- Lokasi -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-semibold mb-2">📍 Lokasi</h4>
                <p class="text-secondary"><?= $gunung['lokasi']; ?></p>
            </div>
        </div>

        <!-- Fakta Menarik -->
        <div class="row">
            <div class="col-md-8">
                <h4 class="fw-semibold mb-3">⭐ Fakta Menarik</h4>
                <ul class="text-secondary">
                    <?php foreach ($gunung['fakta'] as $f): ?>
                        <li class="mb-2"><?= $f; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- CTA 3 di sisi kanan -->
            <div class="col-md-4 d-flex align-items-center">
                <a href="booking.php" class="booking-box w-100 justify-content-center">
                    📞 Booking Sekarang!
                </a>
            </div>
        </div>

        <!-- tombol -->
        <a href="index.php" class="btn btn-success btn-lg mt-4 px-4">
            ← Kembali ke Daftar Gunung
        </a>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-success text-white text-center py-4">
    <p class="mb-0">© 2025 Hiking Hub. All rights reserved.</p>
</footer>

<!-- Background Rotator -->
<script>
    const images = <?= json_encode($gunung['gambar']); ?>;
    let index = 0;

    setInterval(() => {
        index = (index + 1) % images.length;
        document.getElementById("headerBg").style.backgroundImage = `url('${images[index]}')`;
    }, 6000); // 6 detik ganti
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
