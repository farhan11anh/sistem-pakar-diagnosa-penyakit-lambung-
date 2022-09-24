-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2022 at 05:17 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aturan`
--

CREATE TABLE `tbl_aturan` (
  `id_aturan` int(11) NOT NULL,
  `id_penyakit` varchar(255) NOT NULL,
  `id_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aturan`
--

INSERT INTO `tbl_aturan` (`id_aturan`, `id_penyakit`, `id_gejala`) VALUES
(1, 'P001', 'G001'),
(2, 'P001', 'G004'),
(3, 'P001', 'G005'),
(4, 'P001', 'G006'),
(6, 'P004', 'G005'),
(8, 'P002', 'G007'),
(10, 'P003', 'G015'),
(11, 'P003', 'G006'),
(12, 'P003', 'G005'),
(13, 'P004', 'G001'),
(15, 'P004', 'G003'),
(16, 'P004', 'G011'),
(17, 'P005', 'G012'),
(18, 'P005', 'G005'),
(20, 'P005', 'G004'),
(22, 'P002', 'G008'),
(23, 'P002', 'G009'),
(24, 'P002', 'G010'),
(25, 'P002', 'G014'),
(26, 'P003', 'G001'),
(27, 'P003', 'G004'),
(28, 'P004', 'G013'),
(30, 'P005', 'G002'),
(31, 'P005', 'G016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `name`) VALUES
('G001', 'Sakit Perut'),
('G002', 'Kembung'),
('G003', 'Feses Hitam'),
('G004', 'Perut Mual'),
('G005', 'Mengalami Muntah'),
('G006', 'Perut terasa begah'),
('G007', 'Panas ulu hati'),
('G008', 'Sulit menelan makanan'),
('G009', 'Merasa mengganjal pada kerongkongan'),
('G010', 'Terasa asam di mulut'),
('G011', 'Diare'),
('G012', 'Cepat merasa kenyang'),
('G013', 'Nyeri pada ulu hati'),
('G014', 'Air liur berlebih'),
('G015', 'Flu'),
('G016', 'Penurunan berat badan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kode`
--

