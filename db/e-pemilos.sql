-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 04:29 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pemilos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status_akun` enum('Y','N') NOT NULL,
  `foto` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `jenis_kelamin`, `username`, `password`, `status_akun`, `foto`, `level`) VALUES
(1, 'Fajar Saputra', 'Laki-Laki', 'fajarsaputratkj3@gmail.com', 'neglasari@@1207', 'Y', '2123674798_pexels-lukas-574070.jpg', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `akses_menu`
--

CREATE TABLE `akses_menu` (
  `id` int(11) NOT NULL,
  `manajemen_akun` enum('Y','N') DEFAULT 'N',
  `data_kelas` enum('Y','N') NOT NULL DEFAULT 'N',
  `data_siswa` enum('Y','N') NOT NULL DEFAULT 'N',
  `data_gtk` enum('Y','N') NOT NULL DEFAULT 'N',
  `data_kandidat` enum('Y','N') NOT NULL DEFAULT 'N',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses_menu`
--

INSERT INTO `akses_menu` (`id`, `manajemen_akun`, `data_kelas`, `data_siswa`, `data_gtk`, `data_kandidat`, `username`) VALUES
(1, 'Y', 'Y', 'Y', 'Y', 'Y', 'fajarsaputratkj3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gtk`
--

CREATE TABLE `gtk` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `kepegawaian` enum('Tendik','Guru') NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir') NOT NULL DEFAULT 'Tidak Hadir',
  `status_memilih` enum('Sudah','Belum') NOT NULL DEFAULT 'Belum',
  `status_akun` enum('Y','N') NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_sekolah`
--

CREATE TABLE `identitas_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(300) NOT NULL,
  `nama_kepsek` varchar(300) NOT NULL,
  `nip` varchar(300) NOT NULL,
  `alamat_sekolah` varchar(5000) NOT NULL,
  `kelurahan` varchar(300) NOT NULL,
  `kecamatan` varchar(300) NOT NULL,
  `kab_kota` varchar(300) NOT NULL,
  `npsn` varchar(300) NOT NULL,
  `akreditasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas_sekolah`
--

INSERT INTO `identitas_sekolah` (`id`, `nama_sekolah`, `nama_kepsek`, `nip`, `alamat_sekolah`, `kelurahan`, `kecamatan`, `kab_kota`, `npsn`, `akreditasi`) VALUES
(1, 'SMK PGRI NEGLASARI', 'Agus Irianto', '-', 'Jl. Marsekal Suryadarma No.1a, RT.004/RW.007', 'Selapajang Jaya', 'Neglasari', 'Kota Tangerang', '69987103', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir') NOT NULL DEFAULT 'Tidak Hadir',
  `status_memilih` enum('Sudah','Belum') NOT NULL DEFAULT 'Belum',
  `status_akun` enum('Y','N') NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(300) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `sampai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id`, `tahun_ajaran`, `tanggal_pelaksanaan`, `sampai`) VALUES
(1, '2021/2022', '2022-08-20', '2022-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kandidat`
--

CREATE TABLE `tb_kandidat` (
  `id` int(11) NOT NULL,
  `nomor_kandidat` char(5) NOT NULL,
  `nama_ketua` varchar(300) NOT NULL,
  `nama_wakil` varchar(300) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto_kandidat` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `view_pemilihan`
--

CREATE TABLE `view_pemilihan` (
  `id` int(11) NOT NULL,
  `no_kandidat` varchar(300) NOT NULL,
  `nama_kandidat` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gtk`
--
ALTER TABLE `gtk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_pemilihan`
--
ALTER TABLE `view_pemilihan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `akses_menu`
--
ALTER TABLE `akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gtk`
--
ALTER TABLE `gtk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `view_pemilihan`
--
ALTER TABLE `view_pemilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
