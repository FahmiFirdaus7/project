-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2025 at 10:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `No_HP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Nama`, `Pass`, `No_HP`) VALUES
(1, 'Fahmi Firdaus', 'Fhmfrds7', '089666526082'),
(2, 'Zamsteks', 'ZamsteksX6310', '081227717814');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `foto`, `tanggal_upload`) VALUES
(1, 'Sindoro1', 'Sindoro Sunset Camp', 'Sindoro1.jpg', '2025-11-23 09:23:05'),
(3, '', '', '1763890146_', '2025-11-23 09:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `gunung`
--

CREATE TABLE `gunung` (
  `ID_Gunung` int(11) NOT NULL,
  `Nama_Gunung` varchar(30) NOT NULL,
  `Lokasi` varchar(100) NOT NULL,
  `Ketinggian` varchar(30) NOT NULL,
  `Basecamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gunung`
--

INSERT INTO `gunung` (`ID_Gunung`, `Nama_Gunung`, `Lokasi`, `Ketinggian`, `Basecamp`) VALUES
(1, 'Slamet', 'Kabupaten Banyumas, Purbalingga, Pemalang, Tegal, dan Brebes — Jawa Tengah', '3.428 mdpl', 7),
(2, 'Merapi', 'Kabupaten Magelang, Boyolali dan Klaten dan Daerah Istimewa Yogyakarta (Kabupaten Sleman)', '2.968 mdpl', 3),
(3, 'Sindoro', 'Kabupaten Temanggung dan Kabupaten Wonosobo, Jawa Tengah', '3.153', 7),
(4, 'Sumbing', 'Kabupaten Magelang, Kabupaten Temanggung, dan Kabupaten Wonosobo', '3.371', 5),
(5, 'Prau', 'Kabupaten Batang, Kendal, Temanggung, dan Wonosobo', '2.590', 9),
(6, 'Merbabu', 'Kabupaten Magelang, Kabupaten Boyolali, Kabupaten Semarang, dan Kabupaten Klaten.', '3.142', 4),
(7, 'Lawu', 'Kabupaten Karanganyar Jawa Tengah, Ngawi, dan Magetan di Jawa Timur.', '3.265', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `ID_Pemesanan` int(11) NOT NULL,
  `Nama Pengunjung` varchar(30) NOT NULL,
  `Nama Gunung` varchar(30) NOT NULL,
  `Via Basecamp` varchar(100) NOT NULL,
  `Jadwal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `ID_Pengunjung` int(11) NOT NULL,
  `Nama_Pengunjung` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_HP` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`ID_Pengunjung`, `Nama_Pengunjung`, `Email`, `No_HP`, `Password`) VALUES
(0, 'Fahmi Firdaus', 'fhmfrds7@gmail.com', '089663911367', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gunung`
--
ALTER TABLE `gunung`
  ADD PRIMARY KEY (`ID_Gunung`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`ID_Pemesanan`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`ID_Pengunjung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
