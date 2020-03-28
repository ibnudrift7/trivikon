-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Mar 2020 pada 17.11
-- Versi server: 5.7.26-log
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salingte_trivikon_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `province` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `postal_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `city`
--

INSERT INTO `city` (`id`, `province_id`, `province`, `type`, `city_name`, `postal_code`) VALUES
(1, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Barat', '23600'),
(2, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Barat Daya', '23700'),
(3, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Besar', '23000'),
(4, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Jaya', '23600'),
(5, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Selatan', '23700'),
(6, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Singkil', '24700'),
(7, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Tamiang', '24400'),
(8, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Tengah', '24500'),
(9, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Tenggara', '24600'),
(10, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Timur', '24400'),
(11, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Utara', '24300'),
(12, 32, 'Sumatera Barat', 'Kabupaten', 'Agam', '26000'),
(13, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Alor', '85800'),
(14, 19, 'Maluku', 'Kota', 'Ambon', '97000'),
(15, 34, 'Sumatera Utara', 'Kabupaten', 'Asahan', '21000'),
(16, 24, 'Papua', 'Kabupaten', 'Asmat', '99700'),
(17, 1, 'Bali', 'Kabupaten', 'Badung', '80361'),
(18, 13, 'Kalimantan Selatan', 'Kabupaten', 'Balangan', '71400'),
(19, 15, 'Kalimantan Timur', 'Kota', 'Balikpapan', '76100'),
(20, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Banda Aceh', '23000'),
(21, 18, 'Lampung', 'Kota', 'Bandar Lampung', '35000'),
(22, 9, 'Jawa Barat', 'Kabupaten', 'Bandung', '40000'),
(23, 9, 'Jawa Barat', 'Kota', 'Bandung', '40000'),
(24, 9, 'Jawa Barat', 'Kabupaten', 'Bandung Barat', '40000'),
(25, 29, 'Sulawesi Tengah', 'Kabupaten', 'Banggai', '94791'),
(26, 29, 'Sulawesi Tengah', 'Kabupaten', 'Banggai Kepulauan', '94791'),
(27, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka', '33200'),
(28, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka Barat', '33300'),
(29, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka Selatan', '33700'),
(30, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka Tengah', '33600'),
(31, 11, 'Jawa Timur', 'Kabupaten', 'Bangkalan', '69100'),
(32, 1, 'Bali', 'Kabupaten', 'Bangli', '80600'),
(33, 13, 'Kalimantan Selatan', 'Kabupaten', 'Banjar', '70600'),
(34, 9, 'Jawa Barat', 'Kota', 'Banjar', '46300'),
(35, 13, 'Kalimantan Selatan', 'Kota', 'Banjarbaru', '70700'),
(36, 13, 'Kalimantan Selatan', 'Kota', 'Banjarmasin', '70000'),
(37, 10, 'Jawa Tengah', 'Kabupaten', 'Banjarnegara', '53400'),
(38, 28, 'Sulawesi Selatan', 'Kabupaten', 'Bantaeng', '92400'),
(39, 5, 'DI Yogyakarta', 'Kabupaten', 'Bantul', '55700'),
(40, 33, 'Sumatera Selatan', 'Kabupaten', 'Banyuasin', '30758'),
(41, 10, 'Jawa Tengah', 'Kabupaten', 'Banyumas', '53100'),
(42, 11, 'Jawa Timur', 'Kabupaten', 'Banyuwangi', '68400'),
(43, 13, 'Kalimantan Selatan', 'Kabupaten', 'Barito Kuala', '70500'),
(44, 14, 'Kalimantan Tengah', 'Kabupaten', 'Barito Selatan', '73700'),
(45, 14, 'Kalimantan Tengah', 'Kabupaten', 'Barito Timur', '73600'),
(46, 14, 'Kalimantan Tengah', 'Kabupaten', 'Barito Utara', '73800'),
(47, 28, 'Sulawesi Selatan', 'Kabupaten', 'Barru', '90700'),
(48, 17, 'Kepulauan Riau', 'Kota', 'Batam', '29400'),
(49, 10, 'Jawa Tengah', 'Kabupaten', 'Batang', '51200'),
(50, 8, 'Jambi', 'Kabupaten', 'Batang Hari', '36600'),
(51, 11, 'Jawa Timur', 'Kota', 'Batu', '65311'),
(52, 34, 'Sumatera Utara', 'Kabupaten', 'Batu Bara', '21200'),
(53, 30, 'Sulawesi Tenggara', 'Kota', 'Bau-Bau', '93700'),
(54, 9, 'Jawa Barat', 'Kabupaten', 'Bekasi', '17000'),
(55, 9, 'Jawa Barat', 'Kota', 'Bekasi', '17000'),
(56, 2, 'Bangka Belitung', 'Kabupaten', 'Belitung', '33400'),
(57, 2, 'Bangka Belitung', 'Kabupaten', 'Belitung Timur', '33400'),
(58, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Belu', '85700'),
(59, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Bener Meriah', '24500'),
(60, 26, 'Riau', 'Kabupaten', 'Bengkalis', '28700'),
(61, 12, 'Kalimantan Barat', 'Kabupaten', 'Bengkayang', '79200'),
(62, 4, 'Bengkulu', 'Kota', 'Bengkulu', '38000'),
(63, 4, 'Bengkulu', 'Kabupaten', 'Bengkulu Selatan', '38500'),
(64, 4, 'Bengkulu', 'Kabupaten', 'Bengkulu Tengah', '38000'),
(65, 4, 'Bengkulu', 'Kabupaten', 'Bengkulu Utara', '38600'),
(66, 15, 'Kalimantan Timur', 'Kabupaten', 'Berau', '77300'),
(67, 24, 'Papua', 'Kabupaten', 'Biak Numfor', '98100'),
(68, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Bima', '84100'),
(69, 22, 'Nusa Tenggara Barat (NTB)', 'Kota', 'Bima', '84100'),
(70, 34, 'Sumatera Utara', 'Kota', 'Binjai', '20700'),
(71, 17, 'Kepulauan Riau', 'Kabupaten', 'Bintan', '29100'),
(72, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Bireuen', '24200'),
(73, 31, 'Sulawesi Utara', 'Kota', 'Bitung', '95500'),
(74, 11, 'Jawa Timur', 'Kabupaten', 'Blitar', '66100'),
(75, 11, 'Jawa Timur', 'Kota', 'Blitar', '66100'),
(76, 10, 'Jawa Tengah', 'Kabupaten', 'Blora', '58200'),
(77, 7, 'Gorontalo', 'Kabupaten', 'Boalemo', '96200'),
(78, 9, 'Jawa Barat', 'Kabupaten', 'Bogor', '16000'),
(79, 9, 'Jawa Barat', 'Kota', 'Bogor', '16000'),
(80, 11, 'Jawa Timur', 'Kabupaten', 'Bojonegoro', '62100'),
(81, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow (Bolmong)', '95700'),
(82, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow Selatan', '95700'),
(83, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow Timur', '95700'),
(84, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow Utara', '95700'),
(85, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Bombana', '93700'),
(86, 11, 'Jawa Timur', 'Kabupaten', 'Bondowoso', '68200'),
(87, 28, 'Sulawesi Selatan', 'Kabupaten', 'Bone', '92552'),
(88, 7, 'Gorontalo', 'Kabupaten', 'Bone Bolango', '96184'),
(89, 15, 'Kalimantan Timur', 'Kota', 'Bontang', '75300'),
(90, 24, 'Papua', 'Kabupaten', 'Boven Digoel', '99600'),
(91, 10, 'Jawa Tengah', 'Kabupaten', 'Boyolali', '57300'),
(92, 10, 'Jawa Tengah', 'Kabupaten', 'Brebes', '52200'),
(93, 32, 'Sumatera Barat', 'Kota', 'Bukittinggi', '26100'),
(94, 1, 'Bali', 'Kabupaten', 'Buleleng', '81100'),
(95, 28, 'Sulawesi Selatan', 'Kabupaten', 'Bulukumba', '92500'),
(96, 16, 'Kalimantan Utara', 'Kabupaten', 'Bulungan (Bulongan)', '77200'),
(97, 8, 'Jambi', 'Kabupaten', 'Bungo', '37200'),
(98, 29, 'Sulawesi Tengah', 'Kabupaten', 'Buol', '94500'),
(99, 19, 'Maluku', 'Kabupaten', 'Buru', '97500'),
(100, 19, 'Maluku', 'Kabupaten', 'Buru Selatan', '97500'),
(101, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Buton', '93700'),
(102, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Buton Utara', '93600'),
(103, 9, 'Jawa Barat', 'Kabupaten', 'Ciamis', '46200'),
(104, 9, 'Jawa Barat', 'Kabupaten', 'Cianjur', '43200'),
(105, 10, 'Jawa Tengah', 'Kabupaten', 'Cilacap', '53200'),
(106, 3, 'Banten', 'Kota', 'Cilegon', '42400'),
(107, 9, 'Jawa Barat', 'Kota', 'Cimahi', '40500'),
(108, 9, 'Jawa Barat', 'Kabupaten', 'Cirebon', '45100'),
(109, 9, 'Jawa Barat', 'Kota', 'Cirebon', '45100'),
(110, 34, 'Sumatera Utara', 'Kabupaten', 'Dairi', '22200'),
(111, 24, 'Papua', 'Kabupaten', 'Deiyai (Deliyai)', '98700'),
(112, 34, 'Sumatera Utara', 'Kabupaten', 'Deli Serdang', '20500'),
(113, 10, 'Jawa Tengah', 'Kabupaten', 'Demak', '59500'),
(114, 1, 'Bali', 'Kota', 'Denpasar', '80000'),
(115, 9, 'Jawa Barat', 'Kota', 'Depok', '16400'),
(116, 32, 'Sumatera Barat', 'Kabupaten', 'Dharmasraya', '27600'),
(117, 24, 'Papua', 'Kabupaten', 'Dogiyai', '98800'),
(118, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Dompu', '84200'),
(119, 29, 'Sulawesi Tengah', 'Kabupaten', 'Donggala', '94351'),
(120, 26, 'Riau', 'Kota', 'Dumai', '28800'),
(121, 33, 'Sumatera Selatan', 'Kabupaten', 'Empat Lawang', '31500'),
(122, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Ende', '86300'),
(123, 28, 'Sulawesi Selatan', 'Kabupaten', 'Enrekang', '91700'),
(124, 25, 'Papua Barat', 'Kabupaten', 'Fakfak', '98600'),
(125, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Flores Timur', '86200'),
(126, 9, 'Jawa Barat', 'Kabupaten', 'Garut', '44100'),
(127, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Gayo Lues', '24600'),
(128, 1, 'Bali', 'Kabupaten', 'Gianyar', '80500'),
(129, 7, 'Gorontalo', 'Kabupaten', 'Gorontalo', '96100'),
(130, 7, 'Gorontalo', 'Kota', 'Gorontalo', '96100'),
(131, 7, 'Gorontalo', 'Kabupaten', 'Gorontalo Utara', '96100'),
(132, 28, 'Sulawesi Selatan', 'Kabupaten', 'Gowa', '92100'),
(133, 11, 'Jawa Timur', 'Kabupaten', 'Gresik', '61100'),
(134, 10, 'Jawa Tengah', 'Kabupaten', 'Grobogan', '58152'),
(135, 5, 'DI Yogyakarta', 'Kabupaten', 'Gunung Kidul', '55800'),
(136, 14, 'Kalimantan Tengah', 'Kabupaten', 'Gunung Mas', '74500'),
(137, 34, 'Sumatera Utara', 'Kota', 'Gunungsitoli', '22800'),
(138, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Barat', '97700'),
(139, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Selatan', '97700'),
(140, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Tengah', '97800'),
(141, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Timur', '97800'),
(142, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Utara', '97700'),
(143, 13, 'Kalimantan Selatan', 'Kabupaten', 'Hulu Sungai Selatan', '71200'),
(144, 13, 'Kalimantan Selatan', 'Kabupaten', 'Hulu Sungai Tengah', '71300'),
(145, 13, 'Kalimantan Selatan', 'Kabupaten', 'Hulu Sungai Utara', '71400'),
(146, 34, 'Sumatera Utara', 'Kabupaten', 'Humbang Hasundutan', '22400'),
(147, 26, 'Riau', 'Kabupaten', 'Indragiri Hilir', '29200'),
(148, 26, 'Riau', 'Kabupaten', 'Indragiri Hulu', '29300'),
(149, 9, 'Jawa Barat', 'Kabupaten', 'Indramayu', '45200'),
(150, 24, 'Papua', 'Kabupaten', 'Intan Jaya', '98700'),
(151, 6, 'DKI Jakarta', 'Kota', 'Jakarta Barat', '11000'),
(152, 6, 'DKI Jakarta', 'Kota', 'Jakarta Pusat', '10000'),
(153, 6, 'DKI Jakarta', 'Kota', 'Jakarta Selatan', '12000'),
(154, 6, 'DKI Jakarta', 'Kota', 'Jakarta Timur', '13000'),
(155, 6, 'DKI Jakarta', 'Kota', 'Jakarta Utara', '14000'),
(156, 8, 'Jambi', 'Kota', 'Jambi', '36000'),
(157, 24, 'Papua', 'Kabupaten', 'Jayapura', '99000'),
(158, 24, 'Papua', 'Kota', 'Jayapura', '99000'),
(159, 24, 'Papua', 'Kabupaten', 'Jayawijaya', '99500'),
(160, 11, 'Jawa Timur', 'Kabupaten', 'Jember', '68100'),
(161, 1, 'Bali', 'Kabupaten', 'Jembrana', '82200'),
(162, 28, 'Sulawesi Selatan', 'Kabupaten', 'Jeneponto', '92300'),
(163, 10, 'Jawa Tengah', 'Kabupaten', 'Jepara', '59400'),
(164, 11, 'Jawa Timur', 'Kabupaten', 'Jombang', '61400'),
(165, 25, 'Papua Barat', 'Kabupaten', 'Kaimana', '98654'),
(166, 26, 'Riau', 'Kabupaten', 'Kampar', '28400'),
(167, 14, 'Kalimantan Tengah', 'Kabupaten', 'Kapuas', '73500'),
(168, 12, 'Kalimantan Barat', 'Kabupaten', 'Kapuas Hulu', '78700'),
(169, 10, 'Jawa Tengah', 'Kabupaten', 'Karanganyar', '57700'),
(170, 1, 'Bali', 'Kabupaten', 'Karangasem', '80800'),
(171, 9, 'Jawa Barat', 'Kabupaten', 'Karawang', '41300'),
(172, 17, 'Kepulauan Riau', 'Kabupaten', 'Karimun', '29600'),
(173, 34, 'Sumatera Utara', 'Kabupaten', 'Karo', '22100'),
(174, 14, 'Kalimantan Tengah', 'Kabupaten', 'Katingan', '74400'),
(175, 4, 'Bengkulu', 'Kabupaten', 'Kaur', '38000'),
(176, 12, 'Kalimantan Barat', 'Kabupaten', 'Kayong Utara', '78800'),
(177, 10, 'Jawa Tengah', 'Kabupaten', 'Kebumen', '54300'),
(178, 11, 'Jawa Timur', 'Kabupaten', 'Kediri', '64100'),
(179, 11, 'Jawa Timur', 'Kota', 'Kediri', '64100'),
(180, 24, 'Papua', 'Kabupaten', 'Keerom', '99000'),
(181, 10, 'Jawa Tengah', 'Kabupaten', 'Kendal', '51300'),
(182, 30, 'Sulawesi Tenggara', 'Kota', 'Kendari', '93000'),
(183, 4, 'Bengkulu', 'Kabupaten', 'Kepahiang', '39172'),
(184, 17, 'Kepulauan Riau', 'Kabupaten', 'Kepulauan Anambas', '29700'),
(185, 19, 'Maluku', 'Kabupaten', 'Kepulauan Aru', '97600'),
(186, 32, 'Sumatera Barat', 'Kabupaten', 'Kepulauan Mentawai', '25391'),
(187, 26, 'Riau', 'Kabupaten', 'Kepulauan Meranti', '28700'),
(188, 31, 'Sulawesi Utara', 'Kabupaten', 'Kepulauan Sangihe', '95800'),
(189, 6, 'DKI Jakarta', 'Kabupaten', 'Kepulauan Seribu', '14530'),
(190, 31, 'Sulawesi Utara', 'Kabupaten', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', '95800'),
(191, 20, 'Maluku Utara', 'Kabupaten', 'Kepulauan Sula', '97700'),
(192, 31, 'Sulawesi Utara', 'Kabupaten', 'Kepulauan Talaud', '95800'),
(193, 24, 'Papua', 'Kabupaten', 'Kepulauan Yapen (Yapen Waropen)', '98200'),
(194, 8, 'Jambi', 'Kabupaten', 'Kerinci', '37100'),
(195, 12, 'Kalimantan Barat', 'Kabupaten', 'Ketapang', '78800'),
(196, 10, 'Jawa Tengah', 'Kabupaten', 'Klaten', '57400'),
(197, 1, 'Bali', 'Kabupaten', 'Klungkung', '80700'),
(198, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Kolaka', '93500'),
(199, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Kolaka Utara', '93500'),
(200, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Konawe', '93400'),
(201, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Konawe Selatan', '93000'),
(202, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Konawe Utara', '93000'),
(203, 13, 'Kalimantan Selatan', 'Kabupaten', 'Kotabaru', '72100'),
(204, 31, 'Sulawesi Utara', 'Kota', 'Kotamobagu', '95700'),
(205, 14, 'Kalimantan Tengah', 'Kabupaten', 'Kotawaringin Barat', '74100'),
(206, 14, 'Kalimantan Tengah', 'Kabupaten', 'Kotawaringin Timur', '74300'),
(207, 26, 'Riau', 'Kabupaten', 'Kuantan Singingi', '29500'),
(208, 12, 'Kalimantan Barat', 'Kabupaten', 'Kubu Raya', '78000'),
(209, 10, 'Jawa Tengah', 'Kabupaten', 'Kudus', '59300'),
(210, 5, 'DI Yogyakarta', 'Kabupaten', 'Kulon Progo', '55600'),
(211, 9, 'Jawa Barat', 'Kabupaten', 'Kuningan', '45500'),
(212, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Kupang', '85000'),
(213, 23, 'Nusa Tenggara Timur (NTT)', 'Kota', 'Kupang', '85000'),
(214, 15, 'Kalimantan Timur', 'Kabupaten', 'Kutai Barat', '75000'),
(215, 15, 'Kalimantan Timur', 'Kabupaten', 'Kutai Kartanegara', '75500'),
(216, 15, 'Kalimantan Timur', 'Kabupaten', 'Kutai Timur', '75556'),
(217, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu', '21400'),
(218, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu Selatan', '21400'),
(219, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu Utara', '21400'),
(220, 33, 'Sumatera Selatan', 'Kabupaten', 'Lahat', '31400'),
(221, 14, 'Kalimantan Tengah', 'Kabupaten', 'Lamandau', '74100'),
(222, 11, 'Jawa Timur', 'Kabupaten', 'Lamongan', '62200'),
(223, 18, 'Lampung', 'Kabupaten', 'Lampung Barat', '35000'),
(224, 18, 'Lampung', 'Kabupaten', 'Lampung Selatan', '35000'),
(225, 18, 'Lampung', 'Kabupaten', 'Lampung Tengah', '34100'),
(226, 18, 'Lampung', 'Kabupaten', 'Lampung Timur', '34100'),
(227, 18, 'Lampung', 'Kabupaten', 'Lampung Utara', '34500'),
(228, 12, 'Kalimantan Barat', 'Kabupaten', 'Landak', '79357'),
(229, 34, 'Sumatera Utara', 'Kabupaten', 'Langkat', '20800'),
(230, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Langsa', '24400'),
(231, 24, 'Papua', 'Kabupaten', 'Lanny Jaya', '99500'),
(232, 3, 'Banten', 'Kabupaten', 'Lebak', '42300'),
(233, 4, 'Bengkulu', 'Kabupaten', 'Lebong', '39200'),
(234, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Lembata', '86600'),
(235, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Lhokseumawe', '24300'),
(236, 32, 'Sumatera Barat', 'Kabupaten', 'Lima Puluh Koto/Kota', '26200'),
(237, 17, 'Kepulauan Riau', 'Kabupaten', 'Lingga', '29800'),
(238, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Barat', '83363'),
(239, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Tengah', '83500'),
(240, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Timur', '83600'),
(241, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Utara', '83300'),
(242, 33, 'Sumatera Selatan', 'Kota', 'Lubuk Linggau', '31600'),
(243, 11, 'Jawa Timur', 'Kabupaten', 'Lumajang', '67300'),
(244, 28, 'Sulawesi Selatan', 'Kabupaten', 'Luwu', '91900'),
(245, 28, 'Sulawesi Selatan', 'Kabupaten', 'Luwu Timur', '91900'),
(246, 28, 'Sulawesi Selatan', 'Kabupaten', 'Luwu Utara', '91900'),
(247, 11, 'Jawa Timur', 'Kabupaten', 'Madiun', '63100'),
(248, 11, 'Jawa Timur', 'Kota', 'Madiun', '63100'),
(249, 10, 'Jawa Tengah', 'Kabupaten', 'Magelang', '56100'),
(250, 10, 'Jawa Tengah', 'Kota', 'Magelang', '56100'),
(251, 11, 'Jawa Timur', 'Kabupaten', 'Magetan', '63300'),
(252, 9, 'Jawa Barat', 'Kabupaten', 'Majalengka', '45400'),
(253, 27, 'Sulawesi Barat', 'Kabupaten', 'Majene', '91400'),
(254, 28, 'Sulawesi Selatan', 'Kota', 'Makassar', '90000'),
(255, 11, 'Jawa Timur', 'Kabupaten', 'Malang', '65100'),
(256, 11, 'Jawa Timur', 'Kota', 'Malang', '65100'),
(257, 16, 'Kalimantan Utara', 'Kabupaten', 'Malinau', '77154'),
(258, 19, 'Maluku', 'Kabupaten', 'Maluku Barat Daya', '97000'),
(259, 19, 'Maluku', 'Kabupaten', 'Maluku Tengah', '97500'),
(260, 19, 'Maluku', 'Kabupaten', 'Maluku Tenggara', '97600'),
(261, 19, 'Maluku', 'Kabupaten', 'Maluku Tenggara Barat', '97600'),
(262, 27, 'Sulawesi Barat', 'Kabupaten', 'Mamasa', '91363'),
(263, 24, 'Papua', 'Kabupaten', 'Mamberamo Raya', '99500'),
(264, 24, 'Papua', 'Kabupaten', 'Mamberamo Tengah', '99500'),
(265, 27, 'Sulawesi Barat', 'Kabupaten', 'Mamuju', '91500'),
(266, 27, 'Sulawesi Barat', 'Kabupaten', 'Mamuju Utara', '91500'),
(267, 31, 'Sulawesi Utara', 'Kota', 'Manado', '95000'),
(268, 34, 'Sumatera Utara', 'Kabupaten', 'Mandailing Natal', '22919'),
(269, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Manggarai', '86500'),
(270, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Manggarai Barat', '86753'),
(271, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Manggarai Timur', '86500'),
(272, 25, 'Papua Barat', 'Kabupaten', 'Manokwari', '98300'),
(273, 25, 'Papua Barat', 'Kabupaten', 'Manokwari Selatan', '98300'),
(274, 24, 'Papua', 'Kabupaten', 'Mappi', '99000'),
(275, 28, 'Sulawesi Selatan', 'Kabupaten', 'Maros', '90500'),
(276, 22, 'Nusa Tenggara Barat (NTB)', 'Kota', 'Mataram', '83000'),
(277, 25, 'Papua Barat', 'Kabupaten', 'Maybrat', '99000'),
(278, 34, 'Sumatera Utara', 'Kota', 'Medan', '20000'),
(279, 12, 'Kalimantan Barat', 'Kabupaten', 'Melawi', '78672'),
(280, 8, 'Jambi', 'Kabupaten', 'Merangin', '37300'),
(281, 24, 'Papua', 'Kabupaten', 'Merauke', '99600'),
(282, 18, 'Lampung', 'Kabupaten', 'Mesuji', '34500'),
(283, 18, 'Lampung', 'Kota', 'Metro', '34100'),
(284, 24, 'Papua', 'Kabupaten', 'Mimika', '99900'),
(285, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa', '95600'),
(286, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa Selatan', '95000'),
(287, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa Tenggara', '95000'),
(288, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa Utara', '95000'),
(289, 11, 'Jawa Timur', 'Kabupaten', 'Mojokerto', '61300'),
(290, 11, 'Jawa Timur', 'Kota', 'Mojokerto', '61300'),
(291, 29, 'Sulawesi Tengah', 'Kabupaten', 'Morowali', '94000'),
(292, 33, 'Sumatera Selatan', 'Kabupaten', 'Muara Enim', '31300'),
(293, 8, 'Jambi', 'Kabupaten', 'Muaro Jambi', '36365'),
(294, 4, 'Bengkulu', 'Kabupaten', 'Muko Muko', '38365'),
(295, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Muna', '93600'),
(296, 14, 'Kalimantan Tengah', 'Kabupaten', 'Murung Raya', '73900'),
(297, 33, 'Sumatera Selatan', 'Kabupaten', 'Musi Banyuasin', '30700'),
(298, 33, 'Sumatera Selatan', 'Kabupaten', 'Musi Rawas', '31600'),
(299, 24, 'Papua', 'Kabupaten', 'Nabire', '98800'),
(300, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Nagan Raya', '23600'),
(301, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Nagekeo', '86400'),
(302, 17, 'Kepulauan Riau', 'Kabupaten', 'Natuna', '29700'),
(303, 24, 'Papua', 'Kabupaten', 'Nduga', '99500'),
(304, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Ngada', '86400'),
(305, 11, 'Jawa Timur', 'Kabupaten', 'Nganjuk', '64400'),
(306, 11, 'Jawa Timur', 'Kabupaten', 'Ngawi', '63200'),
(307, 34, 'Sumatera Utara', 'Kabupaten', 'Nias', '22800'),
(308, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Barat', '22800'),
(309, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Selatan', '22800'),
(310, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Utara', '22800'),
(311, 16, 'Kalimantan Utara', 'Kabupaten', 'Nunukan', '77182'),
(312, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Ilir', '30600'),
(313, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ilir', '30600'),
(314, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ulu', '32100'),
(315, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ulu Selatan', '32100'),
(316, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ulu Timur', '32100'),
(317, 11, 'Jawa Timur', 'Kabupaten', 'Pacitan', '63500'),
(318, 32, 'Sumatera Barat', 'Kota', 'Padang', '25000'),
(319, 34, 'Sumatera Utara', 'Kabupaten', 'Padang Lawas', '22700'),
(320, 34, 'Sumatera Utara', 'Kabupaten', 'Padang Lawas Utara', '22700'),
(321, 32, 'Sumatera Barat', 'Kota', 'Padang Panjang', '27100'),
(322, 32, 'Sumatera Barat', 'Kabupaten', 'Padang Pariaman', '25500'),
(323, 34, 'Sumatera Utara', 'Kota', 'Padang Sidempuan', '22700'),
(324, 33, 'Sumatera Selatan', 'Kota', 'Pagar Alam', '31500'),
(325, 34, 'Sumatera Utara', 'Kabupaten', 'Pakpak Bharat', '22200'),
(326, 14, 'Kalimantan Tengah', 'Kota', 'Palangka Raya', '73000'),
(327, 33, 'Sumatera Selatan', 'Kota', 'Palembang', '30000'),
(328, 28, 'Sulawesi Selatan', 'Kota', 'Palopo', '91900'),
(329, 29, 'Sulawesi Tengah', 'Kota', 'Palu', '94000'),
(330, 11, 'Jawa Timur', 'Kabupaten', 'Pamekasan', '69300'),
(331, 3, 'Banten', 'Kabupaten', 'Pandeglang', '42200'),
(332, 9, 'Jawa Barat', 'Kabupaten', 'Pangandaran', '46396'),
(333, 28, 'Sulawesi Selatan', 'Kabupaten', 'Pangkajene Kepulauan', '90600'),
(334, 2, 'Bangka Belitung', 'Kota', 'Pangkal Pinang', '33100'),
(335, 24, 'Papua', 'Kabupaten', 'Paniai', '98700'),
(336, 28, 'Sulawesi Selatan', 'Kota', 'Parepare', '91100'),
(337, 32, 'Sumatera Barat', 'Kota', 'Pariaman', '25500'),
(338, 29, 'Sulawesi Tengah', 'Kabupaten', 'Parigi Moutong', '94371'),
(339, 32, 'Sumatera Barat', 'Kabupaten', 'Pasaman', '26300'),
(340, 32, 'Sumatera Barat', 'Kabupaten', 'Pasaman Barat', '26300'),
(341, 15, 'Kalimantan Timur', 'Kabupaten', 'Paser', '76200'),
(342, 11, 'Jawa Timur', 'Kabupaten', 'Pasuruan', '67100'),
(343, 11, 'Jawa Timur', 'Kota', 'Pasuruan', '67100'),
(344, 10, 'Jawa Tengah', 'Kabupaten', 'Pati', '59100'),
(345, 32, 'Sumatera Barat', 'Kota', 'Payakumbuh', '26200'),
(346, 25, 'Papua Barat', 'Kabupaten', 'Pegunungan Arfak', '98300'),
(347, 24, 'Papua', 'Kabupaten', 'Pegunungan Bintang', '99500'),
(348, 10, 'Jawa Tengah', 'Kabupaten', 'Pekalongan', '51100'),
(349, 10, 'Jawa Tengah', 'Kota', 'Pekalongan', '51100'),
(350, 26, 'Riau', 'Kota', 'Pekanbaru', '28000'),
(351, 26, 'Riau', 'Kabupaten', 'Pelalawan', '28300'),
(352, 10, 'Jawa Tengah', 'Kabupaten', 'Pemalang', '52300'),
(353, 34, 'Sumatera Utara', 'Kota', 'Pematang Siantar', '21100'),
(354, 15, 'Kalimantan Timur', 'Kabupaten', 'Penajam Paser Utara', '76141'),
(355, 18, 'Lampung', 'Kabupaten', 'Pesawaran', '35000'),
(356, 18, 'Lampung', 'Kabupaten', 'Pesisir Barat', '34574'),
(357, 32, 'Sumatera Barat', 'Kabupaten', 'Pesisir Selatan', '25600'),
(358, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Pidie', '24100'),
(359, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Pidie Jaya', '24100'),
(360, 28, 'Sulawesi Selatan', 'Kabupaten', 'Pinrang', '91200'),
(361, 7, 'Gorontalo', 'Kabupaten', 'Pohuwato', '96200'),
(362, 27, 'Sulawesi Barat', 'Kabupaten', 'Polewali Mandar', '91300'),
(363, 11, 'Jawa Timur', 'Kabupaten', 'Ponorogo', '63400'),
(364, 12, 'Kalimantan Barat', 'Kabupaten', 'Pontianak', '78000'),
(365, 12, 'Kalimantan Barat', 'Kota', 'Pontianak', '78000'),
(366, 29, 'Sulawesi Tengah', 'Kabupaten', 'Poso', '94600'),
(367, 33, 'Sumatera Selatan', 'Kota', 'Prabumulih', '31100'),
(368, 18, 'Lampung', 'Kabupaten', 'Pringsewu', '35373'),
(369, 11, 'Jawa Timur', 'Kabupaten', 'Probolinggo', '67200'),
(370, 11, 'Jawa Timur', 'Kota', 'Probolinggo', '67200'),
(371, 14, 'Kalimantan Tengah', 'Kabupaten', 'Pulang Pisau', '73561'),
(372, 20, 'Maluku Utara', 'Kabupaten', 'Pulau Morotai', '97771'),
(373, 24, 'Papua', 'Kabupaten', 'Puncak', '98900'),
(374, 24, 'Papua', 'Kabupaten', 'Puncak Jaya', '98900'),
(375, 10, 'Jawa Tengah', 'Kabupaten', 'Purbalingga', '53300'),
(376, 9, 'Jawa Barat', 'Kabupaten', 'Purwakarta', '41100'),
(377, 10, 'Jawa Tengah', 'Kabupaten', 'Purworejo', '54100'),
(378, 25, 'Papua Barat', 'Kabupaten', 'Raja Ampat', '98400'),
(379, 4, 'Bengkulu', 'Kabupaten', 'Rejang Lebong', '39100'),
(380, 10, 'Jawa Tengah', 'Kabupaten', 'Rembang', '59200'),
(381, 26, 'Riau', 'Kabupaten', 'Rokan Hilir', '28991'),
(382, 26, 'Riau', 'Kabupaten', 'Rokan Hulu', '28455'),
(383, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Rote Ndao', '85974'),
(384, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Sabang', '23500'),
(385, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sabu Raijua', '85391'),
(386, 10, 'Jawa Tengah', 'Kota', 'Salatiga', '50700'),
(387, 15, 'Kalimantan Timur', 'Kota', 'Samarinda', '75000'),
(388, 12, 'Kalimantan Barat', 'Kabupaten', 'Sambas', '79400'),
(389, 34, 'Sumatera Utara', 'Kabupaten', 'Samosir', '22300'),
(390, 11, 'Jawa Timur', 'Kabupaten', 'Sampang', '69200'),
(391, 12, 'Kalimantan Barat', 'Kabupaten', 'Sanggau', '78500'),
(392, 24, 'Papua', 'Kabupaten', 'Sarmi', '99373'),
(393, 8, 'Jambi', 'Kabupaten', 'Sarolangun', '37300'),
(394, 32, 'Sumatera Barat', 'Kota', 'Sawah Lunto', '27400'),
(395, 12, 'Kalimantan Barat', 'Kabupaten', 'Sekadau', '78582'),
(396, 28, 'Sulawesi Selatan', 'Kabupaten', 'Selayar (Kepulauan Selayar)', '92800'),
(397, 4, 'Bengkulu', 'Kabupaten', 'Seluma', '38000'),
(398, 10, 'Jawa Tengah', 'Kabupaten', 'Semarang', '50000'),
(399, 10, 'Jawa Tengah', 'Kota', 'Semarang', '50000'),
(400, 19, 'Maluku', 'Kabupaten', 'Seram Bagian Barat', '97500'),
(401, 19, 'Maluku', 'Kabupaten', 'Seram Bagian Timur', '97500'),
(402, 3, 'Banten', 'Kabupaten', 'Serang', '42100'),
(403, 3, 'Banten', 'Kota', 'Serang', '42100'),
(404, 34, 'Sumatera Utara', 'Kabupaten', 'Serdang Bedagai', '20000'),
(405, 14, 'Kalimantan Tengah', 'Kabupaten', 'Seruyan', '74200'),
(406, 26, 'Riau', 'Kabupaten', 'Siak', '28686'),
(407, 34, 'Sumatera Utara', 'Kota', 'Sibolga', '22500'),
(408, 28, 'Sulawesi Selatan', 'Kabupaten', 'Sidenreng Rappang/Rapang', '91600'),
(409, 11, 'Jawa Timur', 'Kabupaten', 'Sidoarjo', '61200'),
(410, 29, 'Sulawesi Tengah', 'Kabupaten', 'Sigi', '94000'),
(411, 32, 'Sumatera Barat', 'Kabupaten', 'Sijunjung (Sawah Lunto Sijunjung)', '27500'),
(412, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sikka', '86100'),
(413, 34, 'Sumatera Utara', 'Kabupaten', 'Simalungun', '21100'),
(414, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Simeulue', '23000'),
(415, 12, 'Kalimantan Barat', 'Kota', 'Singkawang', '79100'),
(416, 28, 'Sulawesi Selatan', 'Kabupaten', 'Sinjai', '92600'),
(417, 12, 'Kalimantan Barat', 'Kabupaten', 'Sintang', '78600'),
(418, 11, 'Jawa Timur', 'Kabupaten', 'Situbondo', '68300'),
(419, 5, 'DI Yogyakarta', 'Kabupaten', 'Sleman', '55500'),
(420, 32, 'Sumatera Barat', 'Kabupaten', 'Solok', '27300'),
(421, 32, 'Sumatera Barat', 'Kota', 'Solok', '27300'),
(422, 32, 'Sumatera Barat', 'Kabupaten', 'Solok Selatan', '27300'),
(423, 28, 'Sulawesi Selatan', 'Kabupaten', 'Soppeng', '90800'),
(424, 25, 'Papua Barat', 'Kabupaten', 'Sorong', '98400'),
(425, 25, 'Papua Barat', 'Kota', 'Sorong', '98400'),
(426, 25, 'Papua Barat', 'Kabupaten', 'Sorong Selatan', '98400'),
(427, 10, 'Jawa Tengah', 'Kabupaten', 'Sragen', '57200'),
(428, 9, 'Jawa Barat', 'Kabupaten', 'Subang', '41200'),
(429, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Subulussalam', '23782'),
(430, 9, 'Jawa Barat', 'Kabupaten', 'Sukabumi', '43100'),
(431, 9, 'Jawa Barat', 'Kota', 'Sukabumi', '43100'),
(432, 14, 'Kalimantan Tengah', 'Kabupaten', 'Sukamara', '74172'),
(433, 10, 'Jawa Tengah', 'Kabupaten', 'Sukoharjo', '57500'),
(434, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Barat', '87200'),
(435, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Barat Daya', '87200'),
(436, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Tengah', '87200'),
(437, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Timur', '87100'),
(438, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Sumbawa', '84300'),
(439, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Sumbawa Barat', '84300'),
(440, 9, 'Jawa Barat', 'Kabupaten', 'Sumedang', '45300'),
(441, 11, 'Jawa Timur', 'Kabupaten', 'Sumenep', '69400'),
(442, 8, 'Jambi', 'Kota', 'Sungaipenuh', '37100'),
(443, 24, 'Papua', 'Kabupaten', 'Supiori', '98100'),
(444, 11, 'Jawa Timur', 'Kota', 'Surabaya', '60000'),
(445, 10, 'Jawa Tengah', 'Kota', 'Surakarta (Solo)', '57100'),
(446, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tabalong', '71500'),
(447, 1, 'Bali', 'Kabupaten', 'Tabanan', '82100'),
(448, 28, 'Sulawesi Selatan', 'Kabupaten', 'Takalar', '92200'),
(449, 25, 'Papua Barat', 'Kabupaten', 'Tambrauw', '98400'),
(450, 16, 'Kalimantan Utara', 'Kabupaten', 'Tana Tidung', '77152'),
(451, 28, 'Sulawesi Selatan', 'Kabupaten', 'Tana Toraja', '91800'),
(452, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tanah Bumbu', '70000'),
(453, 32, 'Sumatera Barat', 'Kabupaten', 'Tanah Datar', '27200'),
(454, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tanah Laut', '70800'),
(455, 3, 'Banten', 'Kabupaten', 'Tangerang', '15000'),
(456, 3, 'Banten', 'Kota', 'Tangerang', '15000'),
(457, 3, 'Banten', 'Kota', 'Tangerang Selatan', '15000'),
(458, 18, 'Lampung', 'Kabupaten', 'Tanggamus', '35000'),
(459, 34, 'Sumatera Utara', 'Kota', 'Tanjung Balai', '21300'),
(460, 8, 'Jambi', 'Kabupaten', 'Tanjung Jabung Barat', '36500'),
(461, 8, 'Jambi', 'Kabupaten', 'Tanjung Jabung Timur', '36500'),
(462, 17, 'Kepulauan Riau', 'Kota', 'Tanjung Pinang', '29100'),
(463, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Selatan', '22700'),
(464, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Tengah', '22500'),
(465, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Utara', '22400'),
(466, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tapin', '71100'),
(467, 16, 'Kalimantan Utara', 'Kota', 'Tarakan', '77100'),
(468, 9, 'Jawa Barat', 'Kabupaten', 'Tasikmalaya', '46100'),
(469, 9, 'Jawa Barat', 'Kota', 'Tasikmalaya', '46100'),
(470, 34, 'Sumatera Utara', 'Kota', 'Tebing Tinggi', '20600'),
(471, 8, 'Jambi', 'Kabupaten', 'Tebo', '37200'),
(472, 10, 'Jawa Tengah', 'Kabupaten', 'Tegal', '52100'),
(473, 10, 'Jawa Tengah', 'Kota', 'Tegal', '52100'),
(474, 25, 'Papua Barat', 'Kabupaten', 'Teluk Bintuni', '98300'),
(475, 25, 'Papua Barat', 'Kabupaten', 'Teluk Wondama', '98300'),
(476, 10, 'Jawa Tengah', 'Kabupaten', 'Temanggung', '56200'),
(477, 20, 'Maluku Utara', 'Kota', 'Ternate', '97700'),
(478, 20, 'Maluku Utara', 'Kota', 'Tidore Kepulauan', '97800'),
(479, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Timor Tengah Selatan', '85500'),
(480, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Timor Tengah Utara', '85600'),
(481, 34, 'Sumatera Utara', 'Kabupaten', 'Toba Samosir', '22300'),
(482, 29, 'Sulawesi Tengah', 'Kabupaten', 'Tojo Una-Una', '94600'),
(483, 29, 'Sulawesi Tengah', 'Kabupaten', 'Toli-Toli', '94500'),
(484, 24, 'Papua', 'Kabupaten', 'Tolikara', '99562'),
(485, 31, 'Sulawesi Utara', 'Kota', 'Tomohon', '95362'),
(486, 28, 'Sulawesi Selatan', 'Kabupaten', 'Toraja Utara', '91890'),
(487, 11, 'Jawa Timur', 'Kabupaten', 'Trenggalek', '66300'),
(488, 19, 'Maluku', 'Kota', 'Tual', '97600'),
(489, 11, 'Jawa Timur', 'Kabupaten', 'Tuban', '62300'),
(490, 18, 'Lampung', 'Kabupaten', 'Tulang Bawang', '34500'),
(491, 18, 'Lampung', 'Kabupaten', 'Tulang Bawang Barat', '34500'),
(492, 11, 'Jawa Timur', 'Kabupaten', 'Tulungagung', '66200'),
(493, 28, 'Sulawesi Selatan', 'Kabupaten', 'Wajo', '90900'),
(494, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Wakatobi', '93700'),
(495, 24, 'Papua', 'Kabupaten', 'Waropen', '98200'),
(496, 18, 'Lampung', 'Kabupaten', 'Way Kanan', '35000'),
(497, 10, 'Jawa Tengah', 'Kabupaten', 'Wonogiri', '57600'),
(498, 10, 'Jawa Tengah', 'Kabupaten', 'Wonosobo', '56300'),
(499, 24, 'Papua', 'Kabupaten', 'Yahukimo', '99500'),
(500, 24, 'Papua', 'Kabupaten', 'Yalimo', '99500'),
(501, 5, 'DI Yogyakarta', 'Kota', 'Yogyakarta', '55000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gal_gallery`
--

