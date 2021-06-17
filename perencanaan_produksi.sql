-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 16.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perencanaan_produksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int(50) NOT NULL,
  `jenis_bahan_baku` varchar(255) NOT NULL,
  `jumlah_bahan_baku` int(50) NOT NULL,
  `tanggal_masuk_bahan_baku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `jenis_bahan_baku`, `jumlah_bahan_baku`, `tanggal_masuk_bahan_baku`) VALUES
(1, 'kayu pinus', 5, '15/06/2021'),
(2, 'karton', 3, '10/06/2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin_produk_jadi`
--

CREATE TABLE `mesin_produk_jadi` (
  `id_mesin_produk_jadi` int(50) NOT NULL,
  `id_operator` int(50) NOT NULL,
  `merk_mesin` varchar(255) NOT NULL,
  `tanggal_maintenance` varchar(255) NOT NULL,
  `nama_mesin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mesin_produk_jadi`
--

INSERT INTO `mesin_produk_jadi` (`id_mesin_produk_jadi`, `id_operator`, `merk_mesin`, `tanggal_maintenance`, `nama_mesin`) VALUES
(1, 2, 'krisbow', '12/06/2021', 'circular'),
(2, 2, 'makita', '19/06/2021', 'scroll saw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin_produk_setengah_jadi`
--

CREATE TABLE `mesin_produk_setengah_jadi` (
  `id_mesin_produk_setengah_jadi` int(50) NOT NULL,
  `id_operator` int(50) NOT NULL,
  `id_bahan_baku` int(50) NOT NULL,
  `merk_mesin` varchar(255) NOT NULL,
  `tanggal_maintenance` varchar(255) NOT NULL,
  `nama_mesin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mesin_produk_setengah_jadi`
--

INSERT INTO `mesin_produk_setengah_jadi` (`id_mesin_produk_setengah_jadi`, `id_operator`, `id_bahan_baku`, `merk_mesin`, `tanggal_maintenance`, `nama_mesin`) VALUES
(1, 1, 1, 'kris', '15/06/2021', 'circular'),
(2, 2, 2, 'krisbow', '15/06/2021', 'scroll saw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(50) NOT NULL,
  `nama_operator` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `jam_kerja_operator` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `jenis_pekerjaan`, `jam_kerja_operator`) VALUES
(1, 'Abidin', 'mengamplas', 5),
(2, 'Hafidz', 'memotong', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_jadi`
--

CREATE TABLE `produk_jadi` (
  `id_produk_jadi` int(50) NOT NULL,
  `kode_produksi` varchar(255) NOT NULL,
  `id_produk_setengah_jadi` int(50) NOT NULL,
  `id_mesin_produk_jadi` int(50) NOT NULL,
  `nama_produk_jadi` varchar(255) NOT NULL,
  `jumlah_produk_jadi` int(50) NOT NULL,
  `tanggal_produk_jadi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_jadi`
--

INSERT INTO `produk_jadi` (`id_produk_jadi`, `kode_produksi`, `id_produk_setengah_jadi`, `id_mesin_produk_jadi`, `nama_produk_jadi`, `jumlah_produk_jadi`, `tanggal_produk_jadi`) VALUES
(1, '102010', 1, 1, 'perakhir', 200, '20/10/2010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_setengah_jadi`
--

CREATE TABLE `produk_setengah_jadi` (
  `id_produk_setengah_jadi` int(50) NOT NULL,
  `id_mesin_produk_setengah_jadi` int(50) NOT NULL,
  `nama_produk_setengah_jadi` varchar(255) NOT NULL,
  `jumlah_produk_setengah_jadi` int(50) NOT NULL,
  `tanggal_produk_setengah_jadi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_setengah_jadi`
--

INSERT INTO `produk_setengah_jadi` (`id_produk_setengah_jadi`, `id_mesin_produk_setengah_jadi`, `nama_produk_setengah_jadi`, `jumlah_produk_setengah_jadi`, `tanggal_produk_setengah_jadi`) VALUES
(1, 2, 'visco', 2, '15/06/2021'),
(2, 2, 'visco', 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$fYu2MgoMC27KVk2RdwMHhOCUv02gHjhC517lLDn6aW864FbJ6z47q');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indeks untuk tabel `mesin_produk_jadi`
--
ALTER TABLE `mesin_produk_jadi`
  ADD PRIMARY KEY (`id_mesin_produk_jadi`),
  ADD KEY `id_operator` (`id_operator`);

--
-- Indeks untuk tabel `mesin_produk_setengah_jadi`
--
ALTER TABLE `mesin_produk_setengah_jadi`
  ADD PRIMARY KEY (`id_mesin_produk_setengah_jadi`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`),
  ADD KEY `id_operator` (`id_operator`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indeks untuk tabel `produk_jadi`
--
ALTER TABLE `produk_jadi`
  ADD PRIMARY KEY (`id_produk_jadi`),
  ADD KEY `id_mesin_produk_jadi` (`id_mesin_produk_jadi`),
  ADD KEY `id_produk_setengah_jadi` (`id_produk_setengah_jadi`);

--
-- Indeks untuk tabel `produk_setengah_jadi`
--
ALTER TABLE `produk_setengah_jadi`
  ADD PRIMARY KEY (`id_produk_setengah_jadi`),
  ADD KEY `id_mesin_produk_setengah_jadi` (`id_mesin_produk_setengah_jadi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan_baku` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mesin_produk_jadi`
--
ALTER TABLE `mesin_produk_jadi`
  MODIFY `id_mesin_produk_jadi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mesin_produk_setengah_jadi`
--
ALTER TABLE `mesin_produk_setengah_jadi`
  MODIFY `id_mesin_produk_setengah_jadi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk_jadi`
--
ALTER TABLE `produk_jadi`
  MODIFY `id_produk_jadi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk_setengah_jadi`
--
ALTER TABLE `produk_setengah_jadi`
  MODIFY `id_produk_setengah_jadi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mesin_produk_jadi`
--
ALTER TABLE `mesin_produk_jadi`
  ADD CONSTRAINT `mesin_produk_jadi_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mesin_produk_setengah_jadi`
--
ALTER TABLE `mesin_produk_setengah_jadi`
  ADD CONSTRAINT `id_bahan_baku` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_operator` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk_jadi`
--
ALTER TABLE `produk_jadi`
  ADD CONSTRAINT `id_mesin_produk_jadi` FOREIGN KEY (`id_mesin_produk_jadi`) REFERENCES `mesin_produk_jadi` (`id_mesin_produk_jadi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_produk_setengah_jadi` FOREIGN KEY (`id_produk_setengah_jadi`) REFERENCES `produk_setengah_jadi` (`id_produk_setengah_jadi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk_setengah_jadi`
--
ALTER TABLE `produk_setengah_jadi`
  ADD CONSTRAINT `id_mesin_produk_setengah_jadi` FOREIGN KEY (`id_mesin_produk_setengah_jadi`) REFERENCES `mesin_produk_setengah_jadi` (`id_mesin_produk_setengah_jadi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
