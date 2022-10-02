-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2022 pada 08.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `dokter_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `nama_pasien`, `alamat`, `telephone`, `dokter_id`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, 'Dhevi Rizky R', 'Tangerang', '08561234567', 3, '2020-03-03 16:56:25', '2022-09-27 05:56:40', '0000-00-00 00:00:00', 1, 1, 0),
(4, 'Vira Rizky Rosiandani', 'Tangerang', '089988776651', 4, '2022-09-27 05:56:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(5, 'Asyalina Putri', 'Tangerang', '082213377661', 4, '2022-09-27 05:56:35', '2022-09-30 12:31:03', '0000-00-00 00:00:00', 1, 1, 0),
(6, 'Dhevi Rosiandani Vira', 'Tangerang', '08812388123', 3, '2022-09-27 06:02:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, 'Ismail M Z', 'Tangerang', '088798752918', 3, '2022-09-27 06:03:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(20, 'Kamu Pasti', 'Sumatra', '0866213', 5, '2022-10-01 07:33:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(21, 'Dhevi R', 'tangerang', '089988776651', 3, '2022-10-01 07:44:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telephone` varchar(16) NOT NULL,
  `spesialis` text NOT NULL,
  `jadwal` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `alamat`, `telephone`, `spesialis`, `jadwal`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(3, 'dr Fauziah CHt CI', 'Jakarta', '081233321231', 'Jantung,Paru,Lambung,Mata,Kaki,Tangan,PenyakitDalam,OrthoPedi', 'Senin 09:00 - 20:00 \r\nSelasa 09:00 - 20:00 \r\nRabu 09:00 - 20:00 \r\nKamis 09:00 - 20:00 \r\nJumat 09:00 - 20:00 \r\nSabtu 09:00 - 20:00 \r\nMinggu 09:00 - 20:0', '2022-09-25 17:56:27', '2022-10-01 06:11:36', '0000-00-00 00:00:00', 1, 1, 0),
(4, 'dr Oryza', 'Tangerang', '087766123822', 'Cinta', 'Senin 09:00 - 20:00 Selasa 09:00 - 20:00 Rabu 09:00 - 20:00 Kamis 09:00 - 20:00 Jumat 09:00 - 20:00 Sabtu 09:00 - 20:00 Minggu 09:00 - 20:00', '2022-09-27 06:13:40', '2022-09-28 06:12:58', '0000-00-00 00:00:00', 1, 1, 0),
(5, 'Dr Ismail M Z', 'Tangerang', '081289730151', 'Cinta', 'Senin 09:00 - 20:00\r\nSelasa 09:00 - 20:00\r\nRabu 09:00 - 20:00\r\nKamis 09:00 - 20:00\r\nJumat 09:00 - 20:00\r\nSabtu 09:00 - 20:00\r\nMinggu 09:00 - 20:00', '2022-09-30 12:08:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_id`
--

CREATE TABLE `group_id` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Bodrex', 'Sakit Kepala', '2020-03-03 16:58:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 'Amoxcilin', 'Amoxcilin', '2022-09-27 05:56:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(4, 'Abacavir', 'Abacavir', '2022-09-27 05:58:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(6, 'Acebutolol', 'Acebutolol', '2022-09-27 05:58:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, 'Acetylcysteine', 'Acetylcysteine', '2022-09-27 05:59:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8, 'Bethanechol', 'Bethanechol', '2022-09-27 05:59:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(9, 'Bexarotene', 'Bexarotene', '2022-09-27 05:59:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nomor_identitas` varchar(30) DEFAULT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `berat_pasien` varchar(255) NOT NULL,
  `tinggi_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nomor_identitas`, `nama_pasien`, `berat_pasien`, `tinggi_pasien`, `jenis_kelamin`, `alamat`, `telephone`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, '3215082394923', 'Dhevi Rizky R', '70', '165', 'p', 'Tangerang', '08561234567', '2020-03-03 16:56:25', '2022-09-27 05:56:40', '0000-00-00 00:00:00', 1, 1, 0),
(4, '88762212333', 'Vira Rizky Rosiandani', '70', '152', 'p', 'Tangerang', '089988776651', '2022-09-27 05:56:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(5, '99887766552200', 'Asyalina Putri', '70', '100', 'p', 'Tangerang', '082213377661', '2022-09-27 05:56:35', '2022-09-30 12:31:03', '0000-00-00 00:00:00', 1, 1, 0),
(6, '871233991', 'Dhevi Rosiandani Vira', '70', '172', 'p', 'Tangerang', '08812388123', '2022-09-27 06:02:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, '0778123', 'Ismail M Z', '70', '180', 'l', 'Tangerang', '088798752918', '2022-09-27 06:03:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `pasien_id`, `dokter_id`, `ruang_id`, `keluhan`, `diagnosa`, `tanggal`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(11, 2, 3, 2, 'Sakit dada', 'kurang tahu sih gw', '2022-09-25', '2022-09-25 17:58:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(12, 5, 3, 6, 'ada benjolan', 'Sakit keppala biasa', '2022-09-27', '2022-09-27 06:14:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(15, 2, 3, 1, 'pusing', 'kurang tidur', '2022-10-01', '2022-10-01 05:11:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(16, 4, 3, 1, 'gatal gatal', 'kulit sensitif', '2022-10-01', '2022-10-01 05:12:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(17, 7, 3, 1, 'bab berdarah', 'ambeien', '2022-10-01', '2022-10-01 05:12:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_obat`
--

CREATE TABLE `rm_obat` (
  `id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rm_obat`
--

INSERT INTO `rm_obat` (`id`, `obat_id`, `rm_id`) VALUES
(3, 1, 11),
(4, 4, 12),
(7, 3, 15),
(8, 3, 16),
(9, 3, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(128) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Melati 01', 'Lantai 1', '2020-03-03 16:57:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, 'Melati 02', 'Lantai 1', '2020-03-03 16:57:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(4, 'Anyelir 01', 'Anyelir', '2022-09-27 06:01:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(5, 'Kenanga 01', 'Kenanga', '2022-09-27 06:01:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(6, 'Jati 01', 'Jati', '2022-09-27 06:01:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, 'Mawar 01', 'Mawar', '2022-09-27 06:02:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8, 'Mawar 02', 'Mawar', '2022-09-27 06:02:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(9, 'Mawar 03', 'Mawar', '2022-09-27 06:02:13', '2022-09-27 06:02:21', '0000-00-00 00:00:00', 1, 1, 0),
(10, 'Teratai 01', 'Teratai', '2022-09-27 06:02:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(11, 'Teratai 02', 'Teratai', '2022-09-27 06:02:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `last_login`, `created_at`) VALUES
(1, 1, 'admin', '$2y$10$WRXLtERI3N9FxbGTFL4.K.uCoVD3RPqp7HgCJCVRiFMn4WmC555Ti', '0000-00-00 00:00:00', '2020-03-03 16:30:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `group_id`
--
ALTER TABLE `group_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `ruang_id` (`ruang_id`),
  ADD KEY `pasien_id` (`pasien_id`);

--
-- Indeks untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obat_id` (`obat_id`),
  ADD KEY `rm_id` (`rm_id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `group_id`
--
ALTER TABLE `group_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `rekam_medis_ibfk_3` FOREIGN KEY (`ruang_id`) REFERENCES `ruang` (`id`),
  ADD CONSTRAINT `rekam_medis_ibfk_4` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`);

--
-- Ketidakleluasaan untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD CONSTRAINT `rm_obat_ibfk_1` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `rm_obat_ibfk_2` FOREIGN KEY (`rm_id`) REFERENCES `rekam_medis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
