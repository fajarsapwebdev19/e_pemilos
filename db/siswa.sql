-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 10:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

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
(61, 'ZETA OKTAVIA', 'P', 'Kelas X OTKP', '0078025448', '0078025448', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(62, 'ABDUL AJIS', 'L', 'Kelas X TKJ', '0067838085', '0067838085', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(63, 'AKMAL AMARULLAH YADHYNA SAPUTRA', 'L', 'Kelas X TKJ', '0058544951', '0058544951', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(64, 'ARDIANSYAH', 'L', 'Kelas X TKJ', '0074108657', '0074108657', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(65, 'ARYA DALLIMA', 'L', 'Kelas X TKJ', '0064608528', '0064608528', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(66, 'BIMO ARKAN MANAF', 'L', 'Kelas X TKJ', '0061585369', '0061585369', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(67, 'FAHRI AJIANSYAH', 'L', 'Kelas X TKJ', '0076728172', '0076728172', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(68, 'FIRMAN SAH PUTRA', 'L', 'Kelas X TKJ', '0074012131', '0074012131', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(69, 'HASNUN TAQIF', 'L', 'Kelas X TKJ', '0078911317', '0078911317', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(70, 'HERDIYANSYAH', 'L', 'Kelas X TKJ', '0055430120', '0055430120', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(71, 'IGA ADRIANSYAH', 'L', 'Kelas X TKJ', '0072149264', '0072149264', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(72, 'IMMANUEL VILLA REAL', 'L', 'Kelas X TKJ', '0067536877', '0067536877', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(73, 'MAULANA AKBAR', 'L', 'Kelas X TKJ', '0052118119', '0052118119', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(74, 'MUHAMMAD FAHRIYANSYAH', 'L', 'Kelas X TKJ', '0068248367', '0068248367', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(75, 'MUHAMMAD HAIKAL', 'L', 'Kelas X TKJ', '0075328974', '0075328974', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(76, 'RANGGA MAULANA FADILLAH', 'L', 'Kelas X TKJ', '0076940592', '0076940592', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(77, 'RIZAL RAMADHAN', 'L', 'Kelas X TKJ', '0076392535', '0076392535', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(78, 'RIZKY FIRDAUS', 'L', 'Kelas X TKJ', '0073382933', '0073382933', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(79, 'TRI PANDU LESMANA', 'L', 'Kelas X TKJ', '0079064751', '0079064751', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(80, 'VINO SEPTO RUSDIAN', 'L', 'Kelas X TKJ', '0066044223', '0066044223', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(81, 'YOWAN TRIYADI', 'L', 'Kelas X TKJ', '0072908563', '0072908563', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(82, 'ZAENAL ABIDIN', 'L', 'Kelas X TKJ', '0071874384', '0071874384', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(83, 'ABDUL AZIS', 'L', 'Kelas XII OTKP', '0041353286', '0041353286', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(84, 'AINI SAFIRA', 'P', 'Kelas XII OTKP', '0051177429', '0051177429', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(85, 'ALDI', 'L', 'Kelas XII OTKP', '0044691456', '0044691456', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(86, 'ALVIN', 'L', 'Kelas XII OTKP', '0050592401', '0050592401', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(87, 'AMELIA SURAHMAN', 'P', 'Kelas XII OTKP', '0051230930', '0051230930', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(88, 'ANANDA RISKA ADELIA', 'P', 'Kelas XII OTKP', '0051230922', '0051230922', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(89, 'DAFA DWI RAHMAN', 'L', 'Kelas XII OTKP', '0057085874', '0057085874', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(90, 'DAMAR ALPARIJI', 'L', 'Kelas XII OTKP', '0051177382', '0051177382', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(91, 'DEDE RAJEKA', 'L', 'Kelas XII OTKP', '0051177516', '0051177516', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(92, 'FARHAN MAULANA MURBA', 'L', 'Kelas XII OTKP', '0041298116', '0041298116', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(93, 'IRGI MAULANA LALIHATUH', 'L', 'Kelas XII OTKP', '0059991048', '0059991048', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(94, 'ISAN WIJAYA', 'L', 'Kelas XII OTKP', '0051171058', '0051171058', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(95, 'JOHAN', 'L', 'Kelas XII OTKP', '0049832854', '0049832854', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(96, 'LINDA SUPRIATIN RAMDANI', 'P', 'Kelas XII OTKP', '0054912867', '0054912867', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(97, 'MARYAM SUKMA AYU', 'P', 'Kelas XII OTKP', '0053113294', '0053113294', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(98, 'MUHAMMAD DAVA FRATAMA', 'L', 'Kelas XII OTKP', '0060054520', '0060054520', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(99, 'MURSALIN', 'L', 'Kelas XII OTKP', '0051193233', '0051193233', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(100, 'NANDA PURNAMA SARI', 'P', 'Kelas XII OTKP', '0060054160', '0060054160', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(101, 'NURAINI', 'P', 'Kelas XII OTKP', '0054514027', '0054514027', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(102, 'RABIA PUTRI ZAHRA', 'P', 'Kelas XII OTKP', '0057472217', '0057472217', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(103, 'RIZKI PADILAH', 'L', 'Kelas XII OTKP', '3054398759', '3054398759', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(104, 'SITI LIYANI', 'P', 'Kelas XII OTKP', '0059073063', '0059073063', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(105, 'SURYA ADRIANSYAH', 'L', 'Kelas XII OTKP', '0041130796', '0041130796', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(106, 'TARMIJI', 'L', 'Kelas XII OTKP', '0051177224', '0051177224', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(108, 'ADITIA RAMDANI', 'L', 'Kelas XII TKJ', '0045054174', '0045054174', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(109, 'AGUNG PRIYONO', 'L', 'Kelas XII TKJ', '0055889254', '0055889254', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(110, 'AJAY SUDRAJAT', 'L', 'Kelas XII TKJ', '0045059925', '0045059925', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(111, 'AKBAR BAIDAWI', 'L', 'Kelas XII TKJ', '0056724749', '0056724749', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(112, 'ALVIN CANDRA PRAMUDITA', 'L', 'Kelas XII TKJ', '0051171052', '0051171052', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(113, 'FARHAN FADILAH', 'L', 'Kelas XII TKJ', '0051177357', '0051177357', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(114, 'HARSADIN', 'L', 'Kelas XII TKJ', '0051177417', '0051177417', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(115, 'IMAM GOZALI', 'L', 'Kelas XII TKJ', '0060054150', '0060054150', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(116, 'INDRA SUNAWI', 'L', 'Kelas XII TKJ', '0058175391', '0058175391', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(117, 'KHAY MUHAMMAD ADERRO', 'L', 'Kelas XII TKJ', '0051177204', '0051177204', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(118, 'KURNIAWAN', 'L', 'Kelas XII TKJ', '0044549357', '0044549357', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(119, 'LILIS', 'P', 'Kelas XII TKJ', '0058212572', '0058212572', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(120, 'MUHAMAD FIQRI FAUZAN', 'L', 'Kelas XII TKJ', '0051230793', '0051230793', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(121, 'MUHAMAD IRFAN FADILAH', 'L', 'Kelas XII TKJ', '2054260742', '2054260742', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(122, 'MUHAMAD RAFLI RAMADHAN', 'L', 'Kelas XII TKJ', '0051177422', '0051177422', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(123, 'MUHAMAD RIAN SAPUTRA', 'L', 'Kelas XII TKJ', '0051082013', '0051082013', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(124, 'MUHAMAD RISKI', 'L', 'Kelas XII TKJ', '3037084730', '3037084730', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(125, 'MUHAMAD SANDI', 'L', 'Kelas XII TKJ', '0059702845', '0059702845', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(126, 'MUHAMMAD AAGIM', 'L', 'Kelas XII TKJ', '0054748903', '0054748903', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(127, 'MUHAMMAD IKBAL', 'L', 'Kelas XII TKJ', '0054284107', '0054284107', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(128, 'NURLINAH', 'P', 'Kelas XII TKJ', '0051177163', '0051177163', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(129, 'PEBRIYANI', 'P', 'Kelas XII TKJ', '0056577927', '0056577927', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(130, 'RANGGA HARYANTO', 'L', 'Kelas XII TKJ', '0048257398', '0048257398', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(131, 'RENO EKA FIRMANNURDIN', 'L', 'Kelas XII TKJ', '0045054316', '0045054316', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(132, 'RIFKY LIANO', 'L', 'Kelas XII TKJ', '0054470891', '0054470891', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(133, 'SHERLY MELINDA', 'P', 'Kelas XII TKJ', '0041353360', '0041353360', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(134, 'SITI NURJAMILAH', 'P', 'Kelas XII TKJ', '0053972619', '0053972619', 'Tidak Hadir', 'Belum', '', 'Siswa'),
(135, 'STEVEN WANDI DEVRA', 'L', 'Kelas XII TKJ', '0031793585', '0031793585', 'Tidak Hadir', 'Belum', '', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
