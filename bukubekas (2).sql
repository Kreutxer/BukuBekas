-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2023 pada 07.53
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukubekas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `cover` varchar(300) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `harga` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_user`, `cover`, `judul`, `deskripsi`, `harga`) VALUES
(43, 2, '63f45b178cdba.jpeg', 'Struktur Data Seymour', 'Struktur Data Seymour Lipschutz biasanya dipakai sebagai pedoman mata kuliah struktur data ', 75000),
(44, 2, '63f45bb0a9933.jpeg', 'HTML, CSS, javascript dasar', 'dipakai sebagai pedoman mata kuliah web dasar untuk mahasiswa teknik informatika', 45000),
(45, 5, '63f45d470c767.jpeg', 'Algoritma & Struktur Data C++', 'Program dasar & struktur data menggunakan c++', 130000),
(46, 5, '63f45ed952878.jpeg', 'Matematika 1', 'Berisi Soal Dan Pembahasan matematika dasar, biasanya dipakai sebagai pedoman mata kuliah kalkulus 1', 58000),
(47, 5, '63f45f3f32b92.jpeg', 'Metode Statistika sudjana', 'Metode Statistika karya prof sudjana', 45000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorit`
--

CREATE TABLE `favorit` (
  `id_favorit` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `id_buku` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama`, `password`, `no_telp`, `level`) VALUES
(1, 'Arman', 'Achmad sumargo', '123', '081222672843', 'admin'),
(2, 'udin', 'Sedunia', '123', '081222672843', 'user'),
(4, '123', 'Achmad Juliarman', 'Rudi Berry', '081222672843', 'user'),
(5, 'Papeng', 'Aldi Septiadi', '123', '081222672843', 'user'),
(6, '123', 'maman', NULL, '081222672843', 'admin'),
(7, 'maman', 'maman', '123', '081222672843', 'admin'),
(8, 'aldi', 'aldi papeng bucitreuk', '123', '081222672843', 'user'),
(9, 'ucok', 'ucok', '123', '09888221', 'user'),
(10, 'min', 'ucok', '123', '123123123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id_favorit`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id_favorit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
