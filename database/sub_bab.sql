-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 08.42
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_bab`
--

CREATE TABLE `sub_bab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) NOT NULL,
  `nama_bab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_bab`
--

INSERT INTO `sub_bab` (`id`, `bab_id`, `nama_bab`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menguasai karakteristik peserta didik', NULL, NULL),
(2, 1, 'Menguasai teori belajar dan prinsip-prinsip belajar yang mendidik', NULL, NULL),
(3, 1, 'Pengembangan kurikulum', NULL, NULL),
(4, 1, 'Kegiatan belajar yang mendidik', NULL, NULL),
(5, 1, 'Pengembangan potensi peserta didik', NULL, NULL),
(6, 1, 'Komunikasi dengan peserta didik', NULL, NULL),
(7, 1, 'Penilaian dan evaluasi', NULL, NULL),
(8, 2, 'Bertindak sesuai norma agama, hukum, sosial, dan kebudayaan nasional', NULL, NULL),
(9, 2, 'Menunjukkan pribadi yang dewasa dan teladan', NULL, NULL),
(10, 2, 'Etos kerja, tanggung jawab yang tinggi dan rasa bangga menjadi seorang guru', NULL, NULL),
(11, 3, 'Bersikap inklusif, bertindak objektif serta tidak diskriminatif', NULL, NULL),
(12, 3, 'Komunikasi dengan sesama guru, tenaga kependidikan, orang tua, peserta didik, dan masyarakat', NULL, NULL),
(13, 4, 'Penguasaan materi , struktur, konsep dan pola pikir keilmuan yang mendukung mata pelajaran yang dimampu', NULL, NULL),
(14, 4, 'Pengembangan keprofesionalan melalui tindakan yang reflektif', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sub_bab`
--
ALTER TABLE `sub_bab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sub_bab`
--
ALTER TABLE `sub_bab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
