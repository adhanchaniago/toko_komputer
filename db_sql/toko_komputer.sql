-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 03:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'Admin', 'logo2.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `alamat` longtext,
  `cara_order` longtext,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `img_bg` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `deskripsi` longtext,
  `keywords` longtext,
  `tag` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_contact`
--

INSERT INTO `t_contact` (`id`, `email`, `phone`, `alamat`, `cara_order`, `facebook`, `twitter`, `img_bg`, `logo`, `title`, `deskripsi`, `keywords`, `tag`) VALUES
(1, 'edit@gmail.com', '12121212', 'Kp.cilangkap12', 'Cara ordernya adalah di edit<br>', 'hhandri263', 'hhandri263', 'Banner-Acer.jpg', 'logo-21.png', 'Toko Komputer sejahtera', 'Toko Komputer yang menjual berbagai macam keperluan komputer sejahtera', 'sparepart komputer murah sejahtera', 'samsung, acer, asus sejahtera');

-- --------------------------------------------------------

--
-- Table structure for table `t_katagori`
--

CREATE TABLE `t_katagori` (
  `id` int(11) NOT NULL,
  `nama_katagori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_katagori`
--

INSERT INTO `t_katagori` (`id`, `nama_katagori`) VALUES
(7, 'Komputer Rakitan'),
(8, 'PC Build Up'),
(9, 'Mini Pc'),
(10, 'Notebook'),
(11, 'Server'),
(12, 'Component PC');

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` int(11) NOT NULL,
  `id_katagori` int(11) DEFAULT NULL,
  `id_sub_katagori` int(11) DEFAULT NULL,
  `grouping` varchar(255) DEFAULT NULL,
  `nama_product` varchar(255) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `notes` longtext,
  `spesifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `id_katagori`, `id_sub_katagori`, `grouping`, `nama_product`, `harga`, `notes`, `spesifikasi`) VALUES
(4, 7, 4, 'Rakitan 1', 'Acer A889', '3000000', 'Barang Ready', 'Core i5 4460 3.2GHz, 4GB DDR3, 1TB SATA, DVDRW, LAN, Wifi, AMD Radeon R7 240 2GB, K/B + Mouse, DOS edit'),
(8, 7, 5, 'Asus', 'Asus Rakitan 2', '4000000', 'Tersedia', 'Core i3 4460 3.2GHz, 4GB DDR3, 1TB SATA, DVDRW, LAN, Wifi, AMD Radeon R7 240 2GB, K/B + Mouse, DOS ');

-- --------------------------------------------------------

--
-- Table structure for table `t_product_des`
--

CREATE TABLE `t_product_des` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `desc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product_des`
--

INSERT INTO `t_product_des` (`id`, `id_product`, `foto`, `desc`) VALUES
(1, 1, 'iphone7.png', 'laptop asus deskripsi sekali edit 2 upp<br>'),
(2, 2, NULL, '<p>Deskripsi product<br></p>'),
(3, 3, NULL, NULL),
(4, 3, 'sejarah1.jpg', NULL),
(5, 3, '3.png', '<p>Ini Deskripsi Produknya<br></p>'),
(6, 4, 'komputer_rakitan.jpg', 'acer komputer rakitan tangguh<br>');

-- --------------------------------------------------------

--
-- Table structure for table `t_sub_katagori`
--

CREATE TABLE `t_sub_katagori` (
  `id` int(11) NOT NULL,
  `id_katagori` int(11) DEFAULT NULL,
  `nama_sub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sub_katagori`
--

INSERT INTO `t_sub_katagori` (`id`, `id_katagori`, `nama_sub`) VALUES
(4, 7, 'Paket Rakitan 1'),
(5, 7, 'Paket Rakitan 2'),
(6, 8, 'Spesifikasi High End');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_katagori`
--
ALTER TABLE `t_katagori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product_des`
--
ALTER TABLE `t_product_des`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sub_katagori`
--
ALTER TABLE `t_sub_katagori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_katagori`
--
ALTER TABLE `t_katagori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_product_des`
--
ALTER TABLE `t_product_des`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_sub_katagori`
--
ALTER TABLE `t_sub_katagori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
