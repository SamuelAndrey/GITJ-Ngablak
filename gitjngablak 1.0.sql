-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitjngablak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `role`) VALUES
(1, 'samuel andrey', 'samuel1701', 'developer'),
(2, 'pengurus ngablak', 'ngablak123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ibadah`
--

CREATE TABLE `ibadah` (
  `id` int(11) NOT NULL,
  `nama_ibd` varchar(40) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `link` varchar(40) NOT NULL,
  `warna` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibadah`
--

INSERT INTO `ibadah` (`id`, `nama_ibd`, `deskripsi`, `info`, `link`, `warna`) VALUES
(1, 'Ibadah Minggu Ngablak', 'Jadwal Ibadah Minggu GITJ Induk Ngablak', 'Berisi informasi lengkap tentang jadwal ibadah Minggu GITJ Ngablak.', 'penjadwalan/ngm_home.php', 'background: rgb(226,235,240);background: linear-gradient(90deg, rgba(226,235,240,1) 0%, rgba(208,218,224,1) 100%);'),
(2, 'Ibadah Minggu Pepanthan', 'Ibadah Minggu Ngablak & Pepanthan (FT)', 'Berisi informasi tentang jadwal ibadah Minggu Ngablak & Pepanthan, jadwal ini di peruntukkan bagi pembawa Firman Tuhan di Ngablak maupun Pepanthan.', 'penjadwalan/pm_home.php', 'background: rgb(194,233,252);background: linear-gradient(90deg, rgba(194,233,252,1) 0%, rgba(162,197,254,1) 100%);'),
(3, 'Brayatan Ngablak', 'Brayatan untuk GITJ Induk Ngablak (FT)', 'Berisi tentang jadwal brayatan GITJ Induk Ngablak', 'penjadwalan/brn_home.php', 'background: rgb(255,236,210);background: linear-gradient(90deg, rgba(255,236,210,1) 0%, rgba(253,184,161,1) 100%);'),
(4, 'Brayatan Pepanthan', 'Brayatan untuk pepanthan (FT)', 'Berisi tentang jadwal brayatan pepanthan untuk pembawa Firman Tuhan dan tim pendamping.', 'penjadwalan/brp_home.php', 'background: rgb(255,207,239);background: linear-gradient(90deg, rgba(255,207,239,1) 0%, rgba(255,156,160,1) 100%);'),
(5, 'Pesekutuan Doa Senin', 'Persekutuan Doa Senin', 'Berisi jadwal persekutuan doa Senin.', 'penjadwalan/pds_home.php', 'background: rgb(248,237,251);background: linear-gradient(90deg, rgba(248,237,251,1) 0%, rgba(253,204,241,1) 100%);');

-- --------------------------------------------------------

--
-- Table structure for table `ngm`
--

CREATE TABLE `ngm` (
  `id_ngm` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_ft` varchar(10) NOT NULL,
  `pambuka` varchar(10) NOT NULL,
  `musik` varchar(10) NOT NULL,
  `wl` varchar(10) NOT NULL,
  `singer1` varchar(10) NOT NULL,
  `singer2` varchar(10) NOT NULL,
  `singer3` varchar(10) NOT NULL,
  `perpujian` varchar(20) NOT NULL,
  `pnt1` varchar(10) NOT NULL,
  `pnt2` varchar(10) NOT NULL,
  `md` varchar(10) NOT NULL,
  `gerit` varchar(10) NOT NULL,
  `giling` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngm`
--

INSERT INTO `ngm` (`id_ngm`, `hari`, `tanggal`, `kd_ft`, `pambuka`, `musik`, `wl`, `singer1`, `singer2`, `singer3`, `perpujian`, `pnt1`, `pnt2`, `md`, `gerit`, `giling`, `keterangan`) VALUES
(1, 'Minggu', '2022-07-03', '1', '30', '', '24', '56', '67', '61', 'Efrata', '1', '2', 'Angel', '44', '15', ''),
(2, 'Minggu', '2022-07-10', 'TMK', '14', '', '', '', '', '', 'PB 1', '3', '31', 'Hiskia', '35', '16', 'Beru Jrahi'),
(3, 'Minggu', '2022-07-17', '4', '6', '', '', '', '', '', 'Pemuda', '4', '31', 'Dian', '18', '40', ''),
(4, 'Minggu', '2022-07-24', '6', '37', '', '', '', '', '', 'PB 2', '7', '34', 'Diki', '23', '20', ''),
(5, 'Minggu', '2022-07-31', '1', '38', '', '', '', '', '', 'Kel. Muda', '8', '35', 'Anggre', '25', '41', ''),
(6, 'Minggu', '2022-08-07', '4', '39', '', '11', '3', '12', '43', 'PB 3', '9', '36', 'Ronal', '25', '51', ''),
(7, 'Minggu', '2022-08-14', '2', '40', '', '', '', '', '', 'SM 1', '10', '37', 'Olive', '27', '52', ''),
(8, 'Rabu', '2022-08-17', '1', '41', '', '', '', '', '', 'PB 4', '12', '38', 'Oik', '53', '1', 'HUT INDO'),
(9, 'Minggu', '2022-08-21', '01', '45', '', '', '', '', '', 'SM 2', '13', '41', 'Sendy', '28', '4', ''),
(10, 'Minggu', '2022-08-28', '1', '46', '', '', '', '', '', 'PB 5', '39', '43', 'Silvy', '31', '12', ''),
(11, 'Minggu', '2022-09-04', '2', '50', '', '57', '31', '74', '32', 'SM 3', '15', '40', 'Martin', '32', '13', ''),
(12, 'Minggu', '2022-09-11', 'TMK', '17', '', '', '', '', '', 'PB 6', '16', '42', 'Dika', '25', '51', 'Plaosan'),
(13, 'Minggu', '2022-09-18', '1', '53', '', '', '', '', '', 'Efrata', '17', '44', 'Ronal', '27', '52', ''),
(14, 'MInggu', '2022-09-25', '2', '55', '', '', '', '', '', 'PB 7', '18', '45', 'Moses', '53', '1', ''),
(15, 'Minggu', '2022-10-02', '6', '56', '', '', '', '', '', 'Pemuda', '20', '46', 'Hiskia', '28', '4', ''),
(16, 'Minggu', '2022-10-09', '1', '57', '', '25', '72', '44', '68', 'PB 8', '22', '47', 'Angel', '31', '12', ''),
(17, 'Minggu', '2022-10-16', '2', '58', '', '', '', '', '', 'Kel. Muda', '23', '48', 'Dian', '32', '13', ''),
(18, 'Minggu', '2022-10-23', '4', '60', '', '', '', '', '', 'PB 1', '24', '49', 'Silvy', '1', '2', ''),
(19, 'Minggu', '2022-10-30', '01', '62', '', '', '', '', '', 'SM 1', '25', '51', 'Dika', '3', '31', ''),
(20, 'Minggu', '2022-11-06', '6', '64', '', '48', '74', '65', '59', 'PB 2', '27', '52', 'Aggre', '4', '31', 'SKM Jiwo'),
(21, 'Minggu', '2022-11-13', 'TMK', '16', '', '', '', '', '', 'SM 2', '53', '1', 'Olive', '7', '34', 'Alasdowo'),
(22, 'Minggu', '2022-11-20', '4', '67', '', '', '', '', '', 'PB 3', '28', '4', 'Oik', '8', '35', 'SKM Giling'),
(23, 'Minggu', '2022-11-27', '2', '68', '', '', '', '', '', 'SM 3', '31', '12', 'Sendy', '9', '36', 'SKM Gerit'),
(24, 'Minggu', '2022-12-04', '01', '69', '', '24', '61', '46', '57', 'Efrata', '32', '13', 'Silvy', '10', '37', 'SKM Ngablak'),
(25, 'Minggu', '2022-12-11', '6', '70', '', '', '', '', '', 'Kel. Muda', '34', '15', 'Martin', '12', '38', ''),
(26, 'Minggu', '2022-12-18', '4', '74', '', '', '', '', '', 'PB 5', '35', '16', 'Dian', '13', '41', ''),
(27, 'Minggu', '2022-12-25', '1', '77', '', '', '', '', '', 'PB 4', '18', '40', 'Diki', '39', '43', 'Natal'),
(28, 'Sabtu', '2022-12-31', '2', '79', '', '', '', '', '', 'PB 6', '23', '20', 'Anggre', '15', '40', 'Tutup Tahun'),
(29, 'Minggu', '2023-01-01', '1', '9', '', '', '', '', '', 'Pemuda', '25', '41', 'Ronal', '16', '42', 'Tahun Baru');

-- --------------------------------------------------------

--
-- Table structure for table `ngm_jmt`
--

CREATE TABLE `ngm_jmt` (
  `id_jmt` int(11) NOT NULL,
  `kd_jmt` varchar(10) NOT NULL,
  `nama_jmt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngm_jmt`
--

INSERT INTO `ngm_jmt` (`id_jmt`, `kd_jmt`, `nama_jmt`) VALUES
(1, '1', 'Kriswanto'),
(2, '2', 'Subadi'),
(3, '3', 'Febry Adi Pratama'),
(4, '4', 'Supani'),
(5, '5', 'Karsono'),
(6, '6', 'C. Hasto'),
(7, '7', 'Endang Lis'),
(8, '8', 'Katno'),
(9, '9', 'Sukani'),
(10, '10', 'Patah'),
(11, '11', 'Suroso'),
(12, '12', 'A. Kurniawan'),
(13, '13', 'S. Yoso'),
(14, '14', 'Milah. W'),
(15, '15', 'Sukiman'),
(16, '16', 'Maryono'),
(17, '17', 'Rohadi'),
(18, '18', 'Febryan'),
(19, '19', 'Wasis J.S'),
(20, '20', 'Sisyanto'),
(21, '21', 'Pridianto'),
(22, '22', 'Edi Kris'),
(23, '23', 'Hery K.'),
(24, '24', 'Muntinah'),
(25, '25', 'Muntinah'),
(26, '26', 'Warsito'),
(27, '27', 'Dwi inswi'),
(28, '28', 'Anggit'),
(29, '29', 'Suyati'),
(30, '30', 'Tini R.'),
(31, '31', 'Mia'),
(32, '32', 'Hana P.'),
(33, '33', 'Junarsih'),
(34, '34', 'Purmi'),
(35, '35', 'Meni'),
(36, '36', 'patah'),
(37, '37', 'Kesi'),
(38, '38', 'Aswati'),
(39, '39', 'Sutinah'),
(40, '40', 'Ngasri'),
(41, '41', 'Sudiyoso'),
(42, '42', 'Parti'),
(43, '43', 'Y. Suwito'),
(44, '44', 'Etik'),
(45, '45', 'Sri Wahyuni'),
(46, '46', 'Sri Asih'),
(47, '47', 'Ngusman'),
(48, '48', 'Kristanti'),
(49, '49', 'D.S Pujiati'),
(50, '50', 'Purwadi'),
(51, '51', 'Endang R.'),
(52, '52', 'Suharti'),
(53, '53', 'Sukepi'),
(54, '54', 'Rini'),
(55, '55', 'Warti'),
(56, '56', 'Kasri'),
(57, '57', 'Watik'),
(58, '58', 'Triyo B.'),
(59, '59', 'Ayuk'),
(60, '60', 'Priskila Indi'),
(61, '61', 'Lani'),
(62, '62', 'E. Sunarso'),
(63, '63', 'Karyati'),
(64, '64', 'Riyanti'),
(65, '65', 'Wiwin'),
(66, '66', 'Supi'),
(67, '67', 'Wari'),
(68, '68', 'S. Martini'),
(69, '69', 'Sumaryono'),
(70, '70', 'Sutiwi'),
(71, '71', 'Ngarju'),
(72, '72', 'Tumini'),
(73, '73', 'Suyati'),
(74, '74', 'Sari Agustina'),
(75, '75', 'Supardjan'),
(76, '76', 'Ngarju'),
(77, '77', 'Suhar'),
(78, '78', 'Hana'),
(79, '79', 'Sasmini'),
(80, 'TMK', 'TMK'),
(81, '01', 'Pdt. Barnabas');

-- --------------------------------------------------------

--
-- Table structure for table `ngm_kel`
--

CREATE TABLE `ngm_kel` (
  `kd_kel` int(11) NOT NULL,
  `nama_kel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngm_kel`
--

INSERT INTO `ngm_kel` (`kd_kel`, `nama_kel`) VALUES
(1, 'Kel. Rohadi'),
(2, 'Kel. Warsito'),
(3, 'Kel. Subiyono'),
(4, 'Kel. Rahmat Susilo'),
(5, 'Kel. Febryan L.D'),
(6, 'Kel. Karsimin'),
(7, 'Kel. Udin'),
(8, 'Kel. Rohadi P.'),
(9, 'Kel. Ruben'),
(10, 'Kel. Mardi'),
(11, 'Kel. Hasto'),
(12, 'Kel. Sadi'),
(13, 'Kel. Maryono'),
(14, 'Kel. Alan / Evan'),
(15, 'Kel. Diki / Sari'),
(16, 'Kel. Suprapto'),
(17, 'Kel. Tardi'),
(18, 'Kel. Prastyo'),
(19, 'Kel. Sonyo'),
(20, 'Kel. Mudi'),
(21, 'Kel. Endang Lis'),
(22, 'Kel. Sumaryono'),
(23, 'Kel. Ngaswi'),
(24, 'Kel. Juri'),
(25, 'Kel. Rasman'),
(26, 'Kel. Katno'),
(27, 'Kel. Febry A.P'),
(28, 'Kel. Sukiman'),
(29, 'Kel. Supani'),
(30, 'Kel. Sri Wahyuni'),
(31, 'Kel. Tawi'),
(32, 'Kel. Riyanto'),
(33, 'Kel. Rasiban'),
(34, 'Kel. Sasminto'),
(35, 'Kel. Andi K.'),
(36, 'Kel. Patah'),
(37, 'Kel. Sudiyoso'),
(38, 'Kel. Y. Suwito'),
(39, 'Kel. Suroso'),
(40, 'Kel. Ngusman'),
(41, 'Kel. Saekun'),
(42, 'Kel. Suparno'),
(43, 'Kel. Triyo B'),
(44, 'Kel. Mekel'),
(45, 'Kel. Ngarju'),
(46, 'Kel. Wanto S.'),
(47, 'Kel. Sukatam'),
(48, 'Kel. Sukawi'),
(49, 'Kel. Dono'),
(50, 'Kel. Siswanto'),
(51, 'Kel. Karsono'),
(52, 'Kel. Purwadi'),
(53, 'Kel. Suhar');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id_pm` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `ngablak` varchar(10) NOT NULL,
  `jiwo` varchar(10) NOT NULL,
  `gerit` varchar(10) NOT NULL,
  `giling` varchar(10) NOT NULL,
  `materi` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id_pm`, `hari`, `tanggal`, `ngablak`, `jiwo`, `gerit`, `giling`, `materi`, `keterangan`) VALUES
(1, 'Minggu', '2022-07-03', '1', '2', '4', '6', '', ''),
(2, 'Minggu', '2022-07-10', 'TMK', '5', '8', '21', '', 'Beru Jrahi'),
(3, 'Minggu', '2022-07-17', '4', '1', '2', '7', '', ''),
(4, 'Minggu', '2022-07-24', '6', '20', '5', '1', '', ''),
(5, 'Minggu', '2022-07-31', '1', '6', '21', '2', '', ''),
(6, 'Minggu', '2022-08-07', '4', '5', '1', '21', '', ''),
(7, 'Minggu', '2022-08-14', '2', '1', '8', '6', '', ''),
(8, 'Rabu', '2022-08-17', '1', '19', '23', '4/75', '', 'HUT INDO'),
(9, 'Minggu', '2022-08-21', '01', '8', '1', '5', '', ''),
(10, 'Minggu', '2022-08-28', '1', '4', '6', '2', '', ''),
(11, 'Minggu', '2022-09-04', '2', '5', '8', '1', '', ''),
(12, 'Minggu', '2022-09-11', 'TMK', '20', '4', '6', '', 'Plaosan'),
(13, 'Minggu', '2022-09-18', '1', '2', '23', '4', '', ''),
(14, 'Minggu', '2022-09-25', '2', '8', '1', '5', '', ''),
(15, 'Minggu', '2022-10-02', '6', '1', '2', '7', '', ''),
(16, 'Minggu', '2022-10-09', '1', '19', '4', '8', '', ''),
(17, 'Minggu', '2022-10-16', '2', '5', '1', '6', '', ''),
(18, 'Minggu', '2022-10-23', '4', '1', '23', '2', '', ''),
(19, 'Minggu', '2022-10-30', '01', '8', '1', '5', '', ''),
(20, 'Minggu', '2022-11-06', '2', '01', '7', '1', '', 'SKM Jiwo'),
(21, 'Minggu', '2022-11-13', 'TMK', '4', '21', '8', '', 'Alasdowo'),
(22, 'Minggu', '2022-11-20', '4', '5', '8', '01', '', 'SKM Giling'),
(23, 'Minggu', '2022-11-27', '2', '22', '01', '7', '', 'SKM Gerit'),
(24, 'Minggu', '2022-12-04', '01', '2', '6', '4', '', 'SKM Ngablak'),
(25, 'Minggu', '2022-12-11', '6', '1', '8', '2', '', ''),
(26, 'Minggu', '2022-12-18', '4', '5', '2', '1', '', ''),
(27, 'Minggu', '2022-12-25', '1', '20', '23', '75', '', 'Natal'),
(28, 'Sabtu', '2022-12-31', '2', '21', '8', '4/75', '', 'Tutup Tahun'),
(29, 'Minggu', '2023-01-01', '1', '19', '23', '75', '', 'Tahun Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ibadah`
--
ALTER TABLE `ibadah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngm`
--
ALTER TABLE `ngm`
  ADD PRIMARY KEY (`id_ngm`);

--
-- Indexes for table `ngm_jmt`
--
ALTER TABLE `ngm_jmt`
  ADD PRIMARY KEY (`id_jmt`);

--
-- Indexes for table `ngm_kel`
--
ALTER TABLE `ngm_kel`
  ADD PRIMARY KEY (`kd_kel`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id_pm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ibadah`
--
ALTER TABLE `ibadah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ngm`
--
ALTER TABLE `ngm`
  MODIFY `id_ngm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ngm_jmt`
--
ALTER TABLE `ngm_jmt`
  MODIFY `id_jmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `ngm_kel`
--
ALTER TABLE `ngm_kel`
  MODIFY `kd_kel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
  MODIFY `id_pm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
