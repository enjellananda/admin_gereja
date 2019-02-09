-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 04:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gkjw_dinoyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'gkjwdinoyo1'),
(2, 'admin2', 'gkjwdinoyo2');

-- --------------------------------------------------------

--
-- Table structure for table `jemaat`
--

CREATE TABLE `jemaat` (
  `id_jemaat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_jemaat` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gereja_asal` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki - Laki') NOT NULL,
  `umur` int(5) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nomer_telfon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('Menikah','Belum Menikah') NOT NULL,
  `ktp_sim` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `status_jemaat` enum('Confirm','Waiting') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`id_jemaat`, `id_admin`, `nama_jemaat`, `username`, `password`, `tanggal_lahir`, `alamat`, `gereja_asal`, `jenis_kelamin`, `umur`, `pekerjaan`, `nomer_telfon`, `email`, `status`, `ktp_sim`, `kk`, `status_jemaat`) VALUES
(1, 1, 'Yonatan Kristian Maryono', 'yonatan', 'yonatan', '2019-02-02', 'Lumajang', 'GBI Lumajang', 'Laki - Laki', 20, 'Pelajar', '+6285241577612', 'yonatan@gmail.com', 'Belum Menikah', 'ktp1.jpg', 'kk1.jpg', 'Waiting'),
(8, 2, 'Enjella Nanda', 'enjella', '090798', '1998-07-09', 'malang', 'GPIL Langkea Raya', 'Perempuan', 21, 'Pelajar', '085241577612', 'nandaenjella@gmail.com', 'Belum Menikah', 'KTP_ENJELLA.JPG', 'KK_ENJELLA.JPG', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `waktu_kegiatan` datetime NOT NULL,
  `tempat_kegiatan` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `pamflet` varchar(255) NOT NULL,
  `status` enum('Confirm','Waiting') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_admin`, `nama_kegiatan`, `waktu_kegiatan`, `tempat_kegiatan`, `contact_person`, `pamflet`, `status`) VALUES
(1, 1, 'Paskah', '2019-03-21 17:00:00', 'Gedung Gereje GKJW Dinoyo', 'Enjella (098241577612)', 'paskah.jpg', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(11) NOT NULL,
  `nama_jemaat` varchar(255) NOT NULL,
  `jabatan` enum('Ketua','Sekertaris','Bendahara','Majelis','Diaken') NOT NULL,
  `periode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur`, `nama_jemaat`, `jabatan`, `periode`) VALUES
(1, 'Yonatan Kristian Maryono', 'Ketua', '2018-2019'),
(2, 'Enjella Nanda', 'Sekertaris', '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `warta`
--

CREATE TABLE `warta` (
  `id_warta` int(11) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `wartajemaat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warta`
--

INSERT INTO `warta` (`id_warta`, `tanggal_terbit`, `wartajemaat`) VALUES
(1, '2019-01-06', 'warta0106.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id_jemaat`),
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD UNIQUE KEY `nama_jemaat` (`nama_jemaat`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`),
  ADD UNIQUE KEY `nama_jemaat` (`nama_jemaat`);

--
-- Indexes for table `warta`
--
ALTER TABLE `warta`
  ADD PRIMARY KEY (`id_warta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id_jemaat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `id_warta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD CONSTRAINT `jemaat_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `struktur_organisasi_ibfk_1` FOREIGN KEY (`nama_jemaat`) REFERENCES `jemaat` (`nama_jemaat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
