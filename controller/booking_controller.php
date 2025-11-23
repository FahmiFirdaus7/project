<?php

    require_once '../koneksi.php';
    session_start();

    $pemesan = $_POST['namaBooking'];
    $hiking = $_POST['gunungBooking'];
    $basecamp = $_POST['basecampBooking'];
    $date = $_POST['date'];

    mysqli_query($koneksi, "INSERT INTO pemesanan (Nama_Pengunjung, Nama_Gunung, Via_Basecamp, Jadwal) 
                VALUES ('$pemesan', '$hiking', '$basecamp', '$date')");

    header("Location: ../view/resi.php");
    exit;


?>