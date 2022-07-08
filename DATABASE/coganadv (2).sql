-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 05.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coganadv`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(56, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 12:27:25', 1),
(57, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 12:27:43', 1),
(58, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 12:28:09', 1),
(59, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:41:31', 1),
(60, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:42:28', 1),
(61, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:42:35', 1),
(62, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:45:58', 1),
(63, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:46:17', 1),
(64, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:46:28', 1),
(65, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:49:58', 1),
(66, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:55:06', 1),
(67, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:55:18', 1),
(68, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:55:25', 1),
(69, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:55:33', 1),
(70, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:55:41', 1),
(71, '::1', 'aleandro1312@gmail.com', 2, '2021-03-01 13:56:22', 1),
(72, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 13:58:52', 1),
(73, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 14:15:45', 1),
(74, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 14:16:17', 1),
(75, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 14:16:41', 1),
(76, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 14:17:03', 1),
(77, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 14:17:31', 1),
(78, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 14:17:47', 1),
(79, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-01 21:23:03', 1),
(80, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-04 15:35:32', 1),
(81, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-05 22:36:46', 1),
(82, '::1', 'aleandro', NULL, '2021-03-06 08:25:03', 0),
(83, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-06 08:25:13', 1),
(84, '::1', 'aleandro16si@mahasiswa.pcr.ac.id', 4, '2021-03-06 10:16:17', 1),
(85, '::1', 'aleandro1312@gmail.com', 2, '2021-03-10 03:14:22', 1),
(86, '::1', 'aleandro1312@gmail.com', 2, '2021-03-16 04:08:35', 1),
(87, '::1', 'aleandro1312@gmail.com', 2, '2021-03-31 04:45:57', 1),
(88, '::1', 'admin', NULL, '2021-04-02 01:55:56', 0),
(89, '::1', 'aleandro1312@gmail.com', 2, '2021-04-02 01:57:47', 1),
(90, '::1', 'aleandro1312@gmail.com', 2, '2021-04-02 08:11:47', 1),
(91, '::1', 'aleandro1312@gmail.com', 2, '2021-04-03 11:14:40', 1),
(92, '::1', 'admin', NULL, '2021-06-11 09:31:17', 0),
(93, '::1', 'admin', NULL, '2021-06-11 09:32:12', 0),
(94, '::1', 'aleandro1312@gmail.com', 2, '2021-06-11 09:32:44', 1),
(95, '::1', 'aleandro1312@gmail.com', 2, '2021-06-20 22:44:55', 1),
(96, '::1', 'aleandro1312@gmail.com', 2, '2021-07-04 22:35:27', 1),
(97, '::1', 'aleandro1312@gmail.com', 2, '2021-07-14 06:36:59', 1),
(98, '::1', 'aleandro1312@gmail.com', 2, '2021-08-11 21:36:47', 1),
(99, '::1', 'aleandro1312@gmail.com', 2, '2021-09-01 22:27:14', 1),
(100, '::1', 'aleandro1312@gmail.com', 2, '2021-11-11 05:12:19', 1),
(101, '::1', 'admin', NULL, '2022-03-12 04:26:44', 0),
(102, '::1', 'admin', NULL, '2022-03-12 04:26:55', 0),
(103, '::1', 'aleandro1312@gmail.com', 2, '2022-03-12 04:27:00', 1),
(104, '::1', 'aleandro1312@gmail.com', 2, '2022-03-12 09:54:43', 1),
(105, '::1', 'aleandro1312@gmail.com', 2, '2022-03-12 11:55:28', 1),
(106, '::1', 'aleandro1312@gmail.com', 2, '2022-03-13 01:52:00', 1),
(107, '::1', 'aleandro1312@gmail.com', 2, '2022-03-30 09:55:25', 1),
(108, '::1', 'admin', NULL, '2022-04-07 04:36:14', 0),
(109, '::1', 'aleandro1312@gmail.com', 2, '2022-04-07 04:36:22', 1),
(110, '::1', 'admin', NULL, '2022-04-07 04:37:30', 0),
(111, '::1', 'aleandro1312@gmail.com', 2, '2022-04-07 04:37:36', 1),
(112, '::1', 'aleandro1312@gmail.com', 2, '2022-04-07 08:30:40', 1),
(113, '::1', 'admin', NULL, '2022-05-30 08:54:44', 0),
(114, '::1', 'aleandro1312@gmail.com', 2, '2022-05-30 09:12:25', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1614606267, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok_barang`) VALUES
(1000007, 'Gagang Stampel Persegi (4x4)', 4),
(1000010, 'Peniti', 0),
(1000011, 'papan nama', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_produk`
--

CREATE TABLE `tb_barang_produk` (
  `id_barang_produk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kebutuhan` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang_produk`
--

INSERT INTO `tb_barang_produk` (`id_barang_produk`, `id_barang`, `id_produk`, `kebutuhan`, `satuan`) VALUES
(11, 1000007, 1, 1, 'btr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_supplier`
--

CREATE TABLE `tb_barang_supplier` (
  `id_barang_supplier` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `link_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang_supplier`
--

INSERT INTO `tb_barang_supplier` (`id_barang_supplier`, `id_barang`, `id_supplier`, `harga_barang`, `link_barang`) VALUES
(2000006, 1000007, 8000001, 'Rp. 14.000', ''),
(2000007, 1000007, 8000001, 'Rp. 13.000', ''),
(2000008, 1000010, 8000001, 'Rp. 500', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cart_pb`
--

CREATE TABLE `tb_cart_pb` (
  `id_cart_pb` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_sampai` varchar(255) DEFAULT NULL,
  `total_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cart_pj`
--

CREATE TABLE `tb_cart_pj` (
  `id_cart_pj` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cart_pj`
--

INSERT INTO `tb_cart_pj` (`id_cart_pj`, `id_produk`, `jumlah`, `tgl`) VALUES
(4000019, 2, 7, '22-03-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_faktur` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `pb_tanggal` varchar(255) NOT NULL,
  `pb_tgl_tiba` varchar(255) NOT NULL,
  `pb_laporan` date NOT NULL,
  `pb_bulan` varchar(255) NOT NULL,
  `pb_tahun` varchar(255) NOT NULL,
  `pb_jumlah` varchar(255) NOT NULL,
  `pb_total_cost` varchar(255) NOT NULL,
  `pb_status_kirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_bill` varchar(255) NOT NULL,
  `jumlah_penjualan` varchar(255) NOT NULL,
  `pj_tanggal` varchar(255) NOT NULL,
  `pj_tahun` varchar(255) NOT NULL,
  `pj_bulan` varchar(255) NOT NULL,
  `pj_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_produk`, `id_bill`, `jumlah_penjualan`, `pj_tanggal`, `pj_tahun`, `pj_bulan`, `pj_laporan`) VALUES
(7000007, 2, 'BILL-042021-001', '2', '03', '2021', '04', '2021-04-03'),
(7000012, 2, 'BILL-032022-001', '2', '13', '2022', '03', '2022-03-13'),
(7000013, 2, 'BILL-032022-002', '2', '13', '2022', '03', '2022-03-13'),
(7000014, 2, 'BILL-032022-003', '2', '13', '2022', '03', '2022-03-13'),
(7000015, 2, 'BILL-032022-004', '2', '13', '2022', '03', '2022-03-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga_produk`) VALUES
(1, 'Stampel 4X4', 80000),
(2, 'Spanduk', 14000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat_supplier` varchar(255) DEFAULT NULL,
  `telp_supplier` varchar(255) DEFAULT NULL,
  `email_supplier` varchar(255) DEFAULT NULL,
  `link_catalog_supplier` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`, `email_supplier`, `link_catalog_supplier`) VALUES
(8000001, 'MM Stamp', 'Bekasi', '-', '-', 'https://shopee.co.id/shop/164174327/search'),
(8000002, 'Raja Stampel Bandung', 'KAB. BANDUNG BARAT - BATUJAJAR, JAWA BARAT, ID', '-', '-', 'https://shopee.co.id/shop/88345360/search'),
(8000003, 'The Miloli', 'KOTA BATAM - BATAM KOTA, KEPULAUAN RIAU, ID', '-', '-', 'https://shopee.co.id/shop/273166831/search'),
(8000004, 'Adil Grafika Medan', ' KOTA MEDAN - MEDAN TIMUR, SUMATERA UTARA, ID', '-', '-', 'https://shopee.co.id/shop/60507962/search'),
(8000005, 'Rumah Dekorasi Nusa', 'KOTA MALANG - LOWOKWARU, JAWA TIMUR, ID', '-', '-', 'https://shopee.co.id/shop/250523505/search'),
(8000007, 'Joy Acrylic', ' KOTA JAKARTA BARAT - GROGOL PETAMBURAN, DKI JAKARTA, ID', '-', '-', 'https://shopee.co.id/shop/3096188/search'),
(8000008, 'Test', 'test', '08187382732', 'terst@gmail.com', 'https://shopee.co.id/shop/3096188/search');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `email`) VALUES
('admin', 'admin', 'admin', 'aleandro1312@gmail.com'),
('ale', '', '', 'aleandro1312@gmail.com'),
('aleandroo', '', '', 'aleandro1312@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'aleandro1312@gmail.com', 'admin', 'admin', '$2y$10$4NWmSfABJ2qEtpSbAeI0KOznu4ziq1BKZvkoneb/YPzWrgzjNmKAa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-01 09:29:37', '2021-03-01 09:29:37', NULL),
(4, 'aleandro16si@mahasiswa.pcr.ac.id', 'aleandro', 'Muhammad Aleandro', '$2y$10$CakolfMrmenjWNPANWLxWua7IMrW1/1jpyU//UIuRm0x2gN8xrP.G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-01 10:47:20', '2021-03-01 10:47:20', NULL);

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
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_barang_produk`
--
ALTER TABLE `tb_barang_produk`
  ADD PRIMARY KEY (`id_barang_produk`),
  ADD KEY `id_barang_fk_sp` (`id_barang`),
  ADD KEY `id_produk_fk_sp` (`id_produk`);

--
-- Indeks untuk tabel `tb_barang_supplier`
--
ALTER TABLE `tb_barang_supplier`
  ADD PRIMARY KEY (`id_barang_supplier`),
  ADD KEY `id_barang_fk_bs` (`id_barang`),
  ADD KEY `id_supplier_fk` (`id_supplier`);

--
-- Indeks untuk tabel `tb_cart_pb`
--
ALTER TABLE `tb_cart_pb`
  ADD PRIMARY KEY (`id_cart_pb`);

--
-- Indeks untuk tabel `tb_cart_pj`
--
ALTER TABLE `tb_cart_pj`
  ADD PRIMARY KEY (`id_cart_pj`),
  ADD KEY `id_produk_fk_cpj` (`id_produk`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_barang_fk_pb` (`id_barang`),
  ADD KEY `id_supplier_fk_pb` (`id_supplier`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang_fk_pj` (`id_produk`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

--
-- AUTO_INCREMENT untuk tabel `tb_barang_produk`
--
ALTER TABLE `tb_barang_produk`
  MODIFY `id_barang_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_barang_supplier`
--
ALTER TABLE `tb_barang_supplier`
  MODIFY `id_barang_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000009;

--
-- AUTO_INCREMENT untuk tabel `tb_cart_pb`
--
ALTER TABLE `tb_cart_pb`
  MODIFY `id_cart_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3000002;

--
-- AUTO_INCREMENT untuk tabel `tb_cart_pj`
--
ALTER TABLE `tb_cart_pj`
  MODIFY `id_cart_pj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000020;

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000001;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6000001;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7000016;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8000009;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Ketidakleluasaan untuk tabel `tb_barang_produk`
--
ALTER TABLE `tb_barang_produk`
  ADD CONSTRAINT `id_barang_fk_sp` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_produk_fk_sp` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_barang_supplier`
--
ALTER TABLE `tb_barang_supplier`
  ADD CONSTRAINT `id_barang_fk_bs` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_supplier_fk` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_cart_pj`
--
ALTER TABLE `tb_cart_pj`
  ADD CONSTRAINT `id_produk_fk_cpj` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `id_barang_fk_pb` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `id_supplier_fk_pb` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
