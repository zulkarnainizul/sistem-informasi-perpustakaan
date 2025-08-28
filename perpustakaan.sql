-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 07:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_denda`
--

CREATE TABLE `biaya_denda` (
  `id_biaya_denda` int(11) NOT NULL,
  `harga_denda` int(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `tgl_tetap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya_denda`
--

INSERT INTO `biaya_denda` (`id_biaya_denda`, `harga_denda`, `status`, `tgl_tetap`) VALUES
(2, 4000, 'Aktif', '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` char(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`, `stok`, `gambar`, `id_rak`, `id_kategori`) VALUES
(18, 'BK001', 'Pemograman Berorientasi Objek', 'Wenda Noviyani, M.T', 'Politeknik Caltex Riau', '2020', 18, 'Menguasasi-Pemrograman-Berorientasi-Objek.jpg', 1, 6),
(19, 'BK002', 'Workshop Pemograman Web', 'Didik Setiawan', 'Karya Buku Indah', '2018', 27, '200636.jpg', 2, 7),
(20, 'BK003', 'Business Information System', 'Paul Bocij', 'Pearson', '2008', 19, 'download_(3).jpg', 13, 8),
(21, 'BK004', 'Majalah Ilmiah Dian Ilmu', 'Ahmad Jupri', 'UDINUS', '2020', 21, 'download_(4).jpg', 15, 10),
(23, 'BK006', 'KKN', 'Nurul Vidya Utami', 'Bukune ', '2019', 18, '20_33_238.jpg', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `id_peminjaman` varchar(225) NOT NULL,
  `denda` varchar(225) NOT NULL,
  `lama_waktu` int(11) NOT NULL,
  `tgl_denda` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'Pemograman'),
(7, 'Web'),
(8, 'Business'),
(9, 'Novel'),
(10, 'Majalah'),
(11, 'Modul'),
(12, 'Mechine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_pinjam` varchar(225) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'Dipinjam',
  `denda` varchar(50) DEFAULT '-',
  `jml` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_pinjam`, `tanggal_pinjam`, `tanggal_kembali`, `id_buku`, `id_user`, `status`, `denda`, `jml`) VALUES
(15, 'P001', '2022-08-08', '2022-08-13', 18, 2, 'Dipinjam', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `nama_rak`) VALUES
(1, 'Rak 001'),
(2, 'Rak 002'),
(13, 'Rak 003'),
(14, 'Rak 004'),
(15, 'Rak 005');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nim` varchar(225) DEFAULT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tgl_lahir` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `tgl_bergabung` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama`, `nim`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `tgl_bergabung`, `foto`) VALUES
(1, 'Ardianyo', '123', 'Petugas', 'Ardianyo', '1131121', '', '', '', 'Jalan Mesjid', '123233', '', '', ''),
(2, 'Zulkarnain', 'zul123', 'Anggota', 'Izul Zulkarnain', '2157301097', 'Bagansiapiapi', '16 Agustus 2022', 'laki-laki', 'Jalan Parit Aman', '082172588776', 'zul@gmail.com', '05 Agustus 2022', 'anggota'),
(3, 'Zul123', '', 'Anggota', 'Zulkarnain', '2157301097', '', '', '', 'Rumbai, Pekanbaru', '082172588776', '', '', ''),
(4, 'rafi01', 'rafi01', 'Anggota', 'Asyraf', '2157301010', '', '', 'Laki-Laki', 'Panam, Pekanbaru', '082172887909', 'rafi@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_denda`
--
ALTER TABLE `biaya_denda`
  ADD PRIMARY KEY (`id_biaya_denda`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `kode_buku` (`kode_buku`),
  ADD KEY `rak` (`id_rak`),
  ADD KEY `kategori` (`id_kategori`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `buku` (`id_buku`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya_denda`
--
ALTER TABLE `biaya_denda`
  MODIFY `id_biaya_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `rak` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