CREATE TABLE `tbl_kode` (
  `id_riwayat` int(11) NOT NULL,
  `kode_laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kode`
--

INSERT INTO `tbl_kode` (`id_riwayat`, `kode_laporan`) VALUES
(2, 'bjnjandkja'),
(3, 'kandklakld2'),
(23, '104afd0b3ff4fdc07fa8c63faeae5807'),
(24, 'bec2d76f121dbc307f50e2cd7fcc1980'),
(25, 'a15150210107c6abf42f56049e74db92'),
(25, '3ca6d11568e0c337984ea36e09204902'),
(26, '1e7ae2dae2e6bdd23c6886b1a5f6a1ec'),
(27, '51ce74621c1d5db3af067cb4b751e7d7'),
(30, 'd0497fd6c3147130efad33b4549354d4'),
(31, '223f1cbc6242a0da6894bee0444841b9'),
(32, '6d2dce12960a9d59f54e12841e966cec'),
(33, '3fdde9e525ecbb416da696794a952071'),
(34, 'e3d19c74c762c014b38d32883b4f24c9'),
(35, '6737b2da992ad6be9f1fd7c418823c92'),
(36, '3a686cb83cfc381f3e8283d11314f8bf'),
(37, 'c91838be754681a4957075faed24f5ca'),
(38, 'a8a317d77e5299646f929346e0961082'),
(39, '77fb128bcf9f2dff21c9b5df23b11f84'),
(39, '331f139ba3994b027faf8ef51364ee26'),
(40, '3ab5ddac2951475854a0b0dd30ad11fe'),
(40, 'f51098d78fd665cad1f98680bf0bd114'),
(41, '3119f56b47a3c21a783ae7396416a4dd'),
(42, '7e9007243733249cca2b782ffb4f79d3'),
(43, 'a57defce9283b04c4c9390f67bf1cc3c'),
(44, 'bbaabb04c7230a17f46d6078a25229df'),
(45, '2d42e08efb3a422a836b27dd0c53b8fa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `solusi` text NOT NULL,
  `langkah_pencegahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `name`, `solusi`, `langkah_pencegahan`) VALUES
('P001', 'Gastritis', 'Hindari alkohol dan NSID. Jika gejala tetap ada, maka periksalah ke dokter untuk pemeriksaan lebih lanjut.', 'Hindari alkohol dan NSID. Jika gejala tetap ada, maka periksalah ke dokter untuk pemeriksaan lebih lanjut.'),
('P002', 'Gerd', 'Anda dapat mulai memperbaiki gaya hidup dengan memperbaiki cara tidur, tidak mengonsumsi coklat, kopi, jus jeruk dan lainnya. Hindari merokok dan alkohol. Makanlah dengan porsi kecil dan tunggu sampai 3 jam sebelum tidur. Jika gejala tetap ada, maka periksalah ke dokter untuk pemeriksaan lebih lanjut.', 'Sebisa mungkin untuk terus mengisi perut, jangan sampai kosong dalam waktu yang lama, dan juga mengatur pola makan'),
('P003', 'Functional dyspepsia', 'Hindari kafein dan alkohol. Lakukanlah diet sederhana jika sedang melakukan diet. Modifikasi obat-obatan seperti NSID atau antibiotik jika sedang mengonsumsi. Jika gejala tetap ada, maka periksalah kedokter untuk pemeriksaan lebih lanjut.', 'Sebisa mungkin kurangi kafein, dan hindari minuman beralkohol, hindari stres'),
('P004', 'Peptic ulcer disease', 'Selama nyeri masih terjadi, jangan makan terlalu banyak dan segera periksa ke dokter untuk pemeriksaan lebih lanjut.', 'Hindari minuman beralkohol dan rokok, hindari stres berlebih.'),
('P005', 'Gastroparesis', 'Modifikasi gaya hidup, termasuk makan dalam porsi kecil dan sering konsumsi makanan rendah lemak. Jika gejala tidak membaik, segera periksa ke dokter untuk pemeriksaan lebih lanjut.', 'menerapkan gaya hidup sehat, menghindari makanan yang berserat dan berlemak.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_penyakit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id_riwayat`, `id_user`, `id_penyakit`, `created_at`) VALUES
(1, '1', 'P001', '2022-08-06 03:25:21'),
(2, '16', 'P005', '2022-08-06 03:25:48'),
(3, '16', 'P004', '2022-08-06 03:26:24'),
(4, '8', 'P005', '2022-08-06 09:14:38'),
(5, '8', 'P005', '2022-08-07 02:56:43'),
(6, '8', 'P005', '2022-08-07 12:33:28'),
(7, '8', 'P004', '2022-08-08 00:05:20'),
(8, '8', 'P005', '2022-08-08 00:05:44'),
(9, '8', 'P004', '2022-08-08 01:14:00'),
(10, '8', 'P004', '2022-08-08 01:22:00'),
(11, '8', 'P004', '2022-08-08 01:30:12'),
(12, '8', 'P004', '2022-08-08 01:32:26'),
(13, '8', 'P004', '2022-08-08 01:32:47'),
(14, '8', 'P004', '2022-08-08 01:33:18'),
(15, '8', 'P004', '2022-08-08 01:35:02'),
(16, '8', 'P004', '2022-08-08 01:35:32'),
(17, '8', 'P004', '2022-08-08 01:54:03'),
(18, '8', 'P004', '2022-08-08 01:59:18'),
(19, '8', 'P004', '2022-08-08 02:04:55'),
(20, '8', 'P004', '2022-08-08 03:47:02'),
(21, '8', 'P004', '2022-08-08 07:51:01'),
(22, '8', 'P004', '2022-08-08 07:51:25'),
(23, '8', 'P004', '2022-08-08 07:53:56'),
(24, '8', 'P004', '2022-08-08 07:55:43'),
(25, '8', 'P005', '2022-08-08 07:57:24'),
(26, '8', 'P005', '2022-08-08 07:57:58'),
(27, '8', 'P004', '2022-08-08 07:59:14'),
(28, '8', 'P004', '2022-08-08 14:45:34'),
(29, '8', 'P004', '2022-08-09 01:45:56'),
(30, '8', 'P004', '2022-08-10 01:11:01'),
(31, '8', 'P004', '2022-08-10 01:11:29'),
(32, '8', 'P005', '2022-08-13 09:37:34'),
(33, '8', 'P004', '2022-08-15 00:22:36'),
(34, '8', 'P005', '2022-08-15 00:27:01'),
(35, '8', 'P003', '2022-08-15 01:12:38'),
(36, '8', 'P005', '2022-08-17 01:26:02'),
(37, '8', 'P004', '2022-08-17 04:39:09'),
(38, '8', 'P004', '2022-08-17 09:46:08'),
(39, '25', 'P005', '2022-08-19 03:38:35'),
(40, '25', 'P003', '2022-08-24 06:20:29'),
(41, '25', 'P004', '2022-08-24 08:37:14'),
(42, '25', 'P001', '2022-08-24 09:03:25'),
(43, '16', 'P001', '2022-08-25 06:50:00'),
(44, '16', 'P004', '2022-08-25 07:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

CREATE TABLE `test_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kesukaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`id`, `nama`, `kesukaan`, `alamat`) VALUES
(1, 'parhan', 'coding', 'jl.munggur'),
(2, 'koralov', 'climbing', 'st.john'),
(3, 'moveto', 'throwing', 'jl.fuu'),
(4, 'jump', 'mangan', 'st.mangrove');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(1, 'hahan', 'hahaneztd@gmail.com', '12345678', 1, '', '2022-03-02'),
(2, 'bow', 'bow@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, '', NULL),
(7, 'hasna', 'hasna.danisa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(8, 'farhan', 'farhan.fcbar@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'laki-laki', '2000-03-23'),
(9, 'fly high', 'sayapterbang6@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(10, 'sayap', 'sayapterbang6@gmail.commm', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(11, 'sayapterbang6@gmail.commmm', 'sayapterbang6@gmail.co.id', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(12, 'vharchman', 'hahan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(13, 'vharchman', 'hahannn@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(14, 'vharchman', 'hahannn@gmail.comm', '25f9e794323b453885f5181f1b624d0b', 2, '', NULL),
(15, 'farhan', 'farhan@sevenpion.co.id', 'e807f1fcf82d132f9bb018ca6738a19f', 2, 'laki-laki', '2000-03-23'),
(16, 'danisa', 'danisa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'perempuan', '2001-08-07'),
(17, 'hann', 'farhan@han.commmm', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2022-08-05'),
(18, 'farhan.fcbar@gmail.com', 'farhan.fcbar@gmail.commm', '25d55ad283aa400af464c76d713c07ad', 2, 'none', '2022-08-03'),
(19, 'farhan.fcbar@gmail.com', 'danisa@gmail.commmm', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2022-08-19'),
(20, 'Muhammad Farhan A', 'farhan.hahan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2000-03-23'),
(21, 'suryanti', 'suryanti@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Perempuan', '1987-06-17'),
(22, 'sartono', 'sartono@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '1977-11-17'),
(24, 'parhan', 'parhan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2000-03-23'),
(25, 'farhan', 'farhan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2000-03-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aturan`
--
ALTER TABLE `tbl_aturan`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `test_table`
--
ALTER TABLE `test_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aturan`
--
ALTER TABLE `tbl_aturan`
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `test_table`
--
ALTER TABLE `test_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
