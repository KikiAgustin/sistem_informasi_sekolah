-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 15.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama`, `alamat`, `jk`, `mata_pelajaran`) VALUES
(1, '1233455677788', 'tesol', 'batuagung', 'laki-laki', 'bahasa inggris'),
(2, '8623956386029', 'tosle', 'balapulang', 'laki-laki', 'PKN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_misivisi`
--

CREATE TABLE `tb_misivisi` (
  `id_misi` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_misivisi`
--

INSERT INTO `tb_misivisi` (`id_misi`, `judul`, `isi`) VALUES
(1, 'visi', 'Alam Raya Sekolahku..'),
(2, 'misi', 'si ilham ko ganteng bett sih??');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama`, `ttl`, `alamat`, `jk`, `kelas`) VALUES
(10, 2147483647, 'iksan', '2020-12-12', 'batuagung', 'laki-laki', 'VII (Tujuh)'),
(11, 2147483647, 'Ilham', '2020-12-08', 'tegal', 'laki-laki', 'IX (Sembilan)'),
(12, 1235689865, 'tomi', '1999-02-06', 'tegal', 'laki-laki', 'VIII (Delapan)'),
(13, 3, 'santi', '2020-11-19', 'batuagung', 'perempuan', 'VIII (Delapan)'),
(14, 2147483647, 'iqbal', '1998-11-15', 'btg', 'laki-laki', 'VIII (Delapan)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_misivisi`
--
ALTER TABLE `tb_misivisi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_misivisi`
--
ALTER TABLE `tb_misivisi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
