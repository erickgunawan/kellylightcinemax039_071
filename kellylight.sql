-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 05.04
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kellylight`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(2, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(1, 5),
(2, 6),
(2, 6),
(2, 10),
(2, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'tirtafajar@gmail.com', 1, '2021-01-07 01:00:26', 0),
(2, '::1', 'fajartirta0016', 4, '2021-01-07 01:20:57', 0),
(3, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 01:29:30', 1),
(4, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 02:43:21', 1),
(5, '::1', 'admin', NULL, '2021-01-07 02:53:13', 0),
(6, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 03:20:04', 1),
(7, '::1', 'erick@gmail.com', 6, '2021-01-07 03:22:20', 1),
(8, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 03:22:35', 1),
(9, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 03:34:01', 1),
(10, '::1', 'erick@gmail.com', 6, '2021-01-07 03:34:44', 1),
(11, '::1', 'erickgnwnt@gmail.com', NULL, '2021-01-07 05:33:17', 0),
(12, '::1', 'erickgnwnt004', NULL, '2021-01-07 05:33:25', 0),
(13, '::1', 'erikgunawan123321@gmail.com', 7, '2021-01-07 05:33:30', 1),
(14, '::1', 'tirtafajar@gmail.com', NULL, '2021-01-07 06:19:08', 0),
(15, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 06:19:19', 1),
(16, '::1', 'erick@gmail.com', 6, '2021-01-07 06:23:25', 1),
(17, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 06:35:12', 1),
(18, '::1', 'erick@gmail.com', 6, '2021-01-07 06:35:28', 1),
(19, '::1', 'erick@gmail.com', 6, '2021-01-07 09:06:50', 1),
(20, '::1', 'erick@gmail.com', 6, '2021-01-07 09:43:14', 1),
(21, '::1', 'tirtafajar@gmail.com', NULL, '2021-01-07 18:47:19', 0),
(22, '::1', 'erikgunawan43@gmail.com', 8, '2021-01-07 18:48:27', 1),
(23, '::1', 'erikgunawan43@gmail.com', 8, '2021-01-07 19:29:21', 1),
(24, '::1', 'erick', NULL, '2021-01-07 19:30:35', 0),
(25, '::1', 'erick', NULL, '2021-01-07 19:30:42', 0),
(26, '::1', 'erikgunawan43@gmail.com', 8, '2021-01-07 19:30:58', 1),
(27, '::1', 'erick', NULL, '2021-01-07 19:39:59', 0),
(28, '::1', 'erikgunawan43@gmail.com', 8, '2021-01-07 19:40:05', 1),
(29, '::1', 'erick123123', NULL, '2021-01-07 20:34:06', 0),
(30, '::1', 'erick123123', NULL, '2021-01-07 20:34:15', 0),
(31, '::1', 'erick123123', NULL, '2021-01-07 20:34:43', 0),
(32, '::1', 'tirta@gmail.com', 9, '2021-01-07 20:35:40', 1),
(33, '::1', 'tirtafajar@gmail.com', 5, '2021-01-07 21:13:51', 1),
(34, '::1', 'erick@gmail.com', 6, '2021-01-07 21:51:53', 1),
(35, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 00:38:58', 1),
(36, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 00:42:38', 1),
(37, '::1', 'erick@gmail.com', 6, '2021-01-08 00:42:48', 1),
(38, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 00:43:05', 1),
(39, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 00:47:38', 1),
(40, '::1', 'erick@gmail.com', 6, '2021-01-08 00:49:01', 1),
(41, '::1', 'erikgunawan3332@gmail.com', 10, '2021-01-08 00:50:40', 1),
(42, '::1', 'erikgunawan3332@gmail.com', 10, '2021-01-08 00:51:09', 1),
(43, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 00:52:56', 1),
(44, '::1', 'erick@gmail.com', 6, '2021-01-08 00:58:12', 1),
(45, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 01:05:11', 1),
(46, '::1', 'erick@gmail.com', 6, '2021-01-08 01:06:09', 1),
(47, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 01:07:41', 1),
(48, '::1', 'erick@gmail.com', 6, '2021-01-08 01:08:11', 1),
(49, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 01:15:18', 1),
(50, '::1', 'erick@gmail.com', 6, '2021-01-08 01:15:48', 1),
(51, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 01:29:24', 1),
(52, '::1', 'erikgunawan3332@gmail.com', 10, '2021-01-08 01:30:43', 1),
(53, '::1', 'tirtafajar@gmail.com', 5, '2021-01-08 02:03:38', 1),
(54, '::1', 'erikgunawan3332@gmail.com', 10, '2021-01-08 02:09:59', 1),
(55, '::1', 'erick@gmail.com', 6, '2021-01-10 04:57:36', 1),
(56, '::1', 'erick@gmail.com', 6, '2021-01-10 04:57:36', 1),
(57, '::1', 'tirtafajar@gmail.com', 5, '2021-01-10 05:46:15', 1),
(58, '::1', 'erick@gmail.com', 6, '2021-01-10 07:01:06', 1),
(59, '::1', 'tirtafajar@gmail.com', 5, '2021-01-10 07:01:32', 1),
(60, '::1', 'tirtafajar@gmail.com', 5, '2021-01-10 21:37:29', 1),
(61, '::1', 'erick@gmail.com', 6, '2021-01-10 21:37:54', 1),
(62, '::1', 'tirtafajar@gmail.com', NULL, '2021-01-10 21:59:44', 0),
(63, '::1', 'tirtafajar@gmail.com', 5, '2021-01-10 21:59:52', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'admin', 'manage data'),
(2, 'user', 'buy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cinema`
--

