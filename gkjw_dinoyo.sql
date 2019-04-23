-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Apr 2019 pada 16.40
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(2, 'admin2', 'gkjwdinoyo2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemaat`
--

CREATE TABLE `jemaat` (
  `id_jemaat` int(50) NOT NULL,
  `nomor_induk` varchar(20) NOT NULL,
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
  `tanggal_baptis` date NOT NULL,
  `tanggal_sidi` date NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `gereja_pasangan` varchar(50) NOT NULL,
  `nomor_induk_perkawinan` varchar(50) NOT NULL,
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
-- Dumping data untuk tabel `jemaat`
--

INSERT INTO `jemaat` (`id_jemaat`, `nomor_induk`, `nama_jemaat`, `username`, `password`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `nomer_telfon`, `email`, `status`, `surat_keterangan`, `status_jemaat`, `pengingat`, `tempat_lahir`, `nama_ayah`, `nama_ibu`, `gereja_baptis`, `gereja_sidi`, `tanggal_baptis`, `tanggal_sidi`, `nama_pasangan`, `gereja_pasangan`, `nomor_induk_perkawinan`, `tempat_catatan_sipil`, `tanggal_catatan_sipil`, `gereja_pemberkatan`, `tanggal_pemberkatan`, `alasan_cerai`, `tanggal_cerai`, `pindah_gereja`, `tanggal_pindah_gereja`, `nomor_surat_pindah`, `keterangan`, `tanggal_keluar`) VALUES
(1, '', 'Yonatan Kristian Maryono', 'yonatan', 'yonatan', '2019-02-02', 'Lumajang', 'Laki - Laki', '+6285241577612', 'yonatan@gmail.com', 'Belum Menikah', 'ktp1.jpg', 'Waiting', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00'),
(8, 'GKJW01', 'Enjella Nanda', 'enjella', '090798', '0000-00-00', 'malang', 'Perempuan', '085241577612', 'nandaenjella@gmail.com', 'Belum Menikah', 'KTP_ENJELLA.JPG', 'Waiting', '0000-00-00 00:00:00', 'Malang', 'Totok Misyanto', 'Novita Andriana Wati', 'GPIL Langkea Raya', 'GPIL Langkea Raya', '0000-00-00', '0000-00-00', '-', '-', '-', '-', '0000-00-00', '-', '0000-00-00', '-', '0000-00-00', '-', '0000-00-00', '-', '-', '0000-00-00'),
(9, '', 'Chenttly Cantik', 'admin', 'admin', '0000-00-00', 'Jalan Gagak Baru No. 12', 'Perempuan', '089898', 'nandaenjella@gmail.com', 'Menikah', 'as ns', 'Waiting', '0000-00-00 00:00:00', 'Pacitan', 'Felix', 'Clara Sari', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00'),
(10, '123', 'Chenttly Enggar Avitasari', 'admin1', 'admin1', '0000-00-00', 'Jl Gunung Dieng NO 40', 'Perempuan', '081330600031', 'chenttly.avitasari19@gmail.com', 'Belum Menikah', '', 'Waiting', '0000-00-00 00:00:00', 'Surabaya', 'Hendro', 'Clara', 'GKJW PAre', 'GKJW PAre', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00'),
(11, '', '', 'admin1', 'admin1', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
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
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tempat_kegiatan`, `contact_person`, `pamflet`, `status`, `tanggal_kegiatan`, `jam_kegiatan`, `dipimpin`) VALUES
(1, 'Paskah', 'Gedung Gereje GKJW Dinoyo', 'Enjella (098241577612)', '43961_16822_Dok_baru_2019-03-122.pdf', 'Confirm', '2019-03-30', '00:00:00', 'Yonatan'),
(2, 'vfdfd', 'dsdvsv', 'Enjella Nanda', 'ssf', 'Waiting', '0000-00-00', '00:00:00', ''),
(4, 'vfdfd', 'dsdvsv', 'Enjella Nanda', 'ssf', 'Waiting', '0000-00-00', '00:00:00', ''),
(5, 'vfdfd', 'dsdvsv', 'Enjella Nanda', '49-162-1-PB.pdf', 'Waiting', '2019-04-10', '23:00:00', 'gjkjh'),
(8, 'PUT', 'Gereja', 'Enjella Nanda', '', 'Confirm', '2019-03-22', '07:00:00', 'Vita'),
(9, 'Natal', 'Gereja', 'Enjella Nanda', '5176_Warta_Jemaat_2018-11-1114.pdf', 'Confirm', '2019-12-25', '18:00:00', 'Yonatan'),
(10, 'PD', 'rumah enjell', '081330600031', 'Flowchart3.pdf', 'Waiting', '2019-04-04', '12:00:00', 'Pd Vita2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotbah`
--

CREATE TABLE `kotbah` (
  `id_kotbah` int(11) NOT NULL,
  `tema` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_kotbah` date NOT NULL,
  `kotbah_mingguan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kotbah`
--

INSERT INTO `kotbah` (`id_kotbah`, `tema`, `judul`, `tanggal_kotbah`, `kotbah_mingguan`) VALUES
(2, 'Kesetiaan', 'Kasihh', '2019-04-10', 'fgdbdbd'),
(3, 'Cinta', 'cinta', '0000-00-00', '4654-7241-1-PB.pdf'),
(4, 'kasih111', 'Kasih yang Setia1', '2019-04-19', 'Flowchart10.pdf'),
(5, 'kasih', 'hkjbb,jb', '0000-00-00', '5121-14019-1-PB2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(11) NOT NULL,
  `id_jemaat` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `periode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur`, `id_jemaat`, `jabatan`, `periode`) VALUES
(1, 10, 'Sekertaris', '2019'),
(2, 8, 'Bendahara', 'zzsa'),
(3, 1, 'ketua', 'zzsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warta`
--

CREATE TABLE `warta` (
  `id_warta` int(11) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `wartajemaat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warta`
--

INSERT INTO `warta` (`id_warta`, `tanggal_terbit`, `wartajemaat`) VALUES
(1, '0000-00-00', 'warta0106.jpg'),
(5, '2019-01-05', 'fefd'),
(6, '2019-03-30', '5121-14019-1-PB1.pdf'),
(12, '2019-03-26', '201903127.pdf'),
(16, '2019-03-01', '5176_Warta_Jemaat_2018-11-1111.pdf'),
(17, '2019-04-13', 'Flowchart4.pdf'),
(18, '2019-04-13', '201903124.pdf'),
(19, '2019-04-16', '4654-7241-1-PB_(1)2.pdf'),
(20, '2019-04-06', '201903126.pdf');

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
  ADD PRIMARY KEY (`id_jemaat`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kotbah`
--
ALTER TABLE `kotbah`
  ADD PRIMARY KEY (`id_kotbah`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`),
  ADD KEY `fk_idj` (`id_jemaat`);

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
  MODIFY `id_jemaat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kotbah`
--
ALTER TABLE `kotbah`
  MODIFY `id_kotbah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `id_warta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `fk_idj` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
