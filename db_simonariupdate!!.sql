-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2018 at 03:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simonari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'wahyu', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Eselon 1'),
(2, 'Eselon 2'),
(3, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitor_rtp`
--

CREATE TABLE `tbl_monitor_rtp` (
  `id_sop` int(11) NOT NULL,
  `deskripsi_rtp` text NOT NULL,
  `plan_mulai` date NOT NULL,
  `plan_selesai` date NOT NULL,
  `indikator_output` text NOT NULL,
  `pic` varchar(256) NOT NULL,
  `anggaran` double NOT NULL,
  `real_mulai` date NOT NULL,
  `real_selesai` date NOT NULL,
  `status` varchar(64) NOT NULL,
  `hambatan` varchar(512) NOT NULL,
  `keterangan` text NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_monitor_rtp`
--

INSERT INTO `tbl_monitor_rtp` (`id_sop`, `deskripsi_rtp`, `plan_mulai`, `plan_selesai`, `indikator_output`, `pic`, `anggaran`, `real_mulai`, `real_selesai`, `status`, `hambatan`, `keterangan`, `berkas`) VALUES
(32, 'Pemutakhiran database SIP3 secara berkala\r\n', '2017-07-31', '2017-12-29', 'Database SIP3 yang mutakhir', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(35, 'Melakukan revisi jadwal dan anggaran ', '2017-07-31', '2017-12-29', 'TOR dan POK revisi kegiatan ', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(33, 'Mengusulkan untuk mengikuti diklat teknis\r\n', '2017-11-01', '2017-12-29', 'Memo usulan diklat teknis telah disampaikan ke Biro TU-TIK', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(34, 'Pemutakhiran database SIP3 secara berkala\r\n', '2017-07-31', '2017-12-29', 'Database SIP3 yang mutakhir', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(101, 'Mengoptimalkan koordinasi ienternal dan mengefektifkan SPDE\r\n', '2017-07-01', '2017-12-01', 'Pelaksanaan forum diskusi dan Memorandum permintaan sosialisasi penggunaan SPDE', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(102, 'Membuat data base jejaring kerja\r\n', '2017-07-01', '2017-12-31', 'Laporan updating data base', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(103, 'Membuat data base jejaring kerja\r\n', '2017-07-01', '2017-12-01', 'Laporan updating data base', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(104, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-01', 'Memorandum  permintaan penambahan kuota', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(105, 'Optimalisasi RPA sebagai instrumen pengendalian pelaksanaan kegiatan dan anggaran  \r\n', '2017-07-01', '2017-12-01', 'Memorandum pengajuan penetapan RPA', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(115, 'Mengintensifkan koodinasi dengan daerah/stakeholder \r\n', '2017-07-01', '2017-12-01', 'Laporan updating data base', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(116, 'Optimalisasi RPA sebagai instrumen pengendalian pelaksanaan kegiatan dan anggaran  \r\n', '2017-07-01', '2017-12-01', 'Memorandum pengajuan penetapan RPA', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(117, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-01', 'Memorandum  permintaan penambahan kuota', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(124, 'Mengoptimalkan koordinasi dengan lembaga/stakeholder\r\n', '2017-07-01', '2017-12-01', 'Surat permohonan pembentukan Tim Kemitraan dengan lembaga/instansi terkait', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(125, 'Optimalisasi RPA sebagai instrumen pengendalian pelaksanaan kegiatan dan anggaran  \r\n', '2017-07-01', '2017-12-01', 'Memorandum pengajuan penetapan RPA', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(126, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-01', 'Memorandum  permintaan penambahan kuota', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(118, 'Mengoptimalkan koordinasi dengan Protokol\r\n', '2017-07-01', '2017-12-01', 'Memorandum permohonan agenda/kegiatan wapres secara berkala ', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(119, 'Mengintensifkan koordinasi dengan lembaga/pihak terkait \r\n', '2017-07-01', '2017-12-01', 'Surat permohonan pembentukan Tim Kemitraan dengan lembaga/instansi terkait', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(123, 'Mengusulkan penambahan kuota internet.', '0000-00-00', '0000-00-00', 'Surat permintaan penambahan kuota', 'Agustina Tulak, S.H.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(120, 'Memperbaharui database \r\n', '2017-07-01', '2017-12-01', 'Laporan updating data base', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(122, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-01', 'Memorandumm  permintaan penambahan kuota', 'Celvya Betty Manurung, S.IP.,M.P.M', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(127, 'Surat permintaan data dan informasi ke stakeholders lebih spesifik.', '2017-07-31', '2017-12-31', 'Surat permintaan data ke stakeholders', 'Saptarita Dewi, S.Sos., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(128, 'Pemutakhiran database data, dan Koordinasi dengan K/L lebih intens.', '2017-07-31', '2017-12-31', 'Data base yang termutakhirkan', 'Adella Bachtiar, S.P., M.E.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(129, 'Mengajukan penyesuaian anggaran', '2017-07-31', '2017-12-31', 'Memo pengajuan', 'Amelia Irna Mayarni Sitohang, S.E.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(81, 'Membuat media komunikasi berbasis medsos/social networking (WA Grup)', '2017-09-01', '2017-09-05', 'Tersedianya WA grup', 'Rianita Kumalasari, S.IP, M.Com', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(82, 'Perbaikan Form lembar disposisi\r\n', '2017-12-01', '2017-12-06', 'Form lembar disposisi termutakhir', 'Supriyatno Widodo', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(36, 'Pemutakhiran database SIP3 secara berkala\r\n', '2017-08-01', '2017-12-29', 'Database SIP3 yang mutakhir', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(37, 'Memperluas pencarian data/ informasi sekunder melalui website stakeholder, akses jurnal dari Perpustakaan Nasional; \r\n', '2017-08-01', '2017-12-29', 'Data/informasi sekunder yang lebih lengkap', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(38, 'Melakukan review laporan dilakukan secara online (email, S-box, dsb)\r\n', '2017-11-01', '2017-12-29', 'Draf hasil review laporan', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(39, 'Penerapan SPDE secara optimal; Penyampaian dokumen dalam bentuk softcopy dan hardcopy \r\n', '2017-11-01', '2017-12-29', 'Memo penyampaian dokumen, baik softcopy dan hardcopy', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(40, 'Penyusunan daftar stakeholder yang ditargetkan menerima Laporan Analisis Kebijakan\r\n', '2017-11-01', '2017-12-29', 'Daftar stakeholder penerima Laporan Analisis Kebijakan', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(83, 'Menyampaikan memo dengan batas waktu pengumpulan', '2018-02-01', '2018-04-30', 'Memo dengan batas waktu penyampaian TOR/RAB', 'Imam Sudrajat, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(61, 'Melakukan revisi jadwal dan anggaran \r\n', '2017-07-31', '2017-11-30', 'TOR dan POK revisi kegiatan', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(154, 'Memperluas jejaring kerja sampai dengan level Eselon I', '2017-07-31', '2017-12-31', 'Database  jejaring kerja sampai dengan level Eselon I', 'Ratno Oedianto, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(158, 'pencarian data pada pihak lain yang terkait.', '2017-07-31', '2017-12-31', 'Laporan lebih komprehensif.', 'Septiani Dwi Nurani, S.E.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(62, 'Pemutakhiran database jejaring kerja secara berkala\r\n', '2017-07-31', '2017-12-29', 'Database jejaring kerja yang lebih lengkap', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(63, 'Permohonan penunjukkan pejabat/ pegawai lain yang menggantikan\r\n', '2017-07-31', '2017-12-29', 'Bukti fax/ email/ pesan teks dengan pejabat/ pegawai yang menggantikan ', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(162, 'Mengusulkan penambahan kuota internet.', '2017-07-31', '2017-12-31', 'Surat Permohonan penambahan kuota', 'Ratno Oedianto, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(84, 'Melakukan rapat koordinasi H+14 setelah batas waktu penyampaian', '2018-01-01', '2018-02-01', 'Dokumen POK DIPA disampaikan sesuai batas waktu', 'Imam Sudrajat, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(164, 'Mengajukan Perubahan Anggaran', '2017-07-31', '2017-12-31', 'Memo pengajuan', 'Septiani Dwi Nurani, S.E.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(64, 'Memperluas metode pencarian data/ informasi sekunder\r\n', '2017-07-31', '2017-11-30', 'Data/informasi sekunder yang lebih lengkap', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(65, 'Memperluas metode pencarian data/ informasi sekunder\r\n', '2017-07-31', '2017-12-29', 'Data/informasi sekunder yang lebih lengkap', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(66, 'Revisi jadwal dan anggaran telah dilakukan \r\n', '2017-10-02', '2017-11-30', 'TOR & POK Revisi dan memo pengantar revisi', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(67, 'Pembuatan checklist dokumen administrasi keuangan\r\n', '2017-09-04', '2017-09-29', 'Checklist dokumen administrasi keuangan ', 'Linda Astuti, S.H., M.H.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(95, 'Melakukan rapat koordinasi H+14 setelah batas waktu penyampaian\r\n', '2018-01-02', '2018-12-30', 'Laporan realisasi tepat waktu', 'Imam Sudrajat, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(107, 'a. Inventarisasi dan evaluasi SOP pengelolaan barang persediaan\r\nb. Melakukan verifikasi RTH secara periodik', '2018-07-01', '2018-12-30', 'Laporan inventarisasi SOP pengelolaan barang persediaan dan verifikasi RTH', 'Dedy Triharjanto, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(68, 'Pemutakhiran database jejaring kerja secara berkala\r\n', '2017-07-31', '2017-12-29', 'Database jejaring kerja yang lebih lengkap', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(69, 'Memperluas metode pencarian data/ informasi sekunder\r\n', '2017-07-31', '2017-12-29', 'Data/informasi sekunder yang lebih lengkap', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(70, 'Optimalisasi SOP dan pengendalian secara berjenjang\r\n', '2017-07-31', '2017-11-30', 'Memo penyampaian dokumen laporan hasil FGD/seminar/ rapat koordinasi/ dsb', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(108, 'Membuat kartu kendali', '2017-07-01', '2017-12-30', 'Kartu Kendali', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(153, 'Mengoptimalkan koordinasi ienternal dan mengefektifkan SPDE\r\n', '2017-07-01', '2017-12-31', 'Pelaksanaan forum diskusi dan Memorandum permintaan sosialisasi penggunaan SPDE', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(155, 'Membuat data base jejaring kerja\r\n', '2017-07-01', '2017-12-31', 'Laporan updating data base', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(156, 'Membuat data base jejaring kerja\r\n', '2017-12-01', '2017-12-31', 'Laporan updating data base', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(157, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-31', 'Memorandumm  permintaan penambahan kuota', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(109, 'Membuat Kartu Kendali', '2017-07-01', '2017-12-30', 'Kartu Kendali', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(110, 'Membuat Kartu Kendali', '2017-07-01', '2017-12-30', 'Kartu Kendali', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(159, 'Optimalisasi RPA sebagai instrumen pengendalian pelaksanaan kegiatan dan anggaran  \r\n', '2017-07-01', '2017-12-31', 'Memorandum pengajuan penetapan RPA', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(75, 'Pelaksanaan rapat internal secara berkala; standarisasi lembar disposisi\r\n', '2017-09-04', '2017-09-29', 'Notulen rapat internal; lembar disposisi terstandar', 'Linda Astuti, S.H., M.H.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(160, 'Mengintensifkan koodinasi dengan daerah/stakeholder \r\n', '2017-07-01', '2017-12-31', 'Laporan updating data base', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(161, 'Optimalisasi RPA sebagai instrumen pengendalian pelaksanaan kegiatan dan anggaran  \r\n', '2017-07-01', '2017-12-31', 'Memorandum pengajuan penetapan RPA', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(163, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-31', 'Memorandumm  permintaan penambahan kuota', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(76, 'Pemutakhiran database jejaring kerja dan SIP3 secara berkala', '2017-07-31', '2017-12-29', 'Database SIP3 yang mutakhir', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(169, 'Mengoptimalkan koordinasi dengan lembaga/stakeholder\r\n', '2017-07-01', '2017-12-31', 'Surat permohonan pembentukan Tim Kemitraan dengan lembaga/instansi terkait', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(170, 'Optimalisasi RPA sebagai instrumen pengendalian pelaksanaan kegiatan dan anggaran  \r\n', '2017-07-01', '2017-12-31', 'Memorandum pengajuan penetapan RPA', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(77, 'Pemutakhiran database SIP3 secara berkala\r\n', '2017-07-31', '2017-12-29', 'Database SIP3 yang mutakhir', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(171, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-31', 'Memorandumm  permintaan penambahan kuota', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(78, 'Melaksanakan diskusi internal (coffee morning) secara berkala; Mengusulkan untuk mengikuti diklat teknis\r\n', '2017-07-31', '2017-12-29', 'Notulen diskusi internal (coffee morning); Memo usulan untuk pegawai mengikuti diklat teknis ', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(165, 'Mengoptimalkan koordinasi dengan Protokol\r\n', '2017-07-01', '2018-12-31', 'Memorandum permohonan agenda/kegiatan wapres secara berkala ', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(166, 'Mengintensifkan koordinasi dengan lembaga/pihak terkait \r\n', '2017-07-01', '2017-12-31', 'Surat permohonan pembentukan Tim Kemitraan dengan lembaga/instansi terkait', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(167, 'Memperbaharui database \r\n', '2017-07-01', '2017-12-31', 'Laporan updating data base', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(79, 'Mengusulkan untuk pegawai mengikuti diklat teknis; Menyusun panduan penyusunan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', '2017-07-31', '2017-12-29', 'Memo usulan untuk pegawai mengikuti diklat teknis; Buku panduan penyusunan bahan rapat, pidato/sambutan, audiensi, dan kunjungan', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '2017-11-24', 'Close', 'Memo usulan diklat teknis kepada Biro TU-TIK telah disampaikan. Namun panduan penyusunan bahan rapat, pidato/sambutan, audiensi dan kunjungan kerja Wapres belum terealisasi.', '', ''),
(168, 'mengusulkan penambahan kuota internet\r\n', '2017-07-01', '2017-12-31', 'Memorandumm  permintaan penambahan kuota', 'Pranggono Dwianto, S.IP., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(80, 'Penerapan SPDE secara optimal; Penyampaian dokumen dalam bentuk softcopy dan hardcopy  \r\n\r\n', '2017-07-31', '2017-12-29', 'Memo penyampaian dokumen bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(111, 'Peningkatan kompetensi melalui diklat', '2017-07-01', '2017-12-30', 'Laporan Keikutsertaan Diklat', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(144, 'Pelaksanaan rapat internal secara berkala; standarisasi lembar disposisi\r\n', '2017-07-31', '2017-12-29', 'Notulen rapat internal; lembar disposisi terstandar', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(112, 'Digitalisasi arsip', '2017-07-01', '2017-12-30', 'Data base dokumen keuangan', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(113, 'Rekonsiliasi data secara periodik', '2017-07-01', '2017-12-30', 'Laporan Hasil Rekonsiliasi', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(145, 'Proaktif melengkapi database peraturan terkait berkoordinasi dengan Biro Perencanaan dan Keuangan; Melakukan pembaruan database peraturan di SIP3\r\n\r\n', '2017-07-31', '2017-12-29', 'Dokumen SBM dan peraturan terkait yang berlaku pada tahun berjalan', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(114, 'Membuat Kartu Kendali', '2017-07-01', '2017-12-30', 'Kartu Kendali', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(146, 'Pembahasan perencanaan dan evaluasi anggaran dan kinerja Asdep secara berkala dalam tahun berjalan\r\n', '2017-07-31', '2017-11-30', 'Notulen rapat internal pembahasan rencana dan evaluasi anggaran dan kinerja Asdep', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(147, 'Penerapan SPDE secara optimal; Penyampaian dokumen dalam bentuk softcopy dan hardcopy \r\n', '2017-07-31', '2017-12-29', 'Memo penyampaian dokumen, baik softcopy dan hardcopy', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(148, 'Pelaksanaan rapat internal secara berkala; standarisasi lembar disposisi', '2017-07-31', '2017-12-29', 'Notulen rapat internal; lembar disposisi terstandar', 'Linda Astuti, S.H., M.H.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(96, 'Rekonsiliasi/Rapat Koordinasi', '2017-07-01', '2017-12-30', 'Laporan Hasil Rekonsiliasi/Rapat Koordinasi', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(149, 'Pemutakhiran database SIP3 secara berkala\r\n', '2017-07-31', '2017-12-29', 'Database SIP3 yang mutakhir', 'Agung Setiawan, S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(150, 'Melakukan review laporan dilakukan secara online (email, S-box, dsb)\r\n', '2017-07-31', '2017-12-29', 'Draf final hasil review laporan', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(97, 'Menjalin komunikasi dengan pembina Satker terkait informasi update aplikasi', '2017-07-01', '2017-12-30', 'Laporan Hasil Koordinasi', 'Dedy Triharjanto, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(151, 'Penerapan SPDE secara optimal; Penyampaian dokumen dalam bentuk softcopy dan hardcopy \r\n', '2017-07-31', '2017-12-29', 'Memo penyampaian dokumen, baik softcopy dan hardcopy', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(152, 'Penerapan SPDE secara optimal; Penyampaian dokumen dalam bentuk softcopy dan hardcopy \r\n', '2017-07-31', '2017-12-29', 'Memo penyampaian dokumen, baik softcopy dan hardcopy', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(98, 'Koordinasi secara periodik dengan KPPN', '2017-07-01', '2017-12-30', 'Laporan Hasil Koordinasi', 'Purwono Prihantoro B.T., S.E., M.Si.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(99, 'Update data pada aplikasi secara periodik', '2017-07-01', '2017-12-30', 'Laporan update data secara periodik', 'Dedy Triharjanto, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(100, 'Koordinasi secara periodik ', '2017-07-01', '2017-12-30', 'Laporan Hasil Koordinasi', 'Dedy Triharjanto, S.E., M.M.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(131, 'Membuat media komunikasi berbasis media sosial/Social Networking group', '2017-09-01', '2017-09-10', 'WA Group', 'Rianita Kumalasari, S.IP, M.Com', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(71, '(1) Penerapan SPDE secara optimal; \r\nMelaksanakan diskusi internal (coffee morning) secara berkala; \r\nMengusulkan untuk mengikuti diklat teknis\r\n', '2017-07-31', '2017-12-29', 'Memo pengantar; Notulen diskusi internal (coffee morning); Memo usulan untuk pegawai mengikuti diklat teknis ', 'Dewi Rachmawatty, S.H., M.Kn.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(172, 'Database narasumber, Data pernyataan Wapres', '2017-06-30', '2017-03-11', 'Database', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(173, 'Melaksanakan/ mengikuti FGD isu aktual, Pengembangan jejaring kerja dengan stakeholder utama.', '2017-01-06', '2017-03-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(174, 'Pengembangan jejaring kerja dengan stakeholder utama, Diklat analisis kebijakan.', '2017-01-10', '2017-01-11', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(41, 'Pertemuan berkala, Mengusulkan diklat, Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala, Memo usulan diklat, Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(42, 'Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan diklat terkait metodologi penelitian dan teknik pengumpulan data; Coaching/ mentoring; Koordinasi dengan unit kerja terkait untuk pemasangan/ pemeliharaan antivirus secara berkala; Optimalisasi Sbox untuk backup data', '2017-06-01', '2017-12-31', 'MoU dengan K/L terkait; Memo usulan diklat; Laporan coaching/ mentoring; Memo  usulan terkait pemeliharaan antivirus; Laporan pemanfaatan SBox', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(43, 'Mengusulkan diklat terkait penulisan laporan yang efektif', '2017-06-01', '2017-12-31', 'Memo usulan diklat', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(44, 'Melakukan sosialisasi SOP secara intern; Mengoptimalkan penerapan SPDE', '2017-06-01', '2017-12-31', 'Laporan sosialisasi SOP; Laporan pemanfaatan SPDE', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(45, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(46, 'Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan diklat terkait metodologi penelitian dan teknik pengumpulan data; Coaching/ mentoring; Koordinasi dengan unit kerja terkait untuk pemasangan/ pemeliharaan antivirus secara berkala; Optimalisasi Sbox untuk backup data', '2017-06-01', '2017-12-31', 'MoU dengan K/L terkait; Memo usulan diklat; Laporan coaching/ mentoring; Memo  usulan terkait pemeliharaan antivirus; Laporan pemanfaatan SBox', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(47, 'Mengusulkan diklat terkait penulisan laporan yang efektif', '2017-06-01', '2017-12-31', 'Memo usulan diklat', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(48, 'Melakukan sosialisasi SOP secara intern; Mengoptimalkan penerapan SPDE; Mengusulkan standarisasi format laporan', '2017-06-01', '2017-12-31', 'Laporan sosialisasi SOP; Laporan pemanfaatan SPDE; Memo usulan standarisasi format laporan', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(53, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(54, 'Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan diklat terkait metodologi penelitian dan teknik pengumpulan data; Coaching/ mentoring; Koordinasi dengan unit kerja terkait untuk pemasangan/ pemeliharaan antivirus secara berkala; Optimalisasi Sbox untuk backup data', '2017-06-01', '2017-12-31', 'MoU dengan K/L terkait; Memo usulan diklat; Laporan coaching/ mentoring; Memo  usulan terkait pemeliharaan antivirus; Laporan pemanfaatan SBox', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(175, 'Melaksanakan/mengikuti FGD isu aktual, Pengembangan jejaring kerja dengan stakeholder utama.', '2017-02-01', '2017-01-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(55, 'Mengusulkan diklat terkait penulisan laporan yang efektif', '2017-06-01', '2017-12-31', 'Memo usulan diklat', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(55, 'Mengusulkan diklat terkait penulisan laporan yang efektif', '2017-06-01', '2017-12-31', 'Memo usulan diklat', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(56, 'Melakukan sosialisasi SOP secara intern; Mengoptimalkan penerapan SPDE\r\n', '2017-06-01', '2017-12-31', 'Laporan sosialisasi SOP; Laporan pemanfaatan SPDE', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(176, 'Menyiapkan Narasumber alternatif, Pengembangan jejaring kerja dengan stakeholder utama.', '2017-02-01', '2017-01-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(57, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring; Pertemuan secara berkala/terjadwal dengan eselon I', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring; Notulen pertemuan berkala dengan eselon I', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(177, 'Pengembangan jejaring kerja dengan stakeholder utama, Diklat analisis kebijakan Lanjutan, Penerapan Manajemen kinerja Pegawai.', '2018-02-01', '2018-01-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(58, 'Mengusulkan diklat terkait penyusunan TOR dan teknik analisis data; Mengusulkan integrasi data lintas kedeputian substansi; Mengusulkan penyusunan database stakeholders di lingkup Setwapres\r\n', '2017-06-01', '2017-12-31', 'Memo usulan diklat; Memo usulan integrasi data; Memo usulan terkait penyusunan database stakeholder', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(178, 'Database jejaring kerja, Melaksanakan/meng-ikuti FGD isu aktual.', '2017-01-06', '2017-01-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(59, 'Melakukan persiapan kegiatan minimal 1 bulan sebelum pelaksanaan; Pengemba-ngan jejaring kerja dengan stakeholder utama; Updating informasi cuaca/ kondisi lapangan dari berbagai sumber; Mengusulkan  general check-up secara berkala\r\n', '2017-06-01', '2017-12-31', 'Notulen rapat persiapan kegiatan; MoU dengan K/L/Pemda; Laporan pemantauan cuaca/kondisi lapangan; Memo usulan general check-up', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(179, 'Pengembangan jejaring kerja dengan stakeholder utama', '2017-02-07', '2017-01-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(180, 'Pengembangan jejaring kerja dengan stakeholder utama, Diklat analisis kebijakan Lanjutan, Penerapan Manajemen kinerja Pegawai.', '2018-02-01', '2018-02-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(185, 'Melaksanakan/meng-ikuti FGD isu aktual.', '2017-10-10', '2017-12-10', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(186, 'Pengembangan jejaring kerja.', '2017-02-07', '2017-02-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(187, 'Menggunakan SPDE', '2017-02-07', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(188, 'Melaksanakan/mengikuti FGD isu aktual', '2017-10-10', '2017-10-12', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(189, 'Melaksanakan/mengikuti FGD isu aktual', '2017-09-01', '2017-09-15', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(190, 'Memperkuat koordinasi dengan TU Pimpinan, Menggunakan Buku Eskpedisi.', '2017-08-10', '2017-08-14', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(191, 'Komunikasi/ konfirmasi', '2017-01-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(192, 'Memperluas jejaring kerja dengan K/L sampai dengan eselon II', '2017-01-01', '2017-12-31', 'Database', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(193, 'Mengintensifkan koordinasi dengan pihak lain.', '2017-01-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(194, 'Memperkuat jaringan dengan K/L dan TU Pimpinan.', '2017-01-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(60, 'Menyusun skala prioritas pekerjaan; Mengusulkan general check-up secara berkala; Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan perawatan alat kerja secara berkala; Sosialisasi Permensesneg ttg Tata Naskah Dinas secara intern; Mengusulkan standarisasi format laporan', '2017-06-01', '2017-12-31', 'Jadwal kegiatan prioritas mingguan/ bulanan; Memo usulan pelaksanaan general check-up ; MoU dengan K/L terkait; Memo usulan perbaikan/ pemeliharaan alat kerja; Laporan sosialisasi Permensesneg Tata Naskah Dinas; Memo usulan standarisasi format laporan', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(199, 'Penajaman program/ kegiatan, Pembahasan program/ kegiatan bersama unit kerja terkait.', '2018-01-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(200, 'Manajemen waktu yang lebih baik.', '2017-07-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(181, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(201, 'Pengembangan jejaring kerja dengan stakeholder utama, Diklat analisis kebijakan Lanjutan.', '2017-07-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(206, 'Diklat Manajemen Keuangan, Database.', '2018-01-01', '2018-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(207, 'Konsultasi dengan unit lain.', '2017-01-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(182, 'Mengusulkan diklat terkait penyusunan TOR dan teknik analisis data;	Mengusulkan integrasi data lintas kedeputian substansi; Mengoptimalkan penggunaan Sbox Setneg; Pengembangan jejaring kerja dengan stakeholder utama; Evaluasi program/ kegiatan; Pembahasan program/ kegiatan bersama unit kerja terkait', '2017-06-01', '2017-12-31', 'Memo usulan diklat; Memo usulan integrasi data; Laporan penggunaan Sbox Setneg; MoU dengan stakeholder terkait; Notulen rapat evaluasi program', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(208, 'Memperkuat koordinasi dengan TU Pimpinan, Menggunakan Buku Eskpedisi.', '2017-01-01', '2017-12-31', 'Laporan', 'Amri Kusumawardana Sumodiningrat, S.IP.', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(183, 'Pengembangan jejaring kerja dengan stakeholder  utama; Pengecekan kembali perangkat minimal 1 jam sebelum kegiatan', '2017-06-01', '2017-12-31', 'MoU dengan stakeholder terkait; Laporan pengecekan perangkat', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(184, 'Menyusun skala prioritas pekerjaan; Mengusulkan general check-up secara berkala; Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan perawatan alat kerja secara berkala; Sosialisasi Permenses-neg ttg Tata Naskah Dinas secara intern; Mengusulkan standarisasi format laporan', '2017-06-01', '2017-12-31', 'Jadwal kegiatan prioritas mingguan/ bulanan; Memo usulan pelaksanaan general check-up; MoU dengan K/L terkait; Memo usulan perbaikan/ pemeliharaan alat kerja; Laporan sosialisasi Permensesneg Tata Naskah Dinas; Memo usulan standarisasi format laporan', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(195, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(196, 'Mengusulkan optimalisasi penerapan SPDE di seluruh unit kerja Setwapres', '2017-06-01', '2017-12-31', 'Memo usulan pemanfaatan SPDE di seluruh unit kerja Setwapres', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(197, 'Updating informasi cuaca/ kondisi lapangan dari berbagai sumber', '2017-06-01', '2017-12-31', 'Laporan pemantauan cuaca/kondisi lapangan', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(198, 'Menyusun skala prioritas pekerjaan; Mengusulkan general check-up secara berkala; Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan perawatan alat kerja secara berkala; Sosialisasi Permensesneg ttg Tata Naskah Dinas secara intern; Mengusulkan standarisasi format laporan', '2017-06-01', '2017-12-31', 'Jadwal kegiatan prioritas mingguan/ bulanan; Memo usulan pelaksanaan general check-up; MoU dengan K/L terkait; Memo usulan perbaikan/ pemeliharaan alat kerja; Laporan sosialisasi Permensesneg Tata Naskah Dinas; Memo usulan standarisasi format laporan', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(49, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(50, 'Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan diklat terkait metodologi penelitian dan teknik pengumpulan data; Coaching/ mentoring; Koordinasi dengan unit kerja terkait untuk pemasangan/ pemeliharaan antivirus secara berkala; Optimalisasi Sbox untuk backup data', '2017-06-01', '2017-12-31', 'MoU dengan K/L terkait; Memo usulan diklat; Laporan coaching/ mentoring; Memo  usulan terkait pemeliharaan antivirus; Laporan pemanfaatan SBox', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(51, 'Mengusulkan diklat terkait penulisan laporan yang efektif', '2017-06-01', '2017-12-31', 'Memo usulan diklat', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(52, 'Melakukan sosialisasi SOP secara intern; Mengoptimalkan penerapan SPDE', '2017-06-01', '2017-12-31', 'Laporan sosialisasi SOP; Laporan pemanfaatan SPDE', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(202, 'Pertemuan berkala; Mengusulkan diklat; Coaching/ mentoring', '2017-06-01', '2017-12-31', 'Notulen pertemuan berkala; Memo usulan diklat; Laporan coaching/ mentoring', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(203, 'Coaching/ mentoring; Koordinasi dengan unit kerja terkait untuk pemasangan/ pemeliharaan antivirus secara berkala; Optimalisasi Sbox untuk backup data', '2017-06-01', '2017-12-31', 'Laporan coaching/ mentoring; Memo  usulan terkait pemeliharaan antivirus; Laporan pemanfaatan SBox', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(204, 'Koordinasi aktif dengan unit kerja terkait; Mempersiapkan konsep dokumen anggaran/laporan kinerja lebih awal', '2017-06-01', '2017-12-31', 'Laporan koordinasi dengan unit kerja terkait; Notulen rapat terkait penyusunan dokumen perencanaan dan laporan ', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(205, 'Menyusun skala prioritas pekerjaan; Mengusulkan general check-up secara berkala; Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan perawatan alat kerja secara berkala', '2017-06-01', '2017-12-31', 'Jadwal kegiatan prioritas mingguan/ bulanan; Memo usulan pelaksanaan general check-up; MoU dengan K/L terkait; Memo usulan perbaikan/ pemeliharaan alat kerja', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', ''),
(205, 'Menyusun skala prioritas pekerjaan; Mengusulkan general check-up secara berkala; Pengembangan jejaring kerja dengan stakeholder utama; Mengusulkan perawatan alat kerja secara berkala', '2017-06-01', '2017-12-31', 'Jadwal kegiatan prioritas mingguan/ bulanan; Memo usulan pelaksanaan general check-up; MoU dengan K/L terkait; Memo usulan perbaikan/ pemeliharaan alat kerja', 'Adhianti, S.IP., M.Si', 0, '0000-00-00', '0000-00-00', 'Open', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nip` char(18) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `ket_jabatan` varchar(200) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `id_unor` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `nama_pegawai`, `id_jabatan`, `ket_jabatan`, `id_unit`, `id_unor`, `password`, `foto`) VALUES
('010219499', 'Heri Rahman, S.E.,M.Si.', 3, '', 13, 4, '21232f297a57a5a743894a0e4a801fc3', ''),
('020005793', 'Muhammad David Masri, S.Sos., M.H.', 3, '', 9, 2, '21232f297a57a5a743894a0e4a801fc3', ''),
('030215619', 'Drs.Rusmin Nuryadin, M.H.', 2, '', 9, 2, '21232f297a57a5a743894a0e4a801fc3', ''),
('070025529', 'Agustina Tulak, S.H.', 3, '', 16, 4, '21232f297a57a5a743894a0e4a801fc3', ''),
('1013', 'Atiek Susilowati, S.E.', 3, 'Analis Keuangan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('10219499', 'Heri Rahman, S.E.,M.Si.', 3, 'Kepala Bidang Investasi dan Sistem Logistik Nasional', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('118000518', 'Tyas Tamara Satyaputi Keswara, S.E.', 3, 'Kepala Subbidang Pariwisata', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('131476405', 'DR. Dra. Hj. Tuty Mariani, M.M.', 3, 'Kepala Bidang Pertanian', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('140303473', 'Jusmanita Dwi Suryani', 3, 'Perawat', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002130', 'Saptarita Dewi, S.Sos., M.Si.', 3, 'Kepala Bidang Industri', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002386', 'TYI. Smi Pramuka Wanty, S.Sos.', 3, 'Kepala Bagian Tata Usaha', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002492', 'Slamet', 3, 'Kepala Subbagian Kediaman Wakil Presiden', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002504', 'Sudi Hantono, S.Sos.', 3, 'Kepala Bidang Kesatuan Bangsa dan Politik Dalam Negeri', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002527', 'Suprapto', 3, 'Pengadministrasi Persuratan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002636', 'Supriyanto, S.Sos.', 3, 'Kepala Bidang Komunikasi Publik dan Kewartawanan', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002766', 'Drs. Romansen Purba, M.Ikom', 3, 'Kepala Bidang Diseminasi Informasi', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002768', 'Suwarso, S.AP., M.Si.', 3, 'Kepala Subbidang Pelayanan Publik Pemerintah Pusat', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002831', 'Djumartono', 3, 'Kepala Subbidang Kawasan Perbatasan', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002837', 'Suharyono, S.Sos.', 3, 'Kepala Bidang Sumber Daya Manusia Aparatur', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180002988', 'Djoko Prayitno', 3, 'Kepala Subbagian Perawatan, Pemeliharaan Bangunan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003066', 'Drs. Edi Suyono, M.M.', 3, 'Kepala Bidang Peningkatan Pendapatan dan Usaha', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003123', 'Amat Mustangin, S.H., M.M.', 3, 'Kepala Subbidang Perikanan', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003159', 'Kuswarti', 3, 'Arsiparis', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003166', 'Setiawan', 3, 'Kepala Subbidang Tanaman Pangan dan Hortikultura', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003180', 'Sri Hartati, S.AP', 3, 'Kepala Subbidang Pemerintahan Desa', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003181', 'Sri Hari Relawati, SAP', 3, 'Kepala Subbagian TU Deputi Bidang Administrasi', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003184', 'Hartina Manalu, SAP.', 3, 'Kepala Subbagian Jamuan dan Pelayanan Rapat', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003216', 'Iyus Supriadi', 3, 'Pengolah Data', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003225', 'A. Latif, S.H.', 3, 'Kepala Bidang Agama, Pemuda dan Olahraga.Asisten Deputi Pembangunan Sumber Daya Manusia.Deputi Bidang Dukungan Kebijakan Pembangunan Manusia dan Pemerataan Pembangunan', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003229', 'Abdul Rahman', 3, 'Kepala Subbagian Arsip dan Reproduksi', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003266', 'Sumadi, S.Sos.', 3, 'Kepala Subbagian TU Kepala Sekretariat Wakil Presiden', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003329', 'Otang Sujana', 3, 'Kepala Subbagian Akuntansi Barang Milik Negara', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003364', 'Suleh Syarif Hidayat, S.Sos., M.AP.', 3, 'Kepala Subbagian Ketertiban Keamanan Dalam', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003445', 'Purwanto', 3, 'Kepala Subbagian Pengembangan Kompetensi Pegawai', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003462', 'Tukiyat, S.Sos.', 3, 'Analis Rencana Program dan Kegiatan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003478', 'Drs. Wilarno Setiawan, M.A.', 2, 'Asisten Deputi Infrastruktur, Energi, dan Tata Ruang', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003485', 'Dra. Sri Mulyani, M.Si.', 2, 'Asisten Deputi Pengawasan Penyelenggaraan Pemerintahan', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003534', 'Sumardi, S.IP.', 3, 'Kepala Subbagian TU Deputi Bidang Dukungan Kebijakan Pemerintahan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003597', 'Sinto Weni, S.IP., M.M.', 3, 'Kepala Bidang Bilateral', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003736', 'Ngadimo', 3, 'Pemelihara Peralatan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003737', 'Kreestianawati, S.Sos., M.M.', 3, 'Kepala Bagian Kerumahtanggaan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003753', 'R. Bambang Tedjo Baskoro', 3, 'Kepala Subbagian Istana Wakil Presiden', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003764', 'Wahidin', 3, 'Pengawas Bangunan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003782', 'Hasim Mukti', 3, 'Arsiparis Mahir', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003840', 'Duma Ria Situmorang, S.IP.', 3, 'Kepala Subbidang Regional Non ASEAN', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003877', 'Agus Maulana', 3, 'Pengadministrasi Persuratan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003909', 'Verany Zachrah', 3, 'Arsiparis Mahir', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003920', 'Adila Palupi, S.E., M.Si.', 3, 'Kepala Bidang Pendidikan, Penelitian, dan Teknologi', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003956', 'Ahmad Lutfie, S.E., M.M.', 2, 'Asisten Deputi Keuangan, Investasi, dan Badan Usaha', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003981', 'Sri Sukapti, S.Sos.', 3, 'Kepala Subbidang Pengawasan Pengelolaan Keuangan Pemerintah Daerah', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180003990', 'Endang Setyati, A.Md.', 3, 'Kepala Subbagian Administrasi Persuratan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004011', 'Ambarwati', 3, 'Pengadministrasi Umum', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004012', 'Zahroni', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004013', 'Pamuji', 3, 'Pengolah Data', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004014', 'Mulyani', 3, 'Pemelihara Peralatan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004015', 'Suprapto, S.E.', 3, 'Kepala Subbidang Sistem Logistik Nasional', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004021', 'Agung Setiawan, S.E., M.Si.', 3, 'Kepala Bidang Akuntabilitas Kinerja Instansi Pemerintah', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004042', 'Celvya Betty Manurung, S.IP.,M.P.M', 2, 'Asisten Deputi Pembangunan Sumber Daya Manusia', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004051', 'Drs. Abdul Mu\'is', 2, 'Asisten Deputi Perlindungan Sosial dan Penanggulangan Bencana', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004060', 'Tiapul Elfrida Simanungkalit, S.E., M.M.', 3, 'Kepala Bidang Pengawasan Pengelolaan Keuangan Negara', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004061', 'Sapto Harjono Wahjoe Sedjati, S.Sos., M.A.', 2, 'Kepala Biro Protokol', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004063', 'Muchammad Zulkarnain, S.H., M.A.', 2, 'Asisten Deputi Industri, Perdagangan, Priwisata, dan Ekonomi Kreatif', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004069', 'Titin Lilis Surinda, S.E., M.M.', 3, 'Kepala Bidang Infrastruktur Dasar dan Tata Ruang', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004070', 'Ratno Oedianto, S.E., M.Si.', 3, 'Kepala Bidang Lingkungan Hidup dan Kehutanan', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004076', 'Pery Irawan, S.Sos., M.M., MPM.', 2, 'Kepala Biro Perencanaan dan Keuangan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004082', 'Luci Fannya, S.E.', 3, 'Kepala Subbidang Pengelolaan Media Sosial', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004100', 'Suyono Slamet, S.AP.', 3, 'Kepala Subbagian Perjalanan Dinas', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004112', 'Suherman, S.Sos.', 3, 'Kepala Subbagian Perawatan dan Pemeliharaan Perlengkapan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004133', 'Susi Handayani, S.E., M.M.', 3, 'Kepala Subbidang Akuntabilitas Kinerja Kementerian/ Lembaga', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004137', 'Siti Alfiah, S.Sos., M.H.', 3, 'Kepala Bidang Kesehatan, Kependudukan, dan Keluarga Berencana', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004230', 'Sumiati, S.IP.', 3, 'Analis Rencana Program dan Kegiatan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004259', 'Ifrizal, S.Sos., M.M.', 3, 'Kepala Subbidang Kerawanan Sosial', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004270', 'Agustin Rahayu, S.Kom.', 3, 'Kepala Bagian Teknologi Informasi', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004276', 'Raden Bagus Yuniadji, S.E.,S.H., M.M.', 3, 'Kepala Bidang Pertahanan dan Keamanan', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004287', 'Lely Setia Rimelanty, S.E.', 3, 'Kepala Bagian Perlengakapan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004288', 'Dra. Arvi Anrosa', 3, 'Kepala Subbidang Pemberdayaan Masyarakat dan Desa', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004291', 'Drs. Yakob KM, M.Si', 3, 'Kepala Bidang Regional', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004306', 'Gito Kuncoro, S.IP.', 3, 'Kepala Subbidang Perkebunan dan Peternakan', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004327', 'Diar Indriatno, S.Sos., M.AP.', 3, 'Kepala Subbidang Pemberdayaan Perempuan, dan Perlindungan Anak', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004343', 'Supriatman, S.AP.', 3, 'Pengelola Naskah', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004345', 'Masrochim, S.AP.', 3, 'Analis Kinerja', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004347', 'Risti Utami, S.Sos.', 3, 'Kepala Subbagian Perencanaan dan Pengadaan Perlengkapan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004358', 'Yohannes Liniandus', 3, 'Tenaga Peliputan', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004373', 'Susi Susanti, S.H.', 3, 'Kepala Bagian Kepegawaian', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004375', 'Adhianti, S.IP., M.Si', 2, 'Asisten Deputi Reformasi Birokrasi dan Pelayanan Publik', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004378', 'Dwi Nursanti, S.IP.', 3, 'Kepala Bidang Infrastruktur dan Sarana Perhubungan Laut, Udara, Darat, dan Perkeretaapian', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004389', 'Pranggono Dwianto, S.IP., M.Si.', 2, 'Asisten Deputi Peningkatan dan Pengembangan Kesejahteraan', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004414', 'Edi Sujanto', 3, 'Pramusaji Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004415', 'Ferry Wahyudi, S.H.', 3, 'Kepala Bidang Pelayanan Publik', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004430', 'Mulyani Sri Suhartuti, S.H.,M.H.', 3, 'Kepala Bidang Otonomi Daerah', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004440', 'Sutedjo, S.E.', 3, 'Pranata Acara Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004448', 'Asep Saefulloh', 3, 'Pengadministrasi Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004458', 'Santi Setiawati, S.IP.', 3, 'Kepala Bidang Ketenagakerjaan', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004520', 'Yunida Zakia, S.Sos., M.AP.', 3, 'Kepala Subbidang Pengembangan Kapasitas Usaha Mikro dan Kecil', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004533', 'Dedy Triharjanto, S.E., M.M.', 3, 'Kepala Bagian Akuntansi', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004535', 'Agustin Setiani', 3, 'Arsiparis Mahir', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004545', 'Mohammad Soleh, S.H., M.H.', 3, 'Kepala Subbidang Multilateral Non PBB', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004573', 'Melati Putri Musniari Panjaitan, S.E.', 3, 'Analis Program atau Perencana', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004627', 'Thetanaya, S.E., M.A.P.', 3, 'Kepala Subbidang Perdagangan Luar Negeri', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004676', 'Jaka Sungkawa, S.Ag.', 3, 'Kepala Subbagian TU Deputi Bidang Dukungan Kebijakan Pembangunan Manusia dan Pemerataan Pembangunan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004699', 'Erick Griwantara, S.IP., M.Pub.Pol', 3, 'Kepala Bagian Acara dan Persidangan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004716', 'Ruli Nurdina Sari, S.Sos.,M.Si.', 3, 'Kepala Bidang Kelembagaan dan Tata Laksana', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004720', 'Donny Widhyanto, S.H. M.Hum', 3, 'Kepala Bidang Hukum dan Hak Asasi Manusia', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004722', 'Indira Oktaviani, S.KM., M.E.', 3, 'Kepala Subbidang Kependudukan dan Keluarga Berencana', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004727', 'Koko Haryono, S.Pd. M.M.', 3, 'Kepala Bidang Pemberdayaan Masyarakat, Perempuan dan Perlindungan Anak', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004732', 'Siti Khodijah, S.Pd., M.GMC.', 3, 'Kepala Subbidang Pengelolaan Website', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004736', 'Maisaroh Nurharjanti, S.Ag., MA.', 3, 'Kepala Bagian Penerbitan Media Massa dan Notulen', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004740', 'Didit Windhi Harmoko, S.Kom., M.T.I.', 3, 'Kepala Subbagian Infrastruktur Teknologi Informasi', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004763', 'Woro Dyah Tri Siswanti, S.T.', 3, 'Kepala Bagian Bangunan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004765', 'Robi Yunior Manuputty, A.Ks.', 3, 'Kepala Bagian Kendaraan dan Ketertiban Keamanan Dalam', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004770', 'Dorlan Roito Manurung, S.E.', 3, 'Kepala Subbagian Verifikasi', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004775', 'Septiani Dwi Nurani, S.E.', 3, 'Kepala Bidang Kelautan dan Perikanan', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004780', 'Aldi Yarman, S.E., M.E., Ph.D.', 3, 'Kepala Subbidang Lembaga Keuangan', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004782', 'Adella Bachtiar, S.P., M.E.', 3, 'Kepala Bidang Pariwisata dan Ekonomi Kreatif', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004783', 'Amri Kusumawardana Sumodiningrat, S.IP.', 3, 'Kepala Bidang Multilateral', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004789', 'Rahma Dewi, S.IP., M.E.', 3, 'Kepala Subbidang Badan Usaha', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004797', 'Sari Tusiarlina, S.H.', 3, 'Kepala Subbidang Industri Manufaktur', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004801', 'Yudhy Ekomedianov Chandra, S.H.', 3, 'Kepala Subbidang Infrastruktur dan Sarana Perhubungan Laut dan Udara', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004802', 'Afif Juniar, S.H.', 3, 'Kepala Subbidang Penelitian dan Teknologi', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004804', 'Dewi Rachmawatty, S.H., M.Kn.', 3, 'Kepala Bidang Sistem Pengawasan Iternal Pemerintah', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004817', 'Siti Maemunah Nur Azhar, A.Md.', 3, 'Verifikator Keuangan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004818', 'Toto Budi Kurniawan, A.Md', 3, 'Bendahara', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004831', 'Fatia Hizriani, S.Pd.', 3, 'Kepala Subbagian Penataan dan Pemeliharaan Lingkungan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004846', 'Ade Ulfah Rahayu Ningsih, S.E.', 3, 'Kepala Subbagian Pelayanan Protokol', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004847', 'Suryati Pangestu Prihandini, S.Sos.', 3, 'Kepala Subbidang Keamanan', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004848', 'Agung Wahyudi, S.Kom.', 3, 'Pranata Komputer', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004854', 'Amelia Irna Mayarni Sitohang, S.E.', 3, 'Kepala Subbidang Perdagangan Dalam Negeri', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004861', 'Purnowiyanto, S.Kom.', 3, 'Kepala Subbagian Pengelolaan Dana Operasional dan Bantuan Wakil Presiden', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004862', 'Nira Nur Waliyarti, S.Kom.', 3, 'Pranata Komputer', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004866', 'Widodo', 3, 'Pengadministrasi Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004873', 'Repi Sopiana', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004881', 'Viktor Anwar Riva', 3, 'Pengolah Data', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004887', 'M. Andy Burhan', 3, 'Analis Rencana Program dan Kegiatan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004888', 'Sutiyono', 3, 'Pengadministrasi Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004889', 'Imam Kusaeri', 3, 'Pengadministrasi Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004891', 'Suhendi, S.H.', 3, 'Analis Rencana Program dan Kegiatan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004894', 'Fahri', 3, 'Pengolah Data', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004895', 'Firman Setiana, S.AP.', 3, 'Analis Jabatan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004908', 'Kwinta Masalit, S.AP.', 3, 'Pranata Acara Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004913', 'Farid Ridwansyah, S.AP.', 3, 'Analis Barang dan Jasa', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004918', 'Leny Hariani', 3, 'Pengolah Data', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004926', 'Muis Syaiful Anuar', 3, 'Arsiparis Terampil', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004927', 'Al Alaq Fahamzah', 3, 'Pengolah Data', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004929', 'Wenny Setia Ningsih', 3, 'Pranata Jamuan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004930', 'Rika Anggasari', 3, 'Arsiparis Terampil', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004934', 'Sri Yuningsih', 3, 'Perawat', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004935', 'Sri Wahyuningsih', 3, 'Perawat', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004936', 'Supriyatno Widodo', 3, 'Pengolah Data', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004943', 'Faniagi Hardianto, S.AP. M.AP', 3, 'Kepala Subbagian Pemantauan dan Evaluasi Anggaran', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004976', 'Muhammad Alkautsar, S.H., M.H.', 3, 'Kepala Subbagian Administrasi Kendaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180004991', 'Rika Kusmawati', 3, 'Arsiparis Terampil', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005002', 'Marini Sarrizki, S.PI.', 3, 'Kepala Subbidang Kelautan', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005005', 'Didi Sahridi', 3, 'Pengadministrasi Umum', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005014', 'dr. Fatma Melati', 3, 'Dokter Madya', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005041', 'Rianita Kumalasari, S.IP, M.Com', 3, 'Kepala Bagian Manajemen Kinerja', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005042', 'Yurike Patrecia Marpaung, S.E., M.Si., M.D.E', 3, 'Kepala Bidang Perdagangan', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005043', 'Sri Komsiyatun, S.E., M.Ak.', 3, 'Kepala Bidang Badan Usaha dan Lembaga Keuangan', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005053', 'Haryatmoko, A.Md.', 3, 'Pengolah Data', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005057', 'Dadang Sulaeman, S.Kom.', 3, 'Kepala Subbidang Sumber Daya Manusia Aparatur Pemerintah Daerah', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005063', 'Ratna Wuri Handayani, A.Md.', 3, 'Sekretaris', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005067', 'Catherine Tulus Olivia, S.E., M.E.', 3, 'Kepala Subbagian Tata Usaha Kepegawaian', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005078', 'Ar\'ra Fahamzah, S.TP', 3, 'Kepala Subbidang Ekonomi Kreatif', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005131', 'Asrori', 3, 'Pramusaji Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005132', 'Nami Bahtiar', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005135', 'Adi Pramono, S.Sos.', 3, 'Analis Rencana Program dan Kegiatan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005136', 'Darsono', 3, 'Pranata Dekorasi', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005137', 'Suheli', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005149', 'Agus Setiawan', 3, 'Pengadministrasi Persuratan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005152', 'Udin Saefudin', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005158', 'Sri Rahayu', 3, 'Arsiparis Terampil', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005159', 'Dede Warsa', 3, 'Pemelihara Peralatan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005160', 'Budiyono', 3, 'Pengadministrasi Umum', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005161', 'Firmansyah Manalu', 3, 'Petugas Protokol Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005162', 'Effendi', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005163', 'Endah Takariyanti', 3, 'Pengadministrasi Umum', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005164', 'Koko Hendrik Handriyuso', 3, 'Pramusaji Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005165', 'Azis Rahman', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005166', 'Wardi', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005168', 'Sri Endang Agustiningsih', 3, 'Pengadministrasi Umum', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005169', 'Aris Budi Laksono', 3, 'Pengadministrasi Persuratan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005171', 'Dadang Sasmita', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005172', 'Ade Wahyudin', 3, 'Pengolah Data', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005173', 'Raden Mohammad Soetojo', 3, 'Pramusaji Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005176', 'Budhi Afriyanto', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005177', 'Supriyanta', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005179', 'Putri Manisya, S.H.', 3, 'Kepala Subbidang Akuntabilitas Kinerja Pemerintah Daerah', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005184', 'Tyas Tamara Satyaputi Keswara, S.E.', 3, '', 16, 4, '21232f297a57a5a743894a0e4a801fc3', ''),
('180005186', 'Linda Astuti, S.H., M.H.', 3, 'Kepala Subbidang Pemberantasan dan Pencegahan Korupsi pada Pemerintah Pusat', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005188', 'Atiatul Huda, S.H.', 3, 'Kepala Subbidang Amerika dan Eropa', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005192', 'Mariah Seliriana, S.H., M.H.', 3, 'Kepala Subbidang Infrastruktur dan Sarana Perhubungan Darat dan Perkeretaapian', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005193', 'Anggraeni Puspita, S.H., M.H.', 3, 'Kepala Subbagian Perencanaan dan Perjanjian Kinerja', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005194', 'Agi Fatinggi Iskandar, S.H., M.H.', 3, 'Kepala Subbidang Pembangunan Daerah Tertinggal', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005198', 'Suherman, S.Sos.', 3, 'Kepala Subbagian Evaluasi dan Pelaporan Kinerja', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005199', 'Nellyana, S.IP., M.A.', 3, 'Kepala Subbidang Pelayanan Publik Pemerintah Daerah', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005203', 'Raden Rahmadi Hidayat, S.E., M.M.', 3, 'Kepala Subbidang Peningkatan Akses Usaha Mikro dan Kecil', 12, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005206', 'Rizky Putriyanti, S.H., M.H.', 3, 'Kepala Subbidang Otonomi Daerah Provinsi, Kabupaten dan Kota', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005213', 'Wahyu Karoulina, S.H., LL.M.', 3, 'Kepala Subbidang Multilateral PBB', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005216', 'Gita Savitri, S.Sos., M.Si.', 3, 'Kepala Subbidang Kewartawanan', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005217', 'Nur Laily Fauziah, S.E.', 3, 'Kepala Subbagian Akuntansi Keuangan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005222', 'Rosalina Meiske Salea Battu, S.Kom., M.MSI', 3, 'Kepala Subbagian Kas dan Pembayaran', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005223', 'Prima Analisa, S.Sos', 3, 'Kepala Subbagian TU Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur dan Kemaritiman', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005237', 'Renny Deshyta, S.H.', 3, 'Kepala Subbidang Hukum dan Hak Asasi Manusia II', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005240', 'Eli Handayani, S.IP., M.A', 3, 'Kepala Subbidang Kelembagaan dan Tata Laksana Pemerintah Pusat', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005242', 'Robby Junia Prihana, S.Sos., M.M.', 3, 'Kepala Subbagian Acara', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005247', 'Fathi Mustaqim, S.S., M.A., M. Journ. Comm.', 3, 'Penerjemah', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005257', 'Ristinah, S.S.', 3, 'Kepala Subbagian Notulen', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005266', 'Diah Pratiwi, S.E.', 3, 'Kepala Subbagian Perencanaan Anggaran', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005268', 'Dr. Kaharuddin, S.Ag,M.Hum', 3, 'Kepala Subbidang Agama', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005275', 'Trisita Ridhawati, S.Sos., M.A.', 3, 'Kepala Subbidang Jaminan Sosial', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005282', 'Mochammad Iqbal, S.IP.', 3, 'Kepala Subbidang Regional ASEAN', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005306', 'Mohamad Indra Noviar, S.H., M.H.', 3, 'Kepala Subbagian Persidangan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005312', 'Hadi Meidiyan, S.E.', 3, 'Kepala Subbidang Energi Primer, Minyak, Gas, dan Batubara', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005315', 'Iwan Heru Darmawan, S.Ikom.', 3, 'Pengelola Naskah', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005377', 'Sunarman', 3, 'Pengadministrasi Umum', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005381', 'Uum Saumah Wahdah, S.Ag., M.H.', 3, 'Kepala Subbidang Kesatuan Bangsa', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005382', 'Putra Yuda Ivada, S.H., M.H.', 3, 'Kepala Subbidang Pertahanan', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005394', 'Samsam Sambas Wahyudi, S.IP.', 3, 'Kepala Subbidang Asia Pasifik dan Afrika', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005406', 'Donovan Lambok Mardame Hutapea, S.T.', 3, 'Kepala Subbagian Perencanaan Bangunan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005408', 'Wibowo Aji Utomo, S.E.', 3, 'Kepala Subbidang Investasi', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005410', 'Dian Kusumawardani, S.H.', 3, 'Kepala Subbidang Pengawasan Pengelolaan Keuangan Kementerian/ Lembaga', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005411', 'Gloria Christina Wardhani, S.E., M.PPM.', 3, 'Kepala Subbidang Sistem Pengawasan Internal Pemerintah Pusat', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005412', 'Sari Dwi Handiny, S.Kom., M.PubAdmin (Pol)', 3, 'Kepala Subbagian Sarana dan Prasarana Perjalanan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005413', 'Donny M. Simanjuntak, S.E.', 3, 'Kepala Subbidang Fiskal', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005414', 'Mia Susianty Wulansari, S.E.', 3, 'Kepala Subbidang Lingkungan Hidup', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005431', 'Ika Mailani, S.T.', 3, 'Analis Pengelola BMN', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005432', 'Leony Stephanie Dima Gah, S.Kom., M.I.S.', 3, 'Kepala Subbagian Administrasi Perjalanan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005443', 'Iwan Wahyudi', 3, 'Pengolah Data', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005444', 'Diman', 3, 'Pemelihara Peralatan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005445', 'Sunardi', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005446', 'Slamet Priyanto', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005469', 'Primurnita Wiryanti, S.E., M.Si.', 3, 'Kepala Subbagian Penerbitan Media Massa', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005518', 'Mohammad Reza Wardy, S.S. MIR.', 3, 'Pengelola Naskah', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005522', 'Effi Ratna Furkon, S.Kom.', 3, 'Kepala Subbagian Sistem Informasi', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005547', 'R. Muhammad Rizqi Attamimi, S.Kom.', 3, 'Analis Pengelola BMN', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005548', 'Oktaviano Yohannes Pantow, S.E.', 3, 'Analis Kinerja', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005593', 'Mukti Cahyani, S.H.', 3, 'Analis Hukum', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005595', 'Rio Jayusman, S.E.', 3, 'Kepala Subbidang Infrastruktur Dasar', 14, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005598', 'Patria Nurhari, S.IP., M.A.', 3, 'Kepala Subbidang Sistem Pengawasan Internal Pemerintah Daerah', 8, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005599', 'Primadi Wicaksana, S.H.', 3, 'Analis Pemerintahan', 7, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005604', 'Dwiana Marcheni Arumningtyas, S.S.', 3, 'Pengelola Naskah', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005605', 'Irene Astika Dewi, S.I.Kom.', 3, 'Pengelola Naskah', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005606', 'Rahmelya Oktari, S.I.A.', 3, 'Analis Sumber Daya Manusia Aparatur', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005625', 'Adaniar Mahrunisa, A.Md. T', 3, 'Pranata Jamuan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005732', 'Arif Alfan Haji, S.IAN.', 3, 'Pranata Acara Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005733', 'Fajar Triwardono, S.T., M.T.', 3, 'Analis Bangunan Gedung', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005735', 'Halim Fadillah Suwito Jati, S.E.', 3, 'Analis Pengelola BMN', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005736', 'Temy Pratiwi, S.H.', 3, 'Analis Sumber Daya Manusia Aparatur', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005737', 'Diena Tiara Sari, S.I.P.', 3, 'Analis Keuangan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005738', 'Danang Ari Suwito, S.Sos.', 3, 'Analis Rencana Program dan Kegiatan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005739', 'Angga Dwijayanti, S.Kom.', 3, 'Analis Data dan Informasi', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005779', 'Novia Anggi Ratnasari, A.Md.', 3, 'Tenaga Peliputan', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005780', 'Erni Padilah, A.Md.', 3, 'Pengadministrasi Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005781', 'Shelly Amelia, S.E.', 3, 'Analis Sumber Daya Manusia Aparatur', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('180005782', 'Isnandy Arief Widodo, A.Md.', 3, 'Teknisi Bangunan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('196604171', 'drg. Paula Fanny Hartono', 3, 'Dokter Gigi Madya', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('196704151', 'Abu Bakar Sidik', 3, 'Pengolah Data', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('197503262', 'Andri Suharyadi Kurniawan, S.E., M.T.', 3, 'Kepala Subbidang Bantuan Sosial', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('197703262', 'Sutikno, S.E., MPubPol', 3, 'Kepala Bidang Penanggulangan Bencana dan Kerawanan Sosial', 11, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('197911172', 'Mahdiyono, S.Kom.', 3, 'Analis Sistem Informasi', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('198311272', 'Evytha Yogya Nirwana, S.H., S.Farm., M.Hum MH kes.', 3, 'Kepala Subbidang Kesehatan', 10, 3, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('200000158', 'Dra. Ika Daswati', 3, 'Kepala Bagian Pelayanan Kesehatan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('200000322', 'Mukhtaromi', 3, 'Pengadministrasi Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('200000357', 'Edy Kasrody, S.Sos.', 3, 'Kepala Subbidang Dokumentasi Audio dan Transkrip', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('200000404', 'Nuryani Yunus, S.E., M.E.', 3, 'Kepala Bidang Keuangan', 13, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('200000412', 'Arief Hendratno, A.Md.', 3, 'Analis Data dan Informasi', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('20005793', 'Muhammad David Masri, S.Sos., M.H.', 3, 'Kepala Bidang Peliputan dan Dokumentasi', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('260006820', 'Risna Afiany, S.E.', 3, 'Kepala Subbagian Tata Usaha Pelayanan Kesehatan', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('270000676', 'Soaduon Hasibuan, S.Sos.', 3, 'Kepala Bagian Pengelolaan Perpustakaan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('30215619', 'Drs.Rusmin Nuryadin, M.H.', 2, 'Asisten Deputi Komunikasi dan Informasi Publik', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('350000780', 'Sumadi', 3, 'Pengemudi Kenegaraan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('70025529', 'Agustina Tulak, S.H.', 3, 'Kepala Subbidang Industri Pengolahan', 16, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('710028882', 'Irma Agustini, S.Hut', 3, 'Kepala Subbidang Kehutanan', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('730009543', 'Muhammad Iqbal, S.E., S.H., M.Si.', 2, 'Asisten Deputi Politik, Hukum, dan Keamanan', 5, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('740001446', 'Imam Sudrajat, S.E., M.Si.', 3, 'Kepala Bagian Perencanaan dan Evaluasi Anggaran', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('740001631', 'Azhari Maulana, Ak., M.M. CA', 2, 'Kepala Biro Umum', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('740002591', 'Mustaghfirin, Ak., M.A.', 3, 'Kepala Bagian Perjalanan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('740003469', 'Purwono Prihantoro B.T., S.E., M.Si.', 3, 'Kepala Bagian Perbendaharaan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('740003605', 'Ismaja Rumalutur, S.E.', 3, 'Analis Rencana Program dan Kegiatan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('740004973', 'James Ricky Sundah', 3, 'Pengolah Data', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('760000117', 'Dra. Etin C. Sumiyati', 3, 'Kepala Subbagian Administrasi dan Pengembangan Perpustakaan', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('760000377', 'Dra. Fajar Meilani, M.M.', 3, 'Kepala Subbagian Penyajian Bahan Pustaka', 4, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('9890000', 'tes lagiiiiiiii', 2, 'kasubag', 3, 2, '21232f297a57a5a743894a0e4a801fc3', ''),
('E2001', 'Setio Sapto Nugroho, S.H., M.Si.', 2, 'Asisten Deputi Ketahanan Pangan dan Sumber Daya Hayati', 15, 4, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('E2002', 'Slamet Widodo, S.S., M.Si.', 2, 'Kepala Biro Tata Usaha, Teknologi Informasi dan Kepegawaian', 3, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('E2003', 'Mohamad Siradj Parwito, M.A.', 2, 'Asisten Deputi Hubungan Luar Negeri', 6, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P001', 'Edi Purwanto, SAP.', 3, 'Analis Media dan Jurnalistik', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P002', 'Andri Novrano Sitorus, S.E.', 3, 'Analis Keuangan', 2, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P003', 'Arya Bagus Sanjaya, A.Md', 3, 'Petugas Protokol Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P004', 'Muhamad Zulfikar Aristianto, A.Md.', 3, 'Tenaga Peliputan', 9, 2, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P005', 'Nabilah, A.Md.Kom.', 3, 'Petugas Protokol Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P006', 'Titien Pradani, A.Md.Kom.', 3, 'Petugas Protokol Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P007', 'Siske Adesma, A.Md.', 3, 'Pranata Jamuan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg'),
('P008', 'Yuyun Kusumawardani, A.Md.A.P.S.', 3, 'Petugas Protokol Kepresidenan', 1, 1, '21232f297a57a5a743894a0e4a801fc3', 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pk`
--

CREATE TABLE `tbl_pk` (
  `id_pk` int(11) NOT NULL,
  `nama_ik` text NOT NULL,
  `target` varchar(64) NOT NULL,
  `anggaran` double NOT NULL,
  `tahun_pk` varchar(25) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pk`
--

INSERT INTO `tbl_pk` (`id_pk`, `nama_ik`, `target`, `anggaran`, `tahun_pk`, `id_unit`) VALUES
(34, 'Persentase laporan hasil analisis kebijakan di bidang Pengawasan Penyelenggaraan Pemerintahan yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan', '100%', 0, '2017', 8),
(35, 'Persentase bahan rapat, pidato/sambutan, audiensi dan kunjungan kerja Wakil Presiden di bidang Pengawasan Penyelenggaraan Pemerintahan yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan', '100%', 0, '2017', 8),
(36, 'Jumlah dokumen rencana kerja dan laporan Asisten Deputi', '2 laporan', 0, '2017', 8),
(37, 'Persentase laporan hasil analisis kebijakan di bidang reformasi birokrasi dan pelayanan publik yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan', '100%', 0, '2017', 7),
(38, 'Persentase bahan rapat, pidato/sambutan, audiensi dan kunjungan kerja Wakil Presiden di bidang reformasi birokrasi dan pelayanan publik yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan', '100%', 0, '2017', 7),
(39, 'Jumlah dokumen rencana kerja dan laporan Asisten Deputi', '2', 0, '2017', 7),
(40, 'Indeks kepuasan\r\npengguna layanan\r\nperencanaan dan evaluasi anggaran\r\n', '4,33', 0, '2017', 2),
(41, 'Indeks kepuasan\r\npengguna layanan\r\npengelolaan keuangan\r\ndan pelaporan keuangan\r\n', '4,33', 0, '2017', 2),
(42, 'Indeks kepuasan\r\npengguna layanan\r\npelaporan akuntansi keuangan\r\ndan barang milik negara\r\n', '4,33', 0, '2017', 2),
(43, 'Indeks kepuasan\r\npengguna layanan\r\nmanajemen kinerja\r\n', '4,33', 0, '2017', 2),
(44, 'Persentase laporan hasil analisis kebijakan di bidang pembangunan sumber daya manusia yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pembangunan Manusia dan Pemerataan Pembangunan', '100%', 0, '2017', 10),
(45, 'Persentase bahan rapat, pidato/sambutan, audiensi, dan kunjungan kerja Wakil Presiden di bidang pembangunan sumber daya manusia yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pembangunan Manusia dan Pemerataan Pembangunan', '100%', 0, '2017', 10),
(46, 'Jumlah dokumen rencana kerja dan laporan Asisten Deputi Pembangunan Sumber Daya Manusia', '2 dokumen', 0, '2017', 10),
(47, 'Persentase laporan hasil analisis kebijakan di bidang industri, perdagangan, pariwisata, dan ekonomi kreatif yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur, dan Kemaritiman.', '100%', 0, '2017', 16),
(48, 'Persentase bahan rapat, pidato/sambutan, audiensi, dan kunjungan kerja Wakil Presiden di bidang industri, perdagangan, pariwisata, dan ekonomi kreatif yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur, dan Kemaritiman.', '100%', 0, '2017', 16),
(49, 'Jumlah dokumen rencana kerja dan laporan Asisten Deputi', '2 Dokumen', 0, '2017', 16),
(50, 'Indeks kelancaran pemberian dukungan pelayanan keprotokolan', '100%', 0, '2017', 1),
(51, 'Indeks kelancaran pemberian dukungan pelayanan kerumahtanggaan kepada Wakil Presiden', '100%', 0, '2017', 1),
(52, 'Indeks kelancaran pelaksanaan urusan kerumahtanggaan di lingkungan Sekretariat Wakil Presiden', '100%', 0, '2017', 1),
(53, 'Persentase laporan hasil analisis kebijakan di bidang ketahanan pangan dan sumber daya hayati yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur, dan Kemaritiman. ', '100%', 0, '2017', 15),
(54, 'Persentase bahan rapat, pidato/sambutan, audiensi, dan kunjungan kerja Wakil Presiden di bidang ketahanan pangan dan sumber daya hayati yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur, dan Kemaritiman.', '100%', 0, '2017', 15),
(55, 'Jumlah Dokumen Rencana Kerja dan Laporan Asisten Deputi', '2 Dokumen', 0, '2017', 15),
(56, 'Persentase laporan hasil analisis kebijakan di bidang peningkatan dan pengembangan kesejahteraan yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pembangunan Manusia dan Pemerataan Pembangunan', '100%', 0, '2017', 12),
(57, 'Persentase bahan rapat, pidato/sambutan, audiensi, dan kunjungan kerja Wakil Presiden di bidang peningkatan dan pengembangan kesejahteraan yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pembangunan Manusia dan Pemerataan pembangunan', '100%', 0, '2017', 12),
(58, 'Jumlah dokumen rencana kerja dan laporan Asisten Deputi Peningkatan dan Pengembangan Kesejahteraan', '2 dokumen', 0, '2017', 12),
(59, 'Persentase laporan hasil analisis kebijakan di bidang Hubungan Luar Negeri yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan.', '100%', 0, '2017', 6),
(60, 'Terlaksananya penyusunan bahan pointers, sambutan, audiensi, dan kunjungan kerja Wakil Presiden di bidang Hubungan Luar Negeri yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan.', '100%', 0, '2017', 6),
(61, 'Terlaksananya jumlah dokumen rencana kerja dan laporan Asisten Deputi Hubungan Luar Negeri.', '2', 0, '2017', 6),
(62, 'persentase laporan hasil analisis kebijakan di bidang komunikasi dan informasi publik yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan.', '100%', 0, '2017', 9),
(63, 'persentase penyusunan bahan pointers, sambutan, audiensi dan kunjungan kerja Wakil Presiden di bidang komunikasi dan informasi publik yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan.', '100%', 0, '2017', 9),
(64, 'Jumlah dokumen rencana kerja dan laporan Asisten Deputi Komunikasi dan Informasi Publik.', '1 laporan', 0, '2017', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skp`
--

CREATE TABLE `tbl_skp` (
  `id_skp` int(11) NOT NULL,
  `nama_skp` text NOT NULL,
  `target_volume` varchar(64) NOT NULL,
  `target_mutu` varchar(64) NOT NULL,
  `target_waktu` varchar(64) NOT NULL,
  `target_biaya` double NOT NULL,
  `id_pk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skp`
--

INSERT INTO `tbl_skp` (`id_skp`, `nama_skp`, `target_volume`, `target_mutu`, `target_waktu`, `target_biaya`, `id_pk`) VALUES
(163, 'Mengkoordinasikan dan menetapkan hasil analisis berita di media massa terkait isu-isu pengawasan penyelenggaraan pemerintahan\r\n\r\n', '100%', '100%', '12 bulan', 0, 34),
(164, 'Mengoordinasikan dan menetapkan laporan analisis kebijakan di bidang pengawasan penyelenggaraan pemerintahan.\r\n', '100%', '100%', '12 bulan', 0, 34),
(165, 'Mengoordinasikan dan menetapkan laporan hasil penyerapan pandangan perkembangan pelaksanaan kebijakan pemerintah di bidang pengawasan penyelenggaraan pemerintahan.\r\n\r\n', '100%', '100%', '12 bulan', 0, 34),
(166, 'Mengoordinasikan dan menetapkan laporan hasil diskusi sehari/FGD/seminar/ Rapat Koordinasi/menghadiri undangan dan kegiatan sejenis di bidang pengawasan penyelenggaraan pemerintahan.', '100%', '100%', '12 bulan', 0, 34),
(167, 'Mengoordinasikan dan menetapkan analisis singkat sebagai tindak lanjut dari arahan pimpinan, surat instansi, maupun sumber lainnya.\r\n', '100%', '100%', '12 bulan', 0, 34),
(168, 'Mengoordinasikan dan menetapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.\r\n\r\n\r\n\r\n\r\n', '100%', '100%', '12 bulan', 0, 35),
(169, 'Mengoordinasikan dan menetapkan perencanaan anggaran dan kinerja (disbursement plan, RAB/POK).\r\n', '1 laporan', '100%', '12 bulan', 0, 36),
(170, 'Mengoordinasikan dan menetapkan laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran)\r\n\r\n', '1 laporan', '100%', '12 bulan', 0, 36),
(171, 'Penyusunan telaahan staf di bidang reformasi birokrasi dan pelayanan publik', '100%', '100%', '12 Bulan', 0, 37),
(172, 'Penanganan surat instansi/ pengaduan masyarakat yang ditujukan kepada Wakil Presiden', '100%', '100%', '12 Bulan', 0, 37),
(173, 'Penyusunan analisis berita terkait isu-isu reformasi birokrasi dan pelayanan publik di media massa', '12', '100%', '12 Bulan', 0, 37),
(174, 'Penyerapan pandangan di bidang reformasi birokrasi dan pelayanan publik', '6', '100%', '12 Bulan', 0, 37),
(175, 'Penyelenggaraan rapat koordinasi/ diskusi terbatas/ seminar/ kuliah umum atau kegiatan sejenisnya', '6', '100%', '12 Bulan', 0, 37),
(176, 'Menghadiri undangan rapat koordinasi/ diskusi terbatas/ seminar/kuliah umum atau kegiatan sejenisnya', '6', '100%', '12 Bulan', 0, 37),
(177, 'Penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden', '100%', '100%', '12 Bulan', 0, 38),
(178, 'Penyusunan rencana kerja dan laporan tahunan di bidang reformasi birokrasi dan pelayanan publik', '4', '100%', '12 Bulan', 0, 39),
(179, 'Mengkoordinasikan perencanaan dan program anggaran', '4,33', '100%', '12 bulan', 0, 40),
(180, 'Menyelenggarakan evaluasi dan pelaporan anggaran\r\n', '4,33', '100%', '12 bulan', 0, 40),
(181, 'Menyelenggarakan Revisi Anggaran\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 40),
(182, 'Penyusunan Laporan Keuangan Triwulan, Semesteran, dan Tahunan\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 42),
(183, 'Menyelenggarakan penanganan administrasi pembayaran atas pelaksanaan APBN di Lingkungan Setwapres RI \r\n\r\n', '4,33', '100%', '12 bulan', 0, 41),
(184, 'Pengkoordinasian Penyusunan Rencana Kinerja (RKT) Setwapres\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 43),
(185, 'Pengkoordinasian Penyusunan Perjanjian Kinerja (PK) di lingkungan Setwapres\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 43),
(186, 'Pengkoordinasian Penyusunan Laporan Kinerja (LKj) Setwapres\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 43),
(187, 'Pengkoordinasian Penyusunan Rencana Kinerja (RKT) Setwapres\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 43),
(188, 'Pengkoordinasian Penyusunan Perjanjian Kinerja (PK) di lingkungan Setwapres\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 43),
(189, 'Pengkoordinasian Penyusunan Laporan Kinerja (LKj) Setwapres\r\n\r\n\r\n\r\n\r\n', '4,33', '100%', '12 bulan', 0, 43),
(190, 'Memimpin perumusan analisis kebijakan di bidang pembangunan sumber daya manusia', '100%', '100%', '2017', 0, 44),
(191, 'Memimpin pelaksanaan kegiatan penyerapan pandangan yang berkembang di kalangan lembaga negara, organisasi politik, organisasi profesi, organisasi kemasyarakatan, masyarakat, akademisi, media massa, dan pihak-pihak lainnya yang dipandang perlu pada bidang p', '100%', '100%', '2017', 0, 44),
(192, 'Memimpin pelaksanaan penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n\r\n\r\n\r\n', '100%', '100%', '2017', 0, 45),
(193, 'Memimpin pelaksanaan koordinasi dengan lembaga negara, kementerian negara, lembaga pemerintah non kementerian, serta instansi terkait yang diperlukan bagi kelancaran pelaksanaan tugasnya\r\n\r\n\r\n', '100%', '100%', '2017', 0, 44),
(194, 'Mengkoordinasikan penyusunan analisis kebijakan pemerintah di bidang industri, perdagangan, pariwisata dan ekonomi kreatif.', '100%', '100%', '12 Bulan', 0, 47),
(195, 'Mengkoordinasikan penyerapan pandangan di bidang industri, perdagangan, pariwisata dan ekonomi kreatif , dengan lembaga negara, kementerian negara, dan lembaga pemerintah non kementerian, Badan Usaha Milik Negara, serta instansi terkait.', '100%', '100%', '12 Bulan', 0, 47),
(196, '', '', '', '', 0, 47),
(197, '', '', '', '', 0, 47),
(198, 'Mengkoordinasikan penyusunan bahan sambutan, audiensi, dan kunjungan kerja Wakil Presiden RI di lingkungan Asisten Deputi industri, perdagangan, pariwisata dan ekonomi kreatif.', '100%', '100%', '12 Bulan', 0, 48),
(199, 'Mengkoordinasikan penyusunan rencana kerja dan evaluasi kinerja.', '2 dokumen', '100%', '12 Bulan', 0, 49),
(200, 'Menyiapkan dukungan perjalanan kunjungan kerja Wakil Presiden dan/atau Istri/Suami Wakil Presiden di dalam negeri dan ke luar negeri', '4.33', '100%', '12', 0, 50),
(201, 'Menyiapkan dan mengadakan souvenir (cinderamata) untuk acara Wakil Presiden dan/atau Istri/Suami Wakil Presiden', '4.33', '100%', '12', 0, 50),
(202, 'Mengelola notulen audiensi, rapat, dan kunjungan kerja Wakil Presiden', '4.33', '100%', '12', 0, 50),
(203, 'Menerbitkan Buku Kumpulan Notulen dan Kumpulan Pidato Wakil Presiden', '4.33', '100%', '12', 0, 50),
(204, 'Penyiapan Acara Harian Wakil Presiden dan Istri/Suami Wakil Presiden	', '4.33', '100%', '12', 0, 50),
(205, 'Penyiapan Rapat/Sidang yang Dipimpin oleh Wakil Presiden	', '4.33', '100%', '12', 0, 50),
(206, 'Penyiapan Acara dan Pelayanan Keprotokolan Kunjungan Wakil Presiden dan/atau Istri/Suami Wakil Presiden ke Daerah	', '4.33', '100%', '12', 0, 50),
(207, 'Penyiapan Acara dan Pelayanan Protokol Kunjungan Wakil Presiden dan/atau Istri/Suami Wakil Presiden ke Luar Negeri', '4.33', '100%', '12', 0, 50),
(208, '', '', '', '', 0, 50),
(209, '', '', '', '', 0, 50),
(210, '', '', '', '', 0, 50),
(211, '', '', '', '', 0, 50),
(212, 'Mengkoordinasikan penyusunan analisis kebijakan pemerintah di bidang pertanian, kelautan, perikanan dan lingkungan hidup, kehutanan.', '100%', '100%', '12 Bulan', 0, 53),
(213, 'Mengkoordinasikan penyerapan pandangan di bidang pertanian, kelautan, perikanan dan lingkungan hidup, kehutanan, dengan lembaga negara, kementerian negara, dan lembaga pemerintah non kementerian, Badan Usaha Milik Negara, serta instansi terkait.', '100%', '100%', '12 Bulan', 0, 53),
(214, 'Mengkoordinasikan penyusunan bahan sambutan, audiensi, dan kunjungan kerja Wakil Presiden RI di lingkungan Asisten Deputi Ketahanan Pangan dan Sumber Daya Hayati.', '100%', '100%', '12 Bulan', 0, 54),
(215, 'Mengkoordinasikan penyusunan rencana kerja dan evaluasi kinerja.', '2 Dokumen', '100%', '12 Bulan', 0, 55),
(216, 'Memimpin perumusan analisis kebijakan di bidang peningkatan dan pengembangann kesejahteraan\r\n\r\n\r\n\r\n', '100%', '100%', '2017', 0, 56),
(217, 'Memimpin pelaksanaan kegiatan penyerapan pandangan yang berkembang di kalangan lembaga negara, organisasi politik, organisasi profesi, organisasi kemasyarakatan, masyarakat, akademisi, media massa, dan pihak-pihak lainnya yang dipandang perlu pada bidang p', '100%', '100%', '2017', 0, 56),
(218, 'Memimpin pelaksanaan penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n\r\n\r\n\r\n', '100%', '100%', '2017', 0, 57),
(219, 'Memimpin pelaksanaan koordinasi dengan lembaga negara, kementerian negara, lembaga pemerintah non kementerian, serta instansi terkait yang diperlukan bagi kelancaran pelaksanaan tugasnya\r\n\r\n\r\n', '100%', '100%', '2017', 0, 56),
(220, 'Mengoordinasikan dan menetapkan laporan hasil diskusi terbatas di bidang hubungan luar negeri.', '100%', '100%', '12 bulan', 0, 59),
(221, 'Mengoordinasikan dan menetapkan laporan hasil diskusi sehari/FGD/seminar di bidang hubungan luar negeri.', '100%', '100%', '12 bulan', 0, 59),
(222, 'Mengoordinasikan dan menetapkan laporan hasil kegiatan koordinasi dan konsultasi (networking) di bidang hubungan luar negeri dengan civitas akademika, lembaga pemerintah dan non-pemerintah. ', '100%', '100%', '12 bulan', 0, 59),
(223, 'Mengoordinasikan dan menetapkan laporan hasil menghadiri forum-forum kajian di bidang hubungan luar negeri. ', '100%', '100%', '12 bulan', 0, 59),
(224, 'Mengoordinasikan dan menetapkan laporan hasil telaahan staf terkait isu strategis di bidang Hubungan Luar Negeri.', '100%', '100%', '12 bulan', 0, 59),
(225, 'Mengoordinasikan dan menetapkan bahan-bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden di bidang Hubungan Luar Negeri.', '100%', '100%', '12 bulan', 0, 60),
(226, 'Mengoordinasikan dan menetapkan laporan hasil rencana kerja dan evaluasi pelaksanaan kegiatan di bidang hubungan luar negeri. ', '1 laporan', '100%', '12 bulan', 0, 61),
(227, 'Mengoordinasikan dan menetapkan laporan hasil pengelolaan kegiatan, keuangan dan administrasi dan persuratan di bidang hubungan luar negeri. ', '1 laporan', '100%', '12 bulan', 0, 61),
(228, 'Mengkoordinasikan dan menetapkan laporan hasil koordinasi dan konsultasi di bidang komunikasi dan informasi publik dengan civitas akademika, lembaga pemerintah dan non-pemerintah. ', '100%', '100%', '12 bulan', 0, 62),
(229, 'Mengkoordinasikan dan menetapkan laporan hasil telaahan staf terkait permohonan wawancara/ audiensi media/ instansi terkait kepada Wakil Presiden. ', '100%', '100%', '12 bulan', 0, 62),
(230, 'Mengkoordinasikan dan menetapkan laporan hasil pengelolaan kegiatan dukungan operasional, pendokumentasian, dan administrasi di bidang komunikasi dan informasi publik.', '100%', '100%', '12 bulan', 0, 62),
(231, 'Mengkoordinasikan dan menetapkan laporan hasil peliputan dan penyebarluasan informasi kegiatan Wakil Presiden dan/atau  Isteri/suami Wakil Presiden serta kegiatan Kesekretariatan melalui Majalah Setwapres. ', '100%', '100%', '12 bulan', 0, 62),
(232, 'Mengkoordinasikan dan menetapkan laporan hasil peliputan dan penyebarluasan informasi kegiatan Wakil Presiden dan/atau  Istri/suami Wakil Presiden serta kegiatan Kesekretariatan melalui  Website.', '100%', '100%', '12 bulan', 0, 62),
(233, 'Mengkoordinasikan dan menetapkan laporan hasil peliputan dan penyebarluasan informasi kegiatan Wakil Presiden dan/atau  Isteri/suami Wakil Presiden serta kegiatan Kesekretariatan melalui   Media sosial.', '100%', '100%', '12 bulan', 0, 62),
(234, 'Mengkoordinasikan dan menetapkan jadwal bulanan penugasan peliputan harian Wakil Presiden dan/atau Isteri/Suami Wakil Presiden. ', '100%', '100%', '12 bulan', 0, 62),
(235, 'Mengkoordinasikan peliputan wartawan untuk kegiatan Wakil Presiden dan/atau Isteri/ Suami Wakil Presiden, dan kegiatan Kesekretariatan. ', '100%', '100%', '12 bulan', 0, 62),
(236, 'Mengkoordinasikan pendokumentasian foto,  video, audio dan  transkrip hasil peliputan kegiatan Wakil Presiden dan/atau Isteri/Suami Wakil Presiden dan kegiatan kesekretariatan.', '100%', '100%', '12 bulan', 0, 62),
(237, 'Mengkoordinasikan pelaksanaan pelayanan wartawan media massa, terkait dukungan logistik dan peliputan kegiatan Wakil Presiden dan/atau Isteri/Suami Wakil Presiden, tamu negara, tamu asing dan kegiatan kesekretariatan.', '100%', '100%', '12 bulan', 0, 62),
(238, 'Mengkoordinasikan keikutsertaan rapat koordinasi terkait persiapan peliputan kegiatan Wakil Presiden dan/atau Isteri/Suami Wakil Presiden.', '100%', '100%', '12 bulan', 0, 62),
(239, 'Mengkoordinasikan dan menetapkan bahan-bahan rapat, konferensi pers, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden di bidang komunikasi dan informasi publik.', '100%', '100%', '12 bulan', 0, 63),
(240, 'Mengkoordinasikan dan menetapkan laporan hasil rencana kerja dan evaluasi pelaksanaan kegiatan di bidang komunikasi dan informasi publik.', '1 laporan', '100%', '12 bulan', 0, 64),
(241, 'Mengoordinasikan dan menetapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.', '100%', '100%', '12 bulan', 0, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sop_risk`
--

CREATE TABLE `tbl_sop_risk` (
  `id_sop` int(11) NOT NULL,
  `nama_sop` text NOT NULL,
  `nama_risk` text NOT NULL,
  `sisa_risk` text NOT NULL,
  `frekuensi` int(11) NOT NULL,
  `dampak` int(11) NOT NULL,
  `hitung` int(11) NOT NULL,
  `deskripsi_cause` text NOT NULL,
  `kategori_cause` enum('Man','Money','Method','Machine','Material') NOT NULL,
  `deskripsi_pengendalian` text NOT NULL,
  `id_skp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sop_risk`
--

INSERT INTO `tbl_sop_risk` (`id_sop`, `nama_sop`, `nama_risk`, `sisa_risk`, `frekuensi`, `dampak`, `hitung`, `deskripsi_cause`, `kategori_cause`, `deskripsi_pengendalian`, `id_skp`) VALUES
(32, 'Menerima arahan/disposisi dari Asdep PPP dan tindak lanjut atas arahan/disposisi tersebut\r\n', 'Arahan/disposisi analisis berita tidak ditindaklanjuti secara tepat waktu\r\n', 'Arahan/disposisi analisis berita tidak ditindaklanjuti secara tepat waktu', 2, 4, 8, 'Kurang  paham, kurang komunikasi\r\n', 'Man', 'SOP, rapat internal, SPDE\r\n', 163),
(33, 'Pelaksanaan analisis berita media massa\r\n', 'Analisis berita media massa kurang komprehensif\r\n', 'Analisis berita media massa kurang komprehensif\r\n', 2, 3, 6, 'Kurangnya kapasitas SDM\r\n', 'Man', 'Diklat Analisis Kebijakan \r\n', 163),
(34, 'Penyampaian hasil analisis berita\r\n', 'Terlambat menyampaikan analisis berita\r\n', 'Terlambat menyampaikan analisis berita', 2, 2, 4, 'Lambat memperoleh informasi/data yang dibutuhkan\r\n', 'Man', 'SOP\r\n', 163),
(35, 'Pembahasan internal/rapat konsinyering penyusunan laporan analisis kebijakan dan laporan tahunan\r\n', 'Pelaksanaan rapat penyusunan laporan analisis kebijakan dan laporan tahunan\r\ntertunda/mundur dari jadwal yang direncanakan\r\n', 'Pelaksanaan rapat penyusunan laporan analisis kebijakan dan laporan tahunan\r\ntertunda/mundur dari jadwal yang direncanakan\r\n', 1, 2, 2, 'Adanya kegiatan lain yang lebih prioritas dan mendesak\r\n', 'Man', 'POK, RAB, KAK unit kerja, disbursement plan.\r\n', 164),
(36, 'Pengumpulan data untuk penyusunan laporan analisis kebijakan dan laporan tahunan\r\n', 'Sumber data untuk penyusunan laporan analisis kebijakan dan laporan tahunan rusak/hilang\r\n', 'Sumber data untuk penyusunan laporan analisis kebijakan dan laporan tahunan rusak/hilang\r\n', 1, 2, 2, 'Terjadi kerusakan teknis pada perangkat pengolah data\r\n', 'Machine', 'Database SIP3\r\n', 164),
(37, 'Penyusunan dan analisis data\r\n', 'Analisis kebijakan dan laporan tahunan kurang tajam/fokus\r\n', 'Analisis kebijakan dan laporan tahunan kurang tajam/fokus\r\n', 1, 2, 2, 'Kurang tersedianya data/informasi sekunder yang dapat dijadikan referensi\r\n', 'Material', 'SOP, laporan kegiatan\r\n\r\n', 164),
(38, 'Pembahasan laporan analisis kebijakan dan laporan tahunan\r\n', 'Waktu pembahasan penyusunan laporan analisis kebijakan dan laporan tahunan tertunda/mundur dari jadwal yang direncanakan\r\n', 'Waktu pembahasan penyusunan laporan analisis kebijakan dan laporan tahunan tertunda/mundur dari jadwal yang direncanakan\r\n', 1, 2, 2, 'Adanya kegiatan lain yang lebih prioritas dan mendesak\r\n', 'Method', 'KAK unit kerja\r\n', 164),
(39, 'Penyampaian laporan kepada Deputi\r\n', 'Penyampaian laporan analisis kebijakan dan laporan tahunan terlambat\r\n', 'Penyampaian laporan analisis kebijakan dan laporan tahunan terlambat\r\n', 1, 2, 2, 'Adanya substansi baru yang harus ditambahkan\r\n', 'Material', 'SOP \r\n', 164),
(40, 'Penggandaan dan pendistribusian laporan hasil analisis kebijakan kepada pihak internal maupun eksternal\r\n', 'Pendistribusian laporan analisis kebijakan dan laporan tahunan tidak tepat sasaran\r\n', 'Pendistribusian laporan analisis kebijakan dan laporan tahunan tidak tepat sasaran\r\n', 1, 4, 4, 'Pihak yang berkepentingan terhadap laporan belum ditentukan dengan jelas\r\n', 'Method', 'RAB, POK\r\n', 164),
(41, 'Pemberian arahan secara berjenjang', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyusunan telaahan staf', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyusunan telaahan staf', 1, 5, 5, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik (SPDE), Pertemuan Internal secara rutin', 171),
(42, 'Pengumpulan data dan penyiapan telaahan staf', 'Data/informasi dan analisis terkait  penyusunan telaahan staf kurang akurat/update/ relevan/lengkap; Data untuk penyusunan telaahan staf rusak/hilang', 'Data/informasi dan analisis terkait penyusunan telaahan staf kurang akurat/update/ relevan/lengkap; Data penyusunan telaahan staf rusak/hilang.', 2, 5, 10, 'Sumber data bersifat sekunder (misal: media massa), Metode pengumpulan data kurang variatif, Teknik analisa data kurang tepat, Penugasan bersifat sangat segera, Human errors, Terjadi kerusakan pada komputer.\r\n\r\n', 'Method', 'Melakukan koordinasi dengan K/L terkait, Uji silang data, Diklat Analis Kebijakan, Capacity Building, Standar Operasional Prosedur (SOP), Diklat teknis komputer bagi pengawas/ pelaksana, Perawatan komputer secara berkala', 171),
(43, 'Pemeriksaan (riviu) telaahan staf', 'Adanya  kesalahan  substantif/ redaksional yang lolos dari pengecekan atasan terkait penyusunan telaahan staf', 'Adanya  kesalahan  substantive/ redaksional yang lolos dari pengecekan atasan terkait penyusunan telaahan staf', 2, 5, 10, 'Kompetensi SDM belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sasaran Kerja Pegawai (SKP)\r\n', 171),
(44, 'Penyampaian telaahan staf kepada Deputi', 'Penyampaian telaahan staf terlambat/tidak tepat waktu', 'Penyampaian telaahan staf terlambat/tidak tepat waktu', 2, 5, 10, 'Kepatuhan SDM terhadap SOP  belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Permensesneg  tentang tata naskah dinas\r\n', 171),
(45, 'Pemberian arahan secara berjenjang', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penanganan surat instansi/ pengaduan masyarakat', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penanganan surat instansi/ pengaduan masyarakat', 1, 5, 5, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik, Pertemuan Internal secara rutin', 172),
(46, 'Pengumpulan data dan penyiapan telaahan atas surat instansi/pengaduan masyarakat', 'Data/informasi dan analisis terkait penanganan surat instansi/ pengaduan masyarakat kurang akurat/update/ relevan/lengkap; Data untuk menyusun penanganan surat instansi/ pengaduan masyarakat rusak/hilang', 'dan analisis terkait penanganan surat instansi/ pengaduan masyarakat kurang akurat/update/ relevan/lengkap; Data untuk menyusun penanganan surat instansi/ pengaduan masyarakat rusak/hilang', 2, 5, 10, 'Sumber data bersifat sekunder (media massa), Metode pengumpulan data kurang variatif, Teknik analisa data kurang tepat, Penugasan bersifat sangat segera, Human errors, Terjadi kerusakan pada komputer', 'Method', 'Melakukan koordinasi dengan K/L terkait, Uji silang data, Diklat Analis Kebijakan, Capacity Building, Standar Operasional Prosedur, Diklat teknis komputer bagi pengawas/ pelaksana, Perawatan komputer secara berkala', 172),
(47, 'Pemeriksaan (riviu) telaahan atas surat instansi/ pengaduan masyarakat', 'Adanya  kesalahan  substantif/ redaksional yang lolos dari pengecekan atasan terkait hasil analisis surat instansi/ pengaduan masyarakat', 'Adanya  kesalahan  substantif/ redaksional yang lolos dari pengecekan atasan terkait hasil analisis surat instansi/ pengaduan masyarakat', 2, 5, 10, 'Kompetensi SDM belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sasaran Kerja Pegawai\r\n', 172),
(48, 'Penyampaian analisis atas surat instansi/ pengaduan masyarakat kepada Deputi', 'Penyampaian analisis atas surat instansi/ pengaduan masyarakat terlambat/tidak tepat waktu', 'Penyampaian analisis atas surat instansi/ pengaduan masyarakat terlambat/tidak tepat waktu', 2, 5, 10, 'Kepatuhan SDM terhadap SOP  belum merata, Format analisis tidak sesuai standar\r\n', 'Man', 'Standar Operasional Prosedur (SOP), Permensesneg  tentang tata naskah dinas\r\n', 172),
(49, 'Pemberian arahan secara berjenjang', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden', 2, 5, 10, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik, Pertemuan Internal secara rutin\r\n', 177),
(50, 'Pengumpulan data dan penyiapan bahan', 'Data/informasi untuk penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden kurang akurat/update/ relevan/lengkap; Konsep bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden rusak/hilang', 'Data/informasi untuk penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden kurang akurat/update/ relevan/lengkap; Konsep bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden rusak/hilang', 2, 5, 10, 'Sumber data bersifat sekunder (missal: media massa), Metode pengumpulan data kurang variatif, Teknik analisa data kurang tepat, Penugasan bersifat sangat segera, Human errors, Terjadi kerusakan pada komputer\r\n', 'Method', 'Melakukan koordinasi dengan K/L terkait, Uji silang data, Diklat Analis Kebijakan, Capacity Building, Standar Operasional Prosedur, Diklat teknis komputer bagi pengawas/ pelaksana, Perawatan komputer secara berkala\r\n', 177),
(51, 'Pemeriksaan (riviu) bahan', 'Adanya  kesalahan  substantif atau redaksional yang lolos dari pengecekan atasan terkait konsep bahan rapat, pidato/sambutan, audiensi dan kunjungan kerja Wakil Presiden', 'Adanya  kesalahan  substantif atau redaksional yang lolos dari pengecekan atasan terkait konsep bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden', 2, 5, 10, 'Kompetensi SDM belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sasaran Kerja Pegawai (SKP)\r\n', 177),
(52, 'Penyampaian bahan kepada Deputi', 'Penyampaian bahan rapat, pidato/sambutan, audiensi dan kunjungan kerja Wakil Presiden terlambat/tidak tepat waktu', 'Penyampaian bahan rapat, pidato/ sambutan, audiensi dan kunjungan kerja Wakil Presiden terlambat/tidak tepat waktu', 2, 5, 10, 'Kepatuhan SDM terhadap SOP  belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Permensesneg  tentang tata naskah dinas\r\n', 177),
(53, 'Pemberian arahan secara berjenjang', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyusunan analisis berita di bidang reformasi birokrasi dan pelayanan publik', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyusunan analisis berita di bidang reformasi birokrasi dan pelayanan publik', 1, 5, 5, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik (SPDE), Pertemuan Internal secara rutin', 173),
(54, 'Pengumpulan data dan penyiapan analisis berita', 'Data/informasi dan analisis berita kurang akurat/update/ relevan/lengkap; Data untuk analisis berita rusak/hilang', 'Data/informasi dan analisis berita kurang akurat/update/ relevan/lengkap; Data untuk analisis berita rusak/hilang', 2, 3, 6, 'Sumber data (jumlah media cetak) terbatas, Metode pengumpulan data kurang variatif, Teknik analisa data kurang tepat, Human errors, Terjadi kerusakan pada komputer', 'Method', 'Melakukan koordinasi dengan K/L terkait, Uji silang data, Diklat Analis Kebijakan, Capacity Building, Standar Operasional Prosedur (SOP), Diklat teknis komputer bagi pengawas/ pelaksana, Perawatan komputer secara berkala', 173),
(55, 'Pemeriksaan (riviu) Analisis Berita', 'Adanya  kesalahan  substantif atau redaksional yang lolos dari pengecekan atasan terkait hasil analisis berita', 'Adanya  kesalahan  substantif atau redaksional yang lolos dari pengecekan atasan terkait hasil analisis berita', 2, 3, 6, 'Kompetensi SDM belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sasaran Kerja Pegawai (SKP)\r\n', 173),
(56, 'Penyampaian Analisis Berita kepada Deputi', 'Penyampaian analisis berita terlambat/tidak tepat waktu', 'Penyampaian analisis berita terlambat/tidak tepat waktu', 2, 5, 10, 'Kepatuhan SDM terhadap SOP  belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Permensesneg  tentang tata naskah dinas', 173),
(57, 'Pemberian arahan secara berjenjang', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait kegiatan penyerapan pandangan; Pimpinan memberikan arahan perubahan fokus/lokus kegiatan penyerapan pandangan disesuaikan dengan program yang lebih prioritas', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait kegiatan penyerapan pandangan; Pimpinan memberikan arahan perubahan fokus/lokus kegiatan penyerapan pandangan disesuaikan dengan program yang lebih prioritas', 1, 3, 3, 'Kompetensi pegawai belum merata; Adanya perbedaan persepsi mengenai program prioritas terkini', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik, Pertemuan Internal secara rutin, Sistem Persuratan dan Disposisi Elektronik, Petunjuk Operasional Kegiatan\r\n\r\n', 174),
(58, 'Persiapan kegiatan penyerapan pandangan (penyusunan term of reference [TOR],  administrasi perjalanan dinas, surat-menyurat dan instrumen pengumpulan data)', 'TOR dan instrumen pengumpulan data untuk kegiatan penyerapan pandangan kurang komprehensif; Instansi yang akan dikunjungi terkait kegiatan penyerapan pandangan tidak dapat dihubungi', 'TOR dan instrumen pengumpulan data untuk kegiatan penyerapan pandangan kurang komprehensif; Instansi yang akan dikunjungi terkait kegiatan penyerapan pandangan tidak dapat dihubungi', 2, 4, 8, 'Data yang dibutuhkan untuk menyusun TOR/instrumen kurang lengkap/ tersedia, Kompetensi pegawai belum merata, Pelaksana kegiatan kesulitan mendapatkan kontak instansi yang dituju\r\n', 'Material', 'Basis data substansi, File Sharing (Sbox Setneg), Riviu secara Berjenjang, Pendidikan dan Pelatihan, Melakukan  pencarian kontak via website, call center, K/L, pemda terdekat.\r\n', 174),
(59, 'Pelaksanaan kegiatan penyerapan pandangan', 'Pihak yang akan dikunjungi dalam rangka kegiatan penyerapan pandangan tidak siap/tidak ada di tempat/mendapat penugasan lain; Gangguan alat transportasi  darat/udara dan/atau kondisi lapangan yang kurang kondusif pada saat melakukan kegiatan penyerapan pandangan; Gangguan kesehatan pelaksana kegiatan penyerapan pandangan.', 'Pihak yang akan dikunjungi dalam rangka kegiatan penyerapan pandangan tidak siap/tidak ada di tempat/mendapat penugasan lain; Gangguan alat transportasi  darat/udara dan/atau kondisi lapangan yang kurang kondusif pada saat melakukan kegiatan penyerapan pandangan; Gangguan kesehatan pelaksana kegiatan penyerapan pandangan.', 1, 4, 4, 'Komunikasi kurang intensif dengan pihak yang akan dituju, informasi jejaring kerja belum tersedia, Force majeure  (cuaca buruk, bencana alam, dsb) , Gangguan teknis (mogok, delay, dsb), Gangguan situasional (demonstrasi, akses), Pelaksana kegiatan penyerapan pandangan lalai menjaga kesehatan.', 'Method', 'Melakukan  komunikasi via telp/fax/email/ whatsapp, Informasi  cuaca dari Badan Meteorologi, Klimatologi dan Geofisika (BMKG), Komunikasi dengan instansi yang dituju, Asuransi kesehatan/Kartu BPJS', 174),
(60, 'Penyusunan dan penyampaian laporan penyerapan pandangan', 'Penyusunan dan penyampaian laporan penyerapan pandangan terlambat; Format laporan penyerapan pandangan kurang sesuai tata naskah dinas ', 'Penyusunan dan penyampaian laporan penyerapan pandangan terlambat; Format laporan penyerapan pandangan kurang sesuai tata naskah dinas', 2, 4, 8, 'Pelaksana kegiatan  memperoleh penugasan lain, Gangguan kesehatan/ sakit, Kekurangan data/bahan, Gangguan teknis/ Peralatan kerja, Kurangnya kepatuhan pegawai terhadap tata naskah dinas \r\n', 'Material', 'Standar Operasional Prosedur (SOP), Permensesneg tentang tata naskah dinas', 174),
(61, 'Menerima arahan/disposisi dari Asdep PPP dan tindak lanjut atas arahan/disposisi tersebut\r\n', 'Arahan untuk melaksanakan penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah ditindaklanjuti  tidak sesuai dengan Jadwal yang telah disusun (Disbursement Plan)', 'Arahan untuk melaksanakan penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah ditindaklanjuti  tidak sesuai dengan Jadwal yang telah disusun (Disbursement Plan)', 2, 4, 8, 'Adanya kegiatan lain yang lebih prioritas dan mendesak\r\n', 'Man', 'Disbursement Plan, POK, SKP\r\n', 165),
(62, 'Persiapan Pelaksanaan Penyerapan Pandangan\r\n', 'Koordinasi dengan Stakeholder terkait untuk penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah sulit dilakukan\r\n', 'Koordinasi dengan Stakeholder terkait untuk penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah sulit dilakukan', 2, 4, 8, 'Database jejaring kerja/ stakeholder tidak update\r\n', 'Material', 'Database Jejaring Kerja', 165),
(63, 'Pelaksanaan Penyerapan Pandangan\r\n', 'Pejabat/pegawai terkait untuk penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah tidak di tempa', 'Pejabat/pegawai terkait untuk penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah tidak di tempa', 2, 4, 8, 'Pejabat/pegawai terkait mendapat penugasan mendadak', 'Man', 'Surat dinas kepada instansi terkait; kuesioner', 165),
(64, 'Penyusunan dan Penyampaian Laporan\r\n', 'Laporan penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah kurang komprehensif', 'Laporan penyerapan pandangan/ perkembangan pelaksanaan kebijakan pemerintah kurang komprehensif', 1, 4, 4, 'Ketidaklengkapan data', 'Man', 'SOP, tata naskah dinas, database SIP3', 165),
(65, 'Menyusun Kerangka Acuan Kerja (Term of Reference/TOR)', 'Substansi Kerangka Acuan Kerja untuk kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis kurang fokus\r\n', 'Substansi Kerangka Acuan Kerja untuk kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis kurang fokus\r\n', 1, 4, 4, 'Kurang tersedianya data/ informasi yang dapat dijadikan sumber rujukan', 'Material', 'Rapat internal untuk menentukan tema dan tujuan kegiatan', 166),
(66, 'Mengajukan permohonan persetujuan kegiatan kepada Deputi.\r\n', 'Pelaksanaan kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis tidak disetujui oleh Deputi', 'Pelaksanaan kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis tidak disetujui oleh Deputi', 1, 4, 4, 'Adanya kegiatan lain yang lebih prioritas dan mendesak\r\n', 'Method', 'Program Kerja Asdep\r\n', 166),
(67, 'Menyiapkan dokumen pendukung kegiatan mencakup surat-menyurat dan administrasi keuangan.\r\n', 'Dokumen dan administrasi keuangan untuk kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis tidak sesuai ketentuan', 'Dokumen dan administrasi keuangan untuk kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis tidak sesuai ketentuan.', 1, 4, 4, 'Kurangnya ketelitian pegawai pada saat membuat dokumen', 'Man', 'SOP Keuangan, Format Surat', 166),
(68, 'Melakukan komunikasi dengan pihak-pihak yang terkait (pembicara dan peserta rapat).\r\n', 'Pembicara/peserta yang diharapkan untuk diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis tidak dapat dihubungi', 'Pembicara/peserta yang diharapkan untuk diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis tidak dapat dihubungi', 2, 4, 8, 'Pembicara/ peserta berhalangan hadir', 'Man', 'Konfirmasi kehadiran', 166),
(69, 'Melakukan analisis dan menyusun laporan hasil kegiatan.\r\n', 'Laporan kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis kurang komprehensif\r\n', 'Laporan kegiatan diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis kurang komprehensif', 2, 4, 8, 'Bahan yang diperlukan kurang lengkap.', 'Material', 'Format laporan\r\n', 166),
(70, 'Menyampaikan laporan hasil kegiatan kepada Deputi.\r\n', 'Penyampaian laporan hasil diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis terlamba', 'Penyampaian laporan hasil diskusi sehari/FGD/seminar/ Rapat Koordinasi/ menghadiri undangan dan kegiatan sejenis terlamba', 2, 4, 8, 'Adanya arahan/masukan lain dari pimpinan', 'Man', 'SOP penyampaian laporan', 166),
(71, 'Menerima arahan/disposisi dan tindak lanjut atas arahan/disposisi untuk analisis singkat', 'Arahan/disposisi untuk analisis singkat tidak ditindaklanjuti', 'Arahan/disposisi untuk analisis singkat tidak ditindaklanjuti', 2, 4, 8, 'Berkas yang diterima tidak lengkap\r\n', 'Material', 'SPDE, SOP, buku agenda persuratan', 167),
(72, 'Pelaksanaan pengamatan (pengumpulan data) melalui penyelenggaraan FGD/rapat/workshop/diskusi terbatas; menghadiri FGD; pengamatan media cetak dan elektronik; peninjauan lapangan', 'Materi yang diperoleh penyelenggaraan FGD/rapat/workshop/diskusi terbatas; menghadiri FGD; pengamatan media cetak dan elektronik; peninjauan lapangan tidak komprehensif\r\n', 'Materi yang diperoleh penyelenggaraan FGD/rapat/workshop/diskusi terbatas; menghadiri FGD; pengamatan media cetak dan elektronik; peninjauan lapangan tidak komprehensif\r\n', 2, 3, 6, 'Kurang aktif mencari data\r\n', 'Man', 'Koordinasi dengan instansi terkait', 167),
(73, 'Penyusunan laporan analisis singkat\r\n', 'Hasil analisis singkat kurang komprehensif', 'Hasil analisis singkat kurang komprehensif', 1, 3, 3, 'Kurangnya kompetensi SDM; Pedoman penyusunan analisis belum tersedia\r\n', 'Machine', 'SOP\r\n', 167),
(74, 'Penyampaian laporan analisis singkat', 'Tidak ada arahan tindak lanjut atas analisis singkat\r\n', 'Tidak ada arahan tindak lanjut atas analisis singkat', 1, 4, 4, 'Laporan dianggap cukup\r\n', 'Man', 'Rapat internal, koordinasi lebih lanjut \r\n', 167),
(75, 'Menerima/menugaskan disposisi secara berjenjang.\r\n', 'Kesalahan dalam menerjemahkan arahan pimpinan untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 'Kesalahan dalam menerjemahkan arahan pimpinan untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 2, 4, 8, 'Kurang  paham, kurang komunikasi.\r\n', 'Man', 'Lembar disposisi, SPDE\r\n', 168),
(76, 'Koordinasi dengan kementerian/lembaga/pihak terkait untuk memperoleh informasi.\r\n', 'Kesulitan dalam memperoleh informasi yang diperlukan/ informasi tidak dapat diperoleh dengan cepat untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 'Kesulitan dalam memperoleh informasi yang diperlukan/ informasi tidak dapat diperoleh dengan cepat untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 3, 4, 12, 'Lemahnya jejaring kerja dengan K/L/instansi terkait.\r\n', 'Man', 'Database jejaring kerja\r\n', 168),
(77, 'Pengumpulan data.\r\n', 'Data untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden kurang akurat,  kurang relevan, dan kurang komprehensif', 'Data untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden kurang akurat,  kurang relevan, dan kurang komprehensif', 2, 4, 8, 'Metode pengumpulan data kurang variatif\r\n', 'Method', 'SOP, konfirmasi data ke instansi terkait', 168),
(78, 'Pengolahan data dan informasi\r\n', 'Hasil diskusi untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden belum menghasilkan data yang diharapkan', 'Hasil diskusi untuk menyiapkan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden belum menghasilkan data yang diharapkan', 2, 4, 8, 'Data yang diolah terbatas\r\n', 'Material', 'Kegiatan coffee morning, database SIP3', 168),
(79, 'Penyusunan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.\r\n', 'Bahan rapat, pidato/ sambutan, audiensi, dan kunjungan resmi/ kerja Wakil Presiden yang disusun tidak sesuai dengan harapan pimpinan            \r\n', 'Bahan rapat, pidato/ sambutan, audiensi, dan kunjungan resmi/ kerja Wakil Presiden yang disusun tidak sesuai dengan harapan pimpinan            ', 2, 5, 10, 'Tidak ada panduan penyusunan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.\r\n', 'Machine', 'SOP, diklat penyusunan naskah pidato kenegaraan, diklat analisis kebijakan', 168),
(80, 'Penyampaian hasil penyusunan bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.\r\n', 'Keterlambatan penyampaian dokumen  bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 'Keterlambatan penyampaian dokumen  bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden', 1, 5, 5, 'Gangguan teknis pada jaringan internet', 'Machine', 'SOP, SPDE, perawatan perangkat secara berkala', 168),
(81, 'Penerimaan dan pengagendaan memorandum permohonan dari pemohon ataupun internal Biro Perkeu	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat\r\n', 1, 3, 3, 'Staf Kepala Biro Perkeu tidak ada di tempat (keterbatasan jumlah SDM) 	\r\n', 'Man', 'Menyiapkan staf pengganti\r\n', 179),
(82, 'Pemberian arahan oleh Kepala Biro Perkeu kepada Kepala Bagian terkait	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 'Kesalahan dalam menerjemahkan arahan	', 1, 4, 4, 'Form lembar disposisi kurang informatif dan terstandarisasi	\r\n', 'Method', 'Rapat koordinasi secara periodik\r\n', 179),
(83, 'Penyusunan Renja-KL	\r\n', 'Penyusunan Renja-KL terlambat (Beban kerja menumpuk di hari-hari akhir penyusunan Renja K/L)	\r\n', 'Penyusunan Renja-KL terlambat (Beban kerja menumpuk di hari-hari akhir penyusunan Renja K/L)	\r\n', 4, 2, 8, 'Keterlambatan pengumpulan data dukung  Dokumen TOR dan RAB sebagai bahan penyusunan Renja-KL\r\n', 'Method', 'Membuat WA grup untuk komunikasi para PIC ', 179),
(84, 'Penyusunan POK DIPA  oleh unit-unit kerja	\r\n', 'Keterlambatan penyusunan POK DIPA oleh unit-unit kerja	\r\n', 'Keterlambatan penyusunan POK DIPA oleh unit-unit kerja	\r\n', 1, 4, 4, 'Perubahan kebijakan anggaran\r\n', 'Material', 'Sosialisasi kepada PIC penyusun POK DIPA\r\n', 179),
(85, 'Penerimaan dan pengagendaan memorandum permohonan dari pemohon ataupun internal Biro Perkeu	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat\r\n', 1, 3, 3, 'Staf Kepala Biro Perkeu tidak ada di tempat (keterbatasan jumlah SDM) 	\r\n', 'Man', 'Menyiapkan staf pengganti\r\n', 179),
(86, 'Pemberian arahan oleh Kepala Biro Perkeu kepada Kepala Bagian terkait	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 'Kesalahan dalam menerjemahkan arahan	', 1, 4, 4, 'Form lembar disposisi kurang informatif dan terstandarisasi	\r\n', 'Method', 'Rapat koordinasi secara periodik\r\n', 179),
(87, 'Penyusunan Renja-KL	\r\n', 'Penyusunan Renja-KL terlambat (Beban kerja menumpuk di hari-hari akhir penyusunan Renja K/L)	\r\n', 'Penyusunan Renja-KL terlambat (Beban kerja menumpuk di hari-hari akhir penyusunan Renja K/L)	\r\n', 4, 2, 8, 'Keterlambatan pengumpulan data dukung  Dokumen TOR dan RAB sebagai bahan penyusunan Renja-KL\r\n', 'Method', 'Membuat WA grup untuk komunikasi para PIC ', 179),
(88, 'Penyusunan POK DIPA  oleh unit-unit kerja	\r\n', 'Keterlambatan penyusunan POK DIPA oleh unit-unit kerja	\r\n', 'Keterlambatan penyusunan POK DIPA oleh unit-unit kerja	\r\n', 1, 4, 4, 'Perubahan kebijakan anggaran\r\n', 'Material', 'Sosialisasi kepada PIC penyusun POK DIPA\r\n', 179),
(89, 'Penerimaan dan pengagendaan memorandum permohonan dari pemohon ataupun internal Biro Perkeu	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat\r\n', 1, 3, 3, 'Staf Kepala Biro Perkeu tidak ada di tempat (keterbatasan jumlah SDM) 	\r\n', 'Man', 'Menyiapkan staf pengganti\r\n', 179),
(90, 'Pemberian arahan oleh Kepala Biro Perkeu kepada Kepala Bagian terkait	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 'Kesalahan dalam menerjemahkan arahan	', 1, 4, 4, 'Form lembar disposisi kurang informatif dan terstandarisasi	\r\n', 'Method', 'Rapat koordinasi secara periodik\r\n', 179),
(91, 'Penyusunan Renja-KL	\r\n', 'Penyusunan Renja-KL terlambat (Beban kerja menumpuk di hari-hari akhir penyusunan Renja K/L)	\r\n', 'Penyusunan Renja-KL terlambat (Beban kerja menumpuk di hari-hari akhir penyusunan Renja K/L)	\r\n', 4, 2, 8, 'Keterlambatan pengumpulan data dukung  Dokumen TOR dan RAB sebagai bahan penyusunan Renja-KL\r\n', 'Method', 'Membuat WA grup untuk komunikasi para PIC ', 179),
(92, 'Penyusunan POK DIPA  oleh unit-unit kerja	\r\n', 'Keterlambatan penyusunan POK DIPA oleh unit-unit kerja	\r\n', 'Keterlambatan penyusunan POK DIPA oleh unit-unit kerja	\r\n', 1, 4, 4, 'Perubahan kebijakan anggaran\r\n', 'Material', 'Sosialisasi kepada PIC penyusun POK DIPA\r\n', 179),
(93, 'Penerimaan memorandum laporan realisasi  anggaran	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat	\r\n', 'Penerimaan dan pengagendaan memorandum terlambat	\r\n', 1, 3, 3, 'Staf Kepala Biro Perkeu tidak ada di tempat (Kurangnya SDM Pegawai), 	\r\n', 'Man', 'Menyiapkan staf pengganti\r\n', 180),
(94, 'Pemberian arahan oleh Kepala Biro Perkeu kepada Kepala Bagian terkait	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 1, 4, 4, 'Form lembar disposisi kurang informatif dan terstandarisasi	\r\n', 'Machine', 'Rapat koordinasi\r\n', 180),
(95, 'Pelaporan realisasi anggaran (triwulan, semesteran, tahunan)	\r\n', 'Keterlambatan penyampaian laporan realisasi oleh unit-unit kerja	\r\n', 'Keterlambatan penyampaian laporan realisasi oleh unit-unit kerja	\r\n', 3, 4, 12, 'Memo permintaan laporan realisasi terlambat diterima  penyusun	\r\n', 'Method', 'Menyampaikan memo melalui surat elektronik dan WA grup\r\n', 180),
(96, 'Penerimaan dokumen dalam bentuk SPM, SP2D, SSBP, dan SSPB	\r\n	\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Kesalahan pembebanan MAK/MAP dalam SP2D	\r\n	\r\n\r\n', 'kesalahan pembebanan MAK/MAP dalam SP2D\r\n', 3, 5, 15, 'Kurang tepatnya pembebanan pada Belanja Barang dan Modal karena perbedaan interpretasi terhadap kriteria aset dan persediaan\r\n', 'Man', 'Koordinasi dalam penyusunan perencanaan anggaran dan kegiatan', 182),
(97, 'Input dokumen ke dalam aplikasi SAIBA	\r\n', 'Kesalahan input berupa angka, MAK, nomor dan tanggal dokumen', 'Kesalahan input berupa angka, MAK, nomor dan tanggal dokumen', 2, 5, 10, 'Ketidaktelitian operator SAIBA	\r\n', 'Man', 'Verifikasi Rincian Transaksi Harian (RTH) dan\r\nPengambilan data dari Sistem Akuntansi Satker (SAS)\r\n', 182),
(98, 'Rekonsiliasi dengan pihak KPPN	\r\n	\r\n	\r\n	\r\n	\r\n', 'Rekonsiliasi tidak selesai tepat waktu	\r\n	\r\n	\r\n	\r\n	\r\n', 'Rekonsiliasi tidak selesai tepat waktu	\r\n	\r\n	\r\n	\r\n	\r\n', 3, 5, 15, 'Kesalahan penginputan\r\n', 'Money', 'Rekonsiliasi setiap tanggal 1 setiap bulannya\r\n\r\n', 182),
(99, 'Penggabungan data UAKPA dan UAKPB	\r\n	\r\n	\r\n	\r\n	\r\n', 'Penggabungan data tidak sempurna karena permasalahan dalam aplikasi dan kesalahan input di SIMAK BMN	\r\n	\r\n	\r\n', 'Penggabungan data tidak sempurna karena permasalahan dalam aplikasi dan kesalahan input di SIMAK BMN	\r\n	\r\n	\r\n', 3, 5, 15, 'Operator SIMAK BMN belum melakukan update aplikasi\r\n\r\n', 'Man', 'SOP\r\n', 182),
(100, 'Penyusunan dokumen kertas kerja laporan keuangan untuk menyusun CaLK	\r\n	\r\n', 'Dokumen tidak lengkap', 'Dokumen tidak lengkap', 3, 4, 12, 'Dokumen sumber tidak dapat diperoleh secara lengkap dan tepat waktu', 'Material', 'Pengumpulan dokumen sumber secara periodik\r\n\r\n', 182),
(101, 'Pemberian arahan secara berjenjang dalam perumusan analisis kebijakan.\r\n', 'Ketidaksesuaian dalam menerjemahkan arahan dari pimpinan  (1.1)\r\n', 'Ketidaksesuaian dalam menerjemahkan arahan dari pimpinan  (1.1)\r\n', 2, 4, 8, 'Adanya perbedaan persepsi\r\n', 'Man', 'Diskusi internal\r\n', 190),
(102, 'Persiapan pelaksanaan analisis perkembangan pelaksanaan kebijakan pemerintah\r\n', 'Data dukung/bahan analisis kurang komprehensif (1.2)\r\n', 'Data dukung/bahan analisis kurang komprehensif (1.2)\r\n', 2, 4, 8, 'Jejaring kerja belum optimal\r\n', 'Method', 'Meningkatkan jejaring kerja dengan instansi/organisasi lain\r\n', 190),
(103, 'Analisis Perkembangan Pelaksanaan Kebijakan Pemerintah \r\n', 'Hasil analisa data dan informasi  kurang akurat. (1.3)\r\n', 'Hasil analisa data dan informasi  kurang akurat. (1.3)\r\n', 2, 4, 8, 'data yang diperoleh tidak komprehensif dan up date \r\n', 'Material', 'Memanfaatkan data dari media massa dan elektronik\r\n', 190),
(104, 'Penyusunan dan penyampaian laporan hasil analisis\r\n', 'Terlambat menyampaikan laporan hasil analisis (1.4)\r\n', 'Terlambat menyampaikan laporan hasil analisis (1.4)\r\n', 2, 4, 8, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 190),
(105, 'Penugasan dan Penyusunan Rencana Kerja \r\n', 'Pelaksanaan penugasan dan penyusunan rencana kerja tidak sesuai dengan rencana yang telah ditetapkan (2.1)\r\n', 'Pelaksanaan penugasan dan penyusunan rencana kerja tidak sesuai dengan rencana yang telah ditetapkan (2.1)\r\n', 3, 3, 9, 'Adanya efisiensi anggaran \r\n', 'Money', 'Penetapan Rencana Penarikan Anggaran.\r\n', 191),
(106, 'Pemberian arahan oleh Karo Perencanaan dan Keuangan kepada Kabag Perbendaharaan 	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 'Kesalahan dalam menerjemahkan arahan	\r\n', 1, 4, 4, 'Rapat koordinasi secara periodik\r\n', 'Method', 'Perbaikan form lembar dispoisis\r\n', 183),
(107, 'Pengklasifikasian dan pencocokan softcopy dan hardcopy  dokumen keuangan	\r\n', 'Kesalahan Input 	\r\n', 'Kesalahan Input 	', 2, 3, 6, 'Ketidaktelitian SDM', 'Man', 'Rekonsiliasi 	\r\n', 183),
(108, 'Verifikasi Dokumen Keuangan	\r\n	\r\n	\r\n', 'Keterlambatan proses penyelesaian tagihan\r\n\r\n\r\n', 'Keterlambatan proses penyelesaian tagihan', 4, 3, 12, 'Dokumen keuangan yang diterima tidak tepat waktu\r\n\r\n', 'Material', 'Rapat Koordinasi\r\n\r\n\r\n', 183),
(109, 'Pembayaran Dokumen	\r\n', 'Keterlambatan proses pembayaran	\r\n', 'Keterlambatan proses pembayaran	\r\n', 3, 3, 9, 'Waktu penyelesaian yang sangat singkat	\r\n', 'Method', 'Kartu Kendali', 183),
(110, 'Penerbitan dan Penyampaian SPM	\r\n', 'Terlambatnya proses penyampaian SPM	\r\n', 'Terlambatnya proses penyampaian SPM	\r\n', 2, 2, 4, 'Waktu penyelesaian dan penyampaian yang terbatas	\r\n', 'Method', 'Kartu Kendali', 183),
(111, 'Pembukuan dalam aplikasi SAS	\r\n	\r\n', 'Salah Pembebanan Anggaran di pembukuan\r\n', 'Salah Pembebanan Anggaran di pembukuan', 2, 2, 4, 'Belum  adanya mekanisme kontrol pembebanan ke pembukuan  SAS\r\n', 'Method', '2. Rekonsiliasi internal\r\n', 183),
(112, 'Pengarsipan Dokumen keuangan	\r\n', 'Kehilangan bukti dokumen arsip	\r\n', 'Kehilangan bukti dokumen arsip	\r\n', 2, 2, 4, 'Dokumen arsip yang tidak tertata dengan baik, baik cara dan tempat penyimpanan yang kurang mendukung	\r\n', 'Method', 'Digitalisasi Arsip \r\n', 183),
(113, 'Pelaporan Pertanggungjawaban Bendahara	\r\n', 'Keterlambatan pembuatan laporan	\r\n', 'Keterlambatan pembuatan laporan	\r\n', 2, 2, 4, 'Input Data dukung yang kurang akurat dan teliti	\r\n', 'Man', 'Rekonsiliasi data\r\n', 183),
(114, 'Penyampaian Laporan Pertanggungjawaban Bendahara ke KPPN	\r\n	\r\n	\r\n', 'Terhambatnya proses pencairan UP/TUP dan LS Bendahara\r\n', '', 2, 2, 4, 'Keterlambatan penyampaian laporan	\r\n', 'Money', 'Monitoring dan percepatan penyampaian laporan\r\n', 183),
(115, 'Persiapan FGD/Seminar/Workshop atau penyerapan pandangan  \r\n', 'Kesulitan dalam koordinasi dalam pelaksanaan penyerapan pandangan  (2.2)\r\n', 'Kesulitan dalam koordinasi dalam pelaksanaan penyerapan pandangan  (2.2)\r\n', 3, 3, 9, 'Pejabat terkait tidak ditempat dan telepon tidak respon\r\n', 'Man', 'Menghubungi pejabat bidang lain yang bisa dihubungi.\r\n', 191),
(116, 'Pelaksanaan atau Penyelenggaraan FGD/Seminar/Workshop atau penyerapan pandangan  \r\n\r\n', 'Kegiatan penyerapan pandangan  tidak sesuai dengan rencana awal (2.3)\r\n\r\n', 'Kegiatan penyerapan pandangan  tidak sesuai dengan rencana awal (2.3)\r\n\r\n', 3, 3, 9, 'Adanya perubahan kebijakan/arahan pimpinan \r\n\r\n', 'Method', 'Penetapan Rencana Penarikan Anggaran.\r\n\r\n', 191),
(117, 'Penyusunan dan penyampaian laporan hasil FGD/Seminar/Workshop atau Peninjauan Lapangan\r\n', 'Terlambat menyampaikan laporan hasil FGD/Seminar/Workshop atau Peninjauan Lapangan (2.4)\r\n', 'Terlambat menyampaikan laporan hasil FGD/Seminar/Workshop atau Peninjauan Lapangan (2.4)\r\n', 3, 3, 9, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 191),
(118, 'Pemberian arahan secara berjenjang dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Penugasan dalam penyusunan bahan rapat, pidato/sambutan, audiensi dan kunker Wapres mendesak. (3.1)\r\n', 'Penugasan dalam penyusunan bahan rapat, pidato/sambutan, audiensi dan kunker Wapres mendesak. (3.1)\r\n', 3, 3, 9, 'Pelimpahan tugas dari Presiden yang sifatnya mendesak\r\n', 'Method', 'SOP Penyiapan Bahan\r\n', 192),
(119, 'Koordinasi dengan lembaga/pihak terkait dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Koordinasi  dengan lembaga/pihak terkait dalam penyusunan bahan rapat, pidato/sambutan audiensi dan kunker Wapres kurang optimal(3.2)\r\n', 'Koordinasi  dengan lembaga/pihak terkait dalam penyusunan bahan rapat, pidato/sambutan audiensi dan kunker Wapres kurang optimal(3.2)\r\n', 3, 3, 9, 'Perubahan mendadak agenda kegiatan Wapres (dimajukan)\r\n', 'Method', 'Koordinasi  dengan lembaga/pihak terkait \r\n', 192),
(120, 'Penyiapan telaahan dan/atau bahan dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Bahan  rapat, pidato/sambutan audiensi dan kunker Wapres yang diperoleh tidak komprehensif (3.3)\r\n', 'Bahan  rapat, pidato/sambutan audiensi dan kunker Wapres yang diperoleh tidak komprehensif (3.3)\r\n', 3, 3, 9, 'Data dan informasi yang diperoleh terbatas\r\n', 'Material', 'Memanfaatkan data yang ada (Media Massa dan elektronik)\r\n', 192),
(121, '', '', '', 0, 0, 0, '\r\n', '', '', 192),
(122, 'Penyampaian bahan kepada Kasetwapres dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (3.4)\r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (3.4)\r\n', 3, 3, 9, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 192),
(123, 'Penyusunan dan penyampaian laporan hasil analisis.', 'Terlambat menyampaikan laporan hasil analisis kebijakan pemerintah.', 'Terlambat menyampaikan laporan hasil analisis kebijakan pemerintah.', 2, 3, 6, 'Jaringan internet tidak memadai.', 'Machine', 'Koordinasi dengan bagian IT.', 194),
(124, 'Persiapan koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon)\r\n', 'Kesulitan dalam koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) dengan lembaga/stake holder (4.1)\r\n', 'Kesulitan dalam koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) dengan lembaga/stake holder (4.1)\r\n', 3, 3, 9, 'Pejabat terkait tidak ditempat dan telepon tidak respon\r\n', 'Man', 'menghubungi pejabat bidang lain yang bisa dihubungi.\r\n', 193),
(125, 'Pelaksanaan  koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) \r\n', 'Koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) tidak terlaksana sesuai dengan jadwal  yang direncanakan (4.2)\r\n', 'Koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) tidak terlaksana sesuai dengan jadwal  yang direncanakan (4.2)\r\n', 5, 3, 15, 'Efisiensi anggaran\r\n\r\n', 'Money', 'Rencana Penarikan Anggaran.\r\n', 193),
(126, 'Penyusunan dan penyampaian laporan pelaksanaan  koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) \r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (4.3)\r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (4.3)\r\n', 5, 3, 15, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 193),
(127, 'Pelaksanaan penyerapan pandangan.', 'K/L kesulitan menyajikan bahan/data yang dibutuhkan pada kegiatan penyerapan pandangan.', 'K/L kesulitan menyajikan bahan/data yang dibutuhkan pada kegiatan penyerapan pandangan.', 3, 3, 9, 'Komunikasi yang kurang jelas karena permintaan data tidak spesifik.', 'Method', 'Pembuatan Kuesioner.', 195),
(128, 'Koordinasi dengan Kementerian/Lembaga/Pihak terkait untuk memperoleh informasi.', 'Bahan/data/informasi yang diperlukan sulit diperoleh dengan cepat.', 'Bahan/data/informasi  untuk rapat,  pidato/sambutan, audiensi, dan kunjungan kerja Wakil Presiden RI yang diperlukan sulit diperoleh dengan cepat.', 3, 3, 9, 'Lemahnya jaring kerja K/L/instansi terkait.', 'Method', 'Koordinasi, database jejaring kerja.', 198),
(129, 'Penyusunan dan pembahasan TOR, RAB, dan LAKIP.', 'Pengajuan rencana kerja tidak seluruhnya disetujui.', 'Pengajuan rencana kerja tidak seluruhnya disetujui.', 3, 3, 9, 'Keterbatasan anggaran.', 'Money', 'Pemilihan prioritas kerja.', 199),
(130, 'Penugasan penyusunan RKT kepada PIC pada setiap unit kerja 	\r\n', 'Penugasan penyusunan RKT kepada PIC pada setiap unit kerja terlambat disampaikan	\r\n', 'Penugasan penyusunan RKT kepada PIC pada setiap unit kerja terlambat disampaikan	', 1, 3, 3, 'Memorandum permintaan penyusunan RKT terselip, hilang  atau tidak diterima oleh unit kerja	\r\n', 'Material', 'Mengirimkan salinan memorandum dalam bentuk hardcopy maupun softcopy kepada para PIC\r\n', 184),
(131, 'Penyusunan RKT Setwapres	\r\n', 'RKT disusun tidak sesuai standar	\r\n', 'RKT disusun tidak sesuai standar	\r\n', 3, 2, 6, 'Data dukung RKT tidak lengkap dan tidak akurat\r\n', 'Material', 'Rapat rekonsiliasi data dengan unit-unit kerja\r\n', 184),
(132, 'Penyampaian dokumen RKT	\r\n', 'RKT ditetapkan melebihi batas waktu yang ditentukan	\r\n', 'RKT ditetapkan melebihi batas waktu yang ditentukan	\r\n', 1, 3, 3, 'Revisi atau perubahan draf RKT yang berulang-ulang\r\n', 'Method', 'Pengecekan RKT  sebelum ditetapkan\r\n', 184),
(133, 'Pencetakan dokumen RKT	\r\n', 'Pencetakan dokumen RKT terlambat atau tidak dapat dilaksanakan\r\n', 'Pencetakan dokumen RKT terlambat atau tidak dapat dilaksanakan', 2, 2, 4, 'Efisiensi anggaran', 'Material', 'Digitalisasi dokumen RKT', 184),
(134, 'Pendistribusian buku RKT	\r\n', 'Pendistribusian buku RKT terlambat\r\n', 'Pendistribusian buku RKT terlambat\r\n', 1, 3, 3, 'Buku RKT tidak diterima oleh pejabat yang bersangkutan', 'Material', 'Membuat daftar pejabat penerima buku\r\n', 184),
(135, 'Penyiapan dan penyampaian memorandum dan surat permintaan dokumen PK kepada unit-unit kerja 	\r\n', 'Penugasan penyusunan PK kepada PIC pada setiap unit kerja terlambat disampaikan	\r\n', 'Penugasan penyusunan PK kepada PIC pada setiap unit kerja terlambat disampaikan	', 3, 2, 6, 'Memorandum permintaan penyusunan PK terselip, hilang  atau tidak diterima oleh unit kerja	\r\n', 'Man', 'Mengirimkan salinan memorandum dalam bentuk hardcopy maupun softcopy kepada para PIC\r\n', 185),
(136, 'Penyusunan PK di lingkungan Setwapres	\r\n', 'PK disusun tidak sesuai standar	\r\n', 'Nilai hasil evaluasi PK tidak maksimal\r\n\r\n\r\n', 2, 3, 6, 'Data dukung PK tidak lengkap dan tidak akurat\r\n', 'Material', 'Rapat koordinasi dan penggunaan media komunikasi yang efektif\r\n', 185),
(137, 'Pencetakan dokumen PK	\r\n', 'Pencetakan dokumen PK terlambat atau tidak dapat dilaksanakan	\r\n', 'Pencetakan dokumen PK terlambat atau tidak dapat dilaksanakan', 2, 2, 4, 'Efisiensi anggaran', 'Material', 'Digitalisasi dokumen PK', 185),
(138, 'Pendistribusian buku PK	\r\n', 'Pendistribusian buku PK kepada pejabat di lingkungan Setwapres terlambat\r\n', 'Tidak semua pejabat menerima buku PK\r\n', 1, 3, 3, 'Buku PK tidak diterima oleh pejabat yang bersangkutan	\r\n', 'Material', 'Membuat daftar pejabat penerima buku\r\n', 185),
(139, 'Penyiapan dan penyampaian memorandum dan surat permintaan dokumen LKj kepada unit-unit kerja 	\r\n', 'Penugasan penyusunan LKj kepada PIC pada setiap unit kerja terlambat disampaikan	\r\n', 'Penugasan penyusunan LKj kepada PIC pada setiap unit kerja terlambat disampaikan	\r\n', 3, 3, 9, 'Memorandum permintaan penyusunan LKj terselip, hilang  atau tidak diterima oleh unit kerja	\r\n', 'Material', 'Mengirimkan salinan memorandum dalam bentuk hardcopy maupun softcopy kepada para PIC\r\n', 186),
(140, 'Penyusunan LKj Setwapres	\r\n', 'LKj disusun tidak sesuai standar	\r\n', 'Nilai hasil evaluasi LKj tidak maksimal\r\n\r\n\r\n', 2, 3, 6, 'Data dukung LKj tidak lengkap dan tidak akurat\r\n', 'Material', 'Rapat koordinasi dan penggunaan media komunikasi yang efektif\r\n', 186),
(141, 'Penyampaian dokumen LKj	\r\n', 'LKj disampaikan melebihi batas waktu yang ditentukan	\r\n', 'Nilai hasil evaluasi LKj tidak maksimal\r\n', 2, 3, 6, 'Revisi atau perubahan LKj yang berulang-ulang\r\n', 'Method', 'Menyampaikan dokumen LKj jauh sebelum batas waktu penyampaian\r\n', 186),
(142, 'Pencetakan dokumen LKj	\r\n', 'Pencetakan dokumen Lkj terlambat atau tidak dapat dilaksanakan	\r\n', 'Pencetakan dokumen Lkj terlambat atau tidak dapat dilaksanakan\r\n\r\n', 1, 2, 2, 'Efisiensi anggaran', 'Method', 'Digitalisasi dokumen LKJ', 186),
(143, 'Pendistribusian buku LKj	\r\n', 'Pendistribusian buku Lkj terlambat\r\n', 'Pendistribusian buku Lkj terlambat\r\n', 1, 2, 2, 'Buku tidak diterima oleh pejabat yang bersangkutan	\r\n', 'Method', 'Membuat daftar pejabat penerima buku\r\n', 186),
(144, 'Menerima arahan/disposisi dari Asdep PPP dan tindak lanjut atas arahan/disposisi tersebut.\r\n', 'Kesalahan dalam menerjemahkan arahan pimpinan untuk menyiapkan perencanaan anggaran dan kinerja (disbursement plan, RAB/POK)', 'Kesalahan dalam menerjemahkan arahan pimpinan untuk menyiapkan perencanaan anggaran dan kinerja (disbursement plan, RAB/POK).', 2, 3, 6, 'Kurang  paham, kurang komunikasi.\r\n', 'Man', 'SOP, SE De.Adm\r\n', 169),
(145, 'Pengumpulan/penyusunan  data/dokumen\r\n', 'Data/ dokumen yang tersusun untuk menyiapkan perencanaan anggaran dan kinerja (disbursement plan, RAB/POK) tidak lengkap/kurang komprehesif\r\n', 'Data/ dokumen yang tersusun untuk menyiapkan perencanaan anggaran dan kinerja (disbursement plan, RAB/POK) tidak lengkap/kurang komprehesif', 2, 4, 8, 'Data/ dokumen terkait penyusunan anggaran belum tersedia\r\n', 'Material', 'SOP, SE De.Adm, SBM.\r\n\r\n', 169),
(146, 'Pembahasan draft RKT/TAPKIN/PK, RAB/POK, disbursement plan\r\n', 'Tidak dapat melakukan pembahasan draft RKT/TAPKIN/PK, RAB/POK, disbursement plan\r\n', 'Tidak dapat melakukan pembahasan draft RKT/TAPKIN/PK, RAB/POK, disbursement plan\r\n', 3, 3, 9, 'Keterbatasan waktu pembahasan RKT/TAPKIN/PK, RAB/POK, disbursement plan \r\n', 'Method', 'SOP, Notulensi Wapres\r\n', 169),
(147, 'Penyampaian RKT/TAPKIN/PK, RAB/POK, disbursement plan.\r\n', 'Terlambat menyampaikan RKT/TAPKIN/PK, RAB/POK, disbursement plan\r\n', 'Terlambat menyampaikan RKT/TAPKIN/PK, RAB/POK, disbursement plan', 2, 2, 4, 'Batas waktu  penyampaian RKT/TAPKIN/PK, RAB/POK, disbursement plan terlalu singkat     \r\n', 'Method', 'SOP\r\n', 169),
(148, 'Menerima arahan/disposisi dari Asdep PPP dan tindak lanjut atas arahan/disposisi tersebut\r\n', 'Kesalahan dalam menerjemahkan arahan pimpinan untuk menyiapkan  laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran)', 'Kesalahan dalam menerjemahkan arahan pimpinan untuk menyiapkan  laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran)', 1, 1, 1, 'Kurang  paham, kurang komunikasi.\r\n', 'Man', 'SOP, SE De.Adm\r\n', 170),
(149, 'Pengumpulan data/ dokumen anggaran dan kinerja\r\n', 'Data/ dokumen untuk mendukung laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tidak terkumpul tepat waktu', 'Data/ dokumen untuk mendukung laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tidak terkumpul tepat waktu', 2, 3, 6, 'Database laporan kegiatan tidak tersedia\r\n', 'Machine', 'SOP\r\n', 170),
(150, 'Pembahasan dokumen laporan evaluasi anggaran dan kinerja\r\n', 'Pembahasan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tertunda/ mundur dari jadwal yang direncanakan', 'Pembahasan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tertunda/ mundur dari jadwal yang direncanakan', 1, 3, 3, 'Adanya kegiatan lain yang lebih prioritas dan mendesak\r\n', 'Method', 'Program Kerja Asdep\r\n', 170),
(151, 'Penandatanganan dokumen oleh Asdep\r\n', 'Dokumen  laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tidak ditandatangani sesuai dengan waktu yang diharapkan', 'Dokumen  laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tidak ditandatangani sesuai dengan waktu yang diharapkan', 1, 3, 3, 'Adanya arahan pimpinan agar kualitas dokumen disempurnakan.\r\n', 'Man', 'SOP, Format Dokumen\r\n', 170),
(152, 'Penyampaian dokumen kepada Biro Perencanaan dan Keuangan', 'Penyampaian dokumen  laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tidak sesuai dengan waktu yang ditetapkan', 'Penyampaian dokumen  laporan evaluasi anggaran dan kinerja (EPPA, LAKIP, Renaksi Pelaksanaan Anggaran) tidak sesuai dengan waktu yang ditetapkan', 2, 3, 6, 'Adanya arahan pimpinan agar kualitas dokumen disempurnakan\r\n', 'Man', 'SOP, Format Dokumen\r\n', 170),
(153, 'Pemberian arahan secara berjenjang dalam perumusan analisis kebijakan.\r\n', 'Ketidaksesuaian dalam menerjemahkan arahan dari pimpinan  (1.1)\r\n', 'Ketidaksesuaian dalam menerjemahkan arahan dari pimpinan  (1.1)\r\n', 2, 4, 8, 'Adanya perbedaan persepsi\r\n', 'Man', 'Diskusi internal\r\n', 216),
(154, 'Koordinasi dengan kementerian/lembaga/pihak terkait untuk memperoleh informasi.', 'Informasi tidak dapat diterima dengan cepat.', 'Informasi tidak dapat diterima dengan cepat.', 4, 3, 12, 'Lemahnya jejaring kerja dengan K/L/instansi terkait', 'Method', 'Pemutakhiran database Jejaring kerja.', 212);
INSERT INTO `tbl_sop_risk` (`id_sop`, `nama_sop`, `nama_risk`, `sisa_risk`, `frekuensi`, `dampak`, `hitung`, `deskripsi_cause`, `kategori_cause`, `deskripsi_pengendalian`, `id_skp`) VALUES
(155, 'Persiapan pelaksanaan analisis perkembangan pelaksanaan kebijakan pemerintah\r\n', 'Data dukung/bahan analisis kurang komprehensif (1.2)\r\n', 'Data dukung/bahan analisis kurang komprehensif (1.2)\r\n', 2, 4, 8, 'Jejaring kerja belum optimal\r\n', 'Method', 'Meningkatkan jejaring kerja dengan instansi/organisasi lain\r\n', 216),
(156, 'Analisis Perkembangan Pelaksanaan Kebijakan Pemerintah \r\n', 'Hasil analisa data dan informasi  kurang akurat. (1.3)\r\n', 'Hasil analisa data dan informasi  kurang akurat. (1.3)\r\n', 2, 4, 8, 'data yang diperoleh tidak komprehensif dan up date \r\n', 'Material', 'Memanfaatkan data dari media massa dan elektronik\r\n', 216),
(157, 'Penyusunan dan penyampaian laporan hasil analisis\r\n', 'Terlambat menyampaikan laporan hasil analisis (1.4)\r\n', 'Terlambat menyampaikan laporan hasil analisis (1.4)\r\n', 2, 4, 8, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 216),
(158, 'Penyusunan dan Penyampaian Laporan.', 'Laporan kurang komprehensif.', 'Laporan kurang komprehensif.', 3, 3, 9, 'Bahan/data kurang lengkap dan up to date.', 'Material', 'Koordinasi dengan stakeholder yang dikunjungi.', 213),
(159, 'Penugasan dan Penyusunan Rencana Kerja \r\n', 'Pelaksanaan penugasan dan penyusunan rencana kerja tidak sesuai dengan rencana yang telah ditetapkan (2.1)\r\n', 'Pelaksanaan penugasan dan penyusunan rencana kerja tidak sesuai dengan rencana yang telah ditetapkan (2.1)\r\n', 3, 3, 9, 'Adanya efisiensi anggaran \r\n', 'Money', 'Penetapan Rencana Penarikan Anggaran.\r\n', 217),
(160, 'Persiapan FGD/Seminar/Workshop atau penyerapan pandangan  \r\n', 'Kesulitan dalam koordinasi dalam pelaksanaan penyerapan pandangan  (2.2)\r\n', 'Kesulitan dalam koordinasi dalam pelaksanaan penyerapan pandangan  (2.2)\r\n', 3, 3, 9, 'Pejabat terkait tidak ditempat dan telepon tidak respon\r\n', 'Man', 'Menghubungi pejabat bidang lain yang bisa dihubungi.\r\n', 217),
(161, 'Pelaksanaan atau Penyelenggaraan FGD/Seminar/Workshop atau penyerapan pandangan  \r\n', 'Kegiatan penyerapan pandangan  tidak sesuai dengan rencana awal (2.3)\r\n', 'Kegiatan penyerapan pandangan  tidak sesuai dengan rencana awal (2.3)\r\n', 3, 3, 9, 'Adanya perubahan kebijakan/arahan pimpinan \r\n', 'Method', 'Penetapan Rencana Penarikan Anggaran.\r\n', 217),
(162, 'Pengumpulan dan pengolahan data dan informasi.', 'Bahan/data pendukung kurang realiable dan  up to date.', 'Bahan/data pendukung kurang realiable dan  up to date.', 3, 3, 9, 'Data sulit diperoleh karena jaringan kurang reliable.', 'Machine', 'Pemutakhiran Database Jejaring kerja.', 214),
(163, 'Penyusunan dan penyampaian laporan hasil FGD/Seminar/Workshop atau Peninjauan Lapangan\r\n', 'Terlambat menyampaikan laporan hasil FGD/Seminar/Workshop atau Peninjauan Lapangan (2.4)\r\n', 'Terlambat menyampaikan laporan hasil FGD/Seminar/Workshop atau Peninjauan Lapangan (2.4)\r\n', 3, 3, 9, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 217),
(164, 'Penyusunan dan pembahasan TOR, RAB dan LAKIP.', 'Pengajuan rencana kerja tidak seluruhnya disetujui.', 'Pengajuan rencana kerja tidak seluruhnya disetujui.', 3, 3, 9, 'Keterbatasan anggaran.', 'Money', 'Pemilihan prioritas kerja.', 215),
(165, 'Pemberian arahan secara berjenjang dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Penugasan dalam penyusunan bahan rapat, pidato/sambutan, audiensi dan kunker Wapres mendesak. (3.1)\r\n', 'Penugasan dalam penyusunan bahan rapat, pidato/sambutan, audiensi dan kunker Wapres mendesak. (3.1)\r\n', 3, 3, 9, 'Pelimpahan tugas dari Presiden yang sifatnya mendesak\r\n', 'Method', 'SOP Penyiapan Bahan\r\n', 218),
(166, 'Koordinasi dengan lembaga/pihak terkait dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Koordinasi  dengan lembaga/pihak terkait dalam penyusunan bahan rapat, pidato/sambutan audiensi dan kunker Wapres kurang optimal(3.2)\r\n', 'Koordinasi  dengan lembaga/pihak terkait dalam penyusunan bahan rapat, pidato/sambutan audiensi dan kunker Wapres kurang optimal(3.2)\r\n', 3, 3, 9, 'Perubahan mendadak agenda kegiatan Wapres (dimajukan)\r\n', 'Method', 'Koordinasi  dengan lembaga/pihak terkait \r\n', 218),
(167, 'Penyiapan telaahan dan/atau bahan dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Bahan  rapat, pidato/sambutan audiensi dan kunker Wapres yang diperoleh tidak komprehensif (3.3)\r\n', 'Bahan  rapat, pidato/sambutan audiensi dan kunker Wapres yang diperoleh tidak komprehensif (3.3)\r\n', 3, 3, 9, 'Data dan informasi yang diperoleh terbatas\r\n', 'Material', 'Memanfaatkan data yang ada (Media Massa dan elektronik)\r\n', 218),
(168, 'Penyampaian bahan kepada Kasetwapres dalam penyusunan bahan rapat, pidato/ sambutan, audiensi dan kunker Wapres\r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (3.4)\r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (3.4)\r\n', 3, 3, 9, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 218),
(169, 'Persiapan koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon)\r\n', 'Kesulitan dalam koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) dengan lembaga/stake holder (4.1)\r\n', 'Kesulitan dalam koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) dengan lembaga/stake holder (4.1)\r\n', 3, 3, 9, 'Pejabat terkait tidak ditempat dan telepon tidak respon\r\n', 'Man', 'menghubungi pejabat bidang lain yang bisa dihubungi.\r\n', 219),
(170, 'Pelaksanaan  koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) \r\n', 'Koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) tidak terlaksana sesuai dengan jadwal  yang direncanakan (4.2)\r\n', 'Koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) tidak terlaksana sesuai dengan jadwal  yang direncanakan (4.2)\r\n', 5, 3, 15, 'Efisiensi anggaran\r\n\r\n', 'Money', 'Rencana Penarikan Anggaran.\r\n', 219),
(171, 'Penyusunan dan penyampaian laporan pelaksanaan  koordinasi (rapat koordinasi/korespondensi/Diskusi Terbatas/komunikasi melalui telepon) \r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (4.3)\r\n', 'Terlambat menyampaikan bahan rapat, pidato/sambutan audiensi dan kunker Wapres (4.3)\r\n', 5, 3, 15, 'Keterbatasan jaringan IT \r\n', 'Machine', 'Koordinasi dengan bagian IT\r\n', 219),
(172, 'Perencanaan Diskusi Terbatas.', 'Penentuan tema dan narasumber laporan hasil diskusi terbatas kurang sesuai kondisi.', 'Penentuan tema dan narasumber laporan hasil diskusi terbatas kurang sesuai kondisi.', 1, 4, 4, 'Pegawai kurang informasi, 	Kompetensi pegawai kurang.', 'Man', 'Rencana kerja tahunan, Rapat persiapan internal.\r\n', 220),
(173, 'Pelaksanaan Diskusi Terbatas.', 'Hasil diskusi terbatas kurang memberi manfaat sebagai masukan.', 'Hasil diskusi terbatas kurang memberi manfaat sebagai masukan.', 1, 4, 4, 'Narasumber berhalangan hadir.', 'Material', 'SOP, TOR, Rapat persiapan internal.\r\n', 220),
(174, 'Penyusunan laporan hasil diskusi terbatas.', 'Data/informasi laporan diskusi terbatas kurang lengkap.', 'Data/informasi laporan diskusi terbatas kurang lengkap.', 1, 3, 3, 'Kurangnya kompetensi pegawai dalam menganalisis.', 'Man', 'Notulensi diskusi, Rapat penyiapan laporan.\r\n', 220),
(175, 'Perencanaan Diskusi Sehari/FGD/Seminar.', 'Penentuan tema dan narasumber laporan hasil diskusi sehari/FGD/ seminar kurang sesuai kondisi.', 'Penentuan tema dan narasumber laporan hasil diskusi sehari/FGD/ seminar kurang sesuai kondisi.', 1, 4, 4, 'Pegawai kurang informasi, Kompetensi pegawai kurang.\r\n', 'Man', 'Rencana kerja tahunan, Rapat persiapan internal.\r\n', 221),
(176, 'Pelaksanaan Diskusi Sehari/FGD/Seminar.', 'Hasil diskusi sehari  tidak  menghasilkan masukan.', 'Hasil diskusi sehari  tidak  menghasilkan masukan.', 1, 4, 4, 'Narasumber berhalangan hadir.', 'Material', 'Konfirmasi sebelum acara, ToR, 	Rapat persiapan internal.\r\n', 221),
(177, 'Penyusunan laporan hasil Diskusi Sehari/FGD/Seminar.', 'Data/informasi laporan hasil Diskusi Sehari kurang lengkap.', 'Data/informasi laporan hasil Diskusi Sehari kurang lengkap.', 1, 3, 3, 'Hasil diskusi tidak tercatat.', 'Material', 'Notulensi diskusi, Rapat penyiapan laporan.\r\n', 221),
(178, 'Perencanaan koordinasi dan konsultasi (networking) di bidang hubungan luar negeri dengan civitas akademika, lembaga pemerintah dan non-pemerintah.', 'TOR dan penentuan narasumber kurang tepat.', 'TOR dan penentuan narasumber kurang tepat.', 1, 4, 4, 'Data yang dibutuhkan kurang lengkap, Kompetensi pegawai kurang.\r\n', 'Man', 'Rencana kerja tahunan, Rapat persiapan internal.\r\n.', 222),
(179, 'Pelaksanaan koordinasi dan konsultasi (networking).', 'Hasil koordinasi dan konsultasi tidak  menghasilkan masukan.', 'Hasil koordinasi dan konsultasi tidak  menghasilkan masukan.', 1, 4, 4, 'Kompetensi narasumber kurang.', 'Material', 'SOP, ToR, Rapat persiapan internal.\r\n', 222),
(180, 'Penyusunan laporan hasil koordinasi dan konsultasi (networking).', 'Data/informasi hasil koordinasi dan konsultasi kurang lengkap.', 'Data/informasi hasil koordinasi dan konsultasi kurang lengkap.', 1, 3, 3, 'Hasil diskusi tidak tercatat, 	Kompetensi pegawai kurang\r\n', 'Material', 'Notulensi diskusi, Rapat penyiapan laporan.\r\n', 222),
(181, 'Pemberian arahan secara berjenjang ', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyelenggaraan rapat koordinasi/diskusi terbatas atau kegiatan sejenisnya', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait penyelengga-raan rapat koordinasi/ diskusi terbatas atau kegiatan sejenisnya', 2, 5, 10, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik, Pertemuan Internal secara rutin\r\n', 175),
(182, 'Persiapan Menyelenggarakan Focus Group Discussion/ Seminar/Workshop (TOR, Surat-menyurat, koordinasi dengan narasumber dan peserta, serta administrasi keuangan)', 'TOR penyelenggaraan kegiatan rapat koordinasi/diskusi terbatas/sejenisnya kurang komprehensif; Narasumber atau peserta rapat koordinasi/diskusi terbatas tidak dapat dihubungi/ tidak dapat hadir; Uang persediaan (UP) untuk penyelenggaraan kegiatan rapat koordinasi/diskusi terbatas tidak mencukupi/ tersedia.', 'TOR penyelengga-raan kegiatan rapat koordinasi/ diskusi terbatas/ sejenisnya kurang komprehensif; Narasumber atau peserta rapat koordinasi/diskusi terbatas tidak dapat dihubungi/ tidak dapat hadir; Uang persediaan (UP) untuk penyelenggaraan kegiatan rapat koordinasi/diskusi terbatas tidak mencukupi/ tersedia.', 2, 4, 8, 'Data yang dibutuhkan untuk menyusun TOR kurang lengkap/ tersedia,	Kompetensi pegawai kurang merata, Data jejaring kerja kurang tersedia/ lengkap, Perencanaan anggaran/ disbursement plan (DB) kurang akurat\r\n', 'Material', 'Basis data substansi, File Sharing (Sbox), Riviu secara Berjenjang, Pendidikan dan Pelatihan, Melakukan  komunikasi via telp/fax/email/ whatsapp, Menyiapkan alternatif narasumber atau peserta rapat, Petunjuk operasional kegiatan (POK), Disbursment Plan (DP)', 175),
(183, 'Penyelenggaraan FGD/Seminar/ Workshop', 'Narasumber atau peserta rapat tidak hadir; Bahan presentasi tidak dapat ditampilkan', 'Narasumber atau peserta rapat tidak hadir; Bahan presentasi tidak dapat ditampilkan.', 1, 4, 4, 'Pelaksana kegiatan belum melakukan konfirmasi; Gangguan teknis pada laptop/alat proyeksi', 'Machine', 'Melakukan  komunikasi via telp/fax/email/ whatsapp; Perawatan laptop/alat proyeksi secara berkala', 175),
(184, 'Penyusunan & penyampaian laporan hasil penyelenggaraan rapat koordinasi/ diskusi terbatas/ kegiatan sejenisnya', 'Penyusunan dan penyampaian laporan penyelenggaraan rapat koordinasi/diskusi terbatas terlambat; Format laporan tidak sesuai tata naskah dinas ', 'Penyusunan dan penyampaian laporan terlambat; Format laporan tidak sesuai tata naskah dinas.', 2, 4, 8, 'Pelaksana kegiatan  memperoleh penugasan lain, Gangguan kesehatan/ sakit, Kekurangan data/bahan, Gangguan teknis/ Peralatan kerja, Kurangnya kepatuhan pegawai terhadap tata naskah dinas\r\n', 'Man', 'Standar Operasional Prosedur (SOP), Permensesneg tentang tata naskah dinas', 175),
(185, 'Keikutsertaan pada forum-forum kajian di bidang hubungan luar negeri.', 'Ketidaksesuaian materi dengan bidang kerja.', 'Ketidaksesuaian materi dengan bidang kerja.', 1, 2, 2, 'Kompetensi pegawai kurang, 	Kurangnya informasi.', 'Man', 'Rencana kerja tahunan, SOP, Struktur dan tupoksi.\r\n', 223),
(186, 'Penyusunan laporan hasil keikutsertaan pada forum-forum kajian di bidang hubungan luar negeri.', 'Kurangnya informasi/data terkait laporan hasil menghadiri forum kajian.', 'Kurangnya informasi/data terkait laporan hasil menghadiri forum kajian.', 1, 2, 2, 'Kompetensi pegawai kurang, 	Kurangnya informasi.', 'Man', 'SOP, Tata Naskah Dinas.\r\n', 223),
(187, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait laporan hasil telaahan staf.', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait laporan hasil telaahan staf.', 1, 5, 5, 'Kompetensi pegawai masih kurang, 	Disposisi kurang detil\r\n', 'Method', 'SOP', 224),
(188, 'Pengumpulan data dan koordinasi untuk penyiapan telaahan staf', 'Data laporan hasil telaahan staf kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 'Data laporan hasil telaahan staf kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 2, 4, 8, 'Sumber data tidak tersedia, 	Metode pengumpulan data kurang variatif, Komitmen SDM rendah, 	Waktu yang terbatas.', 'Method', 'Melakukan konfirmasi kepada K/L terkait, Uji silang data, Diklat teknis, 	Capacity Building, SOP.', 224),
(189, 'Penyusunan telaahan staf', 'Hasil analisis belum menjawab pertanyaan pimpinan.', 'Hasil analisis belum menjawab pertanyaan pimpinan.', 2, 4, 8, 'Kurangnya kompetensi pegawai.', 'Man', 'Diklat analisis kebijakan.', 224),
(190, 'Penyampaian telaahan staf kepada Deputi.', 'Penyampaian telaahan staf terlambat.', 'Penyampaian telaahan staf terlambat.', 2, 4, 8, 'Kekurangtelitian dalam proses administrasi', 'Man', 'SOP, Format Laporan/ TND\r\n.', 224),
(191, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait bahan-bahan rapat, pidato/ sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait bahan-bahan rapat, pidato/ sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden.', 1, 5, 5, 'Kompetensi pegawai masih kurang. ', 'Man', 'SOP', 225),
(192, 'Pengumpulan data, koordinasi, dan penyiapan bahan.', 'Bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden lambat diterima.', 'Bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden lambat diterima.', 2, 5, 10, 'Terbatasnya data/informasi terkait.', 'Material', 'Koordinasi, meminta informasi ke Kemlu, Internet yang cepat.', 225),
(193, 'Pemeriksaan bahan.', 'Bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presidenkurangsesuai dengan standar.', 'Bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presidenkurangsesuai dengan standar.', 2, 4, 8, 'Perbedaan standar yang berlaku di K/L lain, Terbatasnya data/informasi\r\n', 'Material', 'Koordinasi dengan pihak lain.', 225),
(194, 'Penyampaian bahan kepada Deputi.', 'Bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden kurang lengkap.', 'Bahan rapat, pidato/sambutan, audiensi, dan kunjungan resmi/kerja Wakil Presiden kurang lengkap.', 2, 4, 8, 'Adanya arahan atau perkembangan baru.', 'Material', '•	Koordinasi dan penyiapan', 225),
(195, 'Pemberian arahan secara berjenjang ', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait kegiatan menghadiri undangan rapat koordinasi/diskusi terbatas/kegiatan sejenisnya', 'Kesalahan dalam menerjemahkan arahan pimpinan terkait kegiatan menghadiri undangan rapat koordinasi/ diskusi terbatas/ kegiatan sejenisnya', 1, 3, 3, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik, Pertemuan Internal secara rutin\r\n', 176),
(196, 'Persiapan menghadiri FGD/Seminar/Workshop', 'Bahan menghadiri udangan rapat/FGD/seminar kurang komprehensif', 'Bahan menghadiri udangan rapat/FGD/seminar kurang komprehensif', 1, 1, 1, 'Pelaksana kegiatan sebagai peserta aktif terlambat menerima undangan/ disposisi', 'Man', 'Standar Operasional Prosedur (SOP), Sistem Persuratan dan Disposisi Elektronik', 176),
(197, 'Pelaksanaan menghadiri FGD/Seminar/ Workshop/ kegiatan sejenisnya', 'Gangguan alat transportasi ketika menghadiri udangan rakor/diskusi terbatas/kegiatan sejenisnya', 'Gangguan alat transportasi ketika menghadiri udangan rakor/diskusi terbatas/ kegiatan sejenisnya', 1, 4, 4, 'Force majeure (cuaca buruk, bencana alam, mogok, demonstrasi, dsb)', 'Machine', 'Informasi  cuaca dari BMKG, Berita online\r\n', 176),
(198, 'Penyusunan & Penyampaian Laporan menghadiri undangan', 'Penyusunan dan penyampaian laporan menghadiri undangan rakor/diskusi terbatas/ kegiatan sejenisnya terlambat; Format laporan menghadiri udangan rakor/diskusi tidak sesuai tata naskah dinas', 'Penyusunan dan penyampaian laporan menghadiri undangan rakor/diskusi terbatas/ kegiatan sejenisnya terlambat; Format laporan menghadiri udangan rakor/diskusi tidak sesuai tata naskah dinas.', 2, 4, 8, 'Pelaksana kegiatan  memperoleh penugasan lain, Gangguan kesehatan/ sakit, Kekurangan data/bahan, Gangguan teknis/ Peralatan kerja, Kurangnya kepatuhan pegawai terhadap tata naskah dinas \r\n', 'Material', 'Standar Operasional Prosedur (SOP), Permensesneg tentang tata naskah dinas', 176),
(199, 'Penyusunan perencanaan dan evaluasi kegiatan-kegiatan / program kerja di bidang hubungan luar negeri.', 'Rencana kegiatan kurang sesuai dengan bidang hubungan luar negeri atau kurang kekinian.', 'Rencana kegiatan kurang sesuai dengan bidang hubungan luar negeri atau kurang kekinian.', 1, 4, 4, 'Kompetensi pegawai kurang, 	Keterbatasan informasi\r\n', 'Method', 'Rapat persiapan internal, 	Koordinasi dengan K/L terkait.\r\n', 226),
(200, 'Pelaksanaan penyusunan perencanaan dan evaluasi program kerja di bidang hubungan luar negeri', 'Pelaksanaan penyusunan rencana dan evaluasi program kerja lambat.', 'Pelaksanaan penyusunan rencana dan evaluasi program kerja lambat.', 1, 4, 4, 'Kompetensi pegawai kurang, 	Keterbatasan informasi.', 'Material', 'Rapat persiapan internal, 	Penyiapan rencana kerja dan evaluasi sesuai bidang masing-masing.\r\n', 226),
(201, 'Penyusunan laporan rencana kerja dan evaluasi kegiatan di bidang hubungan luar negeri.', 'Data/informasi laporan rencana kerja dan evaluasi kegiatan kurang lengkap.', 'Data/informasi laporan rencana kerja dan evaluasi kegiatan kurang lengkap.', 1, 4, 4, 'Kompetensi pegawai kurang, 	Keterbatasan data dan informasi.', 'Material', 'Koordinasi dengan K/L dan pihak lain terkait.', 226),
(202, 'Pemberian arahan secara berjenjang', 'Kesalahan dalam menerjemahkan arahan pimpinan dalam menyusun rencana kerja dan laporan tahunan', 'Kesalahan dalam menerjemahkan arahan pimpinan dalam menyusun rencana kerja dan laporan tahunan', 1, 4, 4, 'Kompetensi pegawai belum merata', 'Man', 'Standar Operasional Prosedur,	Sistem Persuratan dan Disposisi Elektronik, Pertemuan Internal secara rutin\r\n', 178),
(203, 'Pengumpulan dan analisis dokumen Perencanaan/ Laporan Kinerja', 'Data/informasi penyusunan rencana kerja dan laporan kinerja kurang akurat/lengkap; Data untuk penyusunan rencana kerja dan laporan kinerja rusak/hilang', 'Data/informasi penyusunan rencana kerja dan laporan kinerja kurang akurat/lengkap; Data untuk penyusunan rencana kerja dan laporan kinerja rusak/hilang.', 2, 4, 8, 'Sumber data kurang tersedia,	Teknik analisis kurang tepat, Kompetensi SDM belum merata, Human errors,	Terjadi kerusakan pada komputer\r\n', 'Material', 'Diklat Perencanaan/ Pelaporan Kinerja, Capacity Building, Standar Operasional Prosedur, Diklat teknis komputer bagi pengawas/ pelaksana, Perawatan komputer secara berkala\r\n', 178),
(204, 'Penyusunan & Pembahasan dokumen Perencanaan/ Laporan Kinerja', 'Waktu yang tersedia untuk penyusunan rencana kerja dan laporan kinerja sangat singkat/pendek', 'Waktu yang tersedia untuk penyusunan rencana kerja dan laporan kinerja sangat singkat/pendek', 3, 4, 12, 'Permintaan dokumen/laporan dari unit kerja mendadak', 'Method', 'Standar Operasional Prosedur (SOP)', 178),
(205, 'Penyampaian dokumen/ laporan kepada Deputi untuk diteruskan kepada Deputi Bidang Administrasi Setwapres.', 'Penyusunan dan penyampaian dokumen perencanaan dan laporan kinerja terlambat', 'Penyusunan dan penyampaian dokumen perencanaan dan laporan kinerja terlambat', 2, 4, 8, 'Pelaksana kegiatan  memperoleh penugasan lain, Gangguan kesehatan/ sakit, Kekurangan data/bahan, Gangguan teknis/ Peralatan kerja', 'Man', 'Standar Operasional Prosedur (SOP)', 178),
(206, 'Pengumpulan data, informasi hasil pengelolaan kegiatan, keuangan dan administrasi.', 'Data dan informasi tidak tersedia, hilang atau kurang lengkap.', 'Data dan informasi tidak tersedia, hilang atau kurang lengkap.', 1, 3, 3, 'Kurangnya kompetensi pegawai, 	Tidak ditaatinya prosedur kerja.', 'Material', 'SOP, Koordinasi internal, 	Koordinasi dengan pihak eksternal.\r\n', 227),
(207, 'Penyusunan dan pembahasan data, informasi pengelolaan kegiatan, keuangan dan administrasi persuratan.', 'Adanya perbedaan data dari sumber yang berbeda terkait penetapan laporan hasil pengelolaan kegiatan, keuangan dan administrasi persuratan.', 'Adanya perbedaan data dari sumber yang berbeda terkait penetapan laporan hasil pengelolaan kegiatan, keuangan dan administrasi persuratan.', 2, 3, 6, 'Belum ada keseragaman format penyusunan laporan.', 'Method', 'SOP', 227),
(208, 'Penyampaian laporan pengelolaan kegiatan, keuangan dan administrasi persuratan. ', 'Penyampaian laporan terlambat.', 'Penyampaian laporan terlambat.', 2, 3, 6, 'Koneksi internet lambat, 	Kekurangtelitian dalam proses administrasi.\r\n', 'Machine', 'Format Tata Naskah Dinas, 	Konsultasi dengan unit lain, 	SOP, Penambahan kecepatan internet.\r\n', 227),
(210, 'Pemberian pengarahan terkait kebutuhan perjalanan kunjungan kerja Wakil Presiden dari pimpinan	', 'Salah menerjemahkan disposisi pimpinan tentang kebutuhan perjalanan kunjungan kerja Wakil Presiden', 'Salah menerjemahkan disposisi pimpinan tentang kebutuhan perjalanan kunjungan kerja Wakil Presiden', 1, 4, 4, 'Pegawai kurang memahami disposisi', 'Man', 'Melakukan konfirmasi ulang secara lisan kepada atasan', 200),
(211, 'Pemberian pengarahan terkait kebutuhan perjalanan kunjungan kerja Wakil Presiden dari pimpinan', 'Arahan/disposisi terkait kunjungan kerja Wapres tidak ditindaklanjuti secara tepat waktu', 'Arahan/disposisi terkait kunjungan kerja Wapres tidak ditindaklanjuti secara tepat waktu', 1, 4, 4, 'Kurangnya data / informasi yang diperoleh terkait data kunjungan kerja Wapres (waktu, jadwal, rombongan)', 'Material', 'Usulan untuk mengimplementasikan SPDE di setiap unit di Setwapres', 200),
(212, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 3, 6, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 228),
(213, 'Pengumpulan data, koordinasi, dan penyiapan telaahan staf.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 2, 4, 8, 'Sumber data bersifat sekunder (media massa), Komitmen SDM rendah.\r\n\r\n', 'Material', 'Koordinasi dengan instansi terkait untuk mendapatkan data primer, Perawatan peralatan secara simultan.', 228),
(214, 'Mereviu naskah laporan.', 'Data rusak/hilang.', 'Data rusak/hilang.', 2, 3, 6, 'Terjadi kerusakan teknis peralatan  pengolah data, Kurangnya kompetensi SDM dalam mengoperasikan perangkat komputer.', 'Machine', 'Mengusulkan perawatan peralatan secara  simultan, Mengusulkan pegawai untuk diikutsertakan diklat teknis TI.', 228),
(215, 'Penyampaian laporan kepada Deputi.', 'Laporan  Asdep KIP terlambat disampaikan.', 'Laporan  Asdep KIP terlambat disampaikan.', 2, 3, 6, 'Dalam waktu yang bersamaan pegawai mendapat tugas yang lebih prioritas, Kurangnya jumlah SDM. \r\n', 'Man', 'Mengusulkan penambahan jumlah SDM.', 228),
(216, 'Tindak lanjut arahan Deputi.', 'Laporan terlambat ditindaklanjuti/ 	Tidak ditindak lanjuti.\r\n', 'Laporan terlambat ditindaklanjuti/ 	Tidak ditindak lanjuti.\r\n', 3, 4, 12, 'Dalam waktu yang   bersamaan pegawai mendapat tugas yang lebih prioritas.', 'Man', 'Mengusulkan penambahan jumlah SDM.', 228),
(217, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 4, 8, 'Kompetensi pegawai masih kurang, Sarana dan prasarana kerja yang kurang nyaman dan kurang memadai.\r\n', 'Man', 'SOP, Mengusulkan penataan ruang kerja di lingkungan Asdep Komunikasi dan Informasi Publik (KIP) kepada Kepala Biro Umum, •	Mengusulkan permohonan sarana dan prasarana kerja (13 item) untuk pejabat/pegawai Asdep KIP.', 229),
(218, 'Pengumpulan data, koordinasi, dan penyiapan bahan.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 2, 4, 8, 'Sumber data bersifat sekunder (media massa), Metode pengumpulan data kurang variatif, Waktu yang terbatas.', 'Material', 'Melakukan konfirmasi kepada Instansi/ Media terkait , Uji silang data, Diklat teknis.', 229),
(219, 'Mereviu naskah laporan.', 'Data rusak/hilang.', 'Data rusak/hilang.', 2, 4, 8, 'Terjadi kerusakan teknis peralatan  pengolah data, Kurangnya kapasitas SDM dalam mengoperasikan perangkat komputer.\r\n•	\r\n', 'Machine', 'Mengusulkan perawatan peralatan secara  simultan, Mengusulkan keikutsertaan SDM untuk diklat teknis TI.', 229),
(220, 'Penyampaian bahan kepada Deputi.', 'Penyampaian laporan bahan terlambat.', 'Penyampaian laporan bahan terlambat.', 2, 5, 10, 'Akumulasi kendala yang dihadapi dari proses  sebelumnya.', 'Method', 'SOP', 229),
(221, 'Tindak lanjut arahan Deputi.', 'Tindak lanjut terlambat dilaksanakan.', 'Tindak lanjut terlambat dilaksanakan.', 2, 4, 8, 'Dalam waktu yang bersamaan mendapat tugas yang mendesak.', 'Man', 'Mendelegasikan kepada staf yang terkait.', 229),
(222, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 3, 6, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 230),
(223, 'Penyusunan laporan pertanggungjawaban kegiatan dukungan operasional.', 'Laporan pertanggungjawaban kegiatan dukungan operasional terlambat disusun.', 'Laporan pertanggungjawaban kegiatan dukungan operasional terlambat disusun.', 2, 4, 8, 'Pengumpulan data pendukung   terlambat, Pegawai penyusun laporan mendapat tugas yang lebih urgen dan mendesak.', 'Method', 'Disbursment Plan, POK, SKP.', 230),
(224, 'Reviu naskah laporan pertanggungjawaban pengelolaan kegiatan dukungan operasional', 'Reviu naskah laporan tidak dilaksanakan.', 'Reviu naskah laporan tidak dilaksanakan.', 1, 5, 5, 'Data yang dibutuhkan untuk menyusun laporan pertanggungjawaban tidak lengkap/ tersedia, Kompetensi pegawai kurang.', 'Material', 'SOP, Riviu Berjenjang, Diklat.', 230),
(225, 'Penyampaian naskah laporan pertanggungjawaban kepada Deputi Bidang Administrasi u.p. Kepala Biro Perencanaan dan Keuangan.', 'Laporan pertanggungjawaban terlambat disampaikan. ', 'Laporan pertanggungjawaban terlambat disampaikan. ', 2, 4, 8, 'Pegawai mendapat tugas yang  lebih urgen dan mendesak.  ', 'Man', 'Meningkatkan komunikasi langsung/  briefing, WA.', 230),
(226, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 1, 3, 3, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 231),
(227, 'Koordinasi  dengan narasumber dan instansi terkait lainnya.', 'Tidak terjadi koordinasi.', 'Tidak terjadi koordinasi.', 3, 4, 12, 'Gangguan teknis  alat komunikasi, dan jaringan, Anggota Tim Redaksi mendapat tugas yang lebih  prioritas dari pimpinan strukturalnya.', 'Method', 'Meningkatkan koordinasi dan komunikasi dengan Bidang TI, Meningkatkan koordinasi dan komunikasi dengan Anggota Tim lainnya.', 231),
(228, ' Pelaksanaan peliputan.', 'Batal melakukan peliputan.', 'Batal melakukan peliputan.', 3, 3, 9, 'Ketergantungan pada narasumber, Reporter yang bertugas mendapat  tugas lain  yang lebih prioritas.', 'Method', 'Koordinasi/ komunikasi dengan narasumber ditingkatkan, Menugaskan reporter cadangan..', 231),
(229, 'Batal melakukan peliputan.', 'Terlambat melakukan pengolahan.', 'Terlambat melakukan pengolahan.', 2, 4, 8, 'Reporter yang bertugas mendapat tugas yang lebih prioritas, Kompetensi reporter/  pengolah data kurang memadai.', 'Method', ' Mengusulkan peningkatan kompetensi penulisan berita, Mengusulkan penambahan jumlah reporter.', 231),
(230, 'Penyusunan dan  editing dummy majalah.', 'Dummy terlambat disusun, Editing dummy yang berulang-ulang.', 'Dummy terlambat disusun, Editing dummy yang berulang-ulang.', 3, 4, 12, 'Akumulasi keterlambatan proses dari sebelumnya, Bahan majalah berupa naskah, foto/ gambar/ data belum lengkap, Masih adanya kesalahan tik, kalimat, dan  estetika.', 'Method', 'SOP, Komunikasi ditingkatkan, Penyempurnaan dummy (perbaikan salah tik, kalimat, estetika layout dan gambar). ', 231),
(231, 'Pencetakan majalah.', 'Majalah terlambat dicetak, Kualitas hasil cetakan rendah.', 'Majalah terlambat dicetak, Kualitas hasil cetakan rendah.', 1, 4, 4, 'Akumulasi  dari keterlambatan proses sebelumnya, Mutu peralatan cetak rendah, Salah memilih percetakan.', 'Method', 'SOP, Mendorong percepatan penyelesaian dummy.', 231),
(232, 'Pendistribusian majalah.', 'Distribusi terlambat.', 'Distribusi terlambat.', 1, 4, 4, 'Biaya distribusi tidak mencukupi', 'Money', 'Distribusi  ke KBRI/PerwakilanTetap RI di Luar Negeri  melalui  Kantong Diplomatik,  Ditjen Protokol dan Konsuler Kemlu.', 231),
(233, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 1, 4, 4, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 232),
(234, 'Koordinasi dan komunikasi  dengan Staf Khusus Wapres Bidang Komunikasi dan Informasi dan dengan Biro Protokol Wapres.', 'Tidak berhasil  koordinasi dan komunikasi.', 'Tidak berhasil  koordinasi dan komunikasi.', 2, 4, 8, 'Gangguan teknis  (alat komunikasi, jaringan), Perubahan sifat acara.', 'Machine', 'Agenda Harian Wapres, Meningkatkan koordinasi dengan Staf Khusus dan Biro Protokol.', 232),
(235, 'Peliputan dan pengolahan naskah/bahan berita.', 'Hasil peliputan tidak dapat digunakan, Penyusunan naskah berita terhambat.', 'Hasil peliputan tidak dapat digunakan, Penyusunan naskah berita terhambat.', 3, 4, 12, 'Gangguan teknis alat peliputan, Rendahnya kualitas SDM, Reporter Tim Website mendapat tugas yang lebih mendesak dari pimpinan  struktural..', 'Machine', 'Perbaikan/ pengadaan baru alat liputan, Peningkatan kompetensi  SDM, Mengusulkan  Diklat Penulisan Berita dan Foto serta teknik upload berita dan foto.', 232),
(236, 'Upload berita.', 'Terlambat mengunggah berita.', 'Terlambat mengunggah berita.', 3, 4, 12, 'Gangguan soft ware, hardware, dan jaringan, Kualitas SDM, Dukungan data foto belum lengkap.', 'Machine', 'SOP, Koordinasi dengan Bidang TI, Koordinasi dengan Fotografer.', 232),
(237, 'Pemberian arahan secara berjenjang. ', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 1, 4, 4, 'Kompetensi pegawai masih kurang.\r\n\r\n', 'Man', 'SOP', 233),
(238, 'Pengambilan data dukung berupa naskah, foto, video dari website.', 'Gagal melakukan pengambilan data (download) dari website wapresri.go.id', 'Gagal melakukan pengambilan data (download) dari website wapresri.go.id', 2, 4, 8, 'Gangguan teknis jaringan dan perangkat TI lainnya.', 'Machine', 'Koordinasi dengan Bagian TI, Fotografer, dan penyedia naskah. ', 233),
(239, 'Pengolahan hasil liputan.', 'Keterlambatan pengolahan hasil liputan.', 'Keterlambatan pengolahan hasil liputan.', 3, 4, 12, 'Kurangnya SDM.', 'Man', 'SOP', 233),
(240, 'Penyampaian naskah dan gambar untuk diseminasi  informasi media sosial.', 'Naskah berita  gagal/ terlambat  diunggah untuk  disebarluaskan melalui media sosial. ', 'Naskah berita  gagal/ terlambat  diunggah untuk  disebarluaskan melalui media sosial. ', 3, 4, 12, 'Gangguan teknis/Jaringan TI, Keterbatasan SDM.', 'Method', 'SOP', 233),
(241, 'Pemberian  arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 2, 4, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 234),
(242, 'Penyusunan  Jadwal  Petugas Peliputan.', 'Jadwal Harian Petugas tidak disusun.', 'Jadwal Harian Petugas tidak disusun.', 3, 2, 6, 'Pegawai  penyusun jadwal tugas Harian Asdep KIP mendapat tugas yang lebih prioritas.\r\nKurangnya SDM.', 'Method', 'Menggunakan jadwal sementara, Penugasan disampaikan melalui Whatshap.', 234),
(243, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 1, 4, 4, 'Kompetensi pegawai masih kurang\r\n\r\n', 'Man', 'SOP', 235),
(244, 'Koordinasi  dengan unit kerja/instansi/lembaga terkait.', 'Tidak terjadi koordinasi dan komunikasi  dengan Biro Protokol, Aparat Pengamanan, Panitia penyelenggara acara Wapres.', 'Tidak terjadi koordinasi dan komunikasi  dengan Biro Protokol, Aparat Pengamanan, Panitia penyelenggara acara Wapres.', 3, 4, 12, 'Gangguan teknis alat komunikasi, jaringan telepon/ internet, Petugas tidak hadir rapat koordinasi.', 'Method', 'Koordinasi dengan Bagian TI, Koordinasi/ komunikasi dengan peserta rapat lainnya yang hadir.', 235),
(245, 'Pelaksanaan pengaturan peliputan wartawan, foto, video dan audio.', 'Peliputan tidak tertib, Timbulnya. komplain dari stake holder, Komunikasi kurang lancar.', 'Peliputan tidak tertib, Timbulnya. komplain dari stake holder, Komunikasi kurang lancar.', 2, 4, 8, 'Koordinasi kurang maksimal dengan stake holder, Penempatan stake holder tidak sesuai dengan angle liputan, Alat komunikasi kurang memadai. ', 'Method', 'SOP, Jadwal Penugasan, Memaksimalkan koordinasi dengan Pengamanan, Protokol, dan Panitia, Mengusulkan pengadaan alat komunikasi pendukung berupa Earphone/ Headphone Wireless Handy Talky/ Digital Two Way Radio.', 235),
(246, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 4, 8, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP, Jadwal Tugas Harian', 236),
(247, 'Pengolahan hasil liputan foto, video, dan  penyusunan transkrip.', 'Keterlambatan pengolahan hasil liputan foto, video, dan transkrip.', 'Keterlambatan pengolahan hasil liputan foto, video, dan transkrip.', 3, 4, 12, 'Kompetansi SDM dalam bidang editing foto dan video masih rendah, Kurangnya jumlah SDM, Perlengkapan alat peliputan kurang memadai.', 'Method', 'SOP, Memanfaatkan  tenaga Praktik Kerja Lapangan SMK, Mengusulkan pengadaan perlengkapan alat peliputan berupa Card Reader untuk memory card kamera foto, •	Mengajukan permohonan pengadaan alat-alat peliputan berupa kamera video, kamera foto, dan aksesorisnya beserta lemari penyimpan alat melalui memo kepada Kepala Biro Umum.', 236),
(248, 'Pengarsipan.', 'Pengarsipan belum memenuhi  standar arsip yang baik dan aman.', 'Pengarsipan belum memenuhi  standar arsip yang baik dan aman.', 4, 4, 16, 'Sarana/prasarana kearsipan belum memadai, Tenaga arsipparis belum ada, Kurangnya SDM.', 'Method', 'SOP, Memanfaatkan  tenaga Praktik Kerja Lapangan SMK.', 236),
(249, 'Pemberian arahan secara berjenjang.', 'Terlambat menindaklanjuti arahan.', 'Terlambat menindaklanjuti arahan.', 2, 2, 4, 'Adanya perubahan desain ID Wartawan oleh pimpinan.', 'Method', 'Mengubah desain ID Wartawan sesuai ketentuan dan arahan pimpinan.', 237),
(250, 'Pendaftaran media untuk penugasan wartawan di Istana Wapres.', 'Surat pemberitauan pembukaan pendaftaran terlambat disampaikan kepada media, Proses pendaftaran ID Wartawan terlambat.', 'Surat pemberitauan pembukaan pendaftaran terlambat disampaikan kepada media, Proses pendaftaran ID Wartawan terlambat.', 2, 3, 6, 'SDM yang menyiapkan surat pemberitahuan mendapat tugas lain yang lebih prioritas, Terbatasnya jumlah SDM, Sistem online Pendaftaran ID belum berfungsi secara maksimal, Pergantian personil Wartawan oleh Media yang bersangkutan.', 'Method', 'Menunjuk staf lain untuk menyiapkan  surat pemberitahuan, Memajukan jadwal pembukaan pendaftaran ID Wartawan dari November menjadi Oktober, Koordinasi penyempurna-an Aplikasi Pendaftaran ID Wartawan secara Online dengan Bagian/ Tenaga TI, Meminta kepada pihak Media untuk segera mengganti Wartawan dalam jangka waktu tertentu. ', 237),
(251, 'Pencetakan ID Wartawan.', 'Kesalahan teknis saat pencetakan, Keterlambatan melakukan pencetakan, Kualitas ID Wartawan berkurang.', 'Kesalahan teknis saat pencetakan, Keterlambatan melakukan pencetakan, Kualitas ID Wartawan berkurang.', 3, 3, 9, 'Data wartawan/ media yang terkumpul belum lengkap, Penyampaian data kepada percetakan terlambat, Pihak percetakan kurang teliti melihat data yang diberikan, Anggaran yang tersedia berkurang atau tetap sedangkan harga material/bahan ID meningkat setiap tahun.', 'Method', 'Koordinasi dan memonitor via Email, telepon, langsung, Koordinasi Langsung dengan pihak pencetakan mengenai revisi pencetakan kartu ID, Mengurangi kuota jumlah wartawan yang diterima mendaftar, Kualitas bahan ID Wartawan disesuaikan  dengan pagu anggaran.', 237),
(252, 'Legalisasi Pengamanan ID Wartawan.', 'Keterlambatan Proses Legalisir ID Wartawan.', 'Keterlambatan Proses Legalisir ID Wartawan.', 4, 3, 12, 'Tuntutan kelengkapan data, ID Wartawan Legalisasi di Paspampres bersifat manual, Permintaan data fisik secara konvensional, Tidak adanya sosialisasi ID Wartawan baru setiap awal tahun kepada Personil Paspampres di Lapangan. ', 'Method', 'Koordinasi dengan pihak Paspampres.', 237),
(253, 'Pendistribusian ID Wartawan.', 'ID Wartawan terlambat didistribusikan.', 'ID Wartawan terlambat didistribusikan.', 4, 3, 12, 'Akumulasi keterlambatan proses sebelumnya.', 'Method', 'Berkoordinasi dengan media, pengamanan, Sambil menunggu selesainya pencetakan ID Card baru, masih memberlaku-kan  ID Card yang lama.', 237),
(254, 'Fasilitasi penyediaan sarana dan prasarana Wartawan.', 'Tidak tersedia sarana dan prasarana, Penyediaan sarana dan prasarana terlambat, Sarana dan prasarana  rusak dan kurang memadai, Sarana dan prasarana tidak terjamin keamanan dan kenyamanan. ', 'Tidak tersedia sarana dan prasarana, Penyediaan sarana dan prasarana terlambat, Sarana dan prasarana  rusak dan kurang memadai, Sarana dan prasarana tidak terjamin keamanan dan kenyamanan. ', 4, 3, 12, 'Terbatasnya anggaran, Kelalaian pengguna (Wartawan), Sistem pengawasan yang rendah.', 'Method', 'Mengajukan permohonan penataan ruangan, penggantian TV monitor di ruang wartawan, penambahan sofa di ruang wartawan, dan perbaikan kunci locker kepada Kepala BIro Umum.', 237),
(255, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 4, 8, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP, Jadwal Tugas Harian.', 238),
(256, 'Memonitoring undangan rakor.', 'Undangan rapat tidak termonitor.', 'Undangan rapat tidak termonitor.', 2, 3, 6, 'Tidak ada SDM yang ditugaskan secara khusus memonitor  undangan  rapat koordinasi.', 'Man', 'Meningkatkan koordinasi dengan Biro Protokol  untuk mengetahui jadwal rapat   koordinasi.', 238),
(257, 'Mengikuti rakor.', 'Terlambat hadir, Tidak hadir, Tidak memahami substansi.', 'Terlambat hadir, Tidak hadir, Tidak memahami substansi.', 2, 3, 6, 'Undangan/info terlambat, Berhalangan hadir rakor, Kurang konsentrasi.', 'Man', 'Koordinasi dengan peserta rapat lain yang terkait, Memonitor agenda rapat secara rutin, Briefing petugas.', 238),
(258, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 4, 8, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 239),
(259, 'Pengumpulan data, koordinasi, dan penyiapan bahan.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 2, 5, 10, 'Sumber data bersifat sekunder (media massa), Metode pengumpulan data kurang variatif, Waktu yang terbatas.', 'Method', 'Melakukan konfirmasi kepada K/L terkait, Uji silang data, Diklat teknis.', 239),
(260, 'Mereviu draft laporan.', 'Data rusak/hilang.', 'Data rusak/hilang.', 2, 4, 8, 'Kurangnya kapasitas SDM dalam mengoperasikan perangkat komputer, Terjadi kerusakan teknis peralatan  pengolah data.', 'Man', 'Mengusulkan keikutsertaan SDM untuk diklat teknis TI, Mengusulkan perawatan peralatan secara  simultan.', 239),
(261, 'Penyampaian laporan dan bahan kepada Deputi.', 'Penyampaian laporan dan bahan terlambat.', 'Penyampaian laporan dan bahan terlambat.', 2, 5, 10, 'Akumulasi kendala yang dihadapi dari proses  sebelumnya.', 'Method', 'SOP', 239),
(262, 'Tindak lanjut arahan Deputi.', 'Tindak lanjut terlambat dilaksanakan.', 'Tindak lanjut terlambat dilaksanakan.', 2, 4, 8, 'Dalam waktu yang bersamaan mendapat tugas yang mendesak.', 'Method', 'Mendelegasikan kepada staf yang terkait.', 239),
(263, 'Pemberian arahan secara berjenjang.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 'Kesalahan dalam menerjemahkan arahan pimpinan.', 2, 3, 6, 'Kompetensi pegawai masih kurang.', 'Man', 'SOP', 240),
(264, 'Pengumpulan data, koordinasi, dan penyiapan telaahan staf.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 'Data kurang akurat, kurang update, kurang relevan dan kurang komprehensif.', 2, 4, 8, 'Sumber data bersifat sekunder (media massa), Komitmen SDM rendah.', 'Material', 'Melakukan konfirmasi kepada K/L terkait, SOP.', 240),
(265, 'Mereviu draft laporan.', 'Data rusak/hilang.', 'Data rusak/hilang.', 2, 3, 6, 'Terjadi kerusakan teknis peralatan  pengolah data, Kurangnya kompetensi SDM dalam mengoperasikan perangkat komputer.\r\n•	', 'Machine', 'Mengusulkan perawatan peralatan secara  simultan, Mengusulkan SDM untuk diikutsertakan diklat teknis TI.', 240),
(266, 'Penyampaian telaahan staf kepada Deputi.', 'Laporan  Asdep KIP terlambat disampaikan.', 'Laporan  Asdep KIP terlambat disampaikan.', 2, 3, 6, 'Dalam waktu yang bersamaan pegawai mendapat tugas yang lebih prioritas, Kurangnya jumlah SDM.', 'Man', 'Mengusulkan penambahan jumlah SDM kepada Kepala Biro TUTIK.', 240),
(267, 'Tindak lanjut arahan Deputi.', 'Laporan terlambat ditindaklanjuti/ Tidak ditindak lanjuti.', 'Laporan terlambat ditindaklanjuti/ Tidak ditindak lanjuti.', 3, 4, 12, 'Dalam waktu yang   bersamaan pegawai mendapat tugas yang lebih prioritas.', 'Man', 'Mengusulkan penambahan jumlah SDM kepada Kepala Biro TUTIK.', 240),
(268, 'Penyusunan Rencana Anggaran dan Biaya (RAB) kunjungan kerja Wakil Presiden', 'Penyusunan RAB kunjungan kerja Wapres kurang tepat/tidak sesuai dengan kebutuhan biaya kunjungan kerja Wakil Presiden', 'Penyusunan RAB kurang tepat/tidak sesuai dengan kebutuhan biaya kunjungan kerja Wakil Presiden', 1, 4, 4, 'Data kunjungan kerja Wakil Presiden (rombongan, acara, jadwal) yang kurang lengkap dan/atau sering berubah', 'Material', 'Penyusunan RPP Perjadin Presiden dan Wapres (mencakup hal-hal yang belum diatur dalam PMK)', 200),
(269, 'Penyusunan Rencana Anggaran dan Biaya (RAB) kunjungan kerja Wakil Presiden', 'RAB kunjungan kerja Wapres tidak disetujui oleh Deputi Bidang Administrasi (Kuasa Pengguna Anggaran)', 'RAB tidak disetujui oleh Deputi Bidang Administrasi (Kuasa Pengguna Anggaran)', 1, 4, 4, 'RAB tidak sesuai dengan ketentuan dan kebijakan yang berlaku (PMK, Permensesneg, kebijakan internal)	', 'Method', 'Penyusunan RPP Perjadin Presiden dan Wapres (mencakup hal-hal yang belum diatur dalam PMK)', 200),
(270, 'Pelaksanaan koordinasi dengan KBRI/KJRI dan Kementerian Luar Negeri terkait kebutuhan logistik kunjungan kerja Wakil Presiden ke luar negeri', 'Pelaksanaan koordinasi yang sulit dengan pihak KJRI/KBRI di negara yang dituju', 'Pelaksanaan koordinasi yang sulit dengan pihak KJRI/KBRI di negara yang dituju', 1, 3, 3, 'Belum ada database tersendiri dan valid  terkait contact person di KBRI/KJRI', 'Method', 'Pembuatan database data kunjungan perjalanan Wapres ke Luar Negeri (terkait kontak KBRI/KJRI, akomodasi, transportasi, dan konsumsi)', 200),
(271, 'Pelaksanaan koordinasi dengan KBRI/KJRI dan Kementerian Luar Negeri terkait kebutuhan logistik kunjungan kerja Wakil Presiden ke luar negeri', 'Pelaksanaan koordinasi yang sulit dengan pihak KJRI/KBRI di negara yang dituju', 'Pelaksanaan koordinasi yang sulit dengan pihak KJRI/KBRI di negara yang dituju', 1, 3, 3, 'Perbedaan waktu dengan negara yang dituju', 'Method', 'Petugas pelaksana melakukan koordinasi setiap saat diperlukan', 200),
(272, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Dokumen administrasi untuk kunjungan kerja Wapres (Surat Penugasan, Surat Perintah, Rancangan Keppres dan Kepmen) terlambat disusun dan dikeluarkan', 'Dokumen administrasi (Surat Penugasan, Surat Perintah, Rancangan Keppres dan Kepmen) terlambat disusun dan dikeluarkan', 2, 3, 6, 'Kurangnya SDM untuk pengurusan administrasi Pimpinan', 'Material', 'Usulan untuk penambahan SDM sebagai Tata Usaha Pimpinan', 200),
(273, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Dokumen administrasi untuk kunjungan kerja Wapres (Surat Penugasan, Surat Perintah, Rancangan Keppres dan Kepmen) terlambat disusun dan dikeluarkan', 'Dokumen administrasi (Surat Penugasan, Surat Perintah, Rancangan Keppres dan Kepmen) terlambat disusun dan dikeluarkan', 2, 3, 6, 'Kurangnya SDM untuk pengurusan Administrasi Pimpinan', 'Man', 'Usulan untuk penambahan SDM sebagai Tata Usaha Pimpinan', 200),
(274, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Dokumen administrasi untuk kunjungan kerja Wapres (Surat Penugasan, Surat Perintah, Rancangan Keppres dan Kepmen) terlambat disusun dan dikeluarkan', 'Dokumen administrasi (Surat Penugasan, Surat Perintah, Rancangan Keppres dan Kepmen) terlambat disusun dan dikeluarkan', 2, 3, 6, 'Kurangnya SDM untuk pengurusan administrasi Pimpinan', 'Method', 'Usulan untuk penambahan SDM sebagai Tata Usaha Pimpinan', 200),
(275, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Surat Perintah dan Surat Penugasan untuk pejabat/pegawai yang masuk dalam rombongan kunjungan kerja Wapres  tidak disetujui pimpinan', 'Surat Perintah dan Surat Penugasan tidak disetujui pimpinan', 1, 4, 4, 'Daftar petugas/rombongan yang diajukan tidak sesuai dengan ketentuan/kebijakan pimpinan', 'Material', 'Pembuatan kebijakan terkait rombongan dan petugas untuk setiap jenis kunjungan kerja Wapres', 200),
(276, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Paspor, visa dan exit permit untuk Wakil Presiden dan rombongan tidak dapat diterbitkan', 'Paspor, visa dan exit permit tidak dapat diterbitkan', 1, 4, 4, 'dokumen persyaratan tidak lengkap', 'Material', 'Membuat dan mensosialisasikan daftar persyaratan pembuatan paspor dan exit permit', 200),
(277, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Paspor, visa dan exit permit untuk Wakil Presiden dan rombongan tidak dapat diterbitkan', 'Paspor, visa dan exit permit tidak dapat diterbitkan', 1, 4, 4, 'Permohonan visa tidak disetujui oleh Pemerintah negara yang dituju', 'Method', 'Meminta rekomendasi pembuatan visa dari Kemenlu', 200),
(278, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Paspor, visa dan exit permit untuk Wakil Presiden dan rombongan terlambat dikeluarkan', 'Paspor, visa dan exit permit terlambat dikeluarkan', 1, 4, 4, 'dokumen persyaratan terlambat dilengkapi', 'Material', 'Melakukan koordinasi langsung dengan pejabat yang berwenang di Kemenlu', 200);
INSERT INTO `tbl_sop_risk` (`id_sop`, `nama_sop`, `nama_risk`, `sisa_risk`, `frekuensi`, `dampak`, `hitung`, `deskripsi_cause`, `kategori_cause`, `deskripsi_pengendalian`, `id_skp`) VALUES
(279, 'Penyiapan Dokumen Administrasi Kunjungan Kerja Wakil Presiden (Surat Penugasan  dan Surat Perintah an untuk kunjungan Wapres di dalam negeri dan ke luar negeri, Rancangan Kepres dan Kepmen untuk kunjungan Wapres ke luar negeri, Visa dan Exit permit untuk kunjungan Wapres ke luar negeri)', 'Paspor, visa dan exit permit untuk Wakil Presiden dan rombongan terlambat dikeluarkan', 'Paspor, visa dan exit permit terlambat dikeluarkan', 1, 4, 4, 'Perubahan daftar rombongan yang mendadak', 'Material', 'Melakukan koordinasi langsung dengan pejabat yang berwenang di Kemenlu', 200),
(280, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Akomodasi/transportasi/konsumsi untuk Wakil Presiden dan rombongan yang tersedia di daerah/negara tujuan tidak sesuai dengan kebutuhan ', 'Akomodasi/transportasi/konsumsi  yang tersedia di daerah/negara tujuan tidak sesuai dengan kebutuhan', 1, 3, 3, 'kurangnya informasi tentang penyedia akomodasi/transportasi/konsumsi di daerah/negara yang dituju', 'Material', 'Pembuatan database data kunjungan perjalanan Wapres (terkait contact person daerah/negara tujuan, akomodasi, transportasi, konsumsi)', 200),
(281, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Akomodasi, konsumsi dan transportasi  untuk Wakil Presiden dan rombongan yang sesuai standar/ketentuan tidak tersedia', 'Akomodasi, konsumsi dan transportasi  yang sesuai standar/ketentuan tidak tersedia', 1, 3, 3, 'kurangnya informasi tentang penyedia akomodasi/transportasi/konsumsi di daerah/negara yang dituju', 'Material', 'Pembuatan database data kunjungan perjalanan Wapres (terkait contact person daerah/negara tujuan, akomodasi, transportasi, konsumsi)', 200),
(282, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Akomodasi, konsumsi dan transportasi  untuk Wakil Presiden dan rombongan yang sesuai standar/ketentuan tidak tersedia', 'Akomodasi, konsumsi dan transportasi  yang sesuai standar/ketentuan tidak tersedia', 1, 3, 3, 'Perbedaan standar harga akomodasi/konsumsi/transportasi di Indonesia (sesuai ketentuan) dengan harga di negara tujuan', 'Money', 'Pembuatan database data kunjungan perjalanan Wapres (terkait contact person daerah/negara tujuan, akomodasi, transportasi, konsumsi)', 200),
(283, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Pelayanan yang diberikan oleh penyedia akomodasi, transportasi dan konsumsi untuk Wakil Presiden dan rombongan tidak optimal', 'Pelayanan yang diberikan oleh penyedia akomodasi, transportasi dan konsumsi tidak optimal', 1, 3, 3, 'Kurang informasi tentang penyedia di daerah/negara tujuan	\r\n', 'Material', 'Pembuatan database data kunjungan perjalanan Wapres (terkait contact person daerah/negara tujuan, akomodasi, transportasi, konsumsi)', 200),
(284, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Pelayanan yang diberikan oleh penyedia akomodasi, transportasi dan konsumsi untuk Wakil Presiden dan rombongan tidak optimal', 'Pelayanan yang diberikan oleh penyedia akomodasi, transportasi dan konsumsi tidak optimal', 1, 3, 3, 'Kurang informasi tentang penyedia di daerah/negara tujuan	\r\n', 'Material', 'Pembuatan database data kunjungan perjalanan Wapres (terkait contact person daerah/negara tujuan, akomodasi, transportasi, konsumsi)', 200),
(285, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Pembayaran biaya untuk akomodasi, transportasi dan konsumsi tidak sesuai dengan pengeluaran riil', 'Biaya yang dibayarkan  untuk akomodasi, transportasi dan konsumsi tidak sesuai dengan pengeluaran riil', 1, 4, 4, 'Kurang pengawasan terhadap petugas pelaksana', 'Method', 'Pembuatan group komunikasi (whatsapp) dengan melibatkan pimpinan dan para petugas pelaksana, sosialisasi kode etik', 200),
(286, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Pembayaran biaya untuk akomodasi, transportasi dan konsumsi tidak sesuai dengan pengeluaran riil', 'Biaya yang dibayarkan  untuk akomodasi, transportasi dan konsumsi tidak sesuai dengan pengeluaran riil', 1, 4, 4, 'Kurangnya pengawasan terhadap petugas pelaksana', 'Method', 'Pembuatan group komunikasi (whatsapp) dengan melibatkan pimpinan dan para petugas pelaksana, sosialisasi kode etik', 200),
(287, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Pembayaran biaya untuk akomodasi, transportasi dan konsumsi tidak sesuai dengan pengeluaran riil', 'Biaya yang dibayarkan  untuk akomodasi, transportasi dan konsumsi tidak sesuai dengan pengeluaran riil', 1, 4, 4, 'Kurangnya pengawasan terhadap petugas pelaksana', 'Man', 'Pembuatan group komunikasi (whatsapp) dengan melibatkan pimpinan dan para petugas pelaksana, sosialisasi kode etik', 200),
(288, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Penerimaan gratifikasi dari penyedia kepada petugas pelaksana kunjungan kerja Wapres  (pejabat/pegawai Setwapres)', 'Pembayaran biaya pembatalan/perubahan akomodasi, konsumsi, transportasi yang telah dipesan', 1, 4, 4, 'Kurang pengawasan terhadap petugas pelaksana		', 'Method', 'Menandatangani Pakta Integritas', 200),
(289, 'Penyiapan dan penyediaan akomodasi, konsumsi dan transportasi kunjungan kerja Wakil Presiden', 'Pembayaran biaya pembatalan/perubahan akomodasi, konsumsi, transportasi yang telah dipesan', 'Pembayaran biaya pembatalan/perubahan akomodasi, konsumsi, transportasi yang telah dipesan', 1, 3, 3, 'Perubahan jadwal kunjungan kerja Wakil Presiden', 'Material', 'Membuat perjanjian dengan penyedia tentang biaya pembatalan', 200),
(290, 'Pengajuan Uang Muka Kegiatan (UMK) untuk pembayaran SPD dan kebutuhan perjalanan kunjungan kerja Wakil Presiden', 'UMK kunjungan kerja Wapres  tidak diterima tepat waktu', 'UMK tidak diterima tepat waktu', 1, 4, 4, 'Proses Persetujuan UMK terlambat/lama', 'Method', 'SOP mengenai pengajuan UMK', 200),
(291, 'Pengajuan Uang Muka Kegiatan (UMK) untuk pembayaran SPD dan kebutuhan perjalanan kunjungan kerja Wakil Presiden', 'UMK kunjungan kerja Wapres  tidak diterima tepat waktu', 'UMK tidak diterima tepat waktu', 1, 4, 4, 'Pengajuan UMK terlambat', 'Method', 'Koordinasi langsung dengan pimpinan terkait untuk mempercepat proses permohonan UMK', 200),
(292, 'Pengajuan Uang Muka Kegiatan (UMK) untuk pembayaran SPD dan kebutuhan perjalanan kunjungan kerja Wakil Presiden', 'UMK kunjungan kerja Wapres  tidak diterima tepat waktu', 'UMK tidak diterima tepat waktu', 1, 4, 4, 'Uang yang tersedia di kas bendahara tidak mencukupi', 'Money', 'Pembuatan rencana penarikan anggaran kegiatan bulanan ', 200),
(293, 'Pengajuan Uang Muka Kegiatan (UMK) untuk pembayaran SPD dan kebutuhan perjalanan kunjungan kerja Wakil Presiden', 'UMK kunjungan kerja Wapres yang diterima tidak mencukupi biaya kunjungan kerja', 'UMK yang diterima tidak mencukupi biaya kunjungan kerja', 1, 4, 4, 'Penyusunan RAB yang kurang tepat/tidak sesuai dengan kebutuhan perjalanan kunjungan kerja Wapres', 'Method', 'Pembuatan database data dukungan kunjungan perjalanan Wapres (terkait contact person daerah/negara tujuan, akomodasi, transportasi)', 200),
(294, 'Penyiapan dan  pembagian dokumen dan keuangan perjalanan dinas (SPD)	', 'Ketidaksesuaian dokumen dan pemberian SPD dengan ketentuan', 'Ketidaksesuaian dokumen dan pemberian SPD dengan ketentuan', 1, 4, 4, 'Kurang teliti saat penyusunan dokumen SPD	', 'Man', 'Membuat aplikasi untuk pembuatan dokumen perjalanan dinas', 200),
(295, 'Penyiapan dan  pembagian dokumen dan keuangan perjalanan dinas (SPD)	', 'Hilangnya dokumen dan uang perjalanan dinas\r\n', 'Hilangnya dokumen dan uang perjalanan dinas', 1, 4, 4, 'Petugas pelaksana kurang teliti', 'Man', 'Melakukan pembayaran secara non tunai', 200),
(297, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Usulan pengadaan souvenir untuk acara Wakil Presiden tidak disetujui pimpinan/PPK', 'Usulan pengadaan souvenir tidak disetujui pimpinan/PPK', 1, 4, 4, 'Usulan pengadaan souvenir tidak sesuai dengan ketentuan', 'Method', 'Pengadaan dilakukan berdasarkan ketentuan tentang pengadaan barang/jasa pemerintahan\r\n', 201),
(298, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Usulan pengadaan souvenir untuk acara Wakil Presiden tidak disetujui pimpinan/PPK', 'Usulan pengadaan souvenir tidak disetujui pimpinan/PPK', 1, 4, 4, 'Usulan pengadaan souvenir tidak sesuai dengan kebutuhan', 'Material', 'Melakukan koordinasi dengan user terkait kebutuhan souvenir\r\n', 201),
(299, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Kesulitan mencari penyedia yang dapat menyediakan barang yang sesuai kebutuhan/permintaan Wakil Presiden/Pimpinan', 'Kesulitan mencari penyedia yang dapat menyediakan barang yang sesuai kebutuhan/permintaan', 1, 3, 3, 'Souvenir bersifat spesifik	\r\n', 'Material', 'Melaksanakan survey pasar untuk menambah daftar penyedia souvenir', 201),
(300, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Pengadaan souvenir untuk acara Wakil Presiden  tidak sesuai dengan jadwal/tenggat waktu yang diminta', 'Pengadaan souvenir tidak sesuai dengan jadwal/tenggat waktu yang diminta', 1, 3, 3, 'Penyedia souvenir tidak kompeten', 'Man', 'Melakukan seleksi penyedia souvenir yang kompeten\r\n', 201),
(301, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Pengadaan souvenir untuk acara Wakil Presiden  tidak sesuai dengan jadwal/tenggat waktu yang diminta', 'Pengadaan souvenir tidak sesuai dengan jadwal/tenggat waktu yang diminta', 1, 3, 3, 'Proses pengadaan souvenir terlambat', 'Method', '1. Pengajuan rencana pengadaan souvenir di awal tahun\r\n2. Melaksanakan pengadaan souvenir sesuai jadwal pengadaan', 201),
(302, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Souvenir untuk acara Wapres yang diterima tidak sesuai dengan spesifikasi/permintaan (kuantitas, kualitas)', 'Souvenir yang diterima tidak sesuai dengan spesifikasi/permintaan (kuantitas, kualitas)', 1, 3, 3, 'Kurangnya database penyedia souvenir', 'Man', 'Melaksanakan survey pasar untuk menambah daftar penyedia souvenir', 201),
(303, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Souvenir untuk acara Wapres yang diterima tidak sesuai dengan spesifikasi/permintaan (kuantitas, kualitas)', 'Souvenir yang diterima tidak sesuai dengan spesifikasi/permintaan (kuantitas, kualitas)', 1, 3, 3, 'Penyedia souvenir kurang kompeten', 'Method', 'Melaksanakan survey pasar untuk menambah daftar penyedia souvenir', 201),
(304, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Pembayaran biaya untuk pengadaan souvenir acara Wapres tidak sesuai dengan pengeluaran riil', 'Biaya yang dibayarkan  untuk pengadaan souvenir tidak sesuai dengan pengeluaran riil', 1, 4, 4, 'Adanya manipulasi tagihan oleh petugas pengadaaan', 'Man', 'Sosialisasi tentang kode etik dan gratifikasi kepada setiap pegawai', 201),
(305, 'Pengadaan souvenir (cinderamata) untuk acara Wapres', 'Pembayaran biaya untuk pengadaan souvenir acara Wapres tidak sesuai dengan pengeluaran riil', 'Biaya yang dibayarkan  untuk pengadaan souvenir tidak sesuai dengan pengeluaran riil', 1, 4, 4, 'Kurang teliti dalam memproses tagihan', 'Man', 'Mekanisme review dokumen pertanggungjawaban secara berjenjang', 201),
(306, 'Pencatatan atas jumlah dan jenis souvenir ke dalam database souvenir	', 'Data souvenir untuk acara Wapres  yang dimiliki tidak valid', 'Data souvenir yang dimiliki tidak valid', 1, 2, 2, 'kesalahan penginputan data', 'Man', 'Pengecekan kesesuaian barang dan data secara berkala', 201),
(307, 'Pencatatan atas jumlah dan jenis souvenir ke dalam database souvenir', 'Laporan persediaan souvenir acara Wapres  tidak akuntabel', 'Laporan persediaan souvenir tidak akuntabel', 1, 3, 3, 'permohonan/permintaan souvenir tidak terdokumentasi dengan baik', 'Method', 'Mengarsipkan dokumen permintaan souvenir dengan tertib', 201),
(308, 'Penyampaian souvenir kepada petugas pelaksana sesuai permintaan/arahan pimpinan	', 'Penyampaian souvenir untuk acara Wapres kepada pemohon tidak tepat waktu', 'Penyampaian souvenir kepada pemohon tidak tepat waktu', 1, 3, 3, 'Petugas pelaksana tidak tersedia saat dibutuhkan', 'Man', 'Sosialisasi tentang mekanisme/SOP penyampaian souvenir kepada semua personil di unit terkait', 201),
(309, 'Penyampaian souvenir kepada petugas pelaksana sesuai permintaan/arahan pimpinan	', 'Kerusakan pada souvenir untuk acara Wapres', 'Kerusakan pada souvenir yang diberikan', 1, 3, 3, 'Penyimpanan souvenir kurang hati-hati', 'Method', 'Penyediaan ruang khusus untuk penyimpanan souvenir', 201),
(310, 'Penugasan Notulis pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 1, 4, 4, 'Dinamika acara Wakil Presden yang bisa berubah dengan cepat karena faktor internal dan eksternal', 'Material', 'Subbagian Notulen berkoordinasi intensif dan melakukan pembaharuan informasi ke bagian acara sesering mungkin', 202),
(311, 'Penugasan Notulis pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 1, 4, 4, 'Informasi perubahan acara Wakil Presiden yang terlambat diterima oleh Bagian Penerbitan Media Massa dan Notulen', 'Material', 'Berkoordinasi dengan unit kerja lain yang turut serta hadir pada acara Wakil Presiden untuk mendapatkan back up rekaman acara', 202),
(312, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 1, 3, 3, 'Notulis yang ditugasi menemui kendala untuk hadir tepat waktu pada acara Wakil Presiden yang telah ditentukan', 'Man', 'Berkoordinasi dengan unit kerja lain yang turut serta hadir pada acara Wakil Presiden untuk mendapatkan back up rekaman acara', 202),
(313, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 1, 3, 3, 'Notulis tidak mendapatkan akses masuk ke tempat acara karena identitas yang dipakai kurang lengkap', 'Material', 'Membuat checklist kelengkapan notulis', 202),
(314, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 1, 3, 3, 'Notulis kesulitan memperoleh kendaraan yang dapat mengantarkan ke tempat acara', 'Material', 'Mengajukan permohonan kendaraan operasional beserta pengemudi khusus Notulis ', 202),
(315, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 'Tidak tersedia notulis atau notulis terlambat hadir pada audiensi, rapat, dan kunjungan kerja Wakil Presiden', 1, 3, 3, 'Notulis tidak bisa mendapatkan tiket peswat ke tujuan acara kunjungan kerja Wakil Presiden karena penerbangan telah penuh', 'Material', 'Selalu berkoordinasi dengan Bagian Acara dan Persidangan serta Bagian Perjalanan untuk antisipasi ikut dalam rombongan main group', 202),
(316, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 1, 3, 3, 'Posisi tempat duduk notulis tidak memungkinkan untuk menangkap pembicaraan yang tidak menggunakan speaker', 'Method', 'Berkoordinasi dengan Bagian Acara dan Persidangan untuk mendapatkan posisi tempat duduk yang terdekat dengan Wakil Presiden', 202),
(317, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 1, 3, 3, 'Sound system di ruangan acara kurang baik', 'Machine', 'Berkoordinasi dengan panitia acara, minimal untuk mendapatkan press release penyelenggaraan acara', 202),
(318, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 1, 3, 3, 'Kapasitas gedung atau tempat acara terlalu padat sehingga menimbulkan gangguan dalam menangkap pembicaraan yang terjadi untuk menangkap suara ', 'Material', 'Berkoordinasi dengan Bagian Acara dan Persidangan untuk mendapatkan posisi tempat duduk yang memungkinkan untuk menangkap apa yang dibicarakan Wakil Presiden', 202),
(319, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 1, 3, 3, 'Acara bersifat peninjauan lokasi atau proyek\r\n', 'Method', 'Berkoordinasi dengan Bagian Acara dan Persidangan dan Pasukan Pengamanan Presiden (Paspampres) agar dapat memperoleh akses untuk mendekat pada Wakil Presiden sehingga dapat menangkap pembicaraan dengan baik', 202),
(320, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 1, 3, 3, 'Alat rekam yang digunakan untuk memback up pembicaraan tidak berfungsi\r\n', 'Machine', 'Selalu melakukan pengecekan alat rekam sebelum digunakan', 202),
(321, 'Pelaksanaan notulensi pada audiensi, rapat, dan kunjungan kerja Wakil Presiden	', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 'Notulis tidak dapat menangkap substansi pembicaraan pada audiensi, rapat, dan  kunjungan kerja Wakil Presiden', 1, 3, 3, 'Alat rekam yang digunakan untuk memback up pembicaraan hilang', 'Man', 'Mengingatkan Notulis untuk berhati-hati dalam meletakkan dan menyimpan alat rekam', 202),
(322, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden	', 'Proses koreksi notulen yang tidak tepat waktu', 'Proses koreksi notulen yang tidak tepat waktu', 2, 2, 4, 'Notulis mengirimkan draf notulen melebihi batas waktu yang telah ditentukan (maksimal 2 X 24 jam)', 'Man', 'Selalu menuliskan batas waktu pengumpulan draf notulen dalam setiap penjadwalan per bulan', 202),
(323, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden	', 'Proses koreksi notulen yang tidak tepat waktu', 'Proses koreksi notulen yang tidak tepat waktu', 2, 2, 4, 'Draf Notulen yang ditulis oleh Notulis masih memerlukan cross check data', 'Material', 'Subbagian Notulen menugasi notulis untuk melakukan pengecekan ulang dari berbagai sumber, terkait kalimat atau data angka yang dituliskan', 202),
(324, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden	', 'Proses koreksi notulen yang tidak tepat waktu', 'Proses koreksi notulen yang tidak tepat waktu', 2, 2, 4, 'Koreksi notulen di tingkat eselon I yang cukup lama', 'Method', 'Berkoordinasi dengan Tata Usaha Pimpinan (TUP) untuk percepatan proses koreksi di tingkat pimpinan ', 202),
(325, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Hasil Notulen dari Notulis tidak dapat diakses', 'Hasil Notulen dari Notulis tidak dapat diakses', 1, 2, 2, 'Jaringan komputer  offline', 'Machine', 'Meminta notulis untuk mengirimkan notulen melalui transfer data dengan USB', 202),
(326, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Hasil Notulen dari Notulis tidak dapat diakses', 'Hasil Notulen dari Notulis tidak dapat diakses', 1, 2, 2, 'File yang dikirim notulis rusak', 'Material', 'Meminta notulis mengirimkan kembali hasil notulennya', 202),
(327, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Soft copy notulen yang disimpan di dalam komputer hilang/rusak', 'Soft copy notulen yang disimpan di dalam komputer hilang/rusak', 1, 4, 4, 'Komputer terkena virus yang menghapus notulen yang disimpan', 'Machine', '1. Melakukan back up notulen secara berkala menggunkan hard disk eksternal atau disimpan dalam compact disk\r\n2. Selalu melakukan updating anti virus pada komputer\r\n3. Selain menyimpan dokumen dalam bentuk soft copy, naskah notulen juga disimpan dalam bentuk hard copy\r\n', 202),
(328, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Hard copy notulen  yang disimpan hilang/rusak', 'Hard copy notulen  yang disimpan hilang/rusak', 1, 4, 4, 'Kebakaran akibat hubungan pendek arus listrik', 'Machine', 'Berkoordinasi dengan teknisi listrik untuk mematikan jaringan listrik pada saat tidak digunakan\r\n', 202),
(329, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Hard copy notulen  yang disimpan hilang/rusak', 'Hard copy notulen  yang disimpan hilang/rusak', 1, 4, 4, 'Adanya orang lain yang dengan sengaja mengambil hard copy notulen untuk kepentingan tertentu', 'Man', 'Menyimpan hard copy pada lemari yang terkunci\r\n', 202),
(330, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Hard copy notulen  yang disimpan hilang/rusak', 'Hard copy notulen  yang disimpan hilang/rusak', 1, 4, 4, 'Akses keluar masuk ruang penyimpanan yang bebas', 'Method', 'Mengajukan permohonan pengunci ruangan khusus notulen', 202),
(331, 'Pendokumentasian Hasil Notulen Audiensi, Rapat, dan Kunjungan Kerja Wakil Presiden', 'Kesulitan dalam mencari notulen yang dibutuhkan ', 'Kesulitan dalam mencari notulen yang dibutuhkan ', 2, 3, 6, 'Belum optimalnya penggunaan teknologi informasi dalam pendokumentasian notulen', 'Machine', 'Menginstrusikan kepada para Notulis untuk menggunakan Aplikasi e-Notulen dalam mempercepat proses penyuntingan', 202),
(332, 'Pendistribusian hasil notulen baik di kalangan internal Setwapres maupun ke pihak luar', 'Penyampaian hasil notulen kepada Wakil Presiden dan Kepala Sekretariat Wakil Presiden tidak tepat waktu', 'Penyampaian hasil notulen kepada Wakil Presiden dan Kepala Sekretariat Wakil Presiden tidak tepat waktu', 2, 3, 6, 'Pejabat penandatangan Memorandum penyampaian notulen (Eselon II) sedang dinas keluar kota', 'Man', 'Memohonkan tanda tangan kepada Wakil Koordinator Tim Notulis (Eselon II) untuk menandatangani Memorandum penyampaian notulen ', 202),
(333, 'Pendistribusian hasil notulen baik di kalangan internal Setwapres maupun ke pihak luar', 'Hard copy notulen yang disimpan tidak lengkap', 'Hard copy notulen yang disimpan tidak lengkap', 2, 3, 6, 'Pengadminitrasian notulen di Bagian Penerbitan Media Massa dan Notulen yang tidak tertib', 'Method', 'Membuat rekap notulen per bulan dan per triwulan', 202),
(334, 'Pendistribusian hasil notulen baik di kalangan internal Setwapres maupun ke pihak luar', 'Permintaan notulen yang mendesak oleh pimpinan', 'Permintaan notulen yang mendesak oleh pimpinan', 2, 4, 8, 'Pengadministrasian hard copy notulen pada penerima notulen tidak tertib', 'Method', 'Memberikan akses kepada Tata Usaha Pimpinan sebagai tangan kanan pimpinan untuk dapat mengakses aplikasi notulen', 202),
(335, 'Pendistribusian hasil notulen baik di kalangan internal Setwapres maupun ke pihak luar', 'Notulen yang bersifat rahasia/terbatas jatuh ke tangan orang yang tidak berhak\r\n', 'Notulen yang bersifat rahasia/terbatas jatuh ke tangan orang yang tidak berhak\r\n', 2, 4, 8, 'Tidak semua penerima notulen memahami bahwa notulen bersifat rahasia/terbatas\r\n', 'Man', 'Dalam mengirimkan notulen utamanya ke pihak luar Setwapres, disertai surat pengantar yang salah satunya berisi peringatan bahwa notulen bersifat rahasia/terbatas\r\nDalam mengirimkan notulen utamanya ke pihak luar Setwapres, disertai surat pengantar yang salah satunya berisi peringatan bahwa notulen bersifat rahasia/terbatas', 202),
(336, 'Pengumpulan Bahan Penyusunan Buku Kumpulan Notulen Wakil Presiden	', 'Penyerahan naskah notulen yang akan dibukukan tidak tepat waktu ', 'Penyerahan naskah notulen yang akan dibukukan tidak tepat waktu ', 1, 3, 3, 'Masih adanya notulen yang belum disahkan oleh pejabat eselon I yang mengesahkan notulen', 'Man', 'Melakukan pembaharuan rekap data secara berkala ', 203),
(337, 'Pengumpulan Bahan Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Penyerahan naskah transkripsi sambutan Wakil Presiden tidak tepat waktu ', 'Penyerahan naskah transkripsi sambutan Wakil Presiden tidak tepat waktu ', 2, 3, 6, 'Adanya perbedaan data jumlah transkripsi yang dihimpun', 'Material', 'Mengirimkan Memorandum permohonan transkripsi sambutan kepada unit kerja terkait dilampiri dengan rekap acara bulanan Wakil Presiden', 203),
(338, 'Pengumpulan Bahan Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Penyerahan naskah transkripsi sambutan Wakil Presiden tidak tepat waktu ', 'Penyerahan naskah transkripsi sambutan Wakil Presiden tidak tepat waktu ', 2, 3, 6, 'Naskah transkripsi sambutan Wakil Presiden yang diterima Bagian Penerbitan Media Massa tidak lengkap', 'Material', 'Mengomunikasikan kembali kepada Unit kerja terkait untuk memperbaiki kekurangan pada transkripsi yang belum lengkap', 203),
(339, 'Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Review substansi transkripsi sambutan Wakil Presiden tidak tepat waktu', 'Review substansi transkripsi sambutan Wakil Presiden tidak tepat waktu', 3, 3, 9, 'Naskah transkripsi berisi kalimat-kalimat yang tidak lengkap', 'Material', 'Mengusulkan kepada pimpinan untuk pengadaan alat elektronik yang dapat mengonversi bahasa lisan menjadi bahasa tulis', 203),
(340, 'Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Review substansi transkripsi sambutan Wakil Presiden tidak tepat waktu', 'Review substansi transkripsi sambutan Wakil Presiden tidak tepat waktu', 3, 3, 9, 'Perlunya penyesuaian dari bahasa lisan ke bahasa tulis tanpa menghilangkan kekhasan dari gaya bahasa Wakil Presiden', 'Method', 'Sering mendengarkan gaya bahasa Wakil Presiden dalam berbagai acara', 203),
(341, 'Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Review substansi transkripsi sambutan Wakil Presiden tidak tepat waktu', 'Review substansi transkripsi sambutan Wakil Presiden tidak tepat waktu', 3, 3, 9, 'Penggunaan bahasa asing yang tidak sesuai\r\n', 'Method', 'Cross check di media lain dan menggunakan kamus yang diperlukan', 203),
(342, 'Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Format penyusunan buku tidak standar', 'Format penyusunan buku tidak standar', 1, 3, 3, 'Selera pimpinan yang tidak sama atau berubah', 'Man', 'Mengajukan konsep dumi buku untuk mendapat persetujuan pimpinan', 203),
(343, 'Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Format penyusunan buku tidak standar', 'Format penyusunan buku tidak standar', 1, 3, 3, 'Ketersediaan anggaran dalam Petunjuk Operasional Kegiatan (POK) tidak mencukupi', 'Money', 'Menyesuaikan spesifikasi cetak buku dengan anggaran yang tersedia', 203),
(344, 'Penyusunan Buku Kumpulan Sambutan Wakil Presiden	', 'Format penyusunan buku tidak standar', 'Format penyusunan buku tidak standar', 1, 3, 3, 'Jumlah halaman buku yang berda-beda tergantung pada jumlah kegiatan Wakil Presiden', 'Method', 'Membagi menjadi dua jilid buku kumpulan notulen atau tiga jilid buku kumpulan pidato Wakil Presiden', 203),
(345, 'Pencetakan Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Kualitas hasil cetakan tidak sesuai harapan', 'Kualitas hasil cetakan tidak sesuai harapan', 1, 3, 3, 'Pihak penyedia jasa tidak memenuhi komitmen yang telah disepakati', 'Man', 'Memilih penyedia jasa yang taat pada komitmen yang telah disepakati', 203),
(346, 'Pencetakan Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Kualitas hasil cetakan tidak sesuai harapan', 'Kualitas hasil cetakan tidak sesuai harapan', 1, 3, 3, 'Pejabat Penerima Hasil Pekerjaan tidak teliti dalam menerima hasil pekerjaan', 'Man', 'Mengingatkan pejabat penerima hasil pekerjaan untuk meneliti dengan baik hasil pekerjaan yang diserahkan', 203),
(347, 'Pencetakan Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Penyelesaian pencetakan buku tidak tepat waktu', 'Penyelesaian pencetakan buku tidak tepat waktu', 1, 4, 4, 'Pihak penyedia jasa tidak memenuhi komitmen yang telah disepakati', 'Man', 'Memilih penyedia jasa yang taat pada komitmen yang telah disepakati', 203),
(348, 'Pencetakan Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Penyelesaian pencetakan buku tidak tepat waktu', 'Penyelesaian pencetakan buku tidak tepat waktu', 1, 4, 4, 'Adanya usulan adendum pekerjaan dari pimpinan, misalnya penambahan oplah cetakan', 'Man', 'Mengejukan Memorandum pengajuan permohonan cetak disertai dumi dan rencana jumlah yang akan dicetak', 203),
(349, 'Pencetakan Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Anggaran dalam POK tidak mencukupi', 'Anggaran dalam POK tidak mencukupi', 1, 4, 4, 'adanya kenaikan harga bahan baku cetakan ', 'Money', 'Mengurangi jumlah buku yang akan dicetak', 203),
(350, 'Pencetakan Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Anggaran dalam POK tidak mencukupi', 'Anggaran dalam POK tidak mencukupi', 1, 4, 4, 'adanya arahan pimpinan untuk membuat cetakan dengan bahan kualitas tinggi melebihi spesifikasi yang telah direncanakan dalam POK', 'Man', 'Mengajukan revisi anggaran pencetakan buku ', 203),
(351, 'Pendistribusian Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Pendistribusian buku tidak tepat waktu', 'Pendistribusian buku tidak tepat waktu', 1, 3, 3, 'Pihak penyedia jasa tidak memenuhi komitmen yang telah disepakati', 'Man', 'Memilih penyedia jasa yang taat pada komitmen yang telah disepakati', 203),
(352, 'Pendistribusian Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Pendistribusian buku tidak tepat waktu', 'Pendistribusian buku tidak tepat waktu', 1, 3, 3, 'Memorandum pengantar buku terlambat ditandatangani pimpinan', 'Man', 'Memohonkan tanda tangan kepada Pelaksana Harian (PLh.) pimpinan untuk menandatangani Memorandum penyampaian notulen ', 203),
(353, 'Pendistribusian Buku Kumpulan Notulen dan Buku Kumpulan Sambutan Wakil Presiden	', 'Jumlah buku yang didistribusikan tidak mencukupi', 'Jumlah buku yang didistribusikan tidak mencukupi', 1, 3, 3, 'Adanya arahan pimpinan untuk menambah jumlah penerima buku melebihi jumlah yang telah direncanakan', 'Man', 'Mengajukan permohonan pencetakan tambahan buku kepada Biro Perencanaan dan Keuangan', 203),
(354, 'Menindaklanjuti disposisi terkait arahan Wakil Presiden dan/atau Istri/Suami Wakil Presiden terhadap permohonan kegiatan/acara yang diajukan oleh pihak pemohon 	', 'Disposisi terkait Acara Harian Wapres terlambat tindaklanjuti ', 'Disposisi terkait Acara Harian Wapres terlambat tindaklanjuti ', 2, 4, 8, 'Mobilitas pimpinan dan unit Biro protokol yang sangat tinggi	', 'Man', 'Usulan untuk mengimplementasikan SPDE di setiap unit di Setwapres', 204),
(355, 'Pengumpulan data/informasi terkait dengan acara yang diajukan dengan melakukan koordinasi awal dengan pemohon', 'Data/informasi yang diperlukan untuk pengagendaan acara harian Wakil Presiden salah/kurang', 'Pengumpulan data/informasi terkait dengan acara yang diajukan dengan melakukan koordinasi awal dengan pemohon', 2, 4, 8, 'Pemohon tidak mencantumkan informasi yang lengkap', 'Man', 'Berkoordinasi langsung dan terus menerus dengan Kementerian/Instansi pemohon acara', 204),
(356, 'Pengkajian dan pengklasifikasian acara harian Wakil Presiden', 'Kesalahan dalam melakukan pengklasifikasian acara harian Wakil Presiden', 'Pengkajian dan pengklasifikasian acara harian Wakil Presiden', 2, 4, 8, 'Kurangnya data dan informasi terkait acara dan pemohon	', 'Material', 'Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden', 204),
(357, 'Pembuatan list usulan agenda acara harian Wakil Presiden', 'Kesalahan dalam melakukan pengagendaan jadwal dan acara harian Wakil Presiden', 'Pembuatan list usulan agenda acara harian Wakil Presiden', 2, 4, 8, 'Kurangnya komunikasi dan koordinasi yang dilakukan oleh unit Biro Protokol	', 'Method', 'Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden', 204),
(358, 'Pelaksanaan  koordinasi lanjutan secara intensif dengan para pihak terkait mengenai rencana acara Wakil Presiden dan/atau Istri/Suami Wakil Presiden 	', 'Penyampaian data agenda dan jadwal  Acara Harian yang salah/tidak tepat/kurang kepada Wakil Presiden dan para stakeholders	\r\n', 'Pelaksanaan  koordinasi lanjutan secara intensif dengan para pihak terkait mengenai rencana acara Wakil Presiden dan/atau Istri/Suami Wakil Presiden 	', 3, 4, 12, 'Komunikasi yang tidak efektif dengan pihak pemohon Acara Wakil Presiden  	', 'Method', 'Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden', 204),
(359, 'Penyusunan draf Acara Harian Wakil Presiden dan Istri/Suami Wakil Presiden  dan penginputan data kedalam Sistem Infromasi Data Dukung Rencana Acara Wapres 	', 'Draft Acara Harian Wakil Presiden tidak/terlambat disahkan/disetujui pimpinan	', 'Penyusunan draf Acara Harian Wakil Presiden dan Istri/Suami Wakil Presiden  dan penginputan data kedalam Sistem Infromasi Data Dukung Rencana Acara Wapres 	', 3, 4, 12, 'Perubahan data informasi (data belum valid) dari pihak pemohon Acara Wapres	', 'Material', 'Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden', 204),
(360, 'Pengesahan Acara Harian 	', 'Draft Acara Harian Wakil Presiden tidak/terlambat disahkan/disetujui pimpinan	', 'Pengesahan Acara Harian 	', 3, 4, 12, 'Pejabat yang bertugas memberikan persetujuan draft acara harian (yang disampaikan ke Ajudan Wapres)  tidak ditempat	\r\n', 'Man', 'Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden', 204),
(361, 'Pengesahan Acara Harian 	', 'Draft Acara Harian Wakil Presiden tidak/terlambat disahkan/disetujui pimpinan	', 'Pengesahan Acara Harian 	', 3, 4, 12, 'Perubahan acara Wakil Presiden yang sangat cepat	', 'Method', 'Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden', 204),
(362, 'Pendistribusian Acara Harian Wakil Presiden secara online melalui surat elektronik  kepada stakeholder terbatas di lingkup Setwapres, Paspampres, Setmilpres dan Ajudan serta Sespri	', 'Tersebarnya informasi yang rahasia terkait jadwal dan agenda acara harian Wakil Presiden	', 'Pendistribusian Acara Harian Wakil Presiden secara online melalui surat elektronik  kepada stakeholder terbatas di lingkup Setwapres, Paspampres, Setmilpres dan Ajudan serta Sespri	', 2, 4, 8, 'Penyebaran Acara Harian Wakil Presiden melalui WA dan email (provider dari luar)	', 'Machine', '1. Usulan pengembangan sistem pengagendaan acara harian Wakil Presiden\r\n2. Pengembangan aplikasi untuk mendownload acara harian Wakil Presiden oleh para stakeholders', 204),
(363, 'Membuat  surat undangan rapat dan daftar konfirmasi awal rencana kehadiran para undangan pada rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Penulisan informasi (jadwal, acara dan substansi) yang salah/kurang tepat pada surat undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Penulisan informasi (jadwal, acara dan substansi) yang salah/kurang tepat pada surat undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 2, 4, 8, 'Data /informasi/arahan yang diberikan kurang tepat/tidak lengkap', 'Material', 'Melakukan review surat undangan secara berjenjang', 205),
(364, 'Membuat  surat undangan rapat dan daftar konfirmasi awal rencana kehadiran para undangan pada rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Penulisan informasi (jadwal, acara dan substansi) yang salah/kurang tepat pada surat undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Penulisan informasi (jadwal, acara dan substansi) yang salah/kurang tepat pada surat undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 2, 4, 8, 'Kurangnya koordinasi antara pihak terkait pada rapat yang dipimpin Wakil Presiden', 'Method', 'Melakukan review surat undangan secara berjenjang', 205),
(365, 'Membuat  surat undangan rapat dan daftar konfirmasi awal rencana kehadiran para undangan pada rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Penulisan informasi (jadwal, acara dan substansi) yang salah/kurang tepat pada surat undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Penulisan informasi (jadwal, acara dan substansi) yang salah/kurang tepat pada surat undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 2, 4, 8, 'Human error pada saat penulisan surat', 'Man', 'Melakukan review surat undangan secara berjenjang', 205),
(366, 'Pendistribusian surat undangan kepada para undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Surat Undangan terlambat untuk didistribusikan kepada peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Surat Undangan terlambat untuk didistribusikan kepada peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 2, 4, 8, 'Proses administrasi penyusunan surat undangan yang lama (SOP yang ada kurang efektif untuk kasus segera)', 'Method', 'Membuat kesepakatan antara Bagian Acara dan Persidangan dengan Bagian Tata Usaha untuk kebijakan pemrosesan surat yang bersifat segera', 205),
(367, 'Pendistribusian surat undangan kepada para undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Surat Undangan terlambat untuk didistribusikan kepada peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Surat Undangan terlambat untuk didistribusikan kepada peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 2, 4, 8, 'Proses pengadministrasian persuratan yang tidak tertib 	', 'Method', 'Membuat kesepakatan antara Bagian Acara dan Persidangan dengan Bagian Tata Usaha untuk kebijakan pemrosesan surat yang bersifat segera', 205),
(368, 'Pendistribusian surat undangan kepada para undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Surat undangan tidak terdistribusikan kepada para peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Surat undangan tidak terdistribusikan kepada para peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 1, 4, 4, 'Kesalahan dalam pendistribusian surat undangan\r\n', 'Method', 'Melakukan komunikasi/konfirmasi  secara lisan/langsung kepada para undangan rapat/sidang yang dipimpin oleh Wakil Presiden\r\n', 205),
(369, 'Pendistribusian surat undangan kepada para undangan rapat/sidang yang dipimpin oleh Wakil Presiden	', 'Surat undangan tidak terdistribusikan kepada para peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Surat undangan tidak terdistribusikan kepada para peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 1, 4, 4, 'Surat undangan hilang', 'Method', 'Melakukan konfirmasi dan koordinasi dengan petugas persuratan\r\n', 205),
(370, 'Melakukan konfirmasi dan membuat daftar kehadiran peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Daftar kehadiran para peserta rapat/sidang yang dipimpin oleh Wakil Presiden belum final saat rapat dilaksanakan', 'Daftar hadir para peserta rapat/sidang yang dipimpin oleh Wakil Presiden belum final saat rapat dilaksanakan', 3, 3, 9, 'Perubahan konfirmasi kehadiran dari para peserta rapat yang mendesak', 'Man', 'Melakukan konfirmasi dan komunikasi langsung (telepon, WA, dll) kepada para peserta rapat', 205),
(371, 'Melakukan konfirmasi dan membuat daftar kehadiran peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Daftar kehadiran para peserta rapat/sidang yang dipimpin oleh Wakil Presiden belum final saat rapat dilaksanakan', 'Daftar hadir para peserta rapat/sidang yang dipimpin oleh Wakil Presiden belum final saat rapat dilaksanakan', 3, 3, 9, 'Waktu yang tidak mencukupi untuk melakukan konfirmasi (rapat bersifat mendadak)', 'Material', 'Melakukan konfirmasi dan komunikasi langsung (telepon, WA, dll) kepada para peserta rapat', 205),
(372, 'Melakukan konfirmasi dan membuat daftar kehadiran peserta rapat/sidang yang dipimpin oleh Wakil Presiden', 'Laporan kehadiran peserta rapat yang disampaikan ke Wakil Presiden tidak valid', 'Laporan kehadiran peserta rapat yang disampaikan ke Wakil Presiden tidak valid', 3, 3, 9, 'Konfirmasi kehadiran para peserta rapat terus berlangsung hingga sesaat sebelum rapat dimulai	', 'Material', 'Melaporkan secara lisan informasi terbaru perubahan kehadiran para peserta rapat kepada Wakil Presiden', 205),
(373, 'Menyusun layout tempat acara rapat/sidang yang dipimpin oleh Wakil Presiden sesuai aturan keprotokolan	', 'Penyusunan/pengaturan layout acara dan tempat duduk rapat/sidang yang dipimpin oleh Wakil Presiden tidak sesuai dengan ketentuan keprotokolan', 'Penyusunan/pengaturan layout acara dan tempat duduk rapat/sidang yang dipimpin oleh Wakil Presiden tidak sesuai dengan ketentuan keprotokolan', 1, 4, 4, 'Kurangnya informasi tentang dasar-dasar keprotokolan', 'Material', 'Diseminasi ketentuan tentang keprotokolan kepada setiap pegawai di unit Biro Protokol', 205),
(374, 'Menyusun layout tempat acara rapat/sidang yang dipimpin oleh Wakil Presiden sesuai aturan keprotokolan	', 'Atribut rapat (placing card) yang dibutuhkan pada sidang yang dipimpin oleh Wakil Presiden tidak lengkap', 'Atribut rapat (placing card) yang dibutuhkan pada sidang yang dipimpin oleh Wakil Presiden tidak lengkap', 2, 3, 6, 'Perubahan kehadiran tamu yang mendadak	', 'Material', 'Pengisian checklist atribut rapat dan perlengkapan', 205),
(375, 'Penyiapan bahan/presentasi pada rapat/sidang yang dipimpin oleh Wakil Presiden (berkoordinasi dengan kementerian, pemerintah daerah dan instansi yang terkait)', 'Bahan presentasi untuk rapat/sidang yang dipimpin oleh Wakil Presiden terlambat diterima/tidak diterima/tidak dapat ditayangkan/salah	', 'Bahan presentasi untuk rapat/sidang yang dipimpin oleh Wakil Presiden terlambat diterima/tidak diterima/tidak dapat ditayangkan/salah	', 2, 4, 8, 'Koordinasi yang tidak tepat dengan peserta rapat	', 'Method', 'Melakukan koordinasi dan konfirmasi secara langsung dengan peserta rapat serta pengecekan bahan presentasi', 205),
(376, 'Mempersiapkan  sarana dan prasarana penunjang penyelenggaraan rapat yang dipimpin oleh Wakil Presiden, berkoordinasi dengan unit lain yang terkait (bagian Perlengkapan, Bangunan, Bagian Rumah Tangga, Bagian Penerbitan dan Notulensi, Bagian Dokumentasi Peliputan)	', 'Proses pelaksanaan Rapat/ Sidang yang dipimpin oleh Wakil Presiden tidak berjalan optimal	', 'Proses pelaksanaan Rapat/ Sidang yang dipimpin oleh Wakil Presiden tidak berjalan optimal', 3, 4, 12, 'Sarana dan prasarana penunjang rapat yang dipimpin oleh Wakil Presiden tidak berfungsi secara optimal (peralatan rusak, kurangnya koordinasi unit terkait, tidak adanya pengecekan sebelum acara)', 'Machine', '1. Melakukan koordinasi yang efektif dengan unit-unit lain yang terkait\r\n2. Diseminasi SOP penyiapan rapat/sidang yang dipimpin oleh Wakil Presiden kepada pihak terkait', 205),
(377, 'Mempersiapkan  sarana dan prasarana penunjang penyelenggaraan rapat yang dipimpin oleh Wakil Presiden, berkoordinasi dengan unit lain yang terkait (bagian Perlengkapan, Bangunan, Bagian Rumah Tangga, Bagian Penerbitan dan Notulensi, Bagian Dokumentasi Peliputan)	', 'Proses pelaksanaan Rapat/ Sidang yang dipimpin oleh Wakil Presiden tidak berjalan optimal	', 'Proses pelaksanaan Rapat/ Sidang yang dipimpin oleh Wakil Presiden tidak berjalan optimal', 3, 4, 12, 'Petugas pendukung pelaksanaan rapat tidak bekerja optimal', 'Man', '1. Melakukan koordinasi yang efektif dengan unit-unit lain yang terkait\r\n2. Diseminasi SOP penyiapan rapat/sidang yang dipimpin oleh Wakil Presiden kepada pihak terkait', 205);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit_kerja`
--

CREATE TABLE `tbl_unit_kerja` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(225) NOT NULL,
  `sasaran` text NOT NULL,
  `iku` text NOT NULL,
  `id_unor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit_kerja`
--

INSERT INTO `tbl_unit_kerja` (`id_unit`, `nama_unit`, `sasaran`, `iku`, `id_unor`) VALUES
(1, 'Biro Protokol', 'Tes sasaran', 'tes indikator', 1),
(2, 'Biro Perencanaan dan Keuangan', 'Terlaksananya perencanaan dan  evaluasi penganggaran, pengelolaan keuangan, penyusunan\r\nlaporan akuntansi keuangan dan barang milik negara, serta manajemen kinerja Sekretariat Wakil Presiden yang berkualitas\r\n', 'Indeks kepuasan pengguna layanan perencanaan dan evaluasi anggaran\r\nIndeks kepuasan pengguna layanan pengelolaan keuangan dan pelaporan keuangan\r\nIndeks kepuasan pengguna layanan pelaporan akuntansi keuangan dan barang milik ', 1),
(3, 'Biro Tata Usaha, Teknologi Informasi dan Kepegawaian', '', '', 1),
(4, 'Biro Umum', '', '', 1),
(5, 'Asisten Deputi Politik, Hukum Dan Keamanan', '', '', 2),
(6, 'Asisten Deputi Hubungan Luar Negeri', 'Terlaksananya hasil analisis kebijakan di bidang hubungan luar negeri.', 'persentase laporan hasil analisis kebijakan di bidang hubungan luar negeri yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan.', 2),
(7, 'Asisten Deputi Reformasi Birokrasi Dan Pelayanan Publik', 'Terlaksananya hasil analisis kebijakan di bidang reformasi birokrasi dan pelayanan publik', 'Persentase laporan hasil analisis kebijakan di bidang reformasi birokrasi dan pelayanan publik yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan', 2),
(8, 'Asisten Deputi Pengawasan Penyelenggaraan Pemerintahan', 'Terlaksananya hasil analisis kebijakan di bidang pengawasan penyelenggaraan pemerintahan', 'Persentase laporan hasil analisis kebijakan di bidang penyelenggaraan pemerintahan yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan', 2),
(9, 'Asisten Deputi Komunikasi Dan Informasi Publik', 'Terlaksananya hasil analisis kebijakan di bidang komunikasi dan informasi publik', 'persentase laporan hasil analisis kebijakan di bidang komunikasi dan informasi publik yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan.', 2),
(10, 'Asisten Deputi Pembangunan Sumber Daya Manusia', 'Terlaksananya hasil analisis kebijakan di Bidang Pembangunan Sumber Daya Manusia ', 'Persentase hasil analisis kebijakan di Bidang Pembangunan Sumber Daya Manusia yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Pemerintahan Dan Pemerataan Pembangunan', 3),
(11, 'Asisten Deputi Perlindungan Sosial Dan Penanggulangan Bencana', '', '', 3),
(12, 'Asisten Deputi Peningkatan Dan Pengembangan Kesejahteraan', 'Terlaksananya hasil analisis kebijakan di bidang peningkatan dan pengembangan kesejahteraan', 'Persentase hasil analisis kebijajkan di bidang peningkatan dan pengembangan kesejahteraan yang ditindaklanjuti oleh Deputi  Bidang Dukungan Kebijakan Pemerintahan Dan Pemerataan Pembangunan', 3),
(13, 'Asisten Deputi Keuangan, Investasi Dan Badan Usaha', '', '', 4),
(14, 'Asisten Deputi Infrastruktur, Energi Dan Tata Ruang', 'Terlaksananya hasil analisis kebijakan di bidang infrastruktur, energi dan tata ruang.', '1. Persentase laporan hasil analisis kebijakan di bidang infrastruktur, energi dan tata ruang yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur, dan Kemaritiman\r\n2. Persentase bahan rapat', 4),
(15, 'Asisten Deputi Ketahanan Dan Sumber Daya Pangan', 'Terlaksananya hasil analisis kebijakan di bidang Ketahanan Pangan dan Sumber Daya Hayati yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur Dan Kemaritiman.', '1. Persentase laporan hasil analisis kebijakan di bidang Ketahanan Pangan dan Sumber Daya Hayati yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur Dan Kemaritiman.\r\n2. Persentase bahan rapat', 4),
(16, 'Asisten Deputi Industri, Perdagangan, Pariwisata Dan Ekonomi Kreatif', 'Terlaksananya hasil analisis kebijakan di bidang industri, perdagangan, pariwisata dan ekonomi kreatif.', '1. Persentase laporan hasil analisis kebijakan di bidang Industri, Perdagangan, Pariwisata, dan Ekonomi kreatif yang ditindaklanjuti oleh Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur, dan Kemaritiman.\r\n2. Persentas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit_org`
--

CREATE TABLE `tbl_unit_org` (
  `id_unor` int(11) NOT NULL,
  `nama_unor` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit_org`
--

INSERT INTO `tbl_unit_org` (`id_unor`, `nama_unor`) VALUES
(1, 'Deputi Bidang Administrasi'),
(2, 'Deputi Bidang Dukungan Kebijakan Pemerintahan'),
(3, 'Deputi Bidang Dukungan Kebijakan Pemerintahan Dan Pemerataan Pembangunan'),
(4, 'Deputi Bidang Dukungan Kebijakan Ekonomi, Infrastruktur Dan Kemaritiman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_monitor_rtp`
--
ALTER TABLE `tbl_monitor_rtp`
  ADD KEY `id_sop` (`id_sop`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_unor` (`id_unor`),
  ADD KEY `id_unit_kerja` (`id_unit`);

--
-- Indexes for table `tbl_pk`
--
ALTER TABLE `tbl_pk`
  ADD PRIMARY KEY (`id_pk`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `tbl_skp`
--
ALTER TABLE `tbl_skp`
  ADD PRIMARY KEY (`id_skp`),
  ADD KEY `id_pk` (`id_pk`);

--
-- Indexes for table `tbl_sop_risk`
--
ALTER TABLE `tbl_sop_risk`
  ADD PRIMARY KEY (`id_sop`),
  ADD KEY `id_skp` (`id_skp`);

--
-- Indexes for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  ADD PRIMARY KEY (`id_unit`),
  ADD KEY `id_unor` (`id_unor`);

--
-- Indexes for table `tbl_unit_org`
--
ALTER TABLE `tbl_unit_org`
  ADD PRIMARY KEY (`id_unor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pk`
--
ALTER TABLE `tbl_pk`
  MODIFY `id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_skp`
--
ALTER TABLE `tbl_skp`
  MODIFY `id_skp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `tbl_sop_risk`
--
ALTER TABLE `tbl_sop_risk`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_unit_org`
--
ALTER TABLE `tbl_unit_org`
  MODIFY `id_unor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_monitor_rtp`
--
ALTER TABLE `tbl_monitor_rtp`
  ADD CONSTRAINT `tbl_monitor_rtp_ibfk_1` FOREIGN KEY (`id_sop`) REFERENCES `tbl_sop_risk` (`id_sop`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan` (`id_jabatan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pegawai_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `tbl_unit_kerja` (`id_unit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pegawai_ibfk_3` FOREIGN KEY (`id_unor`) REFERENCES `tbl_unit_org` (`id_unor`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pk`
--
ALTER TABLE `tbl_pk`
  ADD CONSTRAINT `tbl_pk_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `tbl_unit_kerja` (`id_unit`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_skp`
--
ALTER TABLE `tbl_skp`
  ADD CONSTRAINT `tbl_skp_ibfk_1` FOREIGN KEY (`id_pk`) REFERENCES `tbl_pk` (`id_pk`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sop_risk`
--
ALTER TABLE `tbl_sop_risk`
  ADD CONSTRAINT `tbl_sop_risk_ibfk_1` FOREIGN KEY (`id_skp`) REFERENCES `tbl_skp` (`id_skp`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  ADD CONSTRAINT `tbl_unit_kerja_ibfk_1` FOREIGN KEY (`id_unor`) REFERENCES `tbl_unit_org` (`id_unor`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