CREATE TABLE `gal_gallery` (
  `id` int(11) NOT NULL,
  `topik_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `date_input` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `insert_by` varchar(255) NOT NULL,
  `last_update_by` varchar(255) NOT NULL,
  `writer` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `orientation` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `image2` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gal_gallery_description`
--

CREATE TABLE `gal_gallery_description` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `sub_title_2` text NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gal_gallery_image`
--

CREATE TABLE `gal_gallery_image` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id`, `name`, `code`, `sort`, `status`) VALUES
(2, 'English', 'en', 1, '1'),
(3, 'Indonesia', 'id', 2, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `username`, `activity`, `time`) VALUES
(1, 'Ibnudrift@gmail.com', 'Login: Ibnudrift@gmail.com', '2020-03-23 03:49:48'),
(2, 'Ibnudrift@gmail.com', 'Login: Ibnudrift@gmail.com', '2020-03-23 03:52:36'),
(3, 'Ibnudrift@gmail.com', 'User Delete aditya_p@gmail.com 38', '2020-03-23 03:54:08'),
(4, 'Ibnudrift@gmail.com', 'GroupController Create 40', '2020-03-23 03:55:33'),
(5, 'Ibnudrift@gmail.com', 'User Delete Rizalchamanin@gmail.com 39', '2020-03-23 03:58:55'),
(6, 'Ibnudrift@gmail.com', 'GroupController Create 41', '2020-03-23 03:59:14'),
(7, 'Ibnudrift@gmail.com', 'User Delete Adituntukhp@gmail.com 40', '2020-03-23 04:00:32'),
(8, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-23 04:52:05'),
(9, 'Ibnudrift@gmail.com', 'Login: Ibnudrift@gmail.com', '2020-03-23 05:32:34'),
(10, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-24 11:52:04'),
(11, 'ibnudrift@gmail.com', 'CustomerController Create 1', '2020-03-24 11:53:10'),
(12, 'ibnudrift@gmail.com', 'CustomerController Create 2', '2020-03-24 11:53:54'),
(13, 'ibnudrift@gmail.com', 'SubjectKepentinganController Create 1', '2020-03-24 11:55:36'),
(14, 'Guest', 'TugasItemController Create 1', '2020-03-24 12:08:52'),
(15, 'Guest', 'TugasItemController Create 2', '2020-03-24 12:15:32'),
(16, 'Guest', 'Komentar Add Update 2', '2020-03-24 12:16:14'),
(17, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-24 12:21:24'),
(18, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-25 03:56:18'),
(19, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-25 03:56:25'),
(20, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-25 03:58:25'),
(21, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-28 06:49:22'),
(22, 'ibnudrift@gmail.com', 'GroupController Create 42', '2020-03-28 06:50:54'),
(23, 'adityas87@yahoo.com', 'Login: adityas87@yahoo.com', '2020-03-28 06:51:20'),
(24, 'adityas87@yahoo.com', 'User Update 42 adityas87@yahoo.com', '2020-03-28 06:51:56'),
(25, 'adityas87@yahoo.com', 'Login: adityas87@yahoo.com', '2020-03-28 06:52:21'),
(26, 'adityas87@yahoo.com', 'CustomerController Create 3', '2020-03-28 06:56:31'),
(27, 'Ibnudrift@gmail.com', 'Login: Ibnudrift@gmail.com', '2020-03-28 07:02:28'),
(28, 'adityas87@yahoo.com', 'CustomerController Update 3', '2020-03-28 07:21:09'),
(29, 'ibnudrift@gmail.com', 'Login: ibnudrift@gmail.com', '2020-03-28 07:27:28'),
(30, 'ibnudrift@gmail.com', 'CustomerController Update 2', '2020-03-28 07:28:18'),
(31, 'ibnudrift@gmail.com', 'CustomerController Update 2', '2020-03-28 07:32:12'),
(32, 'ibnudrift@gmail.com', 'CustomerController Update 2', '2020-03-28 07:32:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `me_member`
--

CREATE TABLE `me_member` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `session_token` text,
  `login_terakhir` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aktivasi` int(11) NOT NULL,
  `aktif` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` int(20) DEFAULT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `alamat_perusahaan` text,
  `jabatan` varchar(225) DEFAULT NULL,
  `telp_saudara` varchar(225) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `foto_diri` varchar(225) DEFAULT NULL,
  `foto_ktp` varchar(225) DEFAULT NULL,
  `nick_name` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `me_member`
--

INSERT INTO `me_member` (`id`, `email`, `first_name`, `last_name`, `username`, `pass`, `session_token`, `login_terakhir`, `aktivasi`, `aktif`, `image`, `hp`, `address`, `city`, `province`, `postcode`, `jenis_kelamin`, `tanggal_lahir`, `no_ktp`, `nama_perusahaan`, `alamat_perusahaan`, `jabatan`, `telp_saudara`, `tgl_masuk`, `foto_diri`, `foto_ktp`, `nick_name`) VALUES
(1, 'fotocopysurabaya12@gmail.com', 'mukhlis', 'sin', 'mlsn', '7c4a8d09ca3762af61e59520943dc26494f8941b', '75650ad86a16249e49e5911be5e6a2f231be8d57', '2020-03-24 11:53:10', 0, 1, '', '081458465768', 'jl. perum gca rm', 'Surabaya', 'Jawa Timur', '60218', '1', '1978-12-22', 2147483647, 'na', 'asdfasdfdsfadf', 'direktur', '6235634634', '2020-03-24', '', '', 'mlsn'),
(2, 'ibnudrift@gmail.com', 'Ibnu', 'Fajar', 'ibnudrift', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'f62030e618d8105cf067cb2b85438a6dc660cfdd', '2020-03-24 11:53:54', 0, 1, '', '083854560095', 'jl. sawo 1a / 2 kel. bringin, kec. sambikerep, 60218', 'Surabaya', 'Jawa Timur', '60218', '1', '1978-12-12', 2147483647, 'na', 'asdfasdfsdf', 'pelaksana', '6235634634', '2020-03-24', 'thumb_9dc3f-150x150.png', '', 'ibnudrift'),
(3, '', 'Aditya Surya', '', 'Aditya Surya', 'ee081cc416b2b5ef822044bdfb8406233bd19872', '25dafbf8d4a7597c4509b1f0ff11030f67eed4d6', '2020-03-28 06:56:31', 0, 1, '', '', '', '', '', '', '1', '0000-00-00', NULL, '', '', '', '', '2020-03-28', 'thumb_thumb_1e760-Aditya.jpg', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pg_blog`
--

CREATE TABLE `pg_blog` (
  `id` int(11) NOT NULL,
  `topik_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `date_input` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `insert_by` varchar(255) NOT NULL,
  `last_update_by` varchar(255) NOT NULL,
  `writer` int(25) NOT NULL,
  `data` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pg_blog`
--

INSERT INTO `pg_blog` (`id`, `topik_id`, `image`, `active`, `date_input`, `date_update`, `insert_by`, `last_update_by`, `writer`, `data`) VALUES
(1, 0, 'ff177-news_2_09.jpg', 1, '2019-02-25 13:23:19', '2019-05-24 14:34:23', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(2, 0, '28b2c-FCS_res_4.jpg', 1, '2013-05-01 09:24:59', '2019-05-27 12:08:45', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(3, 0, '98b61-FCS_res_3.jpg', 1, '2007-05-26 13:25:24', '2019-05-27 13:21:47', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(4, 0, '59a73-thumb_e357ded620-ops99252_adaptiveResize_1920_804.jpg', 1, '2012-06-10 00:34:00', '2019-05-24 14:50:59', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(5, 0, 'a7175-FCS_res_1.jpg', 1, '2017-08-14 09:30:58', '2019-05-27 09:35:31', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(6, 0, 'e205c-5baac-process_2_06.jpg', 1, '2017-07-27 13:21:50', '2019-05-27 14:08:50', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(7, 0, '1f852-thumb_626b6161aeprddddddddd_adaptiveResize_1920_804.jpg', 1, '2018-07-13 14:08:55', '2019-05-27 14:45:23', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;'),
(8, 0, '1038e-thumb_d28be5fb27process-2-02_adaptiveResize_1920_804.jpg', 1, '2018-12-17 16:24:19', '2019-06-13 16:49:41', 'info@markdesign.net', 'info@markdesign.net', 0, 'N;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pg_blog_description`
--

CREATE TABLE `pg_blog_description` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `quote` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pg_blog_description`
--

INSERT INTO `pg_blog_description` (`id`, `blog_id`, `language_id`, `title`, `content`, `quote`) VALUES
(35, 3, 2, 'PT Trias Sentosa Acquisition of Companies in China, and is in the Process of Due Diligence', '<p>\r\n	   PT Trias Sentosa is one of the BOPP BOPET film plastic packaging companies that has created the best value for all the most reliable customers both nationally and internationally. And to meet the increasing plastic packaging needs of BOPP BOPET films every year, PT Trias Sentosa Tbk will acquire BOPP companies in China through its subsidiary in Singapore. The investment value for this acquisition is estimated at US $ 5.5 million. The production capacity of the acquired company is 15,000 per ton with a 2006 sales value of US $ 23.5 million.\r\n</p>\r\n<p>\r\n	  Source: <a href=\"https://finance.detik.com/bursa-dan-valas/d-785444/trias-sentosa-akuisisi-perusahaan-di-cina\">https://finance.detik.com/bursa-dan-valas/d-785444/trias-sentosa-akuisisi-perusahaan-di-cina</a>\r\n</p>', ''),
(16, 1, 3, 'Akhir 2019 Pabrik Poliester PT Trias Sentosa Tbk. Akan Mulai Produksi', '<p>\r\n	 Pabrik Poliester yang akan menjadi salah satu pabrik dari PT Trias Sentosa akan mulai produksi akhir tahun 2019 ini. Presiden Direktur PT Trias Sentosa Tbk. Sugeng Kurniawan mengatakan, saat ini pembangunan atau konstruksi pabrik PT Trias Toyobo Astria (TTA) dan PT Toyobo Trias Ecosyar (TTE) sedang berlangsung. Sebagian mesin juga telah tiba, meski belum seluruhnya karena masih dalam proses di vendor.\r\n</p>\r\n<p>\r\n	 Sugeng Kurniawan yakin pemasangan dan persiapan operasi (commissioning) mesin ini direncanakan selesai pada kuartal III/2019. Selanjutnya, kedua perusahaan akan mulai beroperasi pada kuartal IV/2019.\r\n</p>\r\n<p>\r\n	 PT TTA yang dibentuk PT Trias Sentosa ini untuk memproduksi dan mendistribusikan produk lembar film poliester untuk domestik dan ekspor. Adapun, PT TTE dibentuk untuk memproduksi dan mendistribusikan produk turunan lembar film poliester terutama untuk pasar ekspor dan dimungkinkan untuk pasar domestik.\r\n</p>\r\n<p>\r\n	 Selain fokus menyelesaikan pembangunan pabrik, pada tahun ini perseroan mengalokasikan Rp58 miliar yang berasal dari dana internal untuk pembelian mesin converting. Adapun, pada tahun sebelumnya, kami juga mengalokasikan belanja modal sebesar Rp150 miliar untuk pembelian 3 mesin metalizing.\r\n</p>\r\n<p>\r\n	 Sumber: <a href=\"https://market.bisnis.com/read/20190225/192/893167/pabrik-poliester-trias-sentosa-tbk.-trst-mulai-produksi-akhir-2019\">https://market.bisnis.com/read/20190225/192/893167/pabrik-poliester-trias-sentosa-tbk.-trst-mulai-produksi-akhir-2019</a>\r\n</p>', ''),
(15, 1, 2, 'End of 2019, PT Trias Sentosa Tbk. Polyester Factory Will Start Production', '<p>\r\n	 The Polyester factory which will become one of the factories of PT Trias Sentosa will begin production by the end of 2019. President Director PT Trias Sentosa Tbk. Sugeng Kurniawan said, currently the construction or construction of PT Trias Toyobo Astria (TTA) and PT Toyobo Trias Ecosyar (TTE) factories is ongoing. Some machines have also arrived, though not all because they are still in process at the vendor.\r\n</p>\r\n<p>\r\n	 Sugeng Kurniawan believes that the installation and commissioning of the machine is planned to be completed in the third / 2019 quarter. Furthermore, the two companies will start operations in the fourth quarter of 2019.\r\n</p>\r\n<p>\r\n	 PT TTA was formed by PT Trias Sentosa to produce and distribute polyester film sheet products for domestic and export. Meanwhile, PT TTE was formed to produce and distribute polyester film derivative products mainly for the export market and is possible for the domestic market.\r\n</p>\r\n<p>\r\n	 In addition to focusing on completing the construction of the factory, this year the company allocated Rp58 billion from internal funds to purchase converting machines. Meanwhile, in the previous year, we also allocated a capital expenditure of Rp150 billion to purchase 3 metalizing machines.\r\n</p>\r\n<p>\r\n	 Source: <a href=\"https://market.bisnis.com/read/20190225/192/893167/pabrik-poliester-trias-sentosa-tbk.-trst-mulai-produksi-akhir-2019\">https://market.bisnis.com/read/20190225/192/893167/pabrik-poliester-trias-sentosa-tbk.-trst-mulai-produksi-akhir-2019</a>\r\n</p>', ''),
(17, 4, 2, 'Brief History of PT Trias Sentosa, Tbk.', '<p>\r\n	 We are one of the largest major producers of flexible packaging film manufacturers that produce BOPP &amp; PET Film Products. PT Trias Sentosa Tbk. has a worldwide sales and distribution network, from Indonesia to Asian and Middle Eastern countries.\r\n</p>\r\n<p>\r\n	 For decades since it was first established on November 23, 1979 and has started its commercial operations in 1986. PT Trias Sentosa Tbk has upheld the tradition of Innovation and Excellence that builds the company\'s reputation in the flexible packaging film industry. The company establishes the development of innovation, creativity and increased sustainable productivity as the basis for sustainable business growth.\r\n</p>\r\n<p>\r\n	 We have several shareholders of 5% or more of Trias Sentosa Tbk shares. Among others, such as PT K and L Capital (25.52%), PT Adilaksa Manunggal (17.91%), PT Rejo Sari Bumi (13.27%) and Lindrawati Widjojo (5.76%). PT K and L Capital, PT Adilaksa Manunggal and PT Rejo Sari Bumi are the controlling shareholders.\r\n</p>\r\n<p>\r\n	 On May 22, 1990, we obtained an effective statement from Bapepam-LK to conduct a Initial Public Offering of TRST Shares of 3,000,000 with a nominal value of Rp1,000 per share at an offering price of Rp2,050 per share. These shares were listed on the Indonesia Stock Exchange (IDX) on July 2, 1990.\r\n</p>\r\n<p>\r\n	 Source: <a href=\"https://britama.com/index.php/2012/06/sejarah-dan-profil-singkat-trst/\">https://britama.com/index.php/2012/06/sejarah-dan-profil-singkat-trst/</a>\r\n</p>', ''),
(18, 4, 3, 'Sejarah Singkat PT Trias Sentosa, Tbk.', '<p>\r\n	 Kami adalah salah satu produsen utama terbesar dari produsen film kemasan fleksibel yang memproduksi BOPP &amp; PET Film Products. PT Trias Sentosa Tbk. memiliki jaringan penjualan dan distribusi di seluruh dunia, dari Indonesia ke negara-negara Asia dan Timur Tengah.\r\n</p>\r\n<p>\r\n	 Selama beberapa dekade sejak didirikan pertama kali pada tanggal 23 Nopember 1979 dan telah memulai operasi komersialnya pada tahun 1986. PT Trias Sentosa Tbk telah menjunjung tinggi tradisi Inovasi dan Keunggulan yang membangun reputasi perusahaan dalam industri film kemasan fleksibel. Perusahaan menetapkan pengembangan inovasi, kreativitas, dan peningkatan produktivitas berkelanjutan sebagai dasar pertumbuhan bisnis yang berkelanjutan.\r\n</p>\r\n<p>\r\n	 Kami memiliki beberapa Pemegang saham sebanyak 5% atau lebih dari saham Trias Sentosa Tbk. Antara lain seperti PT K and L Capital (25,52%), PT Adilaksa Manunggal (17,91%), PT Rejo Sari Bumi (13,27%) dan Lindrawati Widjojo (5,76%). PT K and L Capital, PT Adilaksa Manunggal dan PT Rejo Sari Bumi merupakan pemegang saham pengendali.\r\n</p>\r\n<p>\r\n	 Pada tanggal 22 Mei 1990, kami memperoleh pernyataan efektif dari Bapepam-LK untuk melakukan Penawaran Umum Perdana Saham TRST kepada masyarakat sebanyak 3.000.000 dengan nilai nominal Rp1.000,- per saham dengan harga penawaran Rp2.050,- per saham. Saham-saham tersebut dicatatkan pada Bursa Efek Indonesia (BEI) pada tanggal 02 Juli 1990.\r\n</p>\r\n<p>\r\n	 Sumber: <a href=\"https://britama.com/index.php/2012/06/sejarah-dan-profil-singkat-trst/\">https://britama.com/index.php/2012/06/sejarah-dan-profil-singkat-trst/</a>\r\n</p>', ''),
(33, 2, 2, 'Trias Sentosa Increased Production of 30 Thousand Tons of BOPP Film', '<p>\r\n	  This year, PT Trias Sentosa Tbk will start the fourth quarter by increasing the volume of production of BOPP Film products. From the initial 52,000 tons per year to 82 thousand tons per year, in line with the operation of the Lini VI BOPP expansion project with a capacity of 30 thousand tons per year with an investment of US $ 30 million. The aim is, among others, that PT Trias Sentosa can boost the company\'s sales both in the domestic and export markets.\r\n</p>\r\n<p>\r\n	  In addition to supporting sales, PT Trias Sentosa also added a metalizing machine, increased warehouse capacity and SAP system up-grade as one of the total investment projects of US $ 8 million that was operated this year. We are optimistic that this year there will be a 6% growth and will record sales of IDR 450 billion for the first quarter of this year.\r\n</p>\r\n<p>\r\n	 Source: <a href=\"https://www.beritasatu.com/emiten/111381-trias-sentosa-tambah-produksi-bopp-film-30-ribu-ton.html\">https://www.beritasatu.com/emiten/111381-trias-sentosa-tambah-produksi-bopp-film-30-ribu-ton.html</a>\r\n</p>', ''),
(34, 2, 3, 'Trias Sentosa Tambah Produksi BOPP Film 30 Ribu Ton', '<p>\r\n	  Pada tahun ini, PT Trias Sentosa Tbk akan memulai kuartal IV dengan menambah volume produksi produk BOPP Film. Dari awalnya 52 ribu ton per tahun menjadi 82 ribu ton per tahun seiring dioperasikannya proyek perluasan BOPP Lini VI berkapasitas 30 ribu ton per tahun dengan investasi US$ 30 juta. Tujuannya antara lain agar PT Trias Sentosa dapat mendongkrak penjualan perseroan baik di pasar domestik maupun ekspor.\r\n</p>\r\n<p>\r\n	  Selain itu untuk mendokrak penjualan, PT Trias Sentosa juga melakukan penambahan mesin metalizing, peningkatan kapasitas gudang dan up-grade sistem SAP sebagai salah satu proyek total investasi US$ 8 juta yang dioperasikan tahun ini. Kami optimis bahwa tahun ini akan ada pertumbuhan 6% dan akan mencatat penjualan sebesar Rp 450 miliar untuk kuartal pertama tahun ini.\r\n</p>\r\n<p>\r\n	 Sumber: <a href=\"https://www.beritasatu.com/emiten/111381-trias-sentosa-tambah-produksi-bopp-film-30-ribu-ton.html\">https://www.beritasatu.com/emiten/111381-trias-sentosa-tambah-produksi-bopp-film-30-ribu-ton.html</a>\r\n</p>', ''),
(26, 5, 3, 'Trias Sentosa Tingkatkan kapasitas Dengan Membentuk 2 Perusahaan Baru', '<p>\r\n	 Untuk meningkatkan kapasitas dalam memproduksi banyak produk dengan nilai tambah yang lebih tinggi, PT Trias Sentosa optimis untuk membentuk 2 perusahaan baru dimana hasil kerja sama dengan perusahaan publik asal Jepang, Toyobo Co Ltd.\r\n</p>\r\n<p>\r\n	 Dua perusahaan baru dengan nilai investasi hingga Rp1,1 triliun itu adalah PT Trias Toyobo Astria (TTA) dan PT Toyobo Trias Ecosyar (TTE). Dalam kerja sama ini, pengendali utama TTA adalah PT Trias Sentosa Tbk, sedangkan TTE dikendalikan Toyobo Co Ltd, keduanya akan dibangun di lokasi pabrik PT Trias Sentosa Tbk di Sidoarjo.\r\n</p>\r\n<p>\r\n	 Sugeng Kurniawan selaku President Director PT Trias Sentosa Tbk mengungkapkan produk yang dihasilkan TTA sama dengan hasil produksi PT Trias Sentosa Tbk, yaitu PET film yang akan dipasarkan ke pasar domestik dan ekspor. Perbedaannya, TTA akan difasilitasi mesin-mesin baru. Sebagian hasil produk TTA juga disalurkan ke TTE sebagai bahan baku.\r\n</p>\r\n<p>\r\n	 Berbeda dengan TTA, TTE merupakan perusahaan yang akan memproduksi transparent barrier PET film dengan merek ECOSYAR untuk bahan kemasan industri kemasan. Pasar ekspor merupakan pasar utama untuk film ECOSYAR.\r\n</p>\r\n<p>\r\n	 Dua pabrik ini akan selesai dibangun dan mulai beroperasi pada semester kedua 2019 dan akan mampu menyerap tenaga kerja baru sejumlah 172 orang.\r\n</p>\r\n<p>\r\n	 Sumber: <a href=\"http://www.imq21.com/news/read/455007/20170814/132235/Trias-Sentosa-Bentuk-2-Perusahaan-Baru.html\">http://www.imq21.com/news/read/455007/20170814/132235/Trias-Sentosa-Bentuk-2-Perusahaan-Baru.html</a>\r\n</p>', ''),
(25, 5, 2, 'Trias Sentosa Increases Capacity by Forming 2 New Companies', '<p>\r\n	 To increase capacity to produce many products with higher added value, PT Trias Sentosa is optimistic to form 2 new companies which are the result of collaboration with a Japanese public company, Toyobo Co. Ltd.\r\n</p>\r\n<p>\r\n	 The two new companies with an investment of up to Rp1.1 trillion are PT Trias Toyobo Astria (TTA) and PT Toyobo Trias Ecosyar (TTE). In this collaboration, TTA\'s main controller is PT Trias Sentosa Tbk, while TTE is controlled by Toyobo Co Ltd, both of which will be built at the PT Trias Sentosa Tbk factory site in Sidoarjo.\r\n</p>\r\n<p>\r\n	 Sugeng Kurniawan, President Director of PT Trias Sentosa Tbk, said that the products produced by TTA are the same as those produced by PT Trias Sentosa Tbk, which is PET film, which will be marketed to the domestic and export markets. The difference is, TTA will be facilitated by new machines. Some of the products of TTA are also distributed to TTE as raw materials.\r\n</p>\r\n<p>\r\n	 Unlike TTA, TTE is a company that will produce the transparent barrier PET film with the ECOSYAR brand for packaging industry packaging materials. The export market is the main market for ECOSYAR films.\r\n</p>\r\n<p>\r\n	 The two factories will be completed and will start operating in the second half of 2019 and will be able to absorb 172 new workers.\r\n</p>\r\n<p>\r\n	 Source: <a href=\"http://www.imq21.com/news/read/455007/20170814/132235/Trias-Sentosa-Bentuk-2-Perusahaan-Baru.html\">http://www.imq21.com/news/read/455007/20170814/132235/Trias-Sentosa-Bentuk-2-Perusahaan-Baru.html</a>\r\n</p>', ''),
(36, 3, 3, 'PT Trias Sentosa Akuisisi Perusahaan Di Cina, Dan Sedang Dalam Proses Due Diligence', '<p>\r\n	   PT Trias Sentosa adalah salah satu perusahaan kemasan plastik film BOPP BOPET yang telah menciptakan nilai terbaik untuk semua pelanggan yang paling diandalkan baik nasional hingga internasional. Dan untuk memenuhi kebutuhan kemasan plastik film BOPP BOPET yang selalu meningkat setiap tahun, PT Trias Sentosa Tbk akan melakukan akuisisi perusahaan BOPP di Cina melalui anak usahanya di Singapura. Nilai investasi untuk akuisisi ini diperkirakan sejumlah US$ 5,5 juta. Kapasitas produksi perusahaan yang diakuisisi adalah 15.000 per ton dengan nilai penjualan tahun 2006 sebesar US$ 23,5 juta.\r\n</p>\r\n<p>\r\n	  Sumber: <a href=\"https://finance.detik.com/bursa-dan-valas/d-785444/trias-sentosa-akuisisi-perusahaan-di-cina\">https://finance.detik.com/bursa-dan-valas/d-785444/trias-sentosa-akuisisi-perusahaan-di-cina</a>\r\n</p>', ''),
(44, 6, 3, 'Bentuk AnaK Usaha Baru, PT Trias Sentosa Optimis Dapat Perluas Pasar Ekspor', '<p>\r\n	   PT Trias Sentosa bersama Presiden Komisaris perusahaan Kindarto Kohar membentuk anak usaha baru dalam bidang perdagangan dengan nama PT Unggul Niaga Sentosa yang didirikan sejak 1 September 2016. Ini dilakukan untuk mengembangkan ekspansi bisni hingga dapat meningkatkan kapasitas produk di pasar ekspor.\r\n</p>\r\n<p>\r\n	   Sugeng Kurniawan selaku president Director PT Trias Sentosa Tbk mengatakan tahun depan Trias akan kembali belanja modal sekitar Rp 150 miliar. untuk membeli 3 mesin metalizer lagi. Dengan tambahan tiga mesin baru tersebut diharapkan kinerja perseroan juga semakin meningkat. Sebab pasar yang bisa digarap juga semakin luas baik pasar domestic maupun global. Dan untuk tahun ini, kucuran dana investasi sebesar Rp 50 miliar sudah dikeluarkan untuk membeli 1 mesin metalizer Kapasitas produksinya sebesar 20.000 – 25.000 ton per tahun.\r\n</p>\r\n<p>\r\n	 Sumber: <a href=\"https://economy.okezone.com/read/2017/07/27/278/1745051/perluas-pasar-ekspor-trias-sentosa-bikin-anak-usaha-baru\">https://economy.okezone.com/read/2017/07/27/278/1745051/perluas-pasar-ekspor-trias-sentosa-bikin-anak-usaha-baru</a>\r\n</p>', ''),
(43, 6, 2, 'Form of New Subsidiaries, PT Trias Sentosa Optimistic Can Expand The Export Market', '<p>\r\n	   PT Trias Sentosa with the President Commissioner of the Kindarto Kohar Company formed a new subsidiary in the field of trade under the name of PT Unggul Niaga Sentosa which was established since September 1, 2016. This was done to develop business expansion so as to increase product capacity in the export market.\r\n</p>\r\n<p>\r\n	   Sugeng Kurniawan, as the president director of PT Trias Sentosa Tbk, said that next year Trias will return capital expenditure of around Rp 150 billion. to buy 3 more metalizer machines. With the addition of three new engines, it is expected that the company\'s performance will also increase. Because the market that can be cultivated is also increasingly widespread both domestic and global markets. And for this year, the investment fund of Rp. 50 billion has been spent to buy 1 metalizer machine. Its production capacity is 20,000 - 25,000 tons per year.\r\n</p>\r\n<p>\r\n	 Source: <a href=\"https://economy.okezone.com/read/2017/07/27/278/1745051/perluas-pasar-ekspor-trias-sentosa-bikin-anak-usaha-baru\">https://economy.okezone.com/read/2017/07/27/278/1745051/perluas-pasar-ekspor-trias-sentosa-bikin-anak-usaha-baru</a>\r\n</p>', ''),
(48, 7, 3, 'Kualitas Film Terbaik Mengantarkan PT Trias Sentosa Tbk. Melaju Menaklukkan Pasar Asia', '<p>\r\n	 Sebagai produsen utama film kemasan fleksibel BOPP &amp; PET Film Products terbesar di Indonesia, PT Trias Sentosa Tbk. Secara terus menerus selalu meningkatkan dan menjunjung tinggi tradisi inovasi dan keunggulan dalam industry film kemasan ini. Ini terbukti PT Trias Sentosa telah mengantongi sejumlah izin dan lulus uji kelayakan nasional sebagai komitmen terhadap kesempurnaan dan kualitas Produk Film kemasan kami. PT Trias Sentosa Tbk. Juga Mematuhi kualitas standar internasional dan mengikuti standar serta kualifikasi terbaru melalui peningkatan terjadwal dan bertujuan untuk selalu berada di puncak standar.\r\n</p>\r\n<p>\r\n	 Dari Kualitas Film kemasan terbaik ini lah, PT Trias Sentosa Tbk. juga melaju untuk menaklukkan pasar Asia. Kini PT Trias Sentosa telah memiliki jaringan penjualan dan distribusi di seluruh dunia, mulai dari Negara-negara Asia dan Timur Tengah.\r\n</p>', ''),
(47, 7, 2, 'The Best Quality Film Delivering PT Trias Sentosa Tbk. Drove to Conquer Asian Markets', '<p>\r\n	 As the largest producer of the largest flexible packaging film BOPP &amp; PET Film Products in Indonesia, PT Trias Sentosa Tbk. Constantly improving and upholding the tradition of innovation and excellence in the packaging film industry. It is proven that PT Trias Sentosa has pocketed a number of permits and passed the national feasibility test as a commitment to the perfection and quality of our packaging film products. PT Trias Sentosa Tbk. Also adheres to international standard quality and follows the latest standards and qualifications through scheduled upgrades and aims to always be at the peak of standards.\r\n</p>\r\n<p>\r\n	 From this Quality of the best packaging film, PT Trias Sentosa Tbk. also drove to conquer the Asian market. Now PT Trias Sentosa has a worldwide sales and distribution network, starting from Asian and Middle Eastern countries.\r\n</p>', ''),
(52, 8, 3, 'PT Trias Sentosa Tbk. Siap Menyerap Hasil Pabrik Daur Ulang Unilever', '<p>\r\n	 Unilever Indonesia berencana membangun pabrik daur ulang sampah plastik fleksibel atau sachet di kota-kota besar dan menjadikan Pabrik CreaSolv di Sidoarjo, Jawa Timur sebagai pabrik percontohan (pilot plant). Untuk pembangunan masih perlu studi lebih lanjut karena pasokan bahan baku juga perlu dipertimbangkan. Salah satu tantangan terbesar dalam hal daur ulang adalah sulitnya mengumpulkan sampah sachet karena masyarakat belum terbiasa memilahnya.\r\n</p>\r\n<p>\r\n	 Pada awal operasional pabrik CreaSolv butuh waktu 6 bulan untuk mengumpulkan sampah sachet. Sekarang waktunya hanya satu hari setelah diadakan sosialisasi ke masyarakat. Mereka yang dulunya menganggap sampah sachet tak ada harganya akhirnya berlomba-lomba mengumpulkannya. Dan hingga saat ini, sudah ada 2.816 unit bank sampah di seluruh Indonesia dan telah mengurangi 7.779 ton sampah organik.\r\n</p>\r\n<p>\r\n	 Selama tahap uji coba, produksi berupa pelet plastik ini untuk kebutuhan Unilever. Untuk skala komersial nanti hasil produksinya juga bisa dipasarkan ke industri lain, salah satunya PT Trias Sentosa Tbk.\r\n</p>\r\n<p>\r\n	 Menurut Sugeng Kurniawan selaku Dirut PT Trias Sentosa, usaha daur ulang ini perlu terus dikembangkan antara peran Pemerintah, dunia usaha, dan masyarakat. Masyarakat harus dibiasakan memilah sampah untuk menekan biaya produksi, pemerintah memberikan dukungan infrastruktur dan regulasi yang menarik investasi daur ulang kedepan.\r\n</p>', ''),
(51, 8, 2, 'PT Trias Sentosa Tbk. Ready To Absorb The Results of Unilever Recycling Plant', '<p>\r\n	 Unilever Indonesia plans to build a recycling plant for flexible plastic waste or sachets in major cities and make the CreaSolv Plant in Sidoarjo, East Java a pilot plant. For development, further study is needed because the supply of raw materials also needs to be considered. One of the biggest challenges in terms of recycling is the difficulty of collecting sachet waste because people are not used to sorting it out.\r\n</p>\r\n<p>\r\n	 At the beginning of operations the CreaSolv plant took 6 months to collect sachet waste. Now it is only one day after socialization to the community. Those who used to think that sachet waste was worthless finally competed to collect it. And to date, there have been 2,816 garbage bank units throughout Indonesia and have reduced 7,779 tons of organic waste.\r\n</p>\r\n<p>\r\n	 During the trial phase, the production of plastic pellets is for Unilever\'s needs. For commercial scale, the production results can also be marketed to other industries, one of which is PT Trias Sentosa Tbk.\r\n</p>\r\n<p>\r\n	 According to Sugeng Kurniawan as Managing Director of PT Trias Sentosa, this recycling effort needs to continue to be developed between the role of the Government, the business world, and society. The community must be accustomed to sorting out waste to reduce production costs, the government provides infrastructure support and regulations that attract future recycling investments.\r\n</p>', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `hide` int(11) NOT NULL,
  `group` varchar(100) NOT NULL,
  `dual_language` enum('n','y') NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `name`, `label`, `value`, `type`, `hide`, `group`, `dual_language`, `sort`) VALUES
(1, 'default_meta_title', 'Title', '', 'text', 0, 'default_meta', 'y', 1),
(2, 'default_meta_keywords', 'Keywords', '', 'textarea', 0, 'default_meta', 'y', 2),
(3, 'default_meta_description', 'Description', '', 'textarea', 0, 'default_meta', 'y', 3),
(4, 'google_tools_webmaster', 'Google Webmaster Code', '', 'textarea', 0, 'google_tools', 'n', 4),
(5, 'google_tools_analytic', 'Google Analytic Code', '', 'textarea', 0, 'google_tools', 'n', 5),
(6, 'purechat_status', 'Show Hide Widget', '', 'select', 0, 'purechat', 'n', 1),
(7, 'purechat_code', 'PureChat Code', '', 'textarea', 0, 'purechat', 'n', 1),
(8, 'invoice_start_number', 'Invoice Start Number', '1000', 'text', 0, 'invoice', 'n', 0),
(9, 'invoice_increment', 'Invoice Increment', '5', 'text', 0, 'invoice', 'n', 0),
(10, 'invoice_auto_cancel_after', 'Invoice Auto Cancel After', '72', 'text', 0, 'invoice', 'n', 0),
(11, 'lang_deff', 'Language Default', 'en', 'text', 0, 'data', 'n', 0),
(12, 'email', 'Email Form', 'info@mail.com', 'text', 0, 'data', 'n', 1),
(13, 'tax', 'Tax', '11', 'text', 0, 'data', 'n', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_description`
--

CREATE TABLE `setting_description` (
  `id` int(11) NOT NULL,
  `setting_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_group`
--

CREATE TABLE `tb_group` (
  `id` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `aktif` int(11) NOT NULL,
  `akses` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_group`
--

INSERT INTO `tb_group` (`id`, `group`, `aktif`, `akses`) VALUES
(8, 'Administrator', 1, 0x613a33373a7b693a303b733a31363a2261646d696e2e757365722e696e646578223b693a313b733a31373a2261646d696e2e757365722e637265617465223b693a323b733a31373a2261646d696e2e757365722e757064617465223b693a333b733a31373a2261646d696e2e757365722e64656c657465223b693a343b733a31373a2261646d696e2e736c6964652e696e646578223b693a353b733a31383a2261646d696e2e736c6964652e637265617465223b693a363b733a31383a2261646d696e2e736c6964652e757064617465223b693a373b733a31383a2261646d696e2e736c6964652e64656c657465223b693a383b733a31363a2261646d696e2e62616e6b2e696e646578223b693a393b733a31373a2261646d696e2e62616e6b2e637265617465223b693a31303b733a31373a2261646d696e2e62616e6b2e757064617465223b693a31313b733a31373a2261646d696e2e62616e6b2e64656c657465223b693a31323b733a31393a2261646d696e2e73657474696e672e696e646578223b693a31333b733a31383a2261646d696e2e6d656d6265722e696e646578223b693a31343b733a31393a2261646d696e2e6d656d6265722e637265617465223b693a31353b733a31393a2261646d696e2e6d656d6265722e757064617465223b693a31363b733a31393a2261646d696e2e6d656d6265722e64656c657465223b693a31373b733a31373a2261646d696e2e6f726465722e696e646578223b693a31383b733a31383a2261646d696e2e6f726465722e637265617465223b693a31393b733a31383a2261646d696e2e6f726465722e757064617465223b693a32303b733a31383a2261646d696e2e6f726465722e64656c657465223b693a32313b733a31373a2261646d696e2e6f726465722e7072696e74223b693a32323b733a32313a2261646d696e2e73657474696e672e636f6e74616374223b693a32333b733a31393a2261646d696e2e73657474696e672e61626f7574223b693a32343b733a32303a2261646d696e2e63617465676f72792e696e646578223b693a32353b733a32313a2261646d696e2e63617465676f72792e637265617465223b693a32363b733a32313a2261646d696e2e63617465676f72792e757064617465223b693a32373b733a32313a2261646d696e2e63617465676f72792e64656c657465223b693a32383b733a31393a2261646d696e2e73657474696e672e686f77746f223b693a32393b733a31393a2261646d696e2e70726f647563742e696e646578223b693a33303b733a32303a2261646d696e2e70726f647563742e637265617465223b693a33313b733a32303a2261646d696e2e70726f647563742e757064617465223b693a33323b733a32303a2261646d696e2e70726f647563742e64656c657465223b693a33333b733a32303a2261646d696e2e64656c69766572792e696e646578223b693a33343b733a32313a2261646d696e2e64656c69766572792e637265617465223b693a33353b733a32313a2261646d696e2e64656c69766572792e757064617465223b693a33363b733a32313a2261646d696e2e64656c69766572792e64656c657465223b7d);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` bigint(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `user_type` varchar(225) DEFAULT NULL,
  `post_id` int(20) DEFAULT NULL,
  `konten` longtext,
  `date_input` datetime DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id`, `user_id`, `user_type`, `post_id`, `konten`, `date_input`, `status`) VALUES
(1, 2, 'pelaksana', 2, 'oke saya kerjakan', '2020-03-24 19:16:14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id` bigint(20) NOT NULL,
  `provinsi_id` int(15) NOT NULL,
  `nama` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`id`, `provinsi_id`, `nama`) VALUES
(1, 1, 'Badung'),
(2, 1, 'Bangli'),
(3, 1, 'Buleleng'),
(4, 1, 'Denpasar'),
(5, 1, 'Gianyar'),
(6, 1, 'Jembrana'),
(7, 1, 'Karangasem'),
(8, 1, 'Klungkung'),
(9, 1, 'Tabanan'),
(10, 2, 'Bangka'),
(11, 2, 'Bangka Barat'),
(12, 2, 'Bangka Selatan'),
(13, 2, 'Bangka Tengah'),
(14, 2, 'Belitung'),
(15, 2, 'Belitung Timur'),
(16, 2, 'Pangkal Pinang'),
(17, 3, 'Cilegon'),
(18, 3, 'Lebak'),
(19, 3, 'Pandeglang'),
(20, 3, 'Serang'),
(21, 3, 'Serang'),
(22, 3, 'Tangerang'),
(23, 3, 'Tangerang'),
(24, 3, 'Tangerang Selatan'),
(25, 4, 'Bengkulu'),
(26, 4, 'Bengkulu Selatan'),
(27, 4, 'Bengkulu Tengah'),
(28, 4, 'Bengkulu Utara'),
(29, 4, 'Kaur'),
(30, 4, 'Kepahiang'),
(31, 4, 'Lebong'),
(32, 4, 'Muko Muko'),
(33, 4, 'Rejang Lebong'),
(34, 4, 'Seluma'),
(35, 5, 'Bantul'),
(36, 5, 'Gunung Kidul'),
(37, 5, 'Kulon Progo'),
(38, 5, 'Sleman'),
(39, 5, 'Yogyakarta'),
(40, 6, 'Jakarta Barat'),
(41, 6, 'Jakarta Pusat'),
(42, 6, 'Jakarta Selatan'),
(43, 6, 'Jakarta Timur'),
(44, 6, 'Jakarta Utara'),
(45, 6, 'Kepulauan Seribu'),
(46, 7, 'Boalemo'),
(47, 7, 'Bone Bolango'),
(48, 7, 'Gorontalo'),
(49, 7, 'Gorontalo'),
(50, 7, 'Gorontalo Utara'),
(51, 7, 'Pohuwato'),
(52, 8, 'Batang Hari'),
(53, 8, 'Bungo'),
(54, 8, 'Jambi'),
(55, 8, 'Kerinci'),
(56, 8, 'Merangin'),
(57, 8, 'Muaro Jambi'),
(58, 8, 'Sarolangun'),
(59, 8, 'Sungaipenuh'),
(60, 8, 'Tanjung Jabung Barat'),
(61, 8, 'Tanjung Jabung Timur'),
(62, 8, 'Tebo'),
(63, 9, 'Bandung'),
(64, 9, 'Bandung'),
(65, 9, 'Bandung Barat'),
(66, 9, 'Banjar'),
(67, 9, 'Bekasi'),
(68, 9, 'Bekasi'),
(69, 9, 'Bogor'),
(70, 9, 'Bogor'),
(71, 9, 'Ciamis'),
(72, 9, 'Cianjur'),
(73, 9, 'Cimahi'),
(74, 9, 'Cirebon'),
(75, 9, 'Cirebon'),
(76, 9, 'Depok'),
(77, 9, 'Garut'),
(78, 9, 'Indramayu'),
(79, 9, 'Karawang'),
(80, 9, 'Kuningan'),
(81, 9, 'Majalengka'),
(82, 9, 'Pangandaran'),
(83, 9, 'Purwakarta'),
(84, 9, 'Subang'),
(85, 9, 'Sukabumi'),
(86, 9, 'Sukabumi'),
(87, 9, 'Sumedang'),
(88, 9, 'Tasikmalaya'),
(89, 9, 'Tasikmalaya'),
(90, 10, 'Banjarnegara'),
(91, 10, 'Banyumas'),
(92, 10, 'Batang'),
(93, 10, 'Blora'),
(94, 10, 'Boyolali'),
(95, 10, 'Brebes'),
(96, 10, 'Cilacap'),
(97, 10, 'Demak'),
(98, 10, 'Grobogan'),
(99, 10, 'Jepara'),
(100, 10, 'Karanganyar'),
(101, 10, 'Kebumen'),
(102, 10, 'Kendal'),
(103, 10, 'Klaten'),
(104, 10, 'Kudus'),
(105, 10, 'Magelang'),
(106, 10, 'Magelang'),
(107, 10, 'Pati'),
(108, 10, 'Pekalongan'),
(109, 10, 'Pekalongan'),
(110, 10, 'Pemalang'),
(111, 10, 'Purbalingga'),
(112, 10, 'Purworejo'),
(113, 10, 'Rembang'),
(114, 10, 'Salatiga'),
(115, 10, 'Semarang'),
(116, 10, 'Semarang'),
(117, 10, 'Sragen'),
(118, 10, 'Sukoharjo'),
(119, 10, 'Surakarta (Solo)'),
(120, 10, 'Tegal'),
(121, 10, 'Tegal'),
(122, 10, 'Temanggung'),
(123, 10, 'Wonogiri'),
(124, 10, 'Wonosobo'),
(125, 11, 'Bangkalan'),
(126, 11, 'Banyuwangi'),
(127, 11, 'Batu'),
(128, 11, 'Blitar'),
(129, 11, 'Blitar'),
(130, 11, 'Bojonegoro'),
(131, 11, 'Bondowoso'),
(132, 11, 'Gresik'),
(133, 11, 'Jember'),
(134, 11, 'Jombang'),
(135, 11, 'Kediri'),
(136, 11, 'Kediri'),
(137, 11, 'Lamongan'),
(138, 11, 'Lumajang'),
(139, 11, 'Madiun'),
(140, 11, 'Madiun'),
(141, 11, 'Magetan'),
(142, 11, 'Malang'),
(143, 11, 'Malang'),
(144, 11, 'Mojokerto'),
(145, 11, 'Mojokerto'),
(146, 11, 'Nganjuk'),
(147, 11, 'Ngawi'),
(148, 11, 'Pacitan'),
(149, 11, 'Pamekasan'),
(150, 11, 'Pasuruan'),
(151, 11, 'Pasuruan'),
(152, 11, 'Ponorogo'),
(153, 11, 'Probolinggo'),
(154, 11, 'Probolinggo'),
(155, 11, 'Sampang'),
(156, 11, 'Sidoarjo'),
(157, 11, 'Situbondo'),
(158, 11, 'Sumenep'),
(159, 11, 'Surabaya'),
(160, 11, 'Trenggalek'),
(161, 11, 'Tuban'),
(162, 11, 'Tulungagung'),
(163, 12, 'Bengkayang'),
(164, 12, 'Kapuas Hulu'),
(165, 12, 'Kayong Utara'),
(166, 12, 'Ketapang'),
(167, 12, 'Kubu Raya'),
(168, 12, 'Landak'),
(169, 12, 'Melawi'),
(170, 12, 'Pontianak'),
(171, 12, 'Pontianak'),
(172, 12, 'Sambas'),
(173, 12, 'Sanggau'),
(174, 12, 'Sekadau'),
(175, 12, 'Singkawang'),
(176, 12, 'Sintang'),
(177, 13, 'Balangan'),
(178, 13, 'Banjar'),
(179, 13, 'Banjarbaru'),
(180, 13, 'Banjarmasin'),
(181, 13, 'Barito Kuala'),
(182, 13, 'Hulu Sungai Selatan'),
(183, 13, 'Hulu Sungai Tengah'),
(184, 13, 'Hulu Sungai Utara'),
(185, 13, 'Kotabaru'),
(186, 13, 'Tabalong'),
(187, 13, 'Tanah Bumbu'),
(188, 13, 'Tanah Laut'),
(189, 13, 'Tapin'),
(190, 14, 'Barito Selatan'),
(191, 14, 'Barito Timur'),
(192, 14, 'Barito Utara'),
(193, 14, 'Gunung Mas'),
(194, 14, 'Kapuas'),
(195, 14, 'Katingan'),
(196, 14, 'Kotawaringin Barat'),
(197, 14, 'Kotawaringin Timur'),
(198, 14, 'Lamandau'),
(199, 14, 'Murung Raya'),
(200, 14, 'Palangka Raya'),
(201, 14, 'Pulang Pisau'),
(202, 14, 'Seruyan'),
(203, 14, 'Sukamara'),
(204, 15, 'Balikpapan'),
(205, 15, 'Berau'),
(206, 15, 'Bontang'),
(207, 15, 'Kutai Barat'),
(208, 15, 'Kutai Kartanegara'),
(209, 15, 'Kutai Timur'),
(210, 15, 'Paser'),
(211, 15, 'Penajam Paser Utara'),
(212, 15, 'Samarinda'),
(213, 16, 'Bulungan (Bulongan)'),
(214, 16, 'Malinau'),
(215, 16, 'Nunukan'),
(216, 16, 'Tana Tidung'),
(217, 16, 'Tarakan'),
(218, 17, 'Batam'),
(219, 17, 'Bintan'),
(220, 17, 'Karimun'),
(221, 17, 'Kepulauan Anambas'),
(222, 17, 'Lingga'),
(223, 17, 'Natuna'),
(224, 17, 'Tanjung Pinang'),
(225, 18, 'Bandar Lampung'),
(226, 18, 'Lampung Barat'),
(227, 18, 'Lampung Selatan'),
(228, 18, 'Lampung Tengah'),
(229, 18, 'Lampung Timur'),
(230, 18, 'Lampung Utara'),
(231, 18, 'Mesuji'),
(232, 18, 'Metro'),
(233, 18, 'Pesawaran'),
(234, 18, 'Pesisir Barat'),
(235, 18, 'Pringsewu'),
(236, 18, 'Tanggamus'),
(237, 18, 'Tulang Bawang'),
(238, 18, 'Tulang Bawang Barat'),
(239, 18, 'Way Kanan'),
(240, 19, 'Ambon'),
(241, 19, 'Buru'),
(242, 19, 'Buru Selatan'),
(243, 19, 'Kepulauan Aru'),
(244, 19, 'Maluku Barat Daya'),
(245, 19, 'Maluku Tengah'),
(246, 19, 'Maluku Tenggara'),
(247, 19, 'Maluku Tenggara Barat'),
(248, 19, 'Seram Bagian Barat'),
(249, 19, 'Seram Bagian Timur'),
(250, 19, 'Tual'),
(251, 20, 'Halmahera Barat'),
(252, 20, 'Halmahera Selatan'),
(253, 20, 'Halmahera Tengah'),
(254, 20, 'Halmahera Timur'),
(255, 20, 'Halmahera Utara'),
(256, 20, 'Kepulauan Sula'),
(257, 20, 'Pulau Morotai'),
(258, 20, 'Ternate'),
(259, 20, 'Tidore Kepulauan'),
(260, 21, 'Aceh Barat'),
(261, 21, 'Aceh Barat Daya'),
(262, 21, 'Aceh Besar'),
(263, 21, 'Aceh Jaya'),
(264, 21, 'Aceh Selatan'),
(265, 21, 'Aceh Singkil'),
(266, 21, 'Aceh Tamiang'),
(267, 21, 'Aceh Tengah'),
(268, 21, 'Aceh Tenggara'),
(269, 21, 'Aceh Timur'),
(270, 21, 'Aceh Utara'),
(271, 21, 'Banda Aceh'),
(272, 21, 'Bener Meriah'),
(273, 21, 'Bireuen'),
(274, 21, 'Gayo Lues'),
(275, 21, 'Langsa'),
(276, 21, 'Lhokseumawe'),
(277, 21, 'Nagan Raya'),
(278, 21, 'Pidie'),
(279, 21, 'Pidie Jaya'),
(280, 21, 'Sabang'),
(281, 21, 'Simeulue'),
(282, 21, 'Subulussalam'),
(283, 22, 'Bima'),
(284, 22, 'Bima'),
(285, 22, 'Dompu'),
(286, 22, 'Lombok Barat'),
(287, 22, 'Lombok Tengah'),
(288, 22, 'Lombok Timur'),
(289, 22, 'Lombok Utara'),
(290, 22, 'Mataram'),
(291, 22, 'Sumbawa'),
(292, 22, 'Sumbawa Barat'),
(293, 23, 'Alor'),
(294, 23, 'Belu'),
(295, 23, 'Ende'),
(296, 23, 'Flores Timur'),
(297, 23, 'Kupang'),
(298, 23, 'Kupang'),
(299, 23, 'Lembata'),
(300, 23, 'Manggarai'),
(301, 23, 'Manggarai Barat'),
(302, 23, 'Manggarai Timur'),
(303, 23, 'Nagekeo'),
(304, 23, 'Ngada'),
(305, 23, 'Rote Ndao'),
(306, 23, 'Sabu Raijua'),
(307, 23, 'Sikka'),
(308, 23, 'Sumba Barat'),
(309, 23, 'Sumba Barat Daya'),
(310, 23, 'Sumba Tengah'),
(311, 23, 'Sumba Timur'),
(312, 23, 'Timor Tengah Selatan'),
(313, 23, 'Timor Tengah Utara'),
(314, 24, 'Asmat'),
(315, 24, 'Biak Numfor'),
(316, 24, 'Boven Digoel'),
(317, 24, 'Deiyai (Deliyai)'),
(318, 24, 'Dogiyai'),
(319, 24, 'Intan Jaya'),
(320, 24, 'Jayapura'),
(321, 24, 'Jayapura'),
(322, 24, 'Jayawijaya'),
(323, 24, 'Keerom'),
(324, 24, 'Kepulauan Yapen (Yapen Waropen)'),
(325, 24, 'Lanny Jaya'),
(326, 24, 'Mamberamo Raya'),
(327, 24, 'Mamberamo Tengah'),
(328, 24, 'Mappi'),
(329, 24, 'Merauke'),
(330, 24, 'Mimika'),
(331, 24, 'Nabire'),
(332, 24, 'Nduga'),
(333, 24, 'Paniai'),
(334, 24, 'Pegunungan Bintang'),
(335, 24, 'Puncak'),
(336, 24, 'Puncak Jaya'),
(337, 24, 'Sarmi'),
(338, 24, 'Supiori'),
(339, 24, 'Tolikara'),
(340, 24, 'Waropen'),
(341, 24, 'Yahukimo'),
(342, 24, 'Yalimo'),
(343, 25, 'Fakfak'),
(344, 25, 'Kaimana'),
(345, 25, 'Manokwari'),
(346, 25, 'Manokwari Selatan'),
(347, 25, 'Maybrat'),
(348, 25, 'Pegunungan Arfak'),
(349, 25, 'Raja Ampat'),
(350, 25, 'Sorong'),
(351, 25, 'Sorong'),
(352, 25, 'Sorong Selatan'),
(353, 25, 'Tambrauw'),
(354, 25, 'Teluk Bintuni'),
(355, 25, 'Teluk Wondama'),
(356, 26, 'Bengkalis'),
(357, 26, 'Dumai'),
(358, 26, 'Indragiri Hilir'),
(359, 26, 'Indragiri Hulu'),
(360, 26, 'Kampar'),
(361, 26, 'Kepulauan Meranti'),
(362, 26, 'Kuantan Singingi'),
(363, 26, 'Pekanbaru'),
(364, 26, 'Pelalawan'),
(365, 26, 'Rokan Hilir'),
(366, 26, 'Rokan Hulu'),
(367, 26, 'Siak'),
(368, 27, 'Majene'),
(369, 27, 'Mamasa'),
(370, 27, 'Mamuju'),
(371, 27, 'Mamuju Utara'),
(372, 27, 'Polewali Mandar'),
(373, 28, 'Bantaeng'),
(374, 28, 'Barru'),
(375, 28, 'Bone'),
(376, 28, 'Bulukumba'),
(377, 28, 'Enrekang'),
(378, 28, 'Gowa'),
(379, 28, 'Jeneponto'),
(380, 28, 'Luwu'),
(381, 28, 'Luwu Timur'),
(382, 28, 'Luwu Utara'),
(383, 28, 'Makassar'),
(384, 28, 'Maros'),
(385, 28, 'Palopo'),
(386, 28, 'Pangkajene Kepulauan'),
(387, 28, 'Parepare'),
(388, 28, 'Pinrang'),
(389, 28, 'Selayar (Kepulauan Selayar)'),
(390, 28, 'Sidenreng Rappang/Rapang'),
(391, 28, 'Sinjai'),
(392, 28, 'Soppeng'),
(393, 28, 'Takalar'),
(394, 28, 'Tana Toraja'),
(395, 28, 'Toraja Utara'),
(396, 28, 'Wajo'),
(397, 29, 'Banggai'),
(398, 29, 'Banggai Kepulauan'),
(399, 29, 'Buol'),
(400, 29, 'Donggala'),
(401, 29, 'Morowali'),
(402, 29, 'Palu'),
(403, 29, 'Parigi Moutong'),
(404, 29, 'Poso'),
(405, 29, 'Sigi'),
(406, 29, 'Tojo Una-Una'),
(407, 29, 'Toli-Toli'),
(408, 30, 'Bau-Bau'),
(409, 30, 'Bombana'),
(410, 30, 'Buton'),
(411, 30, 'Buton Utara'),
(412, 30, 'Kendari'),
(413, 30, 'Kolaka'),
(414, 30, 'Kolaka Utara'),
(415, 30, 'Konawe'),
(416, 30, 'Konawe Selatan'),
(417, 30, 'Konawe Utara'),
(418, 30, 'Muna'),
(419, 30, 'Wakatobi'),
(420, 31, 'Bitung'),
(421, 31, 'Bolaang Mongondow (Bolmong)'),
(422, 31, 'Bolaang Mongondow Selatan'),
(423, 31, 'Bolaang Mongondow Timur'),
(424, 31, 'Bolaang Mongondow Utara'),
(425, 31, 'Kepulauan Sangihe'),
(426, 31, 'Kepulauan Siau Tagulandang Biaro (Sitaro)'),
(427, 31, 'Kepulauan Talaud'),
(428, 31, 'Kotamobagu'),
(429, 31, 'Manado'),
(430, 31, 'Minahasa'),
(431, 31, 'Minahasa Selatan'),
(432, 31, 'Minahasa Tenggara'),
(433, 31, 'Minahasa Utara'),
(434, 31, 'Tomohon'),
(435, 32, 'Agam'),
(436, 32, 'Bukittinggi'),
(437, 32, 'Dharmasraya'),
(438, 32, 'Kepulauan Mentawai'),
(439, 32, 'Lima Puluh Koto/Kota'),
(440, 32, 'Padang'),
(441, 32, 'Padang Panjang'),
(442, 32, 'Padang Pariaman'),
(443, 32, 'Pariaman'),
(444, 32, 'Pasaman'),
(445, 32, 'Pasaman Barat'),
(446, 32, 'Payakumbuh'),
(447, 32, 'Pesisir Selatan'),
(448, 32, 'Sawah Lunto'),
(449, 32, 'Sijunjung (Sawah Lunto Sijunjung)'),
(450, 32, 'Solok'),
(451, 32, 'Solok'),
(452, 32, 'Solok Selatan'),
(453, 32, 'Tanah Datar'),
(454, 33, 'Banyuasin'),
(455, 33, 'Empat Lawang'),
(456, 33, 'Lahat'),
(457, 33, 'Lubuk Linggau'),
(458, 33, 'Muara Enim'),
(459, 33, 'Musi Banyuasin'),
(460, 33, 'Musi Rawas'),
(461, 33, 'Ogan Ilir'),
(462, 33, 'Ogan Komering Ilir'),
(463, 33, 'Ogan Komering Ulu'),
(464, 33, 'Ogan Komering Ulu Selatan'),
(465, 33, 'Ogan Komering Ulu Timur'),
(466, 33, 'Pagar Alam'),
(467, 33, 'Palembang'),
(468, 33, 'Prabumulih'),
(469, 34, 'Asahan'),
(470, 34, 'Batu Bara'),
(471, 34, 'Binjai'),
(472, 34, 'Dairi'),
(473, 34, 'Deli Serdang'),
(474, 34, 'Gunungsitoli'),
(475, 34, 'Humbang Hasundutan'),
(476, 34, 'Karo'),
(477, 34, 'Labuhan Batu'),
(478, 34, 'Labuhan Batu Selatan'),
(479, 34, 'Labuhan Batu Utara'),
(480, 34, 'Langkat'),
(481, 34, 'Mandailing Natal'),
(482, 34, 'Medan'),
(483, 34, 'Nias'),
(484, 34, 'Nias Barat'),
(485, 34, 'Nias Selatan'),
(486, 34, 'Nias Utara'),
(487, 34, 'Padang Lawas'),
(488, 34, 'Padang Lawas Utara'),
(489, 34, 'Padang Sidempuan'),
(490, 34, 'Pakpak Bharat'),
(491, 34, 'Pematang Siantar'),
(492, 34, 'Samosir'),
(493, 34, 'Serdang Bedagai'),
(494, 34, 'Sibolga'),
(495, 34, 'Simalungun'),
(496, 34, 'Tanjung Balai'),
(497, 34, 'Tapanuli Selatan'),
(498, 34, 'Tapanuli Tengah'),
(499, 34, 'Tapanuli Utara'),
(500, 34, 'Tebing Tinggi'),
(501, 34, 'Toba Samosir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `jabatan` varchar(225) DEFAULT NULL,
  `nick_name` varchar(225) DEFAULT NULL,
  `alamat_rumah` text,
  `telp_aktif` varchar(225) DEFAULT NULL,
  `telp_saudara` varchar(225) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `foto_diri` varchar(225) DEFAULT NULL,
  `foto_ktp` varchar(225) DEFAULT NULL,
  `nama_subkontraktor` varchar(225) DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu_akses`
--

CREATE TABLE `tb_menu_akses` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` blob NOT NULL,
  `sub_action` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu_akses`
--

INSERT INTO `tb_menu_akses` (`id`, `type`, `name`, `controller`, `action`, `sub_action`) VALUES
(22, 'admin', 'User', 'user', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d),
(21, 'admin', 'Slide', 'slide', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d),
(40, 'admin', 'Bank', 'bank', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d),
(18, 'admin', 'Setting', 'setting', 0x613a313a7b733a353a22696e646578223b733a31373a22456469742053657474696e6720556d756d223b7d, 0x613a303a7b7d),
(39, 'admin', 'Member', 'member', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d),
(38, 'admin', 'Order', 'order', 0x613a353a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b733a353a227072696e74223b733a353a225072696e74223b7d, 0x613a303a7b7d),
(32, 'admin', 'Contact Us', 'setting', 0x613a313a7b733a373a22636f6e74616374223b733a32323a2245646974205061676520487562756e6769204b616d69223b7d, 0x613a303a7b7d),
(13, 'admin', 'About Us', 'setting', 0x613a313a7b733a353a2261626f7574223b733a31303a22456469742041626f7574223b7d, 0x613a303a7b7d),
(37, 'admin', 'Category', 'category', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d),
(36, 'admin', 'How To Order', 'setting', 0x613a313a7b733a353a22686f77746f223b733a31323a22486f7720546f204f72646572223b7d, 0x613a303a7b7d),
(30, 'admin', 'Products', 'product', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d),
(41, 'admin', 'Delivery Price', 'delivery', 0x613a343a7b733a353a22696e646578223b733a393a224c6973742044617461223b733a363a22637265617465223b733a31313a224372656174652044617461223b733a363a22757064617465223b733a31313a225570646174652044617461223b733a363a2264656c657465223b733a31313a2244656c6574652044617461223b7d, 0x613a303a7b7d);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_notif`
--

CREATE TABLE `tb_notif` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tipe_notif` varchar(225) DEFAULT NULL,
  `deleted` int(2) DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  `notes` text,
  `user_id` int(20) DEFAULT NULL,
  `market_id` int(20) DEFAULT NULL,
  `market_tipe_id` int(20) DEFAULT NULL,
  `invoice_no` varchar(225) DEFAULT NULL,
  `terbaca` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` bigint(20) NOT NULL,
  `provinsi` varchar(225) DEFAULT NULL,
  `active` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `provinsi`, `active`) VALUES
(1, 'Bali', 1),
(2, 'Bangka Belitung', 1),
(3, 'Banten', 1),
(4, 'Bengkulu', 1),
(5, 'DI Yogyakarta', 1),
(6, 'DKI Jakarta', 1),
(7, 'Gorontalo', 1),
(8, 'Jambi', 1),
(9, 'Jawa Barat', 1),
(10, 'Jawa Tengah', 1),
(11, 'Jawa Timur', 1),
(12, 'Kalimantan Barat', 1),
(13, 'Kalimantan Selatan', 1),
(14, 'Kalimantan Tengah', 1),
(15, 'Kalimantan Timur', 1),
(16, 'Kalimantan Utara', 1),
(17, 'Kepulauan Riau', 1),
(18, 'Lampung', 1),
(19, 'Maluku', 1),
(20, 'Maluku Utara', 1),
(21, 'Nanggroe Aceh Darussalam (NAD)', 1),
(22, 'Nusa Tenggara Barat (NTB)', 1),
(23, 'Nusa Tenggara Timur (NTT)', 1),
(24, 'Papua', 1),
(25, 'Papua Barat', 1),
(26, 'Riau', 1),
(27, 'Sulawesi Barat', 1),
(28, 'Sulawesi Selatan', 1),
(29, 'Sulawesi Tengah', 1),
(30, 'Sulawesi Tenggara', 1),
(31, 'Sulawesi Utara', 1),
(32, 'Sumatera Barat', 1),
(33, 'Sumatera Selatan', 1),
(34, 'Sumatera Utara', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas_kepentingan`
--

CREATE TABLE `tb_tugas_kepentingan` (
  `id` bigint(20) NOT NULL,
  `kepentingan` varchar(225) DEFAULT NULL,
  `nama_kepentingan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tugas_kepentingan`
--

INSERT INTO `tb_tugas_kepentingan` (`id`, `kepentingan`, `nama_kepentingan`) VALUES
(1, 'nwp', 'Citraland Northwest Park');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas_lists`
--

CREATE TABLE `tb_tugas_lists` (
  `id` bigint(20) NOT NULL,
  `dari` varchar(225) DEFAULT NULL,
  `kepada` varchar(225) DEFAULT NULL,
  `prioritas` enum('urgent','penting','rutin') DEFAULT NULL,
  `subject_kepentingan` int(20) DEFAULT NULL,
  `deskripsi` text,
  `status` enum('belum','selesai') DEFAULT NULL,
  `status_selesai` enum('over','under') DEFAULT NULL,
  `member_id` int(20) DEFAULT NULL,
  `admin_id` varchar(225) DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL,
  `data` longtext,
  `date_start_user` datetime DEFAULT NULL,
  `date_selesai_user` datetime DEFAULT NULL,
  `date_selesai_pemberi` datetime DEFAULT NULL,
  `lock_selesai` int(1) DEFAULT '0',
  `lock_start` int(1) DEFAULT '0',
  `flex_selesai_pelaksana` int(1) DEFAULT '0',
  `flex_selesai_pemberi` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tugas_lists`
--

INSERT INTO `tb_tugas_lists` (`id`, `dari`, `kepada`, `prioritas`, `subject_kepentingan`, `deskripsi`, `status`, `status_selesai`, `member_id`, `admin_id`, `date_input`, `date_finish`, `data`, `date_start_user`, `date_selesai_user`, `date_selesai_pemberi`, `lock_selesai`, `lock_start`, `flex_selesai_pelaksana`, `flex_selesai_pemberi`) VALUES
(1, 'mlsn', 'ibnudrift', 'penting', 1, 'benahi lampu pju, nwp', 'selesai', 'under', 2, '1', '2020-03-24 19:08:52', '2020-03-31 00:00:00', NULL, '2020-03-24 19:10:43', '2020-03-24 19:11:51', '2020-03-24 19:12:20', 1, 1, 1, 1),
(2, 'mlsn', 'ibnudrift', 'urgent', 1, 'Benahi jalan aspal rusak, Bukit palma', 'selesai', 'under', 2, '1', '2020-03-24 19:15:32', '2020-04-10 00:00:00', NULL, '2020-03-24 19:16:01', '2020-03-24 19:16:27', '2020-03-24 19:16:50', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL,
  `login_terakhir` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aktivasi` int(11) NOT NULL,
  `aktif` int(11) NOT NULL,
  `user_input` varchar(200) NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `initial` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `nama`, `pass`, `type`, `group_id`, `login_terakhir`, `aktivasi`, `aktif`, `user_input`, `tanggal_input`, `initial`, `image`) VALUES
(1, 'ibnudrift@gmail.com', 'Ibnu Fajar', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'root', 0, '2019-08-31 14:31:15', 0, 1, '', '2014-02-10 03:17:36', 'ibnu', ''),
(41, 'rizalchamanin@gmail.com', 'chamanin', 'f58cf5e7e10f195e21b553096d092c763ed18b0e', 'root', 0, '2020-03-23 03:59:14', 0, 1, '', '0000-00-00 00:00:00', '', ''),
(42, 'adityas87@yahoo.com', 'Aditya Surya', '67945a7a780464b301afd902f86856a43add6cec', 'root', 0, '2020-03-28 06:50:54', 0, 1, '', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tt_text`
--

CREATE TABLE `tt_text` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tt_text`
--

INSERT INTO `tt_text` (`id`, `category`, `message`) VALUES
(1, 'admin', 'Produk'),
(2, 'admin', 'Pages'),
(3, 'admin', 'Orders'),
(4, 'admin', 'Customers'),
(5, 'admin', 'Promotions'),
(6, 'admin', 'Reports'),
(7, 'admin', 'General Setting'),
(8, 'admin', 'Data Edited'),
(9, 'admin', 'New Orders'),
(10, 'admin', 'New Customers'),
(11, 'admin', 'Payment Confirmation'),
(12, 'admin', 'Edit Profile'),
(13, 'admin', 'Change Password'),
(14, 'admin', 'Sign Out'),
(15, 'admin', 'Gallery'),
(16, 'admin', 'Slide Home'),
(17, 'admin', 'Toko'),
(18, 'admin', 'Slides'),
(19, 'admin', 'Product'),
(20, 'admin', 'Products'),
(21, 'admin', 'About Us'),
(22, 'admin', 'Contact Us'),
(23, 'admin', 'Trip'),
(24, 'admin', 'Trips'),
(25, 'admin', 'Slide'),
(26, 'admin', 'Healty'),
(27, 'admin', 'ge-ma'),
(28, 'admin', 'Blog/Artikel'),
(29, 'admin', 'Career'),
(30, 'admin', 'Home'),
(31, 'admin', 'Factory'),
(32, 'admin', 'News & Article'),
(33, 'admin', 'Lokasi Penjualan'),
(34, 'admin', 'Jadi Agen'),
(35, 'admin', 'Cara Membeli'),
(36, 'admin', 'PDF'),
(37, 'admin', 'Cara Belanja'),
(38, 'admin', 'Info Pengiriman'),
(39, 'admin', 'FAQ'),
(40, 'admin', 'Syarat & Ketentuan'),
(41, 'admin', 'How To Order'),
(42, 'admin', 'Event'),
(43, 'admin', 'Homepage'),
(44, 'admin', 'Brand'),
(45, 'admin', 'Become an Agent'),
(46, 'admin', 'Where to Buy'),
(47, 'admin', 'Tentang Kami'),
(48, 'admin', 'Belanja Online'),
(49, 'admin', 'Merek'),
(50, 'admin', 'Lokasi'),
(51, 'admin', 'Comment'),
(52, 'admin', 'Events'),
(53, 'admin', 'About'),
(54, 'admin', 'Solusi'),
(55, 'admin', 'Artikel'),
(56, 'admin', 'Karir'),
(57, 'admin', 'Our Process'),
(58, 'admin', 'Investor Relations'),
(59, 'admin', 'Member List'),
(60, 'admin', 'Market'),
(61, 'admin', 'Kategori Usaha'),
(62, 'admin', 'Promo Member'),
(63, 'admin', 'Master Mitra'),
(64, 'admin', 'Event Member'),
(65, 'admin', 'Master Satuan'),
(66, 'admin', 'Member'),
(67, 'admin', 'Master Komunitas'),
(68, 'admin', 'Market Member'),
(69, 'admin', 'Page Pengumuman'),
(70, 'admin', 'Cari Member'),
(71, 'admin', 'Jual Member'),
(72, 'admin', 'Data Pengumuman'),
(73, 'admin', 'TUGAS'),
(74, 'admin', 'Kepentingan Master'),
(75, 'admin', 'Member Master'),
(76, 'admin', 'Tugas Master');

-- --------------------------------------------------------

--
-- Struktur untuk view `view_blog`
--
DROP TABLE IF EXISTS `view_blog`;

CREATE VIEW `view_blog`  AS  select `pg_blog`.`id` AS `id`,`pg_blog`.`topik_id` AS `topik_id`,`pg_blog`.`image` AS `image`,`pg_blog`.`active` AS `active`,`pg_blog`.`date_input` AS `date_input`,`pg_blog`.`date_update` AS `date_update`,`pg_blog`.`insert_by` AS `insert_by`,`pg_blog`.`last_update_by` AS `last_update_by`,`pg_blog`.`writer` AS `writer`,`pg_blog_description`.`id` AS `id2`,`pg_blog_description`.`blog_id` AS `blog_id`,`pg_blog_description`.`language_id` AS `language_id`,`pg_blog_description`.`title` AS `title`,`pg_blog_description`.`content` AS `content`,`pg_blog_description`.`quote` AS `quote` from (`pg_blog` join `pg_blog_description` on((`pg_blog`.`id` = `pg_blog_description`.`blog_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gal_gallery`
--
ALTER TABLE `gal_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gal_gallery_description`
--
ALTER TABLE `gal_gallery_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indeks untuk tabel `gal_gallery_image`
--
ALTER TABLE `gal_gallery_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`gallery_id`);

--
-- Indeks untuk tabel `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `me_member`
--
ALTER TABLE `me_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `pg_blog`
--
ALTER TABLE `pg_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pg_blog_description`
--
ALTER TABLE `pg_blog_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting_description`
--
ALTER TABLE `setting_description`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menu_akses`
--
ALTER TABLE `tb_menu_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tugas_kepentingan`
--
ALTER TABLE `tb_tugas_kepentingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tugas_lists`
--
ALTER TABLE `tb_tugas_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `tt_text`
--
ALTER TABLE `tt_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT untuk tabel `gal_gallery`
--
ALTER TABLE `gal_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gal_gallery_description`
--
ALTER TABLE `gal_gallery_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gal_gallery_image`
--
ALTER TABLE `gal_gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `me_member`
--
ALTER TABLE `me_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pg_blog`
--
ALTER TABLE `pg_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pg_blog_description`
--
ALTER TABLE `pg_blog_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `setting_description`
--
ALTER TABLE `setting_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_menu_akses`
--
ALTER TABLE `tb_menu_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_tugas_kepentingan`
--
ALTER TABLE `tb_tugas_kepentingan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_tugas_lists`
--
ALTER TABLE `tb_tugas_lists`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tt_text`
--
ALTER TABLE `tt_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
