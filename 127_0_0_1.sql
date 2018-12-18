-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 06:56 PM
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
CREATE DATABASE IF NOT EXISTS `danushunt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `danushunt`;

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
  `id_seller` int(11) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'images/avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `namaBarang`, `keterangan`, `jenis`, `harga`, `id_seller`, `image`) VALUES
(20, 'Pizza Bakar', 'Pizza potongan yang dibakar dengan tambahan toping nyes', 'asin', 4000, 2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg/330px-Eq_it-na_pizza-margherita_sep2005_sml.jpg'),
(21, 'Pisang Nugget', 'Pisang goreng dibalur tepung crunchy dengan topping manis kekinian', 'manis', 3000, 2, 'https://www.nibble.id/blog/wp-content/uploads/2017/09/pisang-nugget-di-jakarta-01.jpg'),
(22, 'Fried Chicken', 'Ayam goreng crispy paling terkenal sejagad raya', 'asin', 15000, 2, 'https://www.kfc.com/assets/products/G15022_KFC_BucketMeal_RGB-copy.jpg'),
(23, 'Donat Mini', 'DOnat mini yang pasti laku dengan rasa yang variatif', 'manis', 1500, 2, 'https://static1.squarespace.com/static/5850b31d44024318a76fbaab/t/5b95dafd88251b7b96998730/1536549272168/custom-mini-donuts.jpg'),
(24, 'Sate Telur', 'Sate telur yang legendaris dikalangan mahasiswa dengan rasa yang begitu khas diajmin lakuu keras', 'asin', 1000, 8, 'https://img-global.cpcdn.com/003_recipes/56f729615dc8cc71/751x532cq70/photo.jpg'),
(25, 'Tempe Mendoan', 'Tempe Mendoan paling asli rasanya karena dibuat dari tepung asli dan daun bawang pilihan', 'asin', 2000, 8, 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2016/09/Resep-Tempe-Mendoan.jpg?fit=2481%2C3101&ssl=1'),
(26, 'Permen Biasa', 'Cuma permen biasa namun laku dikalangan mahasiwa ngantuk', 'manis', 200, 8, 'https://ae01.alicdn.com/kf/HTB10rSeJpXXXXXGXXXXq6xXFXXXg/250-g-cina-permen-dan-makanan-ringan-merek-Alpenliebe-keras-Candy-rasa-yang-berbeda-termasuk-susu.jpg_640x640.jpg'),
(27, 'Coklat Batangan', 'MAnis dan pahitnya pas di mata coklat coklat semua , apalagi buat mahasiswa yang g ada tenaga dan belum tidur', 'manis', 5000, 8, 'https://www.friars.co.uk/images/lindt-gold-milk-chocolate-bar-p504-7263_image.jpg'),
(28, 'Pilus', 'snack legendaris kesuakaan semua orang yang bisa dinikmati diwaktu kapan saja', 'asin', 500, 9, 'https://www.lifull-produk.id/bundles/assets/img/product/garuda%20snack%20pilus%20original.jpg'),
(29, 'Baso Goreng', 'Baso dengan tekstur lembut di dalam dan renyah krispi di luar sungguh paduan yang menggugah selera', 'asin', 2400, 9, 'http://cdn2.tstatic.net/style/foto/bank/images/bakso-goreng-kopong_20180402_180657.jpg'),
(30, 'Martabak Mini', 'Martabak coklat dan keju juga kacang dengan ukuran sekali hap menjadi pilihan sncak pengganjal kampar yang manis dan tepat', 'manis', 1250, 9, 'https://img-global.cpcdn.com/003_recipes/0431faa177ff0fb1/1200x630cq70/photo.jpg'),
(31, 'Green Tea Pocky', 'Jelas jajanan satu ini sangat populer dikalangan mahasiwa karena ketika menikmatinya waktu terasa tidak berjalan ', 'manis', 6000, 9, 'https://www.blippo.com/media/catalog/product/cache/4/thumbnail/9df78eab33525d08d6e5fb8d27136e95/2/0/20150114-03.jpg'),
(32, 'Martabak GEDE', 'MArtabak GEde ini bisa jadi pilihan untuk paket danushnut yang lebih murah dan efisien untuk dijula ke mahasiswa lapar di kampus padjajaran', 'manis', 17000, 2, 'https://faktualnews.co/images/2018/07/martabak.jpg'),
(34, 'Cold Brew', 'Dibuat dengan memakai metode “perendaman” selama minimal 8 jam. Membuat harimu menjadi Refresh', 'manis', 15000, 11, 'https://i.ibb.co/jby1qMp/kopi.jpg'),
(35, 'Danus', 'simulasi', 'asin', 4000, 2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1024px-LINE_logo.svg.png');

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
  `no_hp` varchar(16) DEFAULT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'images/avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hunter`
--

