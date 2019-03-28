-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 05:05 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seminar_unpam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Koala.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_validasi`
--

CREATE TABLE IF NOT EXISTS `admin_validasi` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kd_dosen` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_validasi`
--

INSERT INTO `admin_validasi` (`id`, `username`, `password`, `kd_dosen`, `level`) VALUES
(1, 'dosen11', 'admin', '11', '3'),
(2, 'dosen22', 'admin', '22', '3'),
(3, 'dosen33', 'admin', '33', '3'),
(4, 'dosen44', 'admin', '44', '3');

-- --------------------------------------------------------

--
-- Table structure for table `ketua_kelas`
--

CREATE TABLE IF NOT EXISTS `ketua_kelas` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `kd_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketua_kelas`
--

INSERT INTO `ketua_kelas` (`id`, `username`, `password`, `nama`, `foto`, `level`, `kd_kelas`) VALUES
(1, 'ketua406', 'admin', 'ketua kelas 406', '', '2', '406'),
(2, 'ketua407', 'admin', 'ketua kelas 407', '', '2', '407'),
(3, 'ketua408', 'admin', '', '', '2', '408');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kehadiran` varchar(255) NOT NULL,
  `validasi` varchar(255) NOT NULL,
  `kd_doesn` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nim`, `kelas`, `kode_kelas`, `nama`, `kehadiran`, `validasi`, `kd_doesn`) VALUES
(1, '2016141786', '05TPLE007', '407', 'HANDRI', 'Y', '2', '22'),
(3, '2016141718', '05TPLE006', '406', 'RIAN', 'T', '2', '11'),
(4, '2016141719', '05TPLE007', '407', 'jainal', 'y', '2', '22'),
(5, '2016141720', '05TPLE007', '407', 'wawan', 'T', '2', '22'),
(6, '2016141720', '05TPLE007', '407', 'jj', 'T', '2', '22'),
(7, '2016141798', '05TPLE007', '407', 'ANDI', 'Y', '2', '22'),
(8, 'RENALDI', '05TPLE007', '407', 'ZAZAZA', 'Y', '2', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_validasi`
--
ALTER TABLE `admin_validasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketua_kelas`
--
ALTER TABLE `ketua_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_validasi`
--
ALTER TABLE `admin_validasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ketua_kelas`
--
ALTER TABLE `ketua_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
