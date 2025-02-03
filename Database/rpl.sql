-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 03:23 AM
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
(1, 'Pohon Mangga', 'Mangifera indica', 'Pohon Mangga (Mangifera indica)\r\nArea/Lokasi Tumbuh\r\nPohon mangga tumbuh di daerah tropis dan subtropis, seperti India, Indonesia, Thailand, Brasil, Meksiko, dan Afrika Timur. Pohon ini membutuhkan suhu hangat (24–30°C), tanah subur, serta curah hujan sedang (750–2.500 mm/tahun).\r\n\r\nKarakteristik Umum\r\nPohon berukuran sedang hingga besar (tinggi 10–40 meter).\r\nDaun hijau lebat, bunga kecil berwarna kuning atau merah muda.\r\nBuah berbentuk oval dengan kulit hijau, kuning, atau merah saat matang.\r\nRasa manis dengan daging buah berserat atau lembut, tergantung varietasnya.\r\n\r\nCara Penanaman\r\nPilih lokasi dengan sinar matahari penuh.\r\nGunakan bibit cangkok atau biji, tanam di lubang sekitar 60x60x60 cm.\r\nCampurkan tanah dengan pupuk kompos atau pupuk kandang.\r\nSiram setelah tanam, pastikan drainase baik agar akar tidak busuk.\r\n\r\nCara Perawatan\r\nPenyiraman: 2–3 kali seminggu saat kering, kurangi saat musim hujan.\r\nPemupukan: Gunakan pupuk NPK atau organik 2–3 kali setahun.\r\nPemangkasan: Lakukan untuk membentuk tajuk dan mencegah penyakit.\r\nPengendalian hama: Bungkus buah untuk menghindari lalat buah, gunakan fungisida untuk jamur.\r\nPohon mangga mulai berbuah setelah 3–8 tahun, tergantung metode perbanyakan.', 'Wikipedia', '1738410309_f4189bca5304bd83943b.jpeg'),
(2, 'Pohon Kelapa', 'Cocos nucifera', 'Pohon kelapa tumbuh subur di daerah tropis dengan suhu hangat dan curah hujan tinggi. Karakteristiknya berupa batang tinggi dan lurus, dengan daun berbentuk panjang seperti palma. Tanaman ini membutuhkan tanah yang gembur dan drainase baik. Untuk menanamnya, cukup tanam bibit kelapa yang sudah berumur, dan pastikan memberi penyiraman yang cukup terutama di awal pertumbuhan. Perawatan meliputi pemangkasan daun yang kering dan pengendalian hama menggunakan pestisida alami.', 'Wikipedia', '1738410352_68b1d4054812bfa2dbc7.jpeg'),
(3, 'Kaktus', 'Cactaceae', 'Kaktus tumbuh dengan baik di daerah kering atau gurun yang memiliki suhu tinggi dan sinar matahari penuh. Cactus memiliki tubuh berduri dengan batang berair yang bisa menyimpan air. Tanaman ini membutuhkan tanah berdrainase baik, dan hanya perlu sedikit disiram. Hindari penyiraman berlebihan karena cactus mudah busuk. Perawatan cukup mudah dengan memantau kelembapan tanah dan suhu.', 'https://example.com/cactus', '1738410180_cb2bc397854686975ac8.jpeg'),
(4, 'Daffodil', 'Narcissus', 'Daffodil tumbuh baik di daerah dengan iklim sejuk dan cerah. Tanaman ini memiliki bunga berbentuk terompet berwarna cerah, sering kali kuning atau putih. Daffodil membutuhkan tanah subur dan lembap serta sinar matahari langsung. Tanam umbi daffodil pada kedalaman sekitar 10 cm di musim gugur dan pastikan tanah tidak tergenang air. Perawatan meliputi penyiraman secukupnya dan pemangkasan batang setelah berbunga.', 'https://example.com/daffodil', '1738410408_900de40a5ecf90c6b330.jpg'),
(5, 'Eucalyptus', 'Eucalyptus globulus', 'Eucalyptus tumbuh di daerah tropis dan subtropis dengan suhu hangat. Pohon ini dikenal karena daun yang menghasilkan minyak esensial dengan aroma khas. Eucalyptus memerlukan tanah gembur dan drainase baik. Tanaman ini membutuhkan area luas karena dapat tumbuh sangat besar. Perawatan meliputi pemangkasan untuk menjaga bentuk pohon dan pengendalian hama jika diperlukan.', 'https://example.com/eucalyptus', '1738410622_2490c1c7faea20032c46.jpeg'),
(6, 'Fern', 'Pteridophyta', 'Fern atau pakis tumbuh di tempat lembap dengan sedikit sinar matahari. Pakis memiliki daun besar yang lembut dan hijau. Tanaman ini cocok di tanah yang kaya bahan organik dan lembap. Penyiraman harus teratur untuk menjaga kelembapan, dan pemangkasan hanya diperlukan untuk daun yang mati. Pakis juga bisa tumbuh dengan baik dalam pot, sehingga cocok untuk taman dalam ruangan.\r\n\r\n', 'https://example.com/fern', '1738411123_90b309359de11488b239.jpeg'),
(7, 'Geranium', 'Pelargonium', 'Geranium tumbuh subur di daerah dengan iklim sedang dan suhu tidak terlalu panas. Tanaman ini memiliki bunga berwarna-warni dan daun berbentuk bulat atau hati. Geranium membutuhkan sinar matahari penuh dan tanah subur. Pemupukan teratur akan membantu tanaman tumbuh subur. Pemangkasan juga diperlukan untuk menghindari tanaman menjadi terlalu lebat.\r\n\r\n', 'https://example.com/geranium', '1738411374_0fc33d4baa735886b683.jpeg'),
(8, 'Hibiscus', 'Hibiscus rosa-sinensis', 'Hibiscus tumbuh di daerah tropis dengan banyak sinar matahari. Tanaman ini memiliki bunga besar dan cerah dengan berbagai warna, seperti merah, kuning, dan pink. Hibiscus membutuhkan tanah yang subur dan lembap. Penyiraman teratur sangat penting, terutama di musim panas. Pemangkasan dapat membantu tanaman tumbuh lebih rimbun dan berbunga lebih banyak.\r\n\r\n', 'https://example.com/hibiscus', '1738411509_772da05dfbc07174b174.jpeg'),
(9, 'Ivy', 'Hedera helix', 'Ivy atau tanaman merambat tumbuh di daerah sejuk dengan sinar matahari terbatas. Tanaman ini cocok untuk dijadikan tanaman penutup tanah atau hiasan dinding. Ivy membutuhkan tanah lembap dan sedikit nutrisi. Penyiraman teratur penting untuk menjaga kelembapan tanah, dan pemangkasan harus dilakukan untuk mengontrol pertumbuhannya.\r\n\r\n', 'https://example.com/ivy', '1738411556_10499ca8626839d1d09a.jpeg'),
(10, 'Jasmine', 'Jasminum', 'Jasmine tumbuh subur di daerah tropis dan subtropis dengan banyak sinar matahari. Tanaman ini dikenal karena bunga putih atau kuningnya yang harum. Jasmine membutuhkan tanah yang subur dan sedikit asam dengan drainase baik. Penyiraman harus teratur, terutama pada musim kemarau. Pemangkasan akan membantu merangsang pertumbuhan dan produksi bunga.\r\n\r\n', 'https://example.com/jasmine', '1738411769_3d021de290da45749f20.jpeg'),
(11, 'Kale', 'Brassica oleracea var. sabellica', 'Kale tumbuh di daerah beriklim sejuk dan membutuhkan banyak sinar matahari. Tanaman ini memiliki daun hijau yang kaya akan nutrisi. Kale membutuhkan tanah yang subur, lembap, dan kaya bahan organik. Penyiraman teratur penting untuk menjaga kelembapan tanah, dan pemupukan dengan pupuk organik akan meningkatkan hasil panen.\r\n\r\n', 'https://example.com/kale', '1738411885_9bc2ad502566dc0fbf0d.jpeg'),
(12, 'Lavender', 'Lavandula', 'Lavender tumbuh dengan baik di daerah yang memiliki sinar matahari penuh dan tanah yang gembur dengan drainase baik. Tanaman ini dikenal karena bunga berwarna ungu dan aromanya yang khas. Lavender membutuhkan penyiraman ringan, tetapi tidak boleh tergenang air. Pemangkasan teratur diperlukan untuk menjaga bentuk tanaman dan merangsang pertumbuhan baru.\r\n\r\n', 'https://example.com/lavender', '1738412351_b6cf3c3021cd9a904515.jpg'),
(13, 'Mint', 'Mentha', 'Mint tumbuh subur di daerah sejuk dengan banyak sinar matahari. Tanaman ini memiliki daun hijau segar dan aroma yang kuat. Mint membutuhkan tanah lembap dan subur, serta penyiraman teratur. Karena mudah menyebar, mint sebaiknya ditanam dalam wadah atau dengan pembatas agar tidak mengambil alih area lain di kebun.\r\n\r\n', 'https://example.com/mint', '1738412237_a0b974a5c49a119069fe.jpg'),
(14, 'Nasturtium', 'Tropaeolum', 'Nasturtium tumbuh dengan baik di daerah yang cerah dengan tanah yang kering dan gembur. Tanaman ini memiliki bunga cerah berwarna merah, oranye, atau kuning. Nasturtium membutuhkan penyiraman secukupnya dan pemupukan ringan. Tanaman ini dapat tumbuh merambat dan cocok untuk menutupi tanah atau sebagai tanaman hias di taman.\r\n\r\n', 'https://example.com/nasturtium', '1738412269_0c4b0f7ae41a4613e154.jpg'),
(15, 'Orchid', 'Orchidaceae', 'Orchid tumbuh subur di daerah tropis dengan kelembapan tinggi. Tanaman ini dikenal karena bunga indah yang beragam bentuk dan warna. Orchid membutuhkan sinar matahari terang tetapi tidak langsung. Tanah yang digunakan harus lembap, tetapi jangan sampai tergenang air. Penyiraman harus dilakukan dengan hati-hati, dan tanaman ini juga membutuhkan kelembapan udara yang cukup tinggi.\r\n\r\n', 'https://example.com/orchid', '1738412311_19ab2cc543cd48fe78d1.png'),
(16, 'Palm', 'Arecaceae', 'Pohon palm tumbuh di daerah tropis dan subtropis dengan sinar matahari penuh. Tanaman ini memiliki batang tinggi dan daun berbentuk seperti kipas atau jarum. Palm membutuhkan tanah yang gembur dan drainase baik. Penyiraman harus dilakukan secara teratur, terutama saat musim kemarau. Pemangkasan daun yang kering penting untuk menjaga penampilan pohon.\r\n\r\n', 'https://example.com/palm', '1738412424_13a5c312f4811fab0ac3.jpeg'),
(17, 'Quince', 'Cydonia oblonga', 'Quince tumbuh baik di daerah beriklim sejuk dan membutuhkan banyak sinar matahari. Tanaman ini memiliki buah berbentuk seperti apel yang berwarna kuning. Quince membutuhkan tanah yang subur dan sedikit asam, dengan drainase baik. Penyiraman yang teratur diperlukan pada musim kering, dan pemangkasan harus dilakukan untuk menghindari pertumbuhan berlebihan.\r\n\r\n', 'https://example.com/quince', '1738412614_259cd7dd36a440555092.jpeg'),
(18, 'Rose', 'Rosa', 'Pohon mawar tumbuh di daerah dengan iklim sedang dan banyak sinar matahari. Mawar memiliki bunga cantik dengan berbagai warna. Mawar membutuhkan tanah yang subur dan lembap, serta penyiraman yang cukup. Pemangkasan diperlukan untuk merangsang pertumbuhan dan menghilangkan bagian tanaman yang mati atau rusak. Perawatan tambahan meliputi pengendalian hama dan penyakit.\r\n\r\n', 'https://example.com/rose', '1738412663_170d802f6fe4f9aae9a8.jpeg'),
(19, 'Sunflower', 'Helianthus annuus', 'Bunga matahari tumbuh di daerah cerah dengan tanah yang subur dan gembur. Tanaman ini memiliki batang tegak dan bunga besar yang berwarna kuning. Sunflower membutuhkan sinar matahari penuh dan tanah yang lembap. Penyiraman teratur diperlukan untuk mendukung pertumbuhannya. Tanaman ini juga membutuhkan ruang yang cukup untuk tumbuh tinggi.\r\n\r\n', 'https://example.com/sunflower', '1738412706_2bf8f8ad4d8f29a62ab7.jpg'),
(20, 'Tulip', 'Tulipa', 'Tulip tumbuh dengan baik di daerah dengan iklim sejuk dan cerah. Tanaman ini memiliki bunga indah dengan warna cerah seperti merah, kuning, dan ungu. Tulip membutuhkan tanah yang subur dan lembap, serta sinar matahari penuh. Tanam umbi tulip di musim gugur dan pastikan tanah memiliki drainase yang baik.\r\n\r\n', 'https://example.com/tulip', '1738412730_e3f35d2f96e175b5d46a.jpeg'),
(21, 'Aloe Vera', 'Aloe barbadensis miller', 'Aloe Vera tumbuh baik di daerah yang panas dengan sinar matahari penuh. Tanaman ini dikenal karena manfaatnya untuk kesehatan dan kecantikan. Aloe Vera membutuhkan tanah yang gembur dengan drainase baik. Penyiraman harus dilakukan secukupnya, terutama di musim kemarau, dan hindari kelembapan berlebih. Perawatan lainnya termasuk pemangkasan daun yang rusak.\r\n\r\n', 'https://example.com/aloe-vera', '1738412803_81933ef4fc6dbbe5ded6.jpg'),
(22, 'Basil', 'Ocimum basilicum', 'Basil tumbuh subur di daerah panas dengan sinar matahari penuh. Tanaman ini memiliki daun hijau yang aromatik dan digunakan dalam berbagai masakan. Basil membutuhkan tanah yang subur dan lembap. Penyiraman teratur diperlukan, dan pemangkasan membantu tanaman tumbuh lebih lebat. Tanaman ini juga perlu dilindungi dari suhu dingin.', 'https://example.com/basil', '1738412825_48f537452baa67275a50.jpeg'),
(29, 'tees', 'tees', 'tees', 'tes', '1738473337_11c26ee121a7475a4ee8.jpeg');

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
(10, 'Tes', 'tes', '20:45:00', 10),
(12, 'Bunga Melati', '5 Batch bunga di halaman depan dan belakang, disiram 2 hari sekali.', '06:30:00', 11);

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
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `id_tanaman` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
