-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 01:32 PM
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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(2, 'admin2', 'gkjwdinoyo2');

-- --------------------------------------------------------

--
-- Table structure for table `jemaat`
--

CREATE TABLE `jemaat` (
  `id_jemaat` int(50) NOT NULL,
  `nomor_induk` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_jemaat` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki - Laki') NOT NULL,
  `nomer_telfon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('Menikah','Belum Menikah') NOT NULL,
  `surat_keterangan` varchar(255) NOT NULL,
  `status_jemaat` enum('Confirm','Waiting') NOT NULL,
  `pengingat` datetime NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `gereja_baptis` varchar(50) NOT NULL,
  `gereja_sidi` varchar(50) NOT NULL,
  `tanggal baptis` date NOT NULL,
  `tanggal_sidi` date NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `gereja_pasangan` varchar(50) NOT NULL,
  `nomor induk_perkawinan` varchar(50) NOT NULL,
  `tempat_catatan_sipil` varchar(50) NOT NULL,
  `tanggal_catatan_sipil` date NOT NULL,
  `gereja_pemberkatan` varchar(50) NOT NULL,
  `tanggal_pemberkatan` date NOT NULL,
  `alasan_cerai` text NOT NULL,
  `tanggal_cerai` date NOT NULL,
  `pindah_gereja` varchar(50) NOT NULL,
  `tanggal_pindah_gereja` date NOT NULL,
  `nomor_surat_pindah` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`id_jemaat`, `nomor_induk`, `id_admin`, `nama_jemaat`, `username`, `password`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `nomer_telfon`, `email`, `status`, `surat_keterangan`, `status_jemaat`, `pengingat`, `tempat_lahir`, `nama_ayah`, `nama_ibu`, `gereja_baptis`, `gereja_sidi`, `tanggal baptis`, `tanggal_sidi`, `nama_pasangan`, `gereja_pasangan`, `nomor induk_perkawinan`, `tempat_catatan_sipil`, `tanggal_catatan_sipil`, `gereja_pemberkatan`, `tanggal_pemberkatan`, `alasan_cerai`, `tanggal_cerai`, `pindah_gereja`, `tanggal_pindah_gereja`, `nomor_surat_pindah`, `keterangan`, `tanggal_keluar`) VALUES
