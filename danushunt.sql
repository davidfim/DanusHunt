-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 05:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danushunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `namaBarang` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `jenis` varchar(6) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `namaBarang`, `keterangan`, `jenis`, `harga`, `id_seller`) VALUES
(1, 'Donat Madu', 'Donat terenak sedunia wow', 'manis', 2500, 2),
(2, 'Oreo Goreng', 'Oreo wowowowwoow terenak sedunia wow', 'manis', 1750, 2),
(3, 'Janji Mantan', 'wow keren keterangannya memang begini', 'manis', 30000, 2),
(4, 'Kue Balok', 'Kue balok potongan dengan potongan toping dan harga', 'manis', 2000, 2),
(5, 'Lidah Kucing', 'Lidah karena kalo kaki kasian ga bisa jalan', 'manis', 1500, 2),
(6, 'cilok', 'cilokokokokok', 'asin', 5000, 2),
(7, 'Cireng bumbu', 'cireng kecil pake bumbu luar biasa', 'asin', 3000, 2),
(8, 'Tahu', 'tahu krispi', 'asin', 3000, 2),
(11, 'uwauawuwauwauaw', 'uwauwauawuaw', 'manis', 3, 6),
(12, '', '', 'manis', 0, 2),
(13, '', '', 'manis', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hunter`
--

CREATE TABLE `hunter` (
  `id_hunter` int(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hunter`
--

INSERT INTO `hunter` (`id_hunter`, `username`, `password`, `namalengkap`, `email`, `no_hp`) VALUES
(1, 'davidfim77', 'inipassword', 'David Ferdinand I M', 'zonetdavidzo@gmail.com', '082216718462'),
(2, 'syainasan', 'syaisyai', 'Syaina Nur Fauziyah', 'syainasyaina@gmail.com', '089663455605'),
(3, 'syainanf', 'syainanf2739', 'syaina', 'syainanf@gmail.com', '089663455605'),
(4, 'kazuto', 'kakakarimah', 'Kakazuta Karimah', 'kakakarimah@gmail.com', '08956632548'),
(5, 'bambangs', 'bambangbambang', 'bambang', 'bambang@unpad.ac.id', '089566325484');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `idline` varchar(25) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `username`, `password`, `email`, `no_hp`, `idline`, `namalengkap`, `bio`) VALUES
(2, 'officialdanushunt', 'danusdanus', 'officialdanushunt@gmail.com', '0821321437452', 'danus_id', 'Official DanusHunt Store', 'Toko kita adalah toko terbaik sepanjang masa dengan pilihan makananan yang tiada tara enaknya. \r\nDijamin semua manusia yang beli danusan ini nagih , yang jual pasti auto abis.\r\nMenu andalan kami :\r\n-Krabby Patty\r\n-Nasi Goweng\r\n-Risol terenak sepanjang masa\r\n-Buah Celup\r\n\r\nTunggu apalagi langsung aja order danusa auto habis ini\r\n\r\nSMART TERBAIK'),
(3, 'ngemil', 'ngemilngemil', 'ngemil@gmail.com', '089662344573', 'ngemils', 'Ngemil', 'Ini bio tapi aku nanti bingung btw ko ini gada scrollnya ya aku bingung lohkolohko gini kemana scrollnya tapi bagus sih jadi kotak tapi bakal muncuk kagi ga? yaudah kita simpan'),
(4, 'hifood', 'password', 'hifood@gmail.com', '082122122122', 'hifoods', 'HiFood', 'kotaknya gakeliatan harus diapain biar jadi keliatan?'),
(6, 'uwawuwaw', 'uwawuwaw', 'uwawuwaw@uwaw.com', '123456789123', 'TIdak WAjib', 'WAKACIMPUNG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_seller` (`id_seller`);

--
-- Indexes for table `hunter`
--
ALTER TABLE `hunter`
  ADD PRIMARY KEY (`id_hunter`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hunter`
--
ALTER TABLE `hunter`
  MODIFY `id_hunter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
