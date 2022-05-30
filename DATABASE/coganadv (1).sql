-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 11.23
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
(2000006, 1000007, 8000001, 'Rp. 14.000', '');

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
(7000007, 2, 'BILL-042021-001', '2', '03', '2021', '04', '2021-04-03');

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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_barang_supplier`
--
ALTER TABLE `tb_barang_supplier`
  ADD PRIMARY KEY (`id_barang_supplier`),
  ADD KEY `id_barang_fk_bs` (`id_barang`),
  ADD KEY `id_supplier_fk` (`id_supplier`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang_fk_pj` (`id_produk`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

--
-- AUTO_INCREMENT untuk tabel `tb_barang_supplier`
--
ALTER TABLE `tb_barang_supplier`
  MODIFY `id_barang_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000007;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7000008;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8000009;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang_supplier`
--
ALTER TABLE `tb_barang_supplier`
  ADD CONSTRAINT `id_barang_fk_bs` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_supplier_fk` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
