-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 17.34
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `nohp`, `password`) VALUES
('AG001', 'Ferdian Saputra', 'Laki-Laki', 'Jl.Semangka No 3', '089613686165', '1'),
('AG0012', 'Dwi', 'Perempuan', 'Jl', '098', '1'),
('AG002', 'Bibin', 'Perempuan', 'Pondok Kelapa', '085278504635', '1'),
('AG003', 'Rudi Hartono', 'Laki-Laki', 'Jl.Manggis 98', '089613681236', '1'),
('AG005', 'Ahmad Fatih', 'Laki-Laki', 'Jalan Bandar Raya ', '089627259708', '1'),
('AG007', 'Devi', 'Perempuan', 'Gang 3', '089776235975', '1'),
('AG008', 'Riki Subekti', 'Laki-Laki', 'Jalan Fatmawati', '082175088752', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbuku`
--

CREATE TABLE `tbbuku` (
  `idbuku` varchar(5) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `jumlah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbuku`
--

INSERT INTO `tbbuku` (`idbuku`, `judulbuku`, `kategori`, `pengarang`, `penerbit`, `jumlah`) VALUES
('BK001', 'Belajar PHP', 'Ilmu Komputer', 'Candra', 'Media Baca', '4'),
('BK002', 'Belajar HTML', 'Ilmu Komputer', 'Rahmat Hakim', 'Media Baca', '5'),
('BK004', 'Belajar PHP Part 6', 'Tutorial', 'Sandhy', 'Akmal', '14'),
('BK005', 'Belajar PHP Part 4', 'Tutorial', 'Sandhy', 'Akmal', '10'),
('BK006', 'Belajar PHP Part 3', 'Tutorial', 'sandhy', 'erlanggi', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpengarang`
--

CREATE TABLE `tbpengarang` (
  `id` int(4) NOT NULL,
  `namapengarang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpengarang`
--

INSERT INTO `tbpengarang` (`id`, `namapengarang`) VALUES
(1, 'Sandhy'),
(2, 'Yudi'),
(3, 'Vinton');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpengunjung`
--

CREATE TABLE `tbpengunjung` (
  `npm` varchar(10) NOT NULL,
  `asalprodi` varchar(20) NOT NULL,
  `idpengunjung` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpengunjung`
--

INSERT INTO `tbpengunjung` (`npm`, `asalprodi`, `idpengunjung`) VALUES
('G1A01725', 'Informatika', 1),
('G1B01725', 'Teknik Sipil', 2),
('G1C01725', 'Teknik Mesin', 3),
('G1D01725', 'Teknik Elektro', 4),
('G1E01725', 'Arsitektur', 5),
('G1F01725', 'Sistem Informasi', 6),
('G1A01686', 'Informatika', 7),
('G1B16262', 'Teknik Sipil', 8),
('G1F01726', 'Sistem Informasi', 9),
('G1F017025', 'Sistem Informasi', 10),
('G1A017002', 'Informatika', 11),
('G1A017003', 'Informatika', 12),
('G1A017004', 'Informatika', 13),
('G1B017004', 'Teknik Sipil', 14),
('G1B017005', 'Teknik Sipil', 15),
('G1C017005', 'Teknik Mesin', 16),
('G1B016022', 'Teknik Sipil', 17),
('G1B017006', 'Teknik Sipil', 18),
('G1A017002', 'Teknik Sipil', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` int(3) NOT NULL,
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `idbuku` varchar(5) NOT NULL,
  `judulbuku` varchar(25) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `denda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`idtransaksi`, `idanggota`, `nama`, `idbuku`, `judulbuku`, `tglpinjam`, `tglkembali`, `status`, `denda`) VALUES
(26, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-11', '2019-11-17', 'Kembali', 9108500),
(27, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-18', '2019-11-25', 'Kembali', 9108500),
(28, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-07', '2019-11-14', 'Kembali', 9108500),
(29, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-10', '2019-11-17', 'Kembali', 9108500),
(30, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-09', '2019-11-15', 'Kembali', 9108500),
(31, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-18', '2019-11-25', 'Pinjam', 0),
(32, 'AG001', 'Riki Subekti', 'BK001', 'Belajar PHP', '2019-11-10', '2019-11-17', 'Kembali', 0),
(33, 'AG008', 'Sandhy Akmal N', 'BK005', 'Belajar PHP Part 4', '2019-11-18', '2019-11-25', 'Kembali', 0),
(34, 'AG008', 'Sandhy Akmal N', 'BK006', 'Belajar PHP Part 3', '2019-11-18', '2019-11-25', 'Kembali', 0),
(35, 'AG005', 'Ahmad Fatih', 'BK004', 'Belajar PHP Part 6', '2019-10-26', '2019-10-03', 'Kembali', 0),
(36, 'AG002', 'Bibin', 'BK005', 'Belajar PHP Part 4', '2019-10-26', '2019-10-03', 'Kembali', 0),
(37, 'AG007', 'Devi', 'BK004', 'Belajar PHP Part 6', '2019-11-26', '2019-12-03', 'Kembali', 0),
(38, 'AG008', 'Sandhy Akmal N', 'BK002', 'Belajar HTML', '2019-12-25', '2020-01-01', 'Kembali', 0),
(39, 'AG005', 'Ahmad Fatih', 'BK002', 'Belajar HTML', '2019-12-22', '2019-12-29', 'Kembali', 0),
(40, 'AG005', 'Ahmad Fatih', 'BK001', 'Belajar PHP', '2021-07-09', '2021-07-16', 'Pinjam', 0),
(41, 'AG002', 'Bibin', 'BK001', 'Belajar PHP', '2021-07-09', '2021-07-16', 'Kembali', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(3, 'petugas', 'petugas', 'petugas', 'petugas'),
(4, 'fatih', 'user', 'user', 'user'),
(5, 'bibin', 'bibin', 'bibin', 'user'),
(6, 'tamu', 'tamu', 'tamu', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indeks untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `tbpengarang`
--
ALTER TABLE `tbpengarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbpengunjung`
--
ALTER TABLE `tbpengunjung`
  ADD PRIMARY KEY (`idpengunjung`);

--
-- Indeks untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `idbuku` (`idbuku`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbpengarang`
--
ALTER TABLE `tbpengarang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbpengunjung`
--
ALTER TABLE `tbpengunjung`
  MODIFY `idpengunjung` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `idtransaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