(1, '', 1, 'Yonatan Kristian Maryono', 'yonatan', 'yonatan', '2019-02-02', 'Lumajang', 'Laki - Laki', '+6285241577612', 'yonatan@gmail.com', 'Belum Menikah', 'ktp1.jpg', 'Waiting', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00'),
(8, '', 2, 'Enjella Nanda', 'enjella', '090798', '0000-00-00', 'malang', 'Perempuan', '085241577612', 'nandaenjella@gmail.com', 'Menikah', 'KTP_ENJELLA.JPG', 'Waiting', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00'),
(9, '', 1, 'Chenttly Enggar', 'admin', 'admin', '0000-00-00', 'Jalan Gagak Baru No. 12', 'Perempuan', '089898', 'nandaenjella@gmail.com', 'Menikah', 'as ns', 'Confirm', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tempat_kegiatan` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `pamflet` varchar(255) NOT NULL,
  `status` enum('Confirm','Waiting') NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jam_kegiatan` time NOT NULL,
  `dipimpin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_admin`, `nama_kegiatan`, `tempat_kegiatan`, `contact_person`, `pamflet`, `status`, `tanggal_kegiatan`, `jam_kegiatan`, `dipimpin`) VALUES
(1, 1, 'Paskah', 'Gedung Gereje GKJW Dinoyo', 'Enjella (098241577612)', 'paskah.jpg', 'Confirm', '0000-00-00', '00:00:00', ''),
(2, 2, 'vfdfd', 'dsdvsv', 'Enjella Nanda', 'ssf', 'Waiting', '0000-00-00', '00:00:00', ''),
(4, 2, 'vfdfd', 'dsdvsv', 'Enjella Nanda', 'ssf', 'Waiting', '0000-00-00', '00:00:00', ''),
(5, 2, 'vfdfd', 'dsdvsv', 'Enjella Nanda', 'ssf', 'Waiting', '0000-00-00', '00:00:00', ''),
(6, 2, 'vfdfd', 'dsdvsv', 'Enjella Nanda', 'ssf', 'Waiting', '0000-00-00', '00:00:00', ''),
(7, 2, 'vfdfdkkj', 'dsdvsv', 'Enjella Nanda', '', 'Waiting', '0000-00-00', '00:00:00', 'Yonatan'),
(8, 2, 'PUT', 'Gereja', 'Enjella Nanda', '', 'Confirm', '2019-03-22', '07:00:00', 'Vita'),
(9, 2, 'Natal', 'Gereja', 'Enjella Nanda', '5176_Warta_Jemaat_2018-11-1114.pdf', 'Confirm', '2019-12-25', '18:00:00', 'Yonatan');

-- --------------------------------------------------------

--
-- Table structure for table `kotbah`
--

CREATE TABLE `kotbah` (
  `id_kotbah` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_kotbah` date NOT NULL,
  `kotbah_mingguan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotbah`
--

INSERT INTO `kotbah` (`id_kotbah`, `id_admin`, `tema`, `judul`, `tanggal_kotbah`, `kotbah_mingguan`) VALUES
(3, 2, 'Kasih', 'Mengasihi Sesama', '0000-00-00', 'Kejarlah kasih itu. —1 Korintus 14:1\r\nCinta tidak saja membuat “dunia ini berputar”, seperti kata sebuah lagu lama. Cinta juga bisa menjadikan kita sangat rentan. Mungkin adakalanya kita berkata pada diri sendiri: “Apa gunany');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_jemaat` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `periode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur`, `id_admin`, `id_jemaat`, `jabatan`, `periode`) VALUES
(1, 2, 9, 'Pendeta', 'zzsa');

-- --------------------------------------------------------

--
-- Table structure for table `warta`
--

CREATE TABLE `warta` (
  `id_warta` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `wartajemaat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warta`
--

INSERT INTO `warta` (`id_warta`, `id_admin`, `tanggal_terbit`, `wartajemaat`) VALUES
(1, 2, '0000-00-00', 'warta0106.jpg'),
(5, 2, '2019-01-05', 'fefd'),
(6, 2, '2019-03-14', 'Kartu_Rencana_Studi_(KRS)_-_Politeknik_Negeri_Malang_enjella.pdf'),
(7, 2, '0000-00-00', '5176_Warta_Jemaat_2018-11-11.pdf'),
(9, 1, '0000-00-00', 'Kartu_Rencana_Studi_(KRS)_-_Politeknik_Negeri_Malang.pdf'),
(12, 2, '2019-03-21', '5176_Warta_Jemaat_2018-11-117.pdf'),
(15, 1, '0000-00-00', '5176_Warta_Jemaat_2018-11-1110.pdf'),
(16, 2, '2019-03-01', '5176_Warta_Jemaat_2018-11-1111.pdf');

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
  ADD KEY `fk_idadminj` (`id_admin`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `fk_admin` (`id_admin`);

--
-- Indexes for table `kotbah`
--
ALTER TABLE `kotbah`
  ADD PRIMARY KEY (`id_kotbah`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`),
  ADD KEY `fk_idadmins` (`id_admin`),
  ADD KEY `fk_idj` (`id_jemaat`);

--
-- Indexes for table `warta`
--
ALTER TABLE `warta`
  ADD PRIMARY KEY (`id_warta`),
  ADD KEY `fk_idadmin` (`id_admin`);

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
  MODIFY `id_jemaat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kotbah`
--
ALTER TABLE `kotbah`
  MODIFY `id_kotbah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `id_warta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD CONSTRAINT `fk_idadminj` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `kotbah`
--
ALTER TABLE `kotbah`
  ADD CONSTRAINT `kotbah_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `fk_idadmins` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_idj` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `warta`
--
ALTER TABLE `warta`
  ADD CONSTRAINT `fk_idadmin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
