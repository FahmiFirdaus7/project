<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hiking Adventure</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="absolute w-full z-10">
    <nav class="flex justify-between items-center px-8 py-4 bg-transparent">
      <h1 class="text-2xl font-bold text-white">Hiking<span class="text-green-400">Adventure</span></h1>
      <ul class="hidden md:flex space-x-8 text-white font-medium">
        <li><a href="#home" class="hover:text-green-400">Beranda</a></li>
        <li><a href="#tentang" class="hover:text-green-400">Tentang</a></li>
        <li><a href="#rute" class="hover:text-green-400">Rute</a></li>
        <li><a href="#galeri" class="hover:text-green-400">Galeri</a></li>
        <li><a href="#kontak" class="hover:text-green-400">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white px-4">
      <h2 class="text-5xl font-bold mb-4">Jelajahi Keindahan Alam</h2>
      <p class="text-lg mb-6 max-w-2xl">Rasakan petualangan mendaki gunung bersama kami — temukan rute terbaik, teman baru, dan pengalaman tak terlupakan.</p>
      <a href="#rute" class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition">Mulai Petualangan</a>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section id="tentang" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto text-center px-6">
      <h3 class="text-3xl font-bold mb-4">Tentang Kami</h3>
      <p class="text-gray-600 max-w-3xl mx-auto">Kami adalah komunitas pecinta alam yang berdedikasi untuk mengajak siapa pun menikmati keindahan alam Indonesia melalui kegiatan hiking yang aman, seru, dan penuh edukasi lingkungan.</p>
    </div>
  </section>

  <!-- Rute Populer -->
  <section id="rute" class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-12">Rute Populer</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
          <img src="https://images.unsplash.com/photo-1508264165352-258859e62245?auto=format&fit=crop&w=800&q=80" class="w-full h-56 object-cover" alt="Gunung Bromo">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Gunung Bromo</h4>
            <p class="text-gray-600 text-sm mb-4">Nikmati sunrise terbaik di Indonesia dengan pemandangan spektakuler.</p>
            <a href="#" class="text-green-500 font-semibold hover:text-green-600">Lihat Detail →</a>
          </div>
        </div>
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
          <img src="https://images.unsplash.com/photo-1508261305436-14b9a7d8b9e7?auto=format&fit=crop&w=800&q=80" class="w-full h-56 object-cover" alt="Gunung Rinjani">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Gunung Rinjani</h4>
            <p class="text-gray-600 text-sm mb-4">Pendakian menantang dengan panorama Danau Segara Anak yang menakjubkan.</p>
            <a href="#" class="text-green-500 font-semibold hover:text-green-600">Lihat Detail →</a>
          </div>
        </div>
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
          <img src="https://images.unsplash.com/photo-1549887534-24a1d5c9e5c1?auto=format&fit=crop&w=800&q=80" class="w-full h-56 object-cover" alt="Gunung Semeru">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Gunung Semeru</h4>
            <p class="text-gray-600 text-sm mb-4">Gunung tertinggi di Jawa, destinasi impian para pendaki sejati.</p>
            <a href="#" class="text-green-500 font-semibold hover:text-green-600">Lihat Detail →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Galeri -->
  <section id="galeri" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-12">Galeri Alam</h3>
      <div class="grid md:grid-cols-4 gap-4">
        <img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?auto=format&fit=crop&w=600&q=80" class="rounded-xl object-cover w-full h-56" alt="">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80" class="rounded-xl object-cover w-full h-56" alt="">
        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80" class="rounded-xl object-cover w-full h-56" alt="">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=600&q=80" class="rounded-xl object-cover w-full h-56" alt="">
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="kontak" class="bg-green-600 text-white py-8 text-center">
    <h4 class="text-xl font-semibold mb-2">Hiking Adventure</h4>
    <p class="text-sm mb-4">Petualangan dimulai dari langkah pertama. Mari jelajahi bersama kami!</p>
    <p class="text-sm">© 2025 Hiking Adventure. All rights reserved.</p>
  </footer>

</body>
</html>
