-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2021 at 03:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admpemeriksaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auditplan`
--

CREATE TABLE `tbl_auditplan` (
  `id_auditplan` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(100) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(100) NOT NULL,
  `t_kodepemeriksaan` varchar(200) NOT NULL,
  `t_status` varchar(200) NOT NULL,
  `t_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_auditplan`
--

INSERT INTO `tbl_auditplan` (`id_auditplan`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `t_masa_tahun_pajak`, `t_kodepemeriksaan`, `t_status`, `t_berkas`) VALUES
(14, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '012021-082021', '5321-Penghapusan NPWP dan/ atau pencabutan pengukuhan PKP berdasarkan permohonan WP', 'proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkasalket`
--

CREATE TABLE `tbl_berkasalket` (
  `id_berkasalket` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(13) NOT NULL,
  `t_status` varchar(200) NOT NULL,
  `t_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkasalket`
--

INSERT INTO `tbl_berkasalket` (`id_berkasalket`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `t_masa_tahun_pajak`, `t_status`, `t_berkas`) VALUES
(53, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '011021-082021', 'selesai', ''),
(70, 'sadf', 'sdfsdf', 'sdfsdf', 'sdfdsf', '', ''),
(71, 'dsfsdf', 'dsfsdf', 'dqew', 'qwewq', '', ''),
(72, 'a', 'b', 'c', 'd', '', ''),
(84, 'cccccccc', '03.260.099.1-018.000', 'cccccccccccc', '012021-092021', '', ''),
(85, 'adfdsf', 'asdfsdf', 'adsfdsf', 'dfdfsdf', '', ''),
(86, 'xx', 'xx', 'adsfdsf', 'xx', '', ''),
(87, 'vva', 'asdfdsf', 'sagdg', 'asf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkaspemeriksaan`
--

CREATE TABLE `tbl_berkaspemeriksaan` (
  `t_namafile` varchar(200) NOT NULL,
  `t_masa_tahun_pajak` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berkaspemeriksaan`
--

INSERT INTO `tbl_berkaspemeriksaan` (`t_namafile`, `t_masa_tahun_pajak`) VALUES
('asd', '122021-122021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapemrikfpp`
--

CREATE TABLE `tbl_datapemrikfpp` (
  `id_datapemrikfpp` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(13) NOT NULL,
  `t_kodepemeriksaan` varchar(200) NOT NULL,
  `t_tanggalinput` date NOT NULL,
  `t_np2` varchar(200) NOT NULL,
  `t_tanggalnp2` date NOT NULL,
  `t_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datapemrikfpp`
--

INSERT INTO `tbl_datapemrikfpp` (`id_datapemrikfpp`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `t_masa_tahun_pajak`, `t_kodepemeriksaan`, `t_tanggalinput`, `t_np2`, `t_tanggalnp2`, `t_status`) VALUES
(16, 'Wajib Pajak A', '96.821.618.4-518.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '12021', '5321-Penghapusan NPWP dan/ atau pencabutan pengukuhan PKP berdasarkan permohonan WP', '2021-09-01', '13123123', '2021-10-06', 'selesai'),
(17, 'Wajib Pajak B', '03.260.099.1-018.001', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '102021-182021', '1182', '2021-08-01', '', '0000-00-00', 'proses'),
(108, 'Wajib Pajak C', '03.260.099.1-018.000', 'adafdsf', '123213', '1183', '0000-00-00', '13123123', '2021-09-30', 'proses'),
(126, 'vva', 'asdfdsf', 'sagdg', 'asf', 'sdfd', '0000-00-00', 'sdfsdf', '2021-10-07', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapemrikp3`
--

CREATE TABLE `tbl_datapemrikp3` (
  `id_datapemrikp3` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(100) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(100) NOT NULL,
  `t_kodepemeriksaan` varchar(100) NOT NULL,
  `t_tanggalinput` date NOT NULL,
  `t_np2` varchar(50) NOT NULL,
  `t_tanggalnp2` date NOT NULL,
  `t_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inputpermohonanpelayanan`
--

CREATE TABLE `tbl_inputpermohonanpelayanan` (
  `id_masuk` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_tanggalsurat` date NOT NULL,
  `t_nomorbps` varchar(20) NOT NULL,
  `t_tanggalbps` date NOT NULL,
  `t_keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inputpermohonanpelayanan`
--

INSERT INTO `tbl_inputpermohonanpelayanan` (`id_masuk`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `t_tanggalsurat`, `t_nomorbps`, `t_tanggalbps`, `t_keterangan`) VALUES
(1, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '2021-12-12', 'S-2948S/WPJ.27/KP.07', '2021-09-08', 'penghapusan NPWP'),
(2, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '2021-12-12', 'S-2S/WPJ.27/KP.0703/', '2021-08-31', 'yyyyy'),
(3, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', '2021-12-12', 'S-3S/WPJ.27/KP.0703/', '2021-09-09', '');

--
-- Triggers `tbl_inputpermohonanpelayanan`
--
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `tbl_inputpermohonanpelayanan` FOR EACH ROW BEGIN
INSERT INTO tbl_inputdafnom(t_namawp, t_npwp, t_alamatsurat)
VALUES(new.t_namawp, new.t_npwp, new.t_alamatsurat);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inputpermohonanpelayanan_log`
--

CREATE TABLE `tbl_inputpermohonanpelayanan_log` (
  `id_masuk` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inputpermohonanpelayanan_log`
--

INSERT INTO `tbl_inputpermohonanpelayanan_log` (`id_masuk`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `keterangan`, `waktu`) VALUES
(4, 'adfdsf', 'asdfdsaf', 'adsfasdf', 'tambah', '2021-09-23'),
(5, 'asfasdf', 'asdfsadf', 'asdfdsf', 'tambah', '2021-09-28'),
(6, 'asfasdf', 'asdfsadf', 'asdfdsf', 'delete', '2021-09-28'),
(8, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', 'update', '2021-09-29'),
(9, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', 'update', '2021-09-29'),
(10, 'xxxx', 'xxxx', 'xxxx', 'tambah', '2021-09-29'),
(11, 'xxxx', 'xxxx', 'xxxx', 'delete', '2021-09-29'),
(12, 'tttt', 'tttt', 'tttt', 'tambah', '2021-10-01'),
(13, 'tttt', 'tttt', 'tttt', 'delete', '2021-10-04'),
(14, 'qqqqq', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(15, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'update', '2021-10-04'),
(16, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', 'update', '2021-10-04'),
(17, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', 'update', '2021-10-04'),
(18, 'qqqqq', 'qqqq', 'asdfdsf', 'update', '2021-10-04'),
(19, 'qqqqq', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(20, 'sdfsf', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(21, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'update', '2021-10-04'),
(22, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', 'update', '2021-10-04'),
(23, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', 'update', '2021-10-04'),
(24, 'sdfsf', 'qqqq', 'asdfdsf', 'update', '2021-10-04'),
(25, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'update', '2021-10-04'),
(26, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', 'update', '2021-10-04'),
(27, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', 'update', '2021-10-04'),
(28, 'sdfsf', 'qqqq', 'asdfdsf', 'update', '2021-10-04'),
(29, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'update', '2021-10-04'),
(30, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', 'update', '2021-10-04'),
(31, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', 'update', '2021-10-04'),
(32, 'sdfsf', 'qqqq', 'asdfdsf', 'update', '2021-10-04'),
(33, 'sdfsf', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(34, 'qqqqq', 'qqqq', 'adsfsdaf', 'tambah', '2021-10-04'),
(35, 'qqqqq', 'qqqq', 'adsfsdaf', 'delete', '2021-10-04'),
(36, 'qqqqq', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(37, 'qqqqq', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(38, 'qqqqq', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(39, 'qqqqq', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(40, 'qqqqq', 'qqqq', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'tambah', '2021-10-04'),
(41, 'qqqqq', 'qqqq', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'delete', '2021-10-04'),
(42, 'qqqqq', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(43, 'qqqqq', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(44, 'qqqqq', 'qqqq', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'tambah', '2021-10-04'),
(45, 'qqqqq', 'qqqq', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', 'delete', '2021-10-04'),
(48, 'qqqqq', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(49, 'qqqqq', 'qqqqq', 'qqqqq', 'tambah', '2021-10-04'),
(50, 'qqqqq', 'qqqqq', 'qqqqq', 'delete', '2021-10-04'),
(51, 'qqqqq', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(52, 'Bahlulx', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(54, 'Bahlulx', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(55, 'kian', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(57, 'kiayo', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(58, 'suyo', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(59, 'kian', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(60, 'kiayo', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(61, 'suyo', 'qqqq', 'asdfdsf', 'delete', '2021-10-04'),
(62, 'ghu', 'asdsfdsf', 'asdfdsf', 'tambah', '2021-10-04'),
(63, 'ghu', 'xxxxxxxxxxxxxxxxxxxx', 'asdfdsf', 'update', '2021-10-04'),
(64, 'ghu', 'xxxxxxxxxxxxxxxxxxxx', 'yyyyyyyyyyyyyyyy', 'update', '2021-10-04'),
(65, 'ghu', 'xxxxxxxxxxxxxxxxxxxx', 'yyyyyyyyyyyyyyyy', 'delete', '2021-10-04'),
(66, 'zian', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(67, 'zian', 'xxxxxxxxxxxxxxxxxxxx', 'asdfdsf', 'update', '2021-10-04'),
(68, 'zian', 'xxxxxxxxxxxxxxxxxxxx', 'asdfdsf', 'delete', '2021-10-04'),
(69, 'Bahlulx', 'qqqq', 'asdfdsf', 'tambah', '2021-10-04'),
(70, 'Bahlulx', 'qqqq', 'yyyyyyyyyyyyyyyyyyyyyyyy', 'update', '2021-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kodepemeriksaan`
--

CREATE TABLE `tbl_kodepemeriksaan` (
  `t_kodepemeriksaan` varchar(20) NOT NULL,
  `t_tujuanpemeriksaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kodepemeriksaan`
--

INSERT INTO `tbl_kodepemeriksaan` (`t_kodepemeriksaan`, `t_tujuanpemeriksaan`) VALUES
('1182', 'Pemeriksaan Rutin LB'),
('1462', 'Pemsus All Taxes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logbookkerja`
--

CREATE TABLE `tbl_logbookkerja` (
  `id_logbookkerja` int(10) NOT NULL,
  `t_suratperintah` varchar(200) NOT NULL,
  `t_judulsuratperintah` varchar(200) NOT NULL,
  `t_tanggalperintah` date NOT NULL,
  `t_tanggalproses` date NOT NULL,
  `t_status` varchar(100) NOT NULL,
  `t_keterangan` varchar(200) NOT NULL,
  `t_pj` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_logbookkerja`
--

INSERT INTO `tbl_logbookkerja` (`id_logbookkerja`, `t_suratperintah`, `t_judulsuratperintah`, `t_tanggalperintah`, `t_tanggalproses`, `t_status`, `t_keterangan`, `t_pj`) VALUES
(1, 'NOMOR ND-888/WPJ.27/KP.0707/2021', 'Penyampaian Usulan DSPP Tahap III', '2021-10-07', '2021-10-07', 'selesai', 'Dalam proses penginputan di tarsan', 'Yesaya'),
(2, 'sdfdsfdsf', 'sdfdsfdsf', '2021-10-13', '2021-10-13', 'sadfdsf', 'dsfdsf', 'sdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitoringlhpfpp`
--

CREATE TABLE `tbl_monitoringlhpfpp` (
  `id_monitoringlhp` int(11) NOT NULL,
  `t_namawp` varchar(200) NOT NULL,
  `t_npwp` varchar(200) NOT NULL,
  `t_alamatsurat` varchar(200) NOT NULL,
  `t_masa_tahun_pajak` varchar(200) NOT NULL,
  `t_nomorlhp` varchar(200) NOT NULL,
  `t_tanggallhp` varchar(200) NOT NULL,
  `t_tanggalsampaip3` varchar(200) NOT NULL,
  `t_tanggalkirimpelayanan` varchar(200) NOT NULL,
  `t_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitoringlhpp3`
--

CREATE TABLE `tbl_monitoringlhpp3` (
  `id_monitoringlhp` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(100) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(100) NOT NULL,
  `t_nomorlhp` varchar(100) NOT NULL,
  `t_tanggallhp` varchar(100) NOT NULL,
  `t_tanggalsampaip3` varchar(100) NOT NULL,
  `t_tanggalkirimpelayanan` varchar(100) NOT NULL,
  `t_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitoringpermohonan`
--

CREATE TABLE `tbl_monitoringpermohonan` (
  `id_keluar` int(11) NOT NULL,
  `t_namawp` varchar(30) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_monitoringpermohonan`
--

INSERT INTO `tbl_monitoringpermohonan` (`id_keluar`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `tujuan_surat`, `lampiran`) VALUES
(143, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '-', '-'),
(144, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', '-', '-'),
(145, 'xxxx', 'xxxx', 'xxxx', '-', '-'),
(146, 'tttt', 'tttt', 'tttt', '-', '-'),
(147, 'qqqqq', 'qqqq', 'asdfdsf', '-', '-'),
(148, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '-', '-'),
(149, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '-', '-'),
(150, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', '-', '-'),
(151, 'qqqqq', 'qqqq', 'asdfdsf', '-', '-'),
(152, 'sdfsf', 'qqqq', 'asdfdsf', '-', '-'),
(153, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '-', '-'),
(154, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '-', '-'),
(155, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', '-', '-'),
(156, 'sdfsf', 'qqqq', 'asdfdsf', '-', '-'),
(157, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '-', '-'),
(158, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '-', '-'),
(159, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', '-', '-'),
(160, 'sdfsf', 'qqqq', 'asdfdsf', '-', '-'),
(161, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '-', '-'),
(162, 'USMAN PEDO', '29.393.323.0-333.000', 'SUMUR ANYIR KEL. SUMUR ANYIR KEC. SUNGAI BENGKAL, ', '-', '-'),
(163, 'SANDI YUDHA PRATAMA', '27.555.062.2-333.000', 'DUSUN SUKO MULYO PELAWAN PELAWAN SAROLANGUN JAMBI,', '-', '-'),
(164, 'sdfsf', 'qqqq', 'asdfdsf', '-', '-'),
(165, 'qqqqq', 'qqqq', 'adsfsdaf', '-', '-'),
(166, 'qqqqq', 'qqqq', 'asdfdsf', '-', '-'),
(168, 'qqqqq', 'qqqq', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '-', '-'),
(169, 'qqqqq', 'qqqq', 'asdfdsf', '-', '-'),
(170, 'qqqqq', 'qqqq', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '-', '-'),
(173, 'qqqqq', 'qqqq', 'asdfdsf', '-', '-'),
(174, 'qqqqq', 'qqqqq', 'qqqqq', '-', '-'),
(175, 'Bahlulx', 'qqqq', 'asdfdsf', '-', '-'),
(177, 'kian', 'qqqq', 'asdfdsf', '-', '-'),
(179, 'kiayo', 'qqqq', 'asdfdsf', '-', '-'),
(180, 'suyo', 'qqqq', 'asdfdsf', '-', '-'),
(181, 'ghu', 'asdsfdsf', 'asdfdsf', '-', '-'),
(182, 'ghu', 'xxxxxxxxxxxxxxxxxxxx', 'asdfdsf', '-', '-'),
(183, 'ghu', 'xxxxxxxxxxxxxxxxxxxx', 'yyyyyyyyyyyyyyyy', '-', '-'),
(184, 'zian', 'qqqq', 'asdfdsf', '-', '-'),
(185, 'zian', 'xxxxxxxxxxxxxxxxxxxx', 'asdfdsf', '-', '-'),
(186, 'Bahlulx', 'qqqq', 'asdfdsf', '-', '-'),
(187, 'Bahlulx', 'qqqq', 'yyyyyyyyyyyyyyyyyyyyyyyy', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sp2fpp`
--

CREATE TABLE `tbl_sp2fpp` (
  `id_sp2fpp` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(13) NOT NULL,
  `t_kodepemeriksaan` varchar(100) NOT NULL,
  `t_namasupervisor` varchar(100) NOT NULL,
  `t_pangkatsupervisor` varchar(100) NOT NULL,
  `t_namaketua` varchar(100) NOT NULL,
  `t_pangkatketua` varchar(100) NOT NULL,
  `t_namaanggota1` varchar(100) NOT NULL,
  `t_pangkatanggota1` varchar(100) NOT NULL,
  `t_namaanggota2` varchar(100) NOT NULL,
  `t_pangkatanggota2` varchar(100) NOT NULL,
  `t_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sp2fpp`
--

INSERT INTO `tbl_sp2fpp` (`id_sp2fpp`, `t_namawp`, `t_npwp`, `t_alamatsurat`, `t_masa_tahun_pajak`, `t_kodepemeriksaan`, `t_namasupervisor`, `t_pangkatsupervisor`, `t_namaketua`, `t_pangkatketua`, `t_namaanggota1`, `t_pangkatanggota1`, `t_namaanggota2`, `t_pangkatanggota2`, `t_berkas`) VALUES
(1, 'ZULPIKRI', '18.440.920.9-333.000', 'SUNGAI MEDANG KEC SUNGAI PENUH KEL. DS/KEL LAINNYA KEC. AIRHANGAT, SUNGAI MEDANG, KAB. KERINCI', '012021-082021', '5321-Penghapusan NPWP dan/ atau pencabutan pengukuhan PKP berdasarkan permohonan WP', 'SAJAYA FADLUL IBADI', 'III d', 'ILHAM DIO PRATAMA', 'IIb', 'CINDY AULIA PUTRI DARMAWAN', 'IIa', '-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sp2p3`
--

CREATE TABLE `tbl_sp2p3` (
  `id_sp2p3` int(11) NOT NULL,
  `t_namawp` varchar(100) NOT NULL,
  `t_npwp` varchar(20) NOT NULL,
  `t_alamatsurat` varchar(100) NOT NULL,
  `t_masa_tahun_pajak` varchar(20) NOT NULL,
  `t_kodepemeriksaan` varchar(100) NOT NULL,
  `t_namasupervisor` varchar(100) NOT NULL,
  `t_pangkatsupervisor` varchar(100) NOT NULL,
  `t_namaketua` varchar(100) NOT NULL,
  `t_pangkatketua` varchar(100) NOT NULL,
  `t_namaanggota1` varchar(100) NOT NULL,
  `t_pangkatanggota1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sp2perubahan`
--

CREATE TABLE `tbl_sp2perubahan` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timpemeriksa`
--

CREATE TABLE `tbl_timpemeriksa` (
  `t_namapemeriksa` varchar(100) NOT NULL,
  `t_pangkatpemeriksa` varchar(100) NOT NULL,
  `t_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_timpemeriksa`
--

INSERT INTO `tbl_timpemeriksa` (`t_namapemeriksa`, `t_pangkatpemeriksa`, `t_jabatan`) VALUES
('Sajaya Fadlul Ibadi', 'Penata Tk.I/ IIId', 'Supervisor'),
('Ilham Dio Pratama', 'Pengatur Muda Tk. I/ II.b', 'Ketua Tim'),
('Cindy Aulia Putri Darmawan', 'Pengatur Muda/ II.a', 'Anggota Tim'),
('Maloma Naibaho', 'Penata Muda Tk.I/ III.b', 'Ketua Tim'),
('Muhammad Ardhi Saputra', 'Pengatur/ II.c', 'Anggota Tim'),
('Andika Frans Natio Simarmata', 'Pengatur/ II.c', 'Anggota Tim'),
('Agung Zakaria Saragih', 'Pengatur/ II.c', 'Anggota Tim'),
('Hotman Jossua Edianto Hutagalung', 'Penata Muda/ III.a', 'Anggota Tim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Aditya Syaifuddin', 'Bosmuda', '0d6783bc0f366b25334c74a9b935a30ac4cb3ad5'),
(2, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(3, 'Adt', 'adt', '510911ca0904df843254643ba27120ccabfde1b1'),
(4, 'ademin', 'ademin', 'ademin'),
(5, 'bukan ademin', 'bukanademin', 'bukanademinboy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_auditplan`
--
ALTER TABLE `tbl_auditplan`
  ADD PRIMARY KEY (`id_auditplan`);

--
-- Indexes for table `tbl_berkasalket`
--
ALTER TABLE `tbl_berkasalket`
  ADD PRIMARY KEY (`id_berkasalket`);

--
-- Indexes for table `tbl_datapemrikfpp`
--
ALTER TABLE `tbl_datapemrikfpp`
  ADD PRIMARY KEY (`id_datapemrikfpp`);

--
-- Indexes for table `tbl_inputpermohonanpelayanan`
--
ALTER TABLE `tbl_inputpermohonanpelayanan`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tbl_inputpermohonanpelayanan_log`
--
ALTER TABLE `tbl_inputpermohonanpelayanan_log`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tbl_logbookkerja`
--
ALTER TABLE `tbl_logbookkerja`
  ADD PRIMARY KEY (`id_logbookkerja`);

--
-- Indexes for table `tbl_monitoringlhpfpp`
--
ALTER TABLE `tbl_monitoringlhpfpp`
  ADD PRIMARY KEY (`id_monitoringlhp`);

--
-- Indexes for table `tbl_monitoringpermohonan`
--
ALTER TABLE `tbl_monitoringpermohonan`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tbl_sp2fpp`
--
ALTER TABLE `tbl_sp2fpp`
  ADD PRIMARY KEY (`id_sp2fpp`);

--
-- Indexes for table `tbl_sp2perubahan`
--
ALTER TABLE `tbl_sp2perubahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_auditplan`
--
ALTER TABLE `tbl_auditplan`
  MODIFY `id_auditplan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_berkasalket`
--
ALTER TABLE `tbl_berkasalket`
  MODIFY `id_berkasalket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_datapemrikfpp`
--
ALTER TABLE `tbl_datapemrikfpp`
  MODIFY `id_datapemrikfpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tbl_inputpermohonanpelayanan`
--
ALTER TABLE `tbl_inputpermohonanpelayanan`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_inputpermohonanpelayanan_log`
--
ALTER TABLE `tbl_inputpermohonanpelayanan_log`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_logbookkerja`
--
ALTER TABLE `tbl_logbookkerja`
  MODIFY `id_logbookkerja` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_monitoringlhpfpp`
--
ALTER TABLE `tbl_monitoringlhpfpp`
  MODIFY `id_monitoringlhp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_monitoringpermohonan`
--
ALTER TABLE `tbl_monitoringpermohonan`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `tbl_sp2fpp`
--
ALTER TABLE `tbl_sp2fpp`
  MODIFY `id_sp2fpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sp2perubahan`
--
ALTER TABLE `tbl_sp2perubahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
