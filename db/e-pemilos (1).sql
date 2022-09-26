-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 05:12 AM
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

--
-- Dumping data for table `gtk`
--

INSERT INTO `gtk` (`id`, `nama`, `jenis_kelamin`, `kepegawaian`, `username`, `password`, `kehadiran`, `status_memilih`, `status_akun`, `level`) VALUES
(1, 'Ahmad Zakky Mubarok', 'L', 'Guru', '3603132304850007', '3603132304850007', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(3, 'Een Suhaenah', 'P', 'Guru', '3603134306710001', '3603134306710001', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(4, 'Eliza Nurbani', 'P', 'Guru', '3671037103880001', '3671037103880001', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(6, 'Gondo Subroto', 'L', 'Tendik', '3603142802850003', '3603142802850003', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(8, 'Intan Febriyanah', 'P', 'Guru', '3671036002970002', '3671036002970002', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(9, 'Lia Sri Handayani', 'P', 'Guru', '3671105206790004', '3671105206790004', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(10, 'Mohamad Gandi', 'L', 'Guru', '3603151906740003', '3603151906740003', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(12, 'Rina Widia Sari', 'P', 'Guru', '3671076305810004', '3671076305810004', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(13, 'Rita Ertiyana', 'P', 'Guru', '3603134110760005', '3603134110760005', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(14, 'Rouf Fadilah', 'L', 'Guru', '3603140904910002', '3603140904910002', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(15, 'Salmah', 'P', 'Guru', '3603134809700004', '3603134809700004', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(16, 'Sri Dewita', 'P', 'Guru', '1303035006900001', '1303035006900001', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(17, 'Zaenudin', 'L', 'Guru', '3603140408770001', '3603140408770001', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(18, 'Abdul Malik', 'L', 'Tendik', '3671101806820003', '3671101806820003', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(19, 'Agus Irianto', 'L', 'Tendik', '3671081008640003', '3671081008640003', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(20, 'Fajar Saputra', 'L', 'Tendik', '3671101912010003', '3671101912010003', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(21, 'Fitriana', 'P', 'Tendik', '3671106611030007', '3671106611030007', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(22, 'Lilis Suryani', 'P', 'Tendik', '3671105009810002', '3671105009810002', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(23, 'Multi Hariyani', 'P', 'Tendik', '3671105801810001', '3671105801810001', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(24, 'Nila Sagita', 'P', 'Tendik', '3671106906010003', '3671106906010003', 'Tidak Hadir', 'Belum', 'Y', 'GTK'),
(26, 'Amsori', 'L', 'Tendik', '3671103004870001', '3671103004870001', 'Tidak Hadir', 'Belum', 'Y', 'GTK');

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

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `kelas`, `username`, `password`, `kehadiran`, `status_memilih`, `status_akun`, `level`) VALUES
(2, 'AIDIL AKBAR', 'L', 'Kelas XI OTKP', '0041311786', '0041311786', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(3, 'ALVINA', 'P', 'Kelas XI OTKP', '0065449071', '0065449071', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(4, 'ANIS RAHMAWATI', 'P', 'Kelas XI OTKP', '0067994545', '0067994545', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(5, 'ARIS ARYANTO', 'L', 'Kelas XI OTKP', '0047877024', '0047877024', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(6, 'DIAN PADILA', 'P', 'Kelas XI OTKP', '0046939652', '0046939652', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(7, 'ERWAN', 'L', 'Kelas XI OTKP', '0052728834', '0052728834', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(8, 'FADRI AGISNA', 'L', 'Kelas XI OTKP', '0063791454', '0063791454', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(9, 'FADYA AZZAHRA', 'P', 'Kelas XI OTKP', '0077314411', '0077314411', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(10, 'FEMAS ADITIA', 'L', 'Kelas XI OTKP', '0065125492', '0065125492', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(11, 'HERWANDA PURNAMA', 'L', 'Kelas XI OTKP', '0054336728', '0054336728', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(12, 'IMEL JULIASARI', 'P', 'Kelas XI OTKP', '0061619995', '0061619995', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(13, 'INTAN FEBRIYANTI', 'P', 'Kelas XI OTKP', '0058906738', '0058906738', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(14, 'ISTI FAZAH MASHPUPAH', 'P', 'Kelas XI OTKP', '0079627090', '0079627090', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(15, 'MAHARANI', 'P', 'Kelas XI OTKP', '0063381510', '0063381510', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(16, 'MUHAMAD FADLI PRATAMA', 'L', 'Kelas XI OTKP', '0076231567', '0076231567', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(17, 'NOVITA SARI ', 'P', 'Kelas XI OTKP', '0062599085', '0062599085', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(18, 'SAHRUDIN', 'L', 'Kelas XI OTKP', '0069878727', '0069878727', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(19, 'SILSI PRIZCILIA VEGA', 'P', 'Kelas XI OTKP', '0064879286', '0064879286', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(20, 'SILVI ANANDA LESTARI', 'P', 'Kelas XI OTKP', '0061810808', '0061810808', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(21, 'SITI AYISAH', 'P', 'Kelas XI OTKP', '0067155011', '0067155011', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(22, 'SITI RAHMA', 'P', 'Kelas XI OTKP', '0067495441', '0067495441', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(23, 'SOIBAH ARMELIA', 'P', 'Kelas XI OTKP', '0051801698', '0051801698', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(24, 'TIARA OKTAVIA RAMA APANDI', 'P', 'Kelas XI OTKP', '0067348471', '0067348471', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(25, 'TILKA LANA NAZZALA', 'P', 'Kelas XI OTKP', '0042138436', '0042138436', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(26, 'VALENTINA ROSA', 'P', 'Kelas XI OTKP', '0071323957', '0071323957', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(27, 'ADAM GUSAIRA GMYNASTIAR', 'L', 'Kelas XI TKJ', '0057179370', '0057179370', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(28, 'AHMAD AKBAR ARIP', 'L', 'Kelas XI TKJ', '0042985612', '0042985612', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(29, 'ALDI', 'L', 'Kelas XI TKJ', '0069269499', '0069269499', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(30, 'BINTANG SYAHPUTRA NASUTION', 'L', 'Kelas XI TKJ', '0068056998', '0068056998', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(31, 'MUHAMMAD RESTU FALEPI', 'L', 'Kelas XI TKJ', '0065274388', '0065274388', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(32, 'NUR AFNI', 'P', 'Kelas XI TKJ', '0062356482', '0062356482', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(33, 'PUTRA ADHITYA RASYA', 'L', 'Kelas XI TKJ', '0065954599', '0065954599', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(34, 'RAFLI BAHTIAR', 'L', 'Kelas XI TKJ', '0054128686', '0054128686', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(35, 'RAFLI MARWAN ', 'L', 'Kelas XI TKJ', '0049644848', '0049644848', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(36, 'RIFA TRIANSYAH', 'L', 'Kelas XI TKJ', '0063381778', '0063381778', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(37, 'RIO FERDINAN LALIHATU', 'L', 'Kelas XI TKJ', '0051178139', '0051178139', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(38, 'ACHMAD BAYHAQI JAYLANI', 'L', 'Kelas X OTKP', '0076456376', '0076456376', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(39, 'AHMAD PAREL', 'L', 'Kelas X OTKP', '0075999812', '0075999812', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(40, 'ANDITA FITRIYA', 'P', 'Kelas X OTKP', '0065822480', '0065822480', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(41, 'ARIYA DHARMA DEWANGGA WIJAYA', 'P', 'Kelas X OTKP', '0074920568', '0074920568', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(42, 'ARYA SAPUTRA ', 'L', 'Kelas X OTKP', '0068008768', '0068008768', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(43, 'ATHENA SYIAH RAHMAN', 'P', 'Kelas X OTKP', '0078024778', '0078024778', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(44, 'CINDY AULIA', 'P', 'Kelas X OTKP', '0079780101', '0079780101', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(45, 'DENA ZUAN CHRISTIAN', 'P', 'Kelas X OTKP', '0089016638', '0089016638', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(46, 'DESI WULANDARI', 'P', 'Kelas X OTKP', '0061796620', '0061796620', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(47, 'DIAN APRIL LESTARI', 'P', 'Kelas X OTKP', '0085305708', '0085305708', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(48, 'FIONA NURAINI', 'P', 'Kelas X OTKP', '0088034801', '0088034801', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(49, 'LIANTI DHARMA PUTRI', 'P', 'Kelas X OTKP', '0051193302', '0051193302', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(50, 'MUHAMMAD SAIFUL RAHMAN', 'L', 'Kelas X OTKP', '0068447611', '0068447611', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(51, 'MUTIA', 'P', 'Kelas X OTKP', '0064860908', '0064860908', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(52, 'NUR KAIYLLA RAHMADANI', 'L', 'Kelas X OTKP', '0077715535', '0077715535', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(53, 'RIMA ROMADON RESTU FAUZI', 'P', 'Kelas X OTKP', '0062461383', '0062461383', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(54, 'RISKA YUNUS OLIVIA', 'P', 'Kelas X OTKP', '0074847220', '0074847220', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(55, 'RIZKI SIMANJORANG', 'L', 'Kelas X OTKP', '0066712177', '0066712177', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(56, 'SAMELIA', 'P', 'Kelas X OTKP', '0076294332', '0076294332', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(57, 'SARIPAH', 'P', 'Kelas X OTKP', '0074175661', '0074175661', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(58, 'SITI NAYLA PUTRI', 'P', 'Kelas X OTKP', '0076790367', '0076790367', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(59, 'SITI ZUHARIAH', 'P', 'Kelas X OTKP', '0071043703', '0071043703', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(60, 'VIDA SABRIAH', 'P', 'Kelas X OTKP', '0076598240', '0076598240', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(61, 'ZETA OKTAVIA', 'P', 'Kelas X OTKP', '0078025448', '0078025448', 'Tidak Hadir', 'Belum', '', 'Siswa');

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
(1, '2021/2022', '2022-08-20', '2022-08-27');

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

--
-- Dumping data for table `tb_kandidat`
--

INSERT INTO `tb_kandidat` (`id`, `nomor_kandidat`, `nama_ketua`, `nama_wakil`, `visi`, `misi`, `foto_kandidat`) VALUES
(1, '1', 'asafas', 'safasf', 'safsffsa', 'assaffsa', '1292442354_laptop-2620118.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama_kelas`) VALUES
(1, 'Kelas X OTKP'),
(2, 'Kelas X TKJ'),
(3, 'Kelas XI OTKP'),
(4, 'Kelas XI TKJ'),
(5, 'Kelas XII OTKP'),
(6, 'Kelas XII TKJ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `view_pemilihan`
--
ALTER TABLE `view_pemilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
