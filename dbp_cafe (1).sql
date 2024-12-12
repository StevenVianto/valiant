-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 07:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbp_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `name_picture` varchar(255) NOT NULL,
  `size_picture` float NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `name_picture`, `size_picture`, `date_upload`) VALUES
(1, '6752b5a3b2cfd.png', 1.40072, '2024-12-06'),
(2, '6752e38cc63a9.png', 2.33153, '2024-12-06'),
(3, '6752ef1e69122.png', 0.060084, '2024-12-06'),
(5, '6755a54691bf5.png', 2.15358, '2024-12-08'),
(6, '6755a5586f786.png', 2.82154, '2024-12-08'),
(7, '6756dd5a17ca5.png', 0.876069, '2024-12-09'),
(8, '6758c6ea14316.png', 0.48195, '2024-12-10'),
(9, '6758c6fb134bf.png', 0.175834, '2024-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kode_menu` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `picture` varchar(255) DEFAULT 'default.jpg',
  `name_menu` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kode_menu`, `type`, `picture`, `name_menu`, `price`, `description`, `status`) VALUES
(1, 'makanan', 'Makanan', 'makanan.png', 'pokemon', 20000.00, 'makanan yang tisak sehat', 1),
(3, 'minuman', 'Minuman', 'minuman.png', 'pokemon22', 75000.00, 'minuman', 1),
(5, 'makananzzzsadsa', 'Makanan', 'makananzzzsadsa.png', 'asdasdasd', 2000000.00, 'asdasdasdasdas', 1),
(6, 'roblox', 'Minuman', 'roblox.png', 'kafka', 60000.00, 'honkai star rail', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `barang_kode` varchar(50) NOT NULL,
  `barang_nama` varchar(255) NOT NULL,
  `barang_harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL DEFAULT curdate(),
  `jam_transaksi` time NOT NULL DEFAULT curtime(),
  `total_transaksi` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `jam_transaksi`, `total_transaksi`) VALUES
('06122415270701', '2024-12-06', '15:27:07', 20000.00),
('06122415272502', '2024-12-06', '15:27:25', 40000.00);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi_d` varchar(20) NOT NULL,
  `kode_menu_d` varchar(50) NOT NULL,
  `nama_menu_d` varchar(100) NOT NULL,
  `harga_d` decimal(10,2) NOT NULL,
  `jumlah_d` int(11) NOT NULL,
  `total_d` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_detail`, `id_transaksi_d`, `kode_menu_d`, `nama_menu_d`, `harga_d`, `jumlah_d`, `total_d`) VALUES
(1, '06122415270701', 'makanan', 'pokemon', 20000.00, 1, 20000.00),
(2, '06122415272502', 'makanan', 'pokemon', 20000.00, 2, 40000.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `created_at`) VALUES
(1, 'pokemon', 'pokemon', '$2y$10$5fyOsGd0Q3DCGfqR8yoYBeHOoLqP9X8MDDx3NwhqSVqT3ydYn2FxS', 'admin', '2024-12-06 08:13:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD UNIQUE KEY `kode_menu` (`kode_menu`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`barang_kode`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi_d` (`id_transaksi_d`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`id_transaksi_d`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
