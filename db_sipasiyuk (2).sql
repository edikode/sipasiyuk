-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Apr 2019 pada 08.25
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipasiyuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispo_direktur`
--

CREATE TABLE `dispo_direktur` (
  `id` int(11) NOT NULL,
  `wadir_id` int(11) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dispo_direktur`
--

INSERT INTO `dispo_direktur` (`id`, `wadir_id`, `isi`, `tgl_kirim`, `status`) VALUES
(16, 5, 'ini untuk wadir 1', '2019-04-20', 'disposisi dr Direktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispo_wadir`
--

CREATE TABLE `dispo_wadir` (
  `id` int(11) NOT NULL,
  `isi` varchar(150) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `role_id`) VALUES
(1, 'Koordinator Prodi TI', 4),
(2, 'Koordinator Prodi TM', 4),
(3, 'Koordinator TS', 4),
(4, 'Direktur', 2),
(5, 'Wadir 1 ', 3),
(6, 'Wadir 2', 3),
(7, 'Wadir 3', 3),
(8, 'Sekretaris Pimpinan', 1),
(9, 'aaa', 0),
(10, 'aaa', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_dispo`
--

CREATE TABLE `jenis_dispo` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_dispo`
--

INSERT INTO `jenis_dispo` (`id`, `nama_jenis`) VALUES
(1, 'Rahasia'),
(2, 'Penting'),
(3, 'Segera'),
(4, 'Biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirm_direktur`
--

CREATE TABLE `konfirm_direktur` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `tujuan` varchar(45) DEFAULT NULL,
  `isi` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirm_direktur`
--

INSERT INTO `konfirm_direktur` (`id`, `tanggal`, `tujuan`, `isi`, `status`) VALUES
(1, '11/03/2019', NULL, NULL, NULL),
(2, '11/03/2019', NULL, NULL, NULL),
(3, '12', NULL, NULL, NULL),
(4, 'dsfsdf', NULL, NULL, NULL),
(5, '15 maret', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirm_wadir`
--

CREATE TABLE `konfirm_wadir` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `tujuan` varchar(45) DEFAULT NULL,
  `isi` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `wadir_ke` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(35) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jabatan_id`) VALUES
(12, '361655401136', 'Mutiara Hati', 4),
(13, '139000122122', 'Qori\'atul Maghfiroh', 8),
(14, '361655401136', 'Dedy Hidayat', 5),
(15, '361655401136', 'Bu Ine', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'direktur'),
(3, 'wadir'),
(4, 'pimpinan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_terima` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `tgl_surat` varchar(50) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `dispo_direktur_id` int(11) NOT NULL,
  `dispo_wadir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `no_surat`, `tgl_terima`, `pengirim`, `perihal`, `tgl_surat`, `lampiran`, `status`, `jenis_id`, `dispo_direktur_id`, `dispo_wadir`) VALUES
(16, '123/XA/098', '1997-12-12', 'Universitas 17 Agustus', 'ada', '1999-12-12', '', 'disposisi dr Direktur', 1, 16, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` varchar(45) NOT NULL,
  `is_active` int(1) NOT NULL,
  `pegawai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `date_created`, `is_active`, `pegawai_id`) VALUES
(15, 2, 'direktur', '$2y$10$Yy/QI6eH/fVN/GggFz1vvOSJCNqvxEmMVLE7kb3IXPj/0S2Bb9Fam', '2019-04-20 12:07:59', 1, 12),
(16, 1, 'admin', '$2y$10$1S6yLvh29Nsz/DnyyAKG5.XKGh54ZRJxfUT78y5G86bWa1jXezILS', '2019-04-20 12:10:44', 1, 13),
(17, 3, 'wadir', '$2y$10$6NUiesac80oKKFeVnyjfsu5vs1Quso.YItWDIA7iHr/3A0CcbCsiO', '2019-04-20 12:11:42', 1, 14),
(18, 4, 'pimpinan', '$2y$10$u9ukE..gguFw8AWDe9LXmulABqbm962lmU0MMSn3QTYda9J3oTkzy', '2019-04-20 12:12:11', 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispo_direktur`
--
ALTER TABLE `dispo_direktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispo_wadir`
--
ALTER TABLE `dispo_wadir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_dispo`
--
ALTER TABLE `jenis_dispo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirm_direktur`
--
ALTER TABLE `konfirm_direktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirm_wadir`
--
ALTER TABLE `konfirm_wadir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_id` (`jenis_id`),
  ADD KEY `dispo_direktur` (`dispo_direktur_id`),
  ADD KEY `dispo_wadir` (`dispo_wadir`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispo_direktur`
--
ALTER TABLE `dispo_direktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dispo_wadir`
--
ALTER TABLE `dispo_wadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jenis_dispo`
--
ALTER TABLE `jenis_dispo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konfirm_direktur`
--
ALTER TABLE `konfirm_direktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `konfirm_wadir`
--
ALTER TABLE `konfirm_wadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD CONSTRAINT `suratmasuk_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_dispo` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
