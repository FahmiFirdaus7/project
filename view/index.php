<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Hiking Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .hero {
      height: 100vh;
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.6);
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }

    .scroll-card-wrapper {
      display: flex;
      gap: 1.5rem;
      overflow-x: auto;
      padding-bottom: 1rem;
      scroll-snap-type: x mandatory;
    }
    .scroll-card {
      min-width: 280px;
      scroll-snap-align: center;
    }
    .scroll-card-wrapper::-webkit-scrollbar {
      display: none;
    }
    body {
            transition: background-image 1s ease-in-out;
        }
  </style>
  <script>
        let backgrounds = [
            "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=80",
            "https://images.unsplash.com/photo-1509966756634-5f26f0577846?auto=format&fit=crop&w=1400&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?auto=format&fit=crop&w=1400&q=80",
            "https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1400&q=80"
        ];

        let index = 0;

        function gantiBackground() {
            document.body.style.backgroundImage = "url('" + backgrounds[index] + "')";
            document.body.style.backgroundSize = "cover";
            document.body.style.backgroundPosition = "center";

            index = (index + 1) % backgrounds.length;
        }

        setInterval(gantiBackground, 5000);

        window.onload = gantiBackground;
    </script>
</head>
<body onload="showAlert()">
<audio id="bg-music" src="sweden.mp3" autoplay loop hidden></audio>

<header class="position-absolute w-100 z-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-4 py-3">
    <a class="navbar-brand fs-3 fw-bold text-white" href="index.php">Hiking<span class="text-success">Hub</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav text-white fw-semibold">
        <li class="nav-item mx-2"><a href="index.php" class="nav-link">Beranda</a></li>
        <li class="nav-item mx-2"><a href="#tentang" class="nav-link">Tentang</a></li>
        <li class="nav-item mx-2"><a href="#rute" class="nav-link">Rute</a></li>
        <li class="nav-item mx-2"><a href="#galeri" class="nav-link">Galeri</a></li>
        <li class="nav-item mx-2"><a href="../controller/logout_controller.php" class="nav-link bg-success bg-gradient
">Logout</a></li>
      </ul>
    </div>
  </nav>
</header>

<section id="home" class="hero d-flex align-items-center justify-content-center text-center text-white">  
  <div class="container hero-content">
    <h1 class="display-4 fw-bold mb-3">Jelajahi Keindahan Alam</h1>
    <p class="lead mb-4">Rasakan petualangan mendaki gunung bersama kami — temukan rute terbaik, teman baru, dan pengalaman tak terlupakan.</p>
    <a href="#rute" class="btn btn-success btn-lg px-4">Mulai Petualangan</a>
  </div>
</section>

<section id="tentang" class="py-5 bg-secondary text-center">
  <div class="container">
    <h2 class="fw-bold mb-3" style="color:white">Tentang Kami</h2>
    <p class="mx-auto" style="max-width: 650px; color: white;">
      Website ini dibuat karena terinspirasi dari latar belakang hobi kami sebagai pendaki gunung yang ingin berbagi informasi dan pengalaman yang selama ini sudah kami alami,
      selain itu, Website ini untuk mengabadikan momen bersejarah dimana entitas dari informatika bukan orang nolep.
    </p>
  </div>
</section>

<section id="rute" class="py-5 bg-secondary">
  <div class="container">
    <h2 class="fw-bold text-center mb-4" style="color:white">Rute Populer</h2>

    <div class="scroll-card-wrapper">
      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1508264165352-258859e62245?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Sindoro</h5>
          <p class="card-text text-muted small">View lautan awan termewah di Jawa Tengah dengan panorama Gunung Sumbing.</p>
          <a href="Sindoro.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>

      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1508261305436-14b9a7d8b9e7?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Sumbing</h5>
          <p class="card-text text-muted small">Trek ekstrim dengan kemiringan 70° ditambah panorama Sindoro dan Segara Banjaran.</p>
          <a href="Sumbing.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>

      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1549887534-24a1d5c9e5c1?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Slamet</h5>
          <p class="card-text text-muted small">Gunung tertinggi di Jawa Tengah favorit pejuang Seven Summit.</p>
          <a href="Slamet.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>

      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Merapi</h5>
          <p class="card-text text-muted small">Gunung paling aktif di Indonesia dengan sunrise epik.</p>
          <a href="Merapi.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>

      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1523473827532-57f490e7f7bf?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Prau</h5>
          <p class="card-text text-muted small">King golden sunrise Dieng, ramah untuk pendaki pemula.</p>
          <a href="Prau.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>

      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1518684079-fc5a2d43c9f4?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Merbabu</h5>
          <p class="card-text text-muted small">Padang savana luas dengan view Merapi dari dekat.</p>
          <a href="Merbabu.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>

      <div class="card shadow scroll-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=800&q=80" class="card-img-top" height="200">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Gunung Lawu</h5>
          <p class="card-text text-muted small">Gunung penuh mistis & budaya, terkenal dengan Warung Mbok Yem.</p>
          <a href="Lawu.php" class="text-success fw-semibold">Lihat Detail →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="galeri" class="py-5 bg-secondary">
  <div class="container text-center">
    <h2 class="fw-bold mb-4" style="color: white;">Galeri Kami</h2>

    <div class="row g-3 justify-content-center">
      <div class="col-md-3 col-6">
        <img class="img-fluid rounded shadow-sm"
          src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?auto=format&fit=crop&w=600&q=80"
          alt="">
      </div>
      <div class="col-md-3 col-6">
        <img class="img-fluid rounded shadow-sm"
          src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80"
          alt="">
      </div>
      <div class="col-md-3 col-6">
        <img class="img-fluid rounded shadow-sm"
          src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80"
          alt="">
      </div>
      <div class="col-md-3 col-6">
        <img class="img-fluid rounded shadow-sm"
          src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=600&q=80"
          alt="">
      </div>
    </div>
    <div class="mt-4">
      <a href="galeri.php" class="btn btn-success px-4 py-2 shadow-sm">
        Lihat Selengkapnya >>
      </a>
    </div>
  </div>
</section>

<footer id="kontak" class="bg-success text-white text-center py-4">
  <h4 class="fw-semibold">Hiking Hub</h4>
  <p class="small mb-1">Website Zamsteks dan Fahmi poenya</p>
  <p class="small">© 2025 Hiking Hub. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
      function showAlert() {
      alert("Selamat datang di Hiking Hub!");
    }
</script>
<script>
  document.addEventListener("click", function() {
      const music = document.getElementById("bg-music");
      if (music.paused) {
          music.play();
      }
  });
</script>

</body>
</html>