CREATE TABLE `cinema` (
  `id_cinema` int(10) NOT NULL,
  `nama_cinema` varchar(50) NOT NULL,
  `theatre` tinytext NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cinema`
--

INSERT INTO `cinema` (`id_cinema`, `nama_cinema`, `theatre`, `foto`) VALUES
(1, 'Paaramounttt', 'Cinema 1', '/img/theatre/cinema1.PNG'),
(3, 'Belmont', 'Cinema 2', '/img/theatre/cinema2.PNG'),
(4, 'Genesis', 'Cinema 3', '/img/theatre/cinema3.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(4) NOT NULL,
  `nama_film` varchar(30) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `direktor` varchar(30) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `harga` int(6) NOT NULL,
  `poster` tinytext NOT NULL,
  `sinopsis` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `cast`, `direktor`, `durasi`, `harga`, `poster`, `sinopsis`) VALUES
(1, 'Money Heist', 'Erick Gunawan, Ata yogaswara', 'Muhammad', '125 menit', 75000, '/img/poster/moneyheist.PNG', 'Sekelompok perampok yang tidak biasa mencoba melakukan perampokan paling sempurna dalam sejarah Spanyol - mencuri 2,4 miliar euro dari Royal Mint Spanyol.dibintangi oleh ursula corbero,alvaro morte,dan itziar ituno.Money Heist merupakan series Spanyol yang tayang pertama kali pada tahun 2017. Film ini menceritakan tentang sebuah perampokan berencana di badan percetakan uang di Spanyol'),
(5, 'Iron Man', 'FauzAN', 'Farazzz', '210 Menit', 80000, '/img/poster/ironman_1.PNG', '\r\nFilm Iron Man ini merupakan film yang diangkat dari tokoh  Marvel yang disutradarai oleh John Favreau. Film yang bergenre action ini di mainkan oleh bintang hollywood ternama, Robert Downey,Jr. Ia juga pernah bermain dalam Zodiac dan Avengers. Film ini rilis pada 2 Mei 2008.\r\n\r\nFilm ini menceritakan tentang awal mula Iron Man dibuat. Tony Stark (Robert Downey,Jr.) adalah pemilik dari Stark Industries, Kontraktor Militer utama yang diwarisi dari mendiang ayahnya Howard Stark. Ia adalah penemu yang jenius, ajaib dan juga playboy. Suatu hari ia terbang ke Afghanistan untuk demonstrasi senjata mematikan buatannya \"Jericho\". Akan tetapi keadaan mulai kacau, Mobil militer yang ia kendarai diserang oleh teroris. Ia diculik secara paksa oleh sekawanan teroris dengan tubuh terluka akibat pecahan pelur'),
(6, 'Prison Break', 'Rauf', 'Faraz', '120 Menit', 75000, '/img/poster/prisonbreak_1.PNG', 'Prison Break mengisahkan Michael Scofield yang berencana kabur dari Penjara Negara Bagian Fox River. Lincoln Burrows (Dominic Purcell) ditangkap pihak berwajib atas tuduhan pembunuhan terhadap Terrence Steadman, adik Wakil Presiden AS. Atas perbuatannya, Lincoln diganjar hukuman mati.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Sinopsis Prison Break, Rencana Kabur dari Penjara, Tayang di Netflix\", Klik untuk baca: ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jam` varchar(9) NOT NULL,
  `stock` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jam`, `stock`) VALUES
(1, '13:00', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1609955457, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `pembayaran` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_film` int(4) NOT NULL,
  `nama_film` varchar(30) NOT NULL,
  `id_cinema` int(10) DEFAULT NULL,
  `nama_cinema` varchar(20) NOT NULL,
  `totalharga` int(6) NOT NULL,
  `pembelian` int(11) NOT NULL,
  `jam` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `pembayaran`, `id`, `username`, `id_film`, `nama_film`, `id_cinema`, `nama_cinema`, `totalharga`, `pembelian`, `jam`) VALUES
