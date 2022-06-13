-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2022 pada 14.48
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
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`id`, `user_id`, `question_id`, `answer`, `kendala`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(2, 2, 2, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(3, 2, 3, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(4, 2, 4, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(5, 2, 5, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(6, 2, 6, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(7, 2, 7, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(8, 2, 8, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(9, 2, 9, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(10, 2, 10, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(11, 2, 11, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(12, 2, 12, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(13, 2, 13, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(14, 2, 14, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(15, 2, 15, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(16, 2, 16, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(17, 2, 17, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(18, 2, 18, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(19, 2, 19, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(20, 2, 20, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(21, 2, 21, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(22, 2, 22, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(23, 2, 23, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(24, 2, 24, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(25, 2, 25, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(26, 2, 26, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(27, 2, 27, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(28, 2, 28, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(29, 2, 29, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(30, 2, 30, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(31, 2, 31, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(32, 2, 32, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(33, 2, 33, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(34, 2, 34, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(35, 2, 35, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(36, 2, 36, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(37, 2, 37, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(38, 2, 38, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(39, 2, 39, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(40, 2, 40, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(41, 2, 41, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(42, 2, 42, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(43, 2, 43, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(44, 2, 44, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(45, 2, 45, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(46, 2, 46, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(47, 2, 47, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(48, 2, 48, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(49, 2, 49, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(50, 2, 50, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(51, 2, 51, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(52, 2, 52, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(53, 2, 53, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(54, 2, 54, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(55, 2, 55, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(56, 2, 56, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(57, 2, 57, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(58, 2, 58, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(59, 2, 59, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(60, 2, 60, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(61, 2, 61, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(62, 2, 62, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(63, 2, 63, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(64, 2, 64, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(65, 2, 65, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(66, 2, 66, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(67, 2, 67, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(68, 2, 68, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(69, 2, 69, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(70, 2, 70, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(71, 2, 71, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(72, 2, 72, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(73, 2, 73, 'Tidak Pernah', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(74, 2, 74, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(75, 2, 75, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(76, 2, 76, 'Selalu', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(77, 2, 77, 'Sering', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(78, 2, 78, 'Jarang', 'lorem ipsum', '2022-05-26 05:42:22', '2022-05-26 05:42:22'),
(79, 2, 79, 'lorem', 'ipsum', '2022-05-26 05:45:41', '2022-05-26 05:45:41'),
(80, 2, 79, 'lorem', 'ipsum', '2022-05-26 05:45:58', '2022-05-26 05:45:58'),
(81, 2, 79, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(82, 2, 80, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(83, 2, 81, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(84, 2, 82, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(85, 2, 83, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(86, 2, 84, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(87, 2, 85, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(88, 2, 86, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(89, 2, 87, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(90, 2, 88, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(91, 2, 89, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(92, 2, 90, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(93, 2, 91, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19'),
(94, 2, 92, 'lorem', 'ipsum', '2022-05-26 05:47:19', '2022-05-26 05:47:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