INSERT INTO `hunter` (`id_hunter`, `username`, `password`, `namalengkap`, `email`, `no_hp`, `image`) VALUES
(1, 'davidfim77', 'inipassword', 'David Ferdinand I M', 'zonetdavidzo@gmail.com', '082216718462', 'https://i.imgur.com/VWziSoZ.jpg'),
(3, 'syainanf', 'syaisyai', 'syaina', 'syainanurf@gmail.com', '089663455605', 'https://i.imgur.com/4KOG76X.png'),
(4, 'kazuto', 'kakakarimah', 'Karimah Azzuhdu', 'kakakarimah@gmail.com', '08956632548', 'https://i.ibb.co/pP7gnwf/mona.jpg'),
(5, 'bambangs', 'bambangbambang', 'bambang', 'bambang@unpad.ac.id', '089566325484', ''),
(7, 'halseyhalsey', 'halseyhalsey', 'halsey', 'halsey@gmail.com', '123456789123', 'https://www.billboard.com/files/styles/article_main_image/public/media/halsey-live-march-2018-billboard-1548.jpg'),
(9, 'simulasi', 'hallohallo', 'Simulasi Ulala', 'simul@gmail.com', '089634332463', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1024px-LINE_logo.svg.png');

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
  `bio` text NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'images/avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `username`, `password`, `email`, `no_hp`, `idline`, `namalengkap`, `bio`, `image`) VALUES
(2, 'officialdanushunt', 'danusdanus', 'officialdanushunt@gmail.com', '0821321437452', 'danus_id', 'Official DanusHunt Store', 'Toko kita adalah toko terbaik sepanjang masa dengan pilihan makananan yang tiada tara enaknya. \r\nDijamin semua manusia yang beli danusan ini nagih , yang jual pasti auto abis.\r\nMenu andalan kami :\r\n-Krabby Patty\r\n-Nasi Goweng\r\n-Risol terenak sepanjang masa\r\n-Buah Celup\r\n\r\nTunggu apalagi langsung aja order danusa auto habis ini\r\n\r\nSMART TERBAIK\r\nApakah berfungsi dengan baik?', 'https://www.toprydecity.com.au/assets/sized/IMG_9281-4d535a1cfedbb2b2ae3d0bfdff253816.jpg'),
(8, 'tokosebelah', 'tokosebelah', 'tokoseblah@unpad.ac.id', '087965125855', 'tosebka', 'Toko Sebelah Kanan', 'Toko yang ada di sebelah kanan :)\r\nJl.Sebelahkanan no 123\r\nJelas disini menjual jajanan jajanan terhits sejatinangor ga ada tandingannya wadaaw', 'https://www.kansai-airport.or.jp/sites/default/files/styles/tenant_image_main/public/2017-10/s073-main.jpg?itok=8VAENJvD'),
(9, 'hifood', 'hifoodhifood', 'hifoodwadaw@unpad.ac.id', '089745652314', 'hifoodline', 'HiFood', 'Hai , hi foodd adalah toko jajanan dan danusan dengan mengedepankan kebersihan dan juga highfood quality', 'images/avatar.png'),
(11, 'kakazutoseller', 'kakazuto123', 'kaka@cobacoba.com', '081322994389', 'kaka_kazuto', 'Doyan Coffee', 'Coffee racikan sendiri. cocok jadi temen ngoding atau ngelaprak :)', 'https://i.ibb.co/nfgtNL6/coffeecode.png');

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
  ADD PRIMARY KEY (`id_hunter`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hunter`
--
ALTER TABLE `hunter`
  MODIFY `id_hunter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);
--
-- Database: `db_perpus`
--
CREATE DATABASE IF NOT EXISTS `db_perpus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_perpus`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `No_Anggota` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lhr` varchar(100) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` char(1) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `warganegara` varchar(3) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tema_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`No_Anggota`, `nim`, `nama`, `tmp_lhr`, `tgl_lhr`, `jk`, `agama`, `warganegara`, `alamat`, `email`, `tema_buku`) VALUES
(5, '140810170039', 'David FIM', 'Bandung', '2018-12-18', 'L', 'Kristen', 'wni', 'Jatihandap', 'zonetdavidzo@gmail.c', 'Majalah , Novel'),
(6, '140810170031', 'Budi', 'Jakarta', '2018-12-28', 'L', 'Budha', 'wni', 'Jatiwaringin', 'budibudi@gmail.com', 'Paper , Novel'),
(7, '140810170094', 'Tania', 'Medan', '2018-08-08', 'P', 'Islam', 'wna', 'Bugenvile', 'taniatania@gmail.com', 'Jurnal . Paper , Buku Paket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `No_Anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"danushunt\",\"table\":\"seller\"},{\"db\":\"danushunt\",\"table\":\"hunter\"},{\"db\":\"danushunt\",\"table\":\"barang\"},{\"db\":\"danushunt\",\"table\":\"images\"},{\"db\":\"db_perpus\",\"table\":\"tb_biodata\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-12-18 17:56:48', '{\"Console\\/Mode\":\"show\",\"NavigationWidth\":0,\"Console\\/Height\":80}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
