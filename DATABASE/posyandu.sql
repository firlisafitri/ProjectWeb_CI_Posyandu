-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220909.746d1696b7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_balita`
--

CREATE TABLE `tbl_balita` (
  `id_balita` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `nm_balita` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `bb_lahir` float NOT NULL,
  `pb_lahir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_balita`
--

INSERT INTO `tbl_balita` (`id_balita`, `id_ortu`, `nm_balita`, `tgl_lahir`, `jenis_kelamin`, `bb_lahir`, `pb_lahir`) VALUES
(1, 1, 'M. Zico Maulana', '2018-10-11', 'Laki-Laki', 3, 47),
(2, 2, 'M. Yussuf Rianto', '2021-07-01', 'Laki-Laki', 2.7, 48),
(3, 3, 'Almeera', '2021-09-01', 'Perempuan', 2.5, 51),
(4, 4, 'Rosayla Putri', '2021-12-08', 'Perempuan', 3, 51),
(5, 4, 'Erlangga', '2023-08-09', 'Laki-Laki', 3.5, 48),
(20, 4, 'hdasjhdajl', '2023-08-14', 'Perempuan', 3, 49),
(21, 3, 'alesha', '2022-09-15', 'Perempuan', 3.6, 49);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kader`
--

CREATE TABLE `tbl_kader` (
  `id_kader` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nm_kader` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kader`
--

INSERT INTO `tbl_kader` (`id_kader`, `username`, `password`, `nm_kader`, `status`) VALUES
(1, 'kader', '12345', 'tuti', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kemampuan`
--

CREATE TABLE `tbl_kemampuan` (
  `id_kemampuan` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `id_kemampuan_motorik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kemampuan`
--

INSERT INTO `tbl_kemampuan` (`id_kemampuan`, `id_ortu`, `id_kemampuan_motorik`) VALUES
(1, 1, 16),
(2, 1, 17),
(3, 1, 19),
(4, 1, 20),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kemampuan_motorik`
--

CREATE TABLE `tbl_kemampuan_motorik` (
  `id_kemampuan_motorik` int(11) NOT NULL,
  `kd_usia` varchar(15) NOT NULL,
  `usia` int(11) NOT NULL,
  `kode_kemampuan` varchar(15) NOT NULL,
  `kemampuan_motorik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kemampuan_motorik`
--

INSERT INTO `tbl_kemampuan_motorik` (`id_kemampuan_motorik`, `kd_usia`, `usia`, `kode_kemampuan`, `kemampuan_motorik`) VALUES
(1, 'U1', 3, 'KM11', 'Mengangkat kepala setinggi 45 drajat'),
(2, 'U1', 3, 'KM12', 'Menggerakkan kepala ke kiri dan kanan '),
(3, 'U1', 3, 'KM13', 'Menggerakkan tangan dan kaki '),
(4, 'U1', 3, 'KM14', 'Menunjukkan gerakan sebagai respons terhadap stimulus visual '),
(5, 'U1', 3, 'KM15', 'Membuka telapak tangan '),
(6, 'U2', 6, 'KM21', 'Berbalik dari posisi telungkup ke terlentang'),
(7, 'U2', 6, 'KM22', 'Mengangkat kepala setinggi 90 drajat pada posisi tengkurap '),
(8, 'U2', 6, 'KM23', 'Mempertahankan posisi kepala tetap tegak dan stabil '),
(9, 'U2', 6, 'KM24', 'Menggenggam mainan atau tangannya sendiri'),
(10, 'U2', 6, 'KM25', 'Meraih benda yang ada didekatnya'),
(11, 'U3', 9, 'KM31', 'Duduk sendiri tanpa sandaran'),
(12, 'U3', 9, 'KM32', 'Mulai merangkak'),
(13, 'U3', 9, 'KM33', 'Memindahkan benda dari satu tangan ke tangan lainnya'),
(14, 'U3', 9, 'KM34', 'Memungut benda sebesar kacang'),
(15, 'U3', 9, 'KM35', 'Makan kue sendiri'),
(16, 'U4', 12, 'KM41', 'Mengangkat badan ke posisi berdiri'),
(17, 'U4', 12, 'KM42', 'Berdiri selama 30 detik sambil berpegangan'),
(18, 'U4', 12, 'KM43', 'Berjalan dengan dituntun'),
(19, 'U4', 12, 'KM44', 'Mengulurkan lengan atau badan untuk meraih mainan yang diinginkan'),
(20, 'U4', 12, 'KM45', 'Menggenggam erat pensil'),
(21, 'U5', 18, 'KM51', 'Berdiri sendiri tanpa berpegangan'),
(22, 'U5', 18, 'KM52', 'Berjalan beberapa langkah'),
(23, 'U5', 18, 'KM53', 'Membungkuk memungut mainan kemudian berdiri kembali'),
(24, 'U5', 18, 'KM54', 'Menumpuk dua kubus'),
(25, 'U5', 18, 'KM55', 'Memasukkan kubus di kotak'),
(26, 'U6', 24, 'KM61', 'Berdiri sendiri tanpa berpegangan'),
(27, 'U6', 24, 'KM62', 'Berjalan sendiri'),
(28, 'U6', 24, 'KM63', 'Mengglindingkan bola'),
(29, 'U6', 24, 'KM64', 'Memungut benda kecil dengan ibu jari dan jari telunjuk'),
(30, 'U6', 24, 'KM65', 'Memegang cangkir sendiri, belajar makan-minum sendiri'),
(31, 'U7', 36, 'KM71', 'Menendang bola tanpa kesulitan'),
(32, 'U7', 36, 'KM72', 'Mencoret-coret pensil pada kertas'),
(33, 'U7', 36, 'KM73', 'Membantu memungut mainannya sendiri'),
(34, 'U7', 36, 'KM74', 'Makan nasi sendiri tanpa banyak tumpah'),
(35, 'U7', 36, 'KM75', 'Melepas pakaiannya sendiri'),
(36, 'U8', 48, 'KM81', 'Melompat kedua kaki diangkat'),
(37, 'U8', 48, 'KM82', 'Mengayuh sepeda roda tiga'),
(38, 'U8', 48, 'KM83', 'Bermain bersama teman'),
(39, 'U8', 48, 'KM84', 'Menggambar garis lurus'),
(40, 'U8', 48, 'KM85', 'Mencuci dan mengeringkan tangan sendiri'),
(41, 'U9', 60, 'KM91', 'Melompat dan menari'),
(42, 'U9', 60, 'KM92', 'Menggambar tanda silang dan lingkaran'),
(43, 'U9', 60, 'KM93', 'Mencuci tangan dan sikat gigi sendiri'),
(44, 'U9', 60, 'KM94', 'Mengancing baju atau pakaian boneka'),
(45, 'U9', 60, 'KM95', 'Berpakaian sendiri tanpa dibantu'),
(46, 'U10', 72, 'KM101', 'Berjalan lurus'),
(47, 'U10', 72, 'KM102', 'Berdiri dengan 1 kaki'),
(48, 'U10', 72, 'KM103', 'Menangkap bola kecil dengan kedua tangan'),
(49, 'U10', 72, 'KM104', 'Menggambar segi empat'),
(50, 'U10', 72, 'KM105', 'Berpakaian sendiri tanpa dibantu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ortu`
--

CREATE TABLE `tbl_ortu` (
  `id_ortu` int(11) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ortu`
--

INSERT INTO `tbl_ortu` (`id_ortu`, `nm_ayah`, `nm_ibu`, `username`, `password`, `email`, `no_hp`, `alamat`) VALUES
(1, 'Said', 'Dina', 'dina28', 'dina28', 'dina28@gmail.com', '085674321682', 'Karang Makmur RT.01'),
(2, 'Agus', 'Carmuni', 'carmuni12', 'carmuni12', 'carmuni12@gmail.com', '085889765280', 'Karang Makmur RT.06'),
(3, 'Heri', 'Khusnul', 'khusnul28', 'khusnul28', 'khusnul28@gmail.com', '085889778890', 'Karang Makmur RT.06'),
(4, 'Budi', 'Nuril', 'nuril12', 'nuril12', 'nuril12@gmail.com', '0827807930', 'Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perkembangan_motorik`
--

CREATE TABLE `tbl_perkembangan_motorik` (
  `id_perkembangan_motorik` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `kemampuan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perkembangan_motorik`
--

INSERT INTO `tbl_perkembangan_motorik` (`id_perkembangan_motorik`, `usia`, `kemampuan`) VALUES
(1, 3, 'KM11~Mengangkat kepala setinggi 45 drajat '),
(2, 3, 'KM12~Menggerakkan kepala ke kiri dan kanan '),
(3, 3, 'KM13~Menggerakkan tangan dan kaki '),
(4, 6, 'KM21~Berbalik dari posisi telungkup ke terlentang '),
(5, 6, 'KM22~Mengangkat kepala setinggi 90 drajat pada posisi tengkurap '),
(6, 6, 'KM23~Mempertahankan posisi kepala tetap tegak dan stabil'),
(7, 6, 'KM24~Menggenggam mainan atau tangannya sendiri'),
(8, 6, 'KM25~Meraih benda yang ada didekatnya ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertumbuhan`
--

CREATE TABLE `tbl_pertumbuhan` (
  `id_pertumbuhan` int(11) NOT NULL,
  `balita` int(11) NOT NULL,
  `tgl_cek` date NOT NULL,
  `usia` int(11) NOT NULL,
  `berat_badan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pertumbuhan`
--

INSERT INTO `tbl_pertumbuhan` (`id_pertumbuhan`, `balita`, `tgl_cek`, `usia`, `berat_badan`) VALUES
(26, 1, '2019-07-06', 9, 6.2),
(27, 1, '2019-08-07', 10, 6.2),
(28, 1, '2020-02-07', 35, 12),
(29, 1, '2020-06-06', 47, 14.2),
(30, 1, '2021-09-07', 48, 14),
(31, 2, '2022-09-07', 11, 10.5),
(32, 2, '2022-10-06', 48, 18.5),
(33, 3, '2023-02-22', 11, 6.1),
(38, 5, '2023-08-14', 3, 7.2),
(39, 8, '2023-08-14', 3, 4.3),
(43, 14, '2023-08-14', 3, 8.3),
(44, 15, '2023-08-14', 3, 5),
(45, 7, '2023-08-14', 3, 4),
(46, 4, '2023-08-14', 4, 5),
(48, 20, '2023-08-14', 3, 5),
(49, 21, '2023-08-14', 11, 10.5),
(50, 21, '2023-08-14', 48, 18.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertumbuhan_balita`
--

CREATE TABLE `tbl_pertumbuhan_balita` (
  `id_pertumbuhan_balita` int(11) NOT NULL,
  `balita` varchar(50) NOT NULL,
  `tgl_cek` date NOT NULL,
  `usia` int(11) NOT NULL,
  `berat_badan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pertumbuhan_balita`
--

INSERT INTO `tbl_pertumbuhan_balita` (`id_pertumbuhan_balita`, `balita`, `tgl_cek`, `usia`, `berat_badan`) VALUES
(1, '1', '2018-11-07', 1, 4),
(2, '1', '2018-12-06', 2, 4.6),
(3, '1', '2019-01-07', 3, 5.5),
(4, '1', '2019-02-07', 4, 5.3),
(5, '1', '2019-03-06', 5, 5.4),
(6, '1', '2019-04-06', 6, 5.8),
(8, '1', '2019-05-07', 7, 5.6),
(9, '1', '2019-06-12', 8, 6.2),
(10, '1', '2019-09-06', 11, 6.8),
(11, '1', '2019-10-07', 12, 7.2),
(12, '1', '2019-11-07', 13, 7.3),
(13, '1', '2019-12-07', 14, 7.5),
(14, '1', '2020-01-07', 15, 7.7),
(15, '1', '2020-03-07', 17, 8),
(16, '1', '2020-07-07', 21, 8),
(17, '1', '2020-08-19', 22, 8.3),
(19, '1', '2020-11-07', 25, 9.7),
(20, '1', '2021-02-06', 28, 10.5),
(21, '1', '2021-03-06', 29, 10.7),
(22, '1', '2021-08-23', 34, 10.8),
(23, '1', '2022-02-23', 40, 13.3),
(24, '1', '2022-04-07', 42, 13.5),
(25, '1', '2022-06-07', 44, 13.4),
(26, '1', '2022-08-06', 46, 14),
(27, '1', '2022-12-07', 50, 14.2),
(28, '2', '2023-01-12', 18, 18),
(29, '2', '2023-02-12', 19, 8.3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertumbuhan_blt`
--

CREATE TABLE `tbl_pertumbuhan_blt` (
  `id_pertumbuhan_blt` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `id_pertumbuhan_balita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pertumbuhan_blt`
--

INSERT INTO `tbl_pertumbuhan_blt` (`id_pertumbuhan_blt`, `id_balita`, `id_pertumbuhan_balita`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 8),
(8, 1, 9),
(9, 1, 10),
(10, 1, 11),
(11, 1, 12),
(12, 1, 13),
(13, 1, 14),
(14, 1, 15),
(15, 1, 16),
(16, 1, 17),
(17, 2, 19),
(18, 2, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_balita`
--
ALTER TABLE `tbl_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indexes for table `tbl_kader`
--
ALTER TABLE `tbl_kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indexes for table `tbl_kemampuan`
--
ALTER TABLE `tbl_kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`);

--
-- Indexes for table `tbl_kemampuan_motorik`
--
ALTER TABLE `tbl_kemampuan_motorik`
  ADD PRIMARY KEY (`id_kemampuan_motorik`);

--
-- Indexes for table `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `tbl_perkembangan_motorik`
--
ALTER TABLE `tbl_perkembangan_motorik`
  ADD PRIMARY KEY (`id_perkembangan_motorik`);

--
-- Indexes for table `tbl_pertumbuhan`
--
ALTER TABLE `tbl_pertumbuhan`
  ADD PRIMARY KEY (`id_pertumbuhan`);

--
-- Indexes for table `tbl_pertumbuhan_balita`
--
ALTER TABLE `tbl_pertumbuhan_balita`
  ADD PRIMARY KEY (`id_pertumbuhan_balita`);

--
-- Indexes for table `tbl_pertumbuhan_blt`
--
ALTER TABLE `tbl_pertumbuhan_blt`
  ADD PRIMARY KEY (`id_pertumbuhan_blt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_balita`
--
ALTER TABLE `tbl_balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kader`
--
ALTER TABLE `tbl_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kemampuan`
--
ALTER TABLE `tbl_kemampuan`
  MODIFY `id_kemampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kemampuan_motorik`
--
ALTER TABLE `tbl_kemampuan_motorik`
  MODIFY `id_kemampuan_motorik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_perkembangan_motorik`
--
ALTER TABLE `tbl_perkembangan_motorik`
  MODIFY `id_perkembangan_motorik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pertumbuhan`
--
ALTER TABLE `tbl_pertumbuhan`
  MODIFY `id_pertumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_pertumbuhan_balita`
--
ALTER TABLE `tbl_pertumbuhan_balita`
  MODIFY `id_pertumbuhan_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_pertumbuhan_blt`
--
ALTER TABLE `tbl_pertumbuhan_blt`
  MODIFY `id_pertumbuhan_blt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
