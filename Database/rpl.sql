-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2025 at 03:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(4) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `nama_latin` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `nama_tanaman`, `nama_latin`, `deskripsi`, `sumber`, `gambar`) VALUES
(1, 'Pohon Mangga', 'Mangifera indica', 'Tanaman buah tropis yang populer.', 'Wikipedia', '1738410309_f4189bca5304bd83943b.jpeg'),
(2, 'Pohon Kelapa', 'Cocos nucifera', 'Tanaman multifungsi penghasil buah kelapa.', 'Encyclopedia Britannica', '1738410352_68b1d4054812bfa2dbc7.jpeg'),
(3, 'Cactus', 'Cactaceae', 'Cactus is a succulent plant well adapted to arid environments.', 'https://example.com/cactus', '1738410180_cb2bc397854686975ac8.jpeg'),
(4, 'Daffodil', 'Narcissus', 'Daffodils are spring-blooming flowers with bright yellow petals.', 'https://example.com/daffodil', '1738410408_900de40a5ecf90c6b330.jpg'),
(5, 'Eucalyptus', 'Eucalyptus globulus', 'Eucalyptus trees are known for their aromatic leaves.', 'https://example.com/eucalyptus', '1738410622_2490c1c7faea20032c46.jpeg'),
(6, 'Fern', 'Pteridophyta', 'Ferns are non-flowering plants with feathery leaves.', 'https://example.com/fern', '1738411123_90b309359de11488b239.jpeg'),
(7, 'Geranium', 'Pelargonium', 'Geraniums are popular garden plants with colorful flowers.', 'https://example.com/geranium', '1738411374_0fc33d4baa735886b683.jpeg'),
(8, 'Hibiscus', 'Hibiscus rosa-sinensis', 'Hibiscus is a tropical plant with large, colorful flowers.', 'https://example.com/hibiscus', '1738411509_772da05dfbc07174b174.jpeg'),
(9, 'Ivy', 'Hedera helix', 'Ivy is a climbing plant often used as ground cover.', 'https://example.com/ivy', '1738411556_10499ca8626839d1d09a.jpeg'),
(10, 'Jasmine', 'Jasminum', 'Jasmine is a fragrant flowering plant often used in perfumes.', 'https://example.com/jasmine', '1738411769_3d021de290da45749f20.jpeg'),
(11, 'Kale', 'Brassica oleracea var. sabellica', 'Kale is a leafy green vegetable rich in nutrients.', 'https://example.com/kale', '1738411885_9bc2ad502566dc0fbf0d.jpeg'),
(12, 'Lavender', 'Lavandula', 'Lavender is known for its calming fragrance.', 'https://example.com/lavender', '1738412351_b6cf3c3021cd9a904515.jpg'),
(13, 'Mint', 'Mentha', 'Mint is a versatile herb used in cooking and beverages.', 'https://example.com/mint', '1738412237_a0b974a5c49a119069fe.jpg'),
(14, 'Nasturtium', 'Tropaeolum', 'Nasturtiums are edible flowers with a peppery taste.', 'https://example.com/nasturtium', '1738412269_0c4b0f7ae41a4613e154.jpg'),
(15, 'Orchid', 'Orchidaceae', 'Orchids are prized for their intricate and colorful blooms.', 'https://example.com/orchid', '1738412311_19ab2cc543cd48fe78d1.png'),
(16, 'Palm', 'Arecaceae', 'Palm trees are a staple of tropical landscapes.', 'https://example.com/palm', '1738412424_13a5c312f4811fab0ac3.jpeg'),
(17, 'Quince', 'Cydonia oblonga', 'Quince is a fruit-bearing tree with aromatic fruits.', 'https://example.com/quince', '1738412614_259cd7dd36a440555092.jpeg'),
(18, 'Rose', 'Rosa', 'Roses are classic flowers associated with love and beauty.', 'https://example.com/rose', '1738412663_170d802f6fe4f9aae9a8.jpeg'),
(19, 'Sunflower', 'Helianthus annuus', 'Sunflowers are tall plants with large yellow blooms.', 'https://example.com/sunflower', '1738412706_2bf8f8ad4d8f29a62ab7.jpg'),
(20, 'Tulip', 'Tulipa', 'Tulips are spring flowers that come in various vibrant colors.', 'https://example.com/tulip', '1738412730_e3f35d2f96e175b5d46a.jpeg'),
(21, 'Aloe Vera', 'Aloe barbadensis miller', 'Aloe vera is known for its medicinal properties.', 'https://example.com/aloe-vera', '1738412803_81933ef4fc6dbbe5ded6.jpg'),
(22, 'Basil', 'Ocimum basilicum', 'Basil is a culinary herb commonly used in Italian dishes.', 'https://example.com/basil', '1738412825_48f537452baa67275a50.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_artikel`, `id_user`, `komentar`) VALUES
(7, 1, 10, 'Artikel ini sangat hampa.......'),
(8, 1, 11, 'Betul bang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar(changed)`
--

CREATE TABLE `tb_komentar(changed)` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_komentar(changed)`
--

INSERT INTO `tb_komentar(changed)` (`id_komentar`, `id_user`, `username`, `id_artikel`, `komentar`, `tanggal`) VALUES
(1, 10, 'Titan', 1, 'tes', '2025-01-17 21:14:48'),
(2, 10, 'Titan', 1, 'tes', '2025-01-17 21:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar(old)`
--

CREATE TABLE `tb_komentar(old)` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanaman`
--

CREATE TABLE `tb_tanaman` (
  `id_tanaman` int(4) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `alarm` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tanaman`
--

INSERT INTO `tb_tanaman` (`id_tanaman`, `nama_tanaman`, `catatan`, `alarm`, `id_user`) VALUES
(5, 'admin', 'bukan admin', '20:41:00', 11),
(7, 'Tes', 'tes', '13:52:00', 11),
(9, 'gak', 'asda', '01:47:00', 11),
(10, 'Tes', 'tes', '20:45:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(10, 'Titan', 'titanelhaqi@gmail.com', '$2y$10$3BXSvY7zbBbqCZtCYipVPeDah9pZnINXlouQKK1As8IIp0J7RDX2C', 'admin'),
(11, 'admin', 'admin@gmail.com', '$2y$10$a2d.0xIYtKyxj2QrU1NhkOkdX2wtd6J8jNA6mP4RtSItzFSDWZGq6', 'admin'),
(12, 'user', 'user@gmail.com', '$2y$10$tzbuko6266JI7WIM5rEUYup72UTN1mQGa79XY82g1OgFfpIRPjEZy', 'user'),
(14, 'silvi123', 'silvi@gmail.com', '$2y$10$I248rxOeFI2y2VLqRzLWteelN.0dRE3RsqUJkPulbm9z9caZIWmHi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_komentar(changed)`
--
ALTER TABLE `tb_komentar(changed)`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tb_komentar(old)`
--
ALTER TABLE `tb_komentar(old)`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_artikel` (`id_user`),
  ADD KEY `fk_artikel` (`id_artikel`);

--
-- Indexes for table `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_komentar(changed)`
--
ALTER TABLE `tb_komentar(changed)`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_komentar(old)`
--
ALTER TABLE `tb_komentar(old)`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  MODIFY `id_tanaman` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_komentar(changed)`
--
ALTER TABLE `tb_komentar(changed)`
  ADD CONSTRAINT `tb_komentar(changed)_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_komentar(changed)_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`) ON DELETE CASCADE;

--
-- Constraints for table `tb_komentar(old)`
--
ALTER TABLE `tb_komentar(old)`
  ADD CONSTRAINT `fk_artikel` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tb_komentar_id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
