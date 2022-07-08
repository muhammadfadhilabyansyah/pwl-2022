-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 12:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunia_gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` text NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga_produk`, `stok_produk`) VALUES
(1, 'iPhone 13 Blue 512GB', 'Garansi Resmi iBox 1 Tahun, iPhone 13, iPhone dengan iOS 15, Warna Blue, Memory 512GB, Kabel USB-C ke Lightning', 'iPhone-13-Blue-512GB.jpg', 26750000, 10),
(2, 'iPhone X Silver 256GB', 'Garansi Resmi iBox 1 Tahun, iPhone X, Warna Silver, Memory 256GB', 'iPhone-X-Silver-256GB.jpg', 5275000, 5),
(3, 'iPhone 12 Pro Max Gold 256GB', 'Garansi Resmi iBox 1 Tahun, iPhone 12 Pro Max, Warna Gold, Memory 256GB', 'iPhone-12-Pro-Max-Gold-256GB.jpg', 19999000, 3),
(4, 'iPhone 11 Pro Max Red 256GB', 'Garansi Resmi iBox 1 Tahun, iPhone 11 Pro Max, Warna Red, Memory 256GB', 'iPhone-11-Pro-Max-Red-256GB.jpg', 11200000, 6),
(5, 'iPhone XR White 64GB', 'Garansi Resmi iBox 1 Tahun, iPhone XR, Warna White, Memory 64GB', 'iPhone-XR-White-64GB.jpg', 5599000, 2),
(6, 'iPhone 11 Black 512GB', 'Garansi Resmi iBox 1 Tahun, iPhone 11, Warna Black, Memory 512GB', 'iPhone-11-Black-512GB.jpg', 12999000, 4),
(7, 'iPhone XS Black 64GB', 'Garansi Resmi iBox 1 Tahun, iPhone XS, Warna Black, Memory 64GB', 'iPhone-XS-Black-64GB.jpg', 5280000, 6),
(8, 'iPhone 13 White 256GB', 'Garansi Resmi iBox 1 Tahun, iPhone 13, Warna White, Memory 256GB', 'iPhone-13-White-256GB.jpg', 14425000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `username`, `password`) VALUES
(1, 'fadhil', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembayaran`
--

CREATE TABLE `tabel_pembayaran` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jasa_pengiriman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pembayaran`
--

INSERT INTO `tabel_pembayaran` (`id`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `metode_pembayaran`, `bank`, `jasa_pengiriman`) VALUES
(1, 'Muhammad Fadhil Abyansyah', 'Welahan, Jepara, Jawa Tengah', '081234567890', '111202012544@mhs.dinus.ac.id', 'Transfer Bank', 'Bank BRI', 'J&T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
