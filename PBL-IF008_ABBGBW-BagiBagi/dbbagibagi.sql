-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 12:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbagibagi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_pengguna` varchar(20) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `deskripsi_barang` varchar(500) NOT NULL,
  `gambar_barang` varchar(300) NOT NULL,
  `tgl_unggah` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_pengguna`, `id_kategori`, `nama_barang`, `stok_barang`, `deskripsi_barang`, `gambar_barang`, `tgl_unggah`) VALUES
(1, 'elsamaulidya', 3, 'Baju lengan ', 6, 'Bagus dan layak pakai.', 'barang1624976054.jpg', '2021-06-29'),
(3, 'deaaditya', 1, 'Topi kain', 3, 'Topinya keren.', 'barang1624976376.jpg', '2021-06-29'),
(4, 'elsamaulidya', 4, 'Kursi roda', 1, 'Masih bagus.', 'barang1624976467.jpg', '2021-06-29'),
(5, 'deaaditya', 5, 'Sepatu sport', 1, 'Nyaman dan tidak gerah.', 'barang1624977856.jpg', '2021-06-29'),
(7, 'elsamaulidya', 1, 'Dasi kupu-kupu', 12, 'Cantik warna-warni.', 'barang1624978166.jpg', '2021-06-29'),
(8, 'elsamaulidya', 5, 'Sepatu flat motif', 3, 'Tersedia 3 pasang stok.', 'barang1624978460.jpg', '2021-06-29'),
(11, 'juniariprs', 2, 'Kamus Inggris - Indonesia', 3, 'Sampul dan isi masih lengkap dan utuh.', 'barang1626065709.jpg', '2021-07-12'),
(13, 'juniariprs', 3, 'Baju dress anak', 10, 'Motif bermacam-macam, bahannya berkualitas.', 'barang1626076679.jpg', '2021-07-12'),
(14, 'juniariprs', 4, 'Meja rak', 1, 'Kuat, kokoh, dan tahan lama.', 'barang1626076766.jpg', '2021-07-12'),
(15, 'deaaditya', 3, 'Baju Jersey city', 3, 'Bahannya berkualitas.', 'barang1626077044.jpg', '2021-07-12'),
(16, 'elsamaulidya', 2, 'Novel Cinta yang Rumit - Boy Candra', 3, 'Novel genre teenlit.', 'barang1626085021.jpg', '2021-07-12'),
(39, 'deaaditya', 4, 'Kipas angin', 1, 'Masih berfungsi dengan baik.', 'barang1628127520.jpg', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Aksesoris'),
(2, 'Buku'),
(3, 'Pakaian'),
(4, 'Perabotan'),
(5, 'Sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(20) NOT NULL,
  `foto_profil` varchar(300) DEFAULT NULL,
  `nama_profil` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `kata_sandi` char(60) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `foto_profil`, `nama_profil`, `email`, `kata_sandi`, `alamat`) VALUES
('deaaditya', 'default.jpg', 'Dea Aditya', 'deaaditya@gmail.com', '$2y$10$xEpXjMQh1Uy86Mbbm6zDyO98J5sC/9iAxGo6exQ1bb7TRa4t8o3kC', ''),
('elsamaulidya', 'default.jpg', 'Elsa Maulidya', 'elsamaulidya@gmail.com', '$2y$10$7x2GG5FKzYlp79w1fBDI4emBIJcx6Of.nNIN9upFC3bjW03LvfoKW', ''),
('juniariprs', 'pengguna1626536284.jpg', 'Juniar Situmorang', 'juniariprs360@gmail.com', '$2y$10$JoEzkKZrjQBDWc.cSYCzPu3e4aBz42iMo22.i007awIFiROhp8rTG', ''),
('yagami', 'default.jpg', '', 'kyuubiryuk999@yahoo.com', '$2y$10$bg1Q0EscoZfRbK34wvy0PesXaBEVjZnNJ7Bkm//IihFTVbk48fs8W', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
