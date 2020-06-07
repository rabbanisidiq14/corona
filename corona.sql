-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2020 pada 09.34
-- Versi server: 10.3.16-MariaDB
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
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_05_25_121907_create_table_tb_table', 1),
(7, '2020_05_25_131503_create_table_tb_user', 1),
(8, '2020_05_25_133008_create_table_tb_status', 1),
(9, '2020_05_25_143940_rename_table_tb_status', 2),
(10, '2020_05_27_233945_add_column_dibuat_oleh', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konten`
--

CREATE TABLE `tb_konten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diunggah_pada` datetime DEFAULT NULL,
  `diedit_pada` datetime DEFAULT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_konten`
--

INSERT INTO `tb_konten` (`id`, `judul`, `konten`, `diunggah_pada`, `diedit_pada`, `kategori`, `id_user`) VALUES
(1, 'Aku Siapa Aku seperti Siapa', 'Memang benar bahwasanya sebuah keajaiban didatangkan dibalik adanya kekacauan, tetapi pada dasarnya tidak menutup kemungkinan bahwa sebuah keajaiban juga secara ajaib muncul tanpa dibarengi oleh kekacauan, karena itu adalah sebenar-benarnya keajaiban', '2020-05-30 01:28:47', '2020-05-30 01:28:47', 'gajelas', 7),
(2, 'Membayangkan adanya perubahan', 'Membayangkan adanya sebuah perubahan, Sebuah perubahan, kata-kata ini dapat menginspirasi kaum muda, karena dengan perubahan, kaum muda dapat merasakan kebebasan. hubungan antara kebebasan dan perubahan, pada dasarnya mereka itu tidak berhubungan sedikitpun, namun makna yang tergeser seiring waktu, dan begitupun sejarah yang mendukung hal tersebut, menyebabkan bahwa apabila kita menginginkan kebebasan maka kita harus berani untuk berubah. Hal ini tidak dapat di perhatikan secara jelas, namun sangat terasa, yap sangat terasa..', '2020-05-30 12:58:41', '2020-05-30 21:06:19', 'gajelas', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'rabbanisidiq', 'rabbanisidiq@gmail.com', NULL, '71d6f7af764f93edcc9ccb387273af8cf3a795c5', NULL, NULL, NULL, 'admin'),
(4, 'rabbanibenz', 'rabbanibenz@gmail.com', NULL, '65ef05ae3702731100bc2993865617c6306daba6', NULL, NULL, NULL, 'member'),
(5, 'stephchan', 'stephcans@steph.com', NULL, '4d5e61b4aaf8014cc8b81a72192a3779ca901320', NULL, NULL, NULL, 'member'),
(7, 'rabbanii', 'rabbanii@gmail.com', NULL, '$2y$10$z992loxvTiKTZLhS1mK3GOUIqNSv94T8rWTwQt/v2/ohUsGASb.0K', NULL, '2020-05-28 20:46:10', '2020-05-28 20:46:10', 'member'),
(8, 'rabbanix', 'rabbanix@gmail.com', NULL, '$2y$10$G.tbmROTTtuTZ3E8vlaD4eMY6V8TPJbiU/L9W5Jt5u4PZu.Vdo1f6', NULL, '2020-05-30 05:53:23', '2020-05-30 05:53:23', 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD CONSTRAINT `tb_konten_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
