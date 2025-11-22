<?php

require_once '../koneksi.php';

?>



<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Hiking Adventure</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Background -->
  <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center"
       style="background-image: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1500&q=80');">

    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- Register Card -->
    <div class="relative bg-white/10 backdrop-blur-md rounded-2xl shadow-xl w-96 p-8 text-white z-10 border border-white/20">
      <h2 class="text-3xl font-bold text-center mb-6">Buat Akun</h2>

      <form action="../controller/register_controller.php" method="POST" class="space-y-5">

        <div>
          <label class="block mb-1 font-medium">Nama Lengkap</label>
          <input type="text" name="nama_lengkap" required
                 class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300
                        focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
          <label class="block mb-1 font-medium">No. Telepon</label>
          <input type="text" name="hp" required
                 class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300
                        focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
          <label class="block mb-1 font-medium">Email</label>
          <input type="email" name="email" required
                 class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300
                        focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
          <label class="block mb-1 font-medium">Password</label>
          <input type="password" name="password" required
                 class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300
                        focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div>
          <label class="block mb-1 font-medium">Konfirmasi Password</label>
          <input type="password" name="password_confirm" required
                 class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300
                        focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 transition text-white font-semibold py-2 rounded-lg shadow-lg"
                name="register">
          Daftar
        </button>
      </form>

      <p class="text-center text-sm mt-4 text-gray-200">
        Sudah punya akun?
        <a href="login.php" class="text-green-300 hover:text-green-400 font-semibold">
          Masuk di sini
        </a>
      </p>

      <p class="text-sm text-center mt-6 text-gray-200">© 2025 Hiking Hub</p>
    </div>
  </div>

</body>
</html>