(8, 'OVO', 9, 'tirtafajar3321', 1, 'Money Heist', NULL, 'Paaramounttt', 75000, 1, ''),
(9, 'PAYPAL', 6, 'erick123123', 1, 'Money Heist', NULL, 'Paaramounttt', 150000, 2, ''),
(10, 'PAYPAL', 6, 'erick123123', 1, 'Money Heist', NULL, 'Paaramounttt', 150000, 2, ''),
(11, 'PAYPAL', 6, 'erick123123', 2, 'Prison Break', NULL, 'Paaramounttt', 170000, 2, ''),
(12, 'OVO', 10, 'erickgunawann', 5, 'Iron Man', NULL, 'Belmont', 240000, 3, ''),
(13, 'OVO', 10, 'erickgunawann', 5, 'Iron Man', NULL, 'Belmont', 240000, 3, ''),
(14, 'OVO', 6, 'erick123123', 1, 'Money Heist', NULL, 'Paaramounttt', 150000, 2, ''),
(15, 'PAYPAL', 10, 'erickgunawann', 1, 'Money Heist', NULL, 'Paaramounttt', 150000, 2, ''),
(16, 'PAYPAL', 6, 'erick123123', 5, 'Iron Man', NULL, 'Paaramounttt', 240000, 3, ''),
(17, 'DANA', 6, 'erick123123', 1, 'Money Heist', NULL, 'Belmont', 225000, 3, '15:30'),
(18, 'DANA', 6, 'erick123123', 5, 'Iron Man', NULL, 'Belmont', 320000, 4, '13:00'),
(19, 'OVO', 6, 'erick123123', 5, 'Iron Man', NULL, 'Genesis', 160000, 2, '15:30'),
(20, 'DANA', 6, 'erick123123', 5, 'Iron Man', NULL, 'Paaramounttt', 320000, 4, '13:00'),
(21, 'DANA', 6, 'erick123123', 5, 'Iron Man', NULL, 'Paaramounttt', 320000, 4, '15:30'),
(22, 'DANA', 6, 'erick123123', 5, 'Iron Man', NULL, 'Belmont', 80000, 1, '13:00'),
(23, 'DANA', 6, 'erick123123', 5, 'Iron Man', NULL, 'Belmont', 240000, 3, '13:00');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `Update Stock` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE jadwal SET stock=stock-NEW.pembelian
    	WHERE id_jadwal;
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `alamat`, `nohp`) VALUES
(1, 'Tirtafajar Y', 'tirtafajar@gmail.com', '123456', 'titimplik', '081231232'),
(6, 'Fauzan', 'fauzan@gmail.com', '123456', '', '08123727381'),
(7, 'erick', 'erickgwntn@gmail.com', 'erikaja123321', '', '089232329'),
(8, 'erickkk', 'erickgwnt22@gmail.com', '123332', '', '081320593533');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'fajartirta@gmail.com', 'fajartirta0016', '$2y$10$ZxKWJ.1QvHPoF6p0EM14Oe36xRN1pmjmpPxPv2JgtQYi6s/EjTKSa', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-01-07 01:17:03', '2021-01-07 01:17:03', NULL),
(5, 'tirtafajar@gmail.com', 'tirtafajar0016', '$2y$10$bTk8D2.a3KEZ/Md47G2qAerO77hPMSd2T0TqJxWx.t4JrFAMtL0b2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 01:29:11', '2021-01-07 01:29:11', NULL),
(6, 'erick@gmail.com', 'erick123123', '$2y$10$8PFsvqr2IWUPEG2n5OLfjeRfaKxt504B6d/ihREPMTqtvkZq9Jmm2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 03:20:56', '2021-01-07 03:20:56', NULL),
(7, 'erikgunawan123321@gmail.com', 'erickgnwnt04', '$2y$10$oZJhjvsjOycE3k5kAnjicuKDHLLh99aKwtpzwjqHAZR0b40Vy4nG6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 05:33:05', '2021-01-07 05:33:05', NULL),
(8, 'erikgunawan43@gmail.com', 'erick', '$2y$10$Z53Zqq3byGwNKsNFlXXjXuWuU.MKEArXwh.oJhy6Haf0IO1hHYI6W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 18:48:20', '2021-01-07 18:48:20', NULL),
(9, 'tirta@gmail.com', 'tirtafajar3321', '$2y$10$SEHTd8pxKFwugRcCb92mCuyTbdXDjjiX.rn0mkIxTZOYL8Of92j5a', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 20:35:31', '2021-01-07 20:35:31', NULL),
(10, 'erikgunawan3332@gmail.com', 'erickgunawann', '$2y$10$PzyK0LWN.tG/fuFrfWnUWO6kDtqn3gq7xQfM1J5Xqb2nOOMr/9izy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-08 00:50:31', '2021-01-08 00:50:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id_cinema`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
