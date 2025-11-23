<?php
include "../koneksi.php";

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$folder = "../view/uploads/";

// Generate nama unik
$nama_baru = time() . "_" . $foto;

// Upload file
move_uploaded_file($tmp, $folder . $nama_baru);

// Simpan ke DB
mysqli_query($koneksi, "INSERT INTO galeri (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$nama_baru')");

header("Location: ../view/galeri.php");
exit;
